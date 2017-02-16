@extends('layouts.master')
 
@section('content')
 
    <h1>Add a new Country</h1>
    <p class="lead">Add the required informations below</p>
    <hr>
    {!! Form::open([
        'route' => 'countries.store'
    ]) !!}
 
    <div class="form-group">
        {!! Form::label('name', 'Country\'s name :', ['class' => 'control-label']) !!}
        {!! Form::text('name', null, ['class' => 'form-control']) !!}
    </div>
 
    {!! Form::submit('Create New Country', ['class' => 'btn btn-primary']) !!}
 
    {!! Form::close() !!}
@stop
