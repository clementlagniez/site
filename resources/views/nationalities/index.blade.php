@extends('layouts.master')
 
@section('content')
 
    <h1>Nationalities List</h1>
    <p class="lead">Here is the list of the Nationalities registered in the database. <a href="{{ route('nationalities.create') }}">Add a new one ?</a></p>
    <hr>
 
    @if(Session::has('flash_message'))
        <div class="alert alert-success fade in">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            {{ Session::get('flash_message') }}
        </div>
    @endif
 
    @foreach($nationalities as $nationality)
        <h3>{{ $nationality->name }}</p></h3>


        <div class="row">
            <div class="col-md-6">
                <a href="{{ route('nationalities.show', $nationality->id) }}" class="btn btn-info">Show Nationality</a>
                <a href="{{ route('nationalities.edit', $nationality->id) }}" class="btn btn-primary">Edit Nationality</a>
            </div>
            <div class="col-md-6 text-right">
                {!! Form::open([
                    'method' => 'DELETE',
                    'route' => ['nationalities.destroy', $nationality->id]
                ]) !!}
                {!! Form::submit('Delete this nationality ?', ['class' => 'btn btn-danger']) !!}
                {!! Form::close() !!}
            </div>
        </div>
        
        <hr>
    @endforeach
 
@stop
