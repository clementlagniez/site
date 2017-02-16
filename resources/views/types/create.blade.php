@extends('layouts.master')
 
@section('content')
 
    <h1>Add a new Type</h1>
    <p class="lead">Add the required informations below</p>
    <hr>
    {!! Form::open([
        'route' => 'types.store'
    ]) !!}
 
    <div class="form-group">
        {!! Form::label('name', 'Name :', ['class' => 'control-label']) !!}
        {!! Form::text('name', null, ['class' => 'form-control']) !!}
    </div>

    {!! Form::submit('Create New Type', ['class' => 'btn btn-primary']) !!}
 
    {!! Form::close() !!}
@stop
