@extends('layouts.app')

@section('content')
    <h1>>>Categories</h1>

    <div class="container">
        <form class="row" action="categories/updateAll" method="POST" id="categoriesForm">
            @csrf




            <div class="col-12 row">
                <!-- Current Tasks -->

                @foreach($categories as $categorie)
                    <div class="col-md-12 table-hover">

                        <div class="input-group mb-3 ">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">categorie</span>
                            </div>
                            <input type="text" class="form-control" placeholder="Username" aria-label="Username"
                                   name="cat{{$categorie->id}}" value="{{$categorie->categorie}}"
                                   aria-describedby="basic-addon1">

                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">Ref</span>
                            </div>
                            <input type="text" class="form-control" placeholder="Username" aria-label="Username"
                                   name="ref{{$categorie->id}}" value="{{$categorie->ref}}"
                                   aria-describedby="basic-addon1">

                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">Size</span>
                            </div>
                            <input type="text" class="form-control" placeholder="Username" aria-label="Username"
                                   name="size{{$categorie->id}}" value="{{$categorie->size}}"
                                   aria-describedby="basic-addon1">


                            &nbsp
                            &nbsp
                            <button type="button" class="btn btn-success"
                                    onclick="document.getElementById('categoriesForm').submit();">
                                Modifier</button>
                        </div>


                    </div>

                @endforeach

            </div>
        </form>
        <br>
        <br>
        @include('categories.categorie_add')

    </div>
@endsection
