@extends('layouts.master')
 
@section('content')
 
    <h1>Add a new Song</h1>
    <p class="lead">Add the required informations below</p>
    <hr>
    {!! Form::open([
        'route' => 'songs.store'
    ]) !!}
 
    <div class="form-group">
        {!! Form::label('name', 'Song\'s name :', ['class' => 'control-label']) !!}
        {!! Form::text('name', null, ['class' => 'form-control']) !!}
    </div>
 
    <div class="form-group">
        {!! Form::label('duration', 'Duration (optional):', ['class' => 'control-label']) !!}
        {!! Form::textarea('duration', null, ['class' => 'form-control']) !!}
    </div>

    {!! Form::submit('Create New Song', ['class' => 'btn btn-primary']) !!}
 
    {!! Form::close() !!}
@stop
