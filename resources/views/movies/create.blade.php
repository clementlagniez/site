@extends('layouts.master')
 
@section('content')
 
    <h1>Add a new Movie</h1>
    <p class="lead">Add the required informations below</p>
    <hr>
    {!! Form::open([
        'route' => 'movies.store'
    ]) !!}
 
    <div class="form-group">
        {!! Form::label('name', 'Title :', ['class' => 'control-label']) !!}
        {!! Form::text('name', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('release', 'Release (optionnal):', ['class' => 'control-label']) !!}
        {!! Form::text('release', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('year', 'Year (optionnal):', ['class' => 'control-label']) !!}
        {!! Form::text('year', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('duration', 'Duration (optionnal | in minutes):', ['class' => 'control-label']) !!}
        {!! Form::text('duration', null, ['class' => 'form-control']) !!}
    </div>
 
    {!! Form::submit('Create New Movie', ['class' => 'btn btn-primary']) !!}
 
    {!! Form::close() !!}
@stop
