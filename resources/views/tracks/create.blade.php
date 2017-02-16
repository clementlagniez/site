@extends('layouts.master')
 
@section('content')
 
    <h1>Add a new Tracks</h1>
    <p class="lead">Add the required informations below</p>
    <hr>
    {!! Form::open([
        'route' => 'tracks.store'
    ]) !!}
 
    <div class="form-group">
        {!! Form::label('number', 'Number :', ['class' => 'control-label']) !!}
        {!! Form::text('number', null, ['class' => 'form-control']) !!}
    </div>

    {!! Form::submit('Create New Track', ['class' => 'btn btn-primary']) !!}
 
    {!! Form::close() !!}
@stop
