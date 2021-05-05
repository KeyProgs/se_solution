@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">


            <div class="col-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Nouveau Scan
                    </div>

                    <div class="panel-body">
                        <!-- Display Validation Errors -->
                        @include('common.errors')

                        <!-- New Task Form -->
                        <form action="{{ url('task')}}" method="POST" class="form-horizontal">
                            {{ csrf_field() }}

                            <!-- Task Name -->
                            <div class="form-group">
                                <label for="task-name" class="col-sm-3 control-label">Packet</label>

                                <div class="col-sm-6">
                                    <input autofocus type="text" name="name" id="task-name" class="form-control" value="{{ old('task') }}">
                                </div>
                            </div>

                            <!-- Add Task Button -->
                            <div class="form-group">
                                <div class="col-sm-offset-3 col-sm-6">
                                    <button type="submit" class="btn btn-default">
                                        <i class="fa fa-btn fa-plus"></i>Ajout  Packet
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>


            <div class="col-12 row">
                <!-- Current Tasks -->
                <div class="col-md-3">@include('categorie_liste',['data' => $cat1])</div>
                <div class="col-md-3">@include('categorie_liste',['data' => $cat2])</div>
                <div class="col-md-3">@include('categorie_liste',['data' => $cat3])</div>


            </div>






        </div>
    </div>
@endsection
