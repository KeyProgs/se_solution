@extends('layouts.app')

@section('content')


@php
@endphp


<div class=" col-md-12">
    <div class="card p-3">
        <div class="d-flex align-items-center">
            <div class="image"> <img src="{{$palette->getQrImage()}}"
                                     class="rounded" width="155"> </div>
            <div class="ml-3 w-100">
                <h4 class="mb-0 mt-0">{{$palette->user()->name}}</h4> <span>Senior Journalist</span>
                <div class="p-2 mt-2 bg-primary d-flex justify-content-between rounded text-white stats">
                    <div class="d-flex flex-column"> <span class="articles">Categorie Reference</span> <span class="number1">{{$palette->categorie()->ref}}   </span> </div>
                    <div class="d-flex flex-column"> <span class="followers">Nb Packets</span> <span class="number2">{{$palette->packets()->count()}}</span> </div>
                    <div class="d-flex flex-column"> <span class="rating">Date</span> <span class="number3"> {{$palette->created_at}}</span> </div>
                </div>
                <div class="button mt-2 d-flex flex-row align-items-center"> <button class="btn btn-sm btn-outline-primary w-100">Packets</button> <button class="btn btn-sm btn-primary w-100 ml-2">
                   Imprimer</button> </div>
            </div>
        </div>
    </div>
</div>


{{--        <table class="table table-striped">--}}
{{--            <tr>--}}
{{--                <td>ID</td>--}}
{{--                <td>Categorie</td>--}}
{{--                <td>QR</td>--}}
{{--                <td>DESC</td>--}}
{{--                <td>Creation</td>--}}
{{--            </tr>--}}
{{--        @foreach($palette->packets() as $packet )--}}
{{--            <tr>--}}


{{--                <td>{{$palette->id}}</td>--}}
{{--                <td>{{$palette->categorie()[0]->categorie}}</td>--}}
{{--                <td>--}}
{{--                    <img src="https://api.qrserver.com/v1/create-qr-code/?size=50x50&data={{$palette->qr}}"/>--}}
{{--                </td>--}}
{{--                <td>DE{{$palette->desc}}SC</td>--}}
{{--                <td>{{$palette->created_at}}</td>--}}
{{--            </tr>--}}
{{--        @endforeach--}}
{{--    </table>--}}
{{--    <span>--}}
{{--                        {{$palettes->appends(array('sort' => 'votes'))->links()}}--}}
{{--                    </span>--}}


@endsection
