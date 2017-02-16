@extends('layouts.master')
 
@section('content')
 
    <h1>Add a new State</h1>
    <p class="lead">Add the required informations below</p>
    <hr>
    {!! Form::open([
        'route' => 'states.store'
    ]) !!}
 
    <div class="form-group">
        {!! Form::label('name', 'State :', ['class' => 'control-label']) !!}
        {!! Form::text('name', null, ['class' => 'form-control']) !!}
    </div>
 
    {!! Form::submit('Create New State', ['class' => 'btn btn-primary']) !!}
 
    {!! Form::close() !!}
@stop
