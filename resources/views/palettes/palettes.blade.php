@extends('layouts.app')

@section('content')

<h1>>>Palettes</h1>

    <table class="table table-striped table-hover">
        <thead class="thead bg-success">
        <tr>
            <td>ID</td>
            <td>Categorie</td>
            <td>QR</td>
            <td>DESC</td>
            <td>Creation</td>
        </tr>
        </thead>
        @php
    @endphp



        @foreach($palettes as $palette )
            <tr>


                <td>{{$palette->id}}</td>
                <td><a href="{{ URL::asset('categorie/'.$palette->categorie()->id.'/palettes') }}">{{$palette->categorie()->categorie}}</a></td>
                <td>
                    <img src="{{$palette->getQrImage()}}"/>
                </td>
                <td>DE{{$palette->desc}}SC</td>
                <td>{{$palette->created_at}}</td>
            </tr>
        @endforeach
    </table>
    <span>
                        {{$palettes->appends(array('sort' => 'votes'))->links()}}
                    </span>


@endsection
