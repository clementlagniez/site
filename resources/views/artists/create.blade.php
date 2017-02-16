@extends('layouts.master')
 
@section('content')
 
    <h1>Add a new Artist</h1>
    <p class="lead">Add the required informations below</p>
    <hr>
    {!! Form::open([
        'route' => 'artists.store'
    ]) !!}
 
    <div class="form-group">
        {!! Form::label('name', 'Name :', ['class' => 'control-label']) !!}
        {!! Form::text('name', null, ['class' => 'form-control']) !!}
    </div>
 
    <div class="form-group">
        {!! Form::label('known_as', 'Known as (optional):', ['class' => 'control-label']) !!}
        {!! Form::textarea('known_as', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('lastname', 'Last Name (optional):', ['class' => 'control-label']) !!}
        {!! Form::textarea('lastname', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('birth', 'Birth (optional):', ['class' => 'control-label']) !!}
        {!! Form::textarea('birth', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('death', 'Death (optional):', ['class' => 'control-label']) !!}
        {!! Form::textarea('death', null, ['class' => 'form-control']) !!}
    </div>
 
    {!! Form::submit('Create New Artist', ['class' => 'btn btn-primary']) !!}
 
    {!! Form::close() !!}
@stop
