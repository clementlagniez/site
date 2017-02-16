@extends('layouts.master')
 
@section('content')
 
    <h1>Add a new Album</h1>
    <p class="lead">Add the required informations below</p>
    <hr>
    {!! Form::open([
        'route' => 'albums.store'
    ]) !!}
 
    <div class="form-group">
        {!! Form::label('name', 'Album\'s name :', ['class' => 'control-label']) !!}
        {!! Form::text('name', null, ['class' => 'form-control']) !!}
    </div>
 
    <div class="form-group">
        {!! Form::label('duration', 'Album\'s duration (optional):', ['class' => 'control-label']) !!}
        {!! Form::textarea('duration', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('release', 'Released in (optional):', ['class' => 'control-label']) !!}
        {!! Form::textarea('release', null, ['class' => 'form-control']) !!}
    </div>
 
    {!! Form::submit('Create New Album', ['class' => 'btn btn-primary']) !!}
 
    {!! Form::close() !!}
@stop
