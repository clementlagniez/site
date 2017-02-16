@extends('layouts.master')
 
@section('content')
 
    <h1>Add a new Subtype</h1>
    <p class="lead">Add the required informations below</p>
    <hr>
    {!! Form::open([
        'route' => 'subtypes.store'
    ]) !!}
 
    <div class="form-group">
        {!! Form::label('name', 'Subtype :', ['class' => 'control-label']) !!}
        {!! Form::text('name', null, ['class' => 'form-control']) !!}
    </div>

    {!! Form::submit('Create New Subtype', ['class' => 'btn btn-primary']) !!}
 
    {!! Form::close() !!}
@stop
