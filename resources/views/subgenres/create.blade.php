@extends('layouts.master')
 
@section('content')
 
    <h1>Add a new Subgenre</h1>
    <p class="lead">Add the required informations below</p>
    <hr>
    {!! Form::open([
        'route' => 'subgenres.store'
    ]) !!}
 
    <div class="form-group">
        {!! Form::label('name', 'Subgenre :', ['class' => 'control-label']) !!}
        {!! Form::text('name', null, ['class' => 'form-control']) !!}
    </div>

    {!! Form::submit('Create New Subgenre', ['class' => 'btn btn-primary']) !!}
 
    {!! Form::close() !!}
@stop
