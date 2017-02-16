@extends('layouts.master')
 
@section('content')
 
    <h1>Types List</h1>
    <p class="lead">Here is the list of the Types registered in the database. <a href="{{ route('types.create') }}">Add a new one ?</a></p>
    <hr>
 
    @if(Session::has('flash_message'))
        <div class="alert alert-success fade in">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            {{ Session::get('flash_message') }}
        </div>
    @endif
 
    @foreach($types as $type)
        <h3>{{ $type->name }}</p></h3>
 

        <div class="row">
            <div class="col-md-6">
                <a href="{{ route('types.show', $type->id) }}" class="btn btn-info">Show Type</a>
                <a href="{{ route('types.edit', $type->id) }}" class="btn btn-primary">Edit Type</a>
            </div>
            <div class="col-md-6 text-right">
                {!! Form::open([
                    'method' => 'DELETE',
                    'route' => ['types.destroy', $type->id]
                ]) !!}
                {!! Form::submit('Delete this type ?', ['class' => 'btn btn-danger']) !!}
                {!! Form::close() !!}
            </div>
        </div>
        
        <hr>
    @endforeach
 
@stop
