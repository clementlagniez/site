@extends('layouts.master')
 
@section('content')
 
    <h1>Add a new Character</h1>
    <p class="lead">Add the required informations below</p>
    <hr>
    {!! Form::open([
        'route' => 'characters.store'
    ]) !!}
 
    <div class="form-group">
        {!! Form::label('name', 'Character\'s name :', ['class' => 'control-label']) !!}
        {!! Form::text('name', null, ['class' => 'form-control']) !!}
    </div>
 
    <div class="form-group">
        {!! Form::label('known_as', 'Known as (optional):', ['class' => 'control-label']) !!}
        {!! Form::textarea('known_as', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('lastname', 'Lastname (optional):', ['class' => 'control-label']) !!}
        {!! Form::textarea('lastname', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('age', 'Age (optional):', ['class' => 'control-label']) !!}
        {!! Form::textarea('age', null, ['class' => 'form-control']) !!}
    </div>
 
    {!! Form::submit('Create New Character', ['class' => 'btn btn-primary']) !!}
 
    {!! Form::close() !!}
@stop
