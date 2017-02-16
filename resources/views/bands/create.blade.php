@extends('layouts.master')
 
@section('content')
 
    <h1>Add a new Band</h1>
    <p class="lead">Add the required informations below</p>
    <hr>
    {!! Form::open([
        'route' => 'bands.store'
    ]) !!}
 
    <div class="form-group">
        {!! Form::label('name', 'Band\'s name :', ['class' => 'control-label']) !!}
        {!! Form::text('name', null, ['class' => 'form-control']) !!}
    </div>
 
    <div class="form-group">
        {!! Form::label('formed', 'Formed in (optional):', ['class' => 'control-label']) !!}
        {!! Form::textarea('formed', null, ['class' => 'form-control']) !!}
    </div>
 
    {!! Form::submit('Create New Band', ['class' => 'btn btn-primary']) !!}
 
    {!! Form::close() !!}
@stop
