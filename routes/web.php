<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use \App\Models\Packet;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::group(['middleware' => ['web']], function () {
    /**
     * Show Task Dashboard
     */
    Route::get('/', function () {
        $categories=\App\Models\Categorie::orderBy('created_at', 'asc')->get();
            $cat1= \App\Models\Packet::orderBy('created_at', 'desc')->where('categorie_id',1)->get();
            $cat2= \App\Models\Packet::orderBy('created_at', 'desc')->where('categorie_id',2)->get();
            $cat3= \App\Models\Packet::orderBy('created_at', 'desc')->where('categorie_id',3)->get();


        return view('tasks', [
            'cat1' =>$cat1,
            'cat2' =>$cat2,
            'cat3' =>$cat3,
        ]);
    });

    /**
     * Add New Task
     */
    Route::post('/task', function (Request $request) {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
        ]);

        if ($validator->fails()) {
            return redirect('/')
                ->withInput()
                ->withErrors($validator);
        }

        $task = new Packet();
        $task->qr = $request->name;
        $task->categorie_id = rand(1,3);
//        $name='SCV08§04§21069';
//        $name=explode('§',$name);
//        dd($name);
        $task->save();

        return redirect('/');
    });

    /**
     * Delete Task
     */
    Route::delete('/task/{id}', function ($id) {
        Packet::findOrFail($id)->delete();

        return redirect('/');
    });
});
