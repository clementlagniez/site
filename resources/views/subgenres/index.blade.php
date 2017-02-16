@extends('layouts.master')
 
@section('content')
 
    <h1>Subgenres List</h1>
    <p class="lead">Here is the list of the Subgenres registered in the database. <a href="{{ route('subgenres.create') }}">Add a new one ?</a></p>
    <hr>
 
    @if(Session::has('flash_message'))
        <div class="alert alert-success fade in">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            {{ Session::get('flash_message') }}
        </div>
    @endif
 
    @foreach($subgenres as $subgenre)
        <h3>{{ $subgenre->name }}</p></h3>
 

        <div class="row">
            <div class="col-md-6">
                <a href="{{ route('subgenres.show', $subgenre->id) }}" class="btn btn-info">Show Subgenre</a>
                <a href="{{ route('subgenres.edit', $subgenre->id) }}" class="btn btn-primary">Edit Subgenre</a>
            </div>
            <div class="col-md-6 text-right">
                {!! Form::open([
                    'method' => 'DELETE',
                    'route' => ['subgenres.destroy', $subgenre->id]
                ]) !!}
                {!! Form::submit('Delete this subgenre ?', ['class' => 'btn btn-danger']) !!}
                {!! Form::close() !!}
            </div>
        </div>
        
        <hr>
    @endforeach
 
@stop
