@extends('layouts.master')
 
@section('content')
 
    <h1>Add a new Genre</h1>
    <p class="lead">Add the required informations below</p>
    <hr>
    {!! Form::open([
        'route' => 'genres.store'
    ]) !!}
 
    <div class="form-group">
        {!! Form::label('name', 'Genre\'s name :', ['class' => 'control-label']) !!}
        {!! Form::text('name', null, ['class' => 'form-control']) !!}
    </div>
 
    {!! Form::submit('Create New Genre', ['class' => 'btn btn-primary']) !!}
 
    {!! Form::close() !!}
@stop
