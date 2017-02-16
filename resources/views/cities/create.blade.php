@extends('layouts.master')
 
@section('content')
 
    <h1>Add a new City</h1>
    <p class="lead">Add the required informations below</p>
    <hr>
    {!! Form::open([
        'route' => 'cities.store'
    ]) !!}
 
    <div class="form-group">
        {!! Form::label('name', 'City\'s name :', ['class' => 'control-label']) !!}
        {!! Form::text('name', null, ['class' => 'form-control']) !!}
    </div>
 
    {!! Form::submit('Create New City', ['class' => 'btn btn-primary']) !!}
 
    {!! Form::close() !!}
@stop
