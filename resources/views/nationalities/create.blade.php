@extends('layouts.master')
 
@section('content')
 
    <h1>Add a new Nationality</h1>
    <p class="lead">Add the required informations below</p>
    <hr>
    {!! Form::open([
        'route' => 'nationalties.store'
    ]) !!}
 
    <div class="form-group">
        {!! Form::label('name', 'Nationality :', ['class' => 'control-label']) !!}
        {!! Form::text('name', null, ['class' => 'form-control']) !!}
    </div>
 
    {!! Form::submit('Create New Nationality', ['class' => 'btn btn-primary']) !!}
 
    {!! Form::close() !!}
@stop
