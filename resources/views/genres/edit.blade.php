@extends('layouts.master')
 
@section('content')
 
    <h1>Edit Genre</h1>
    <p class="lead">Edit the genre below. <a href="{{ route('genres.index') }}">Go back to all genres.</a></p>
    <hr>
 
    {!! Form::model($genre, [
    'method' => 'PATCH',
    'route' => ['genres.update', $genre->id]
]) !!}
 
    <div class="form-group @if ($errors->get('name')): has-error @endif">
        {!! Form::label('name', 'Genre\'s name :', ['class' => 'control-label']) !!}
        {!! Form::text('name', null, ['class' => 'form-control']) !!}
        @if ($errors->has('name'))
            <p class="help-block">{{ $errors->first('name') }}</p>
        @endif
    </div>
 
    {!! Form::submit('Update Genre', ['class' => 'btn btn-primary']) !!}
 
    {!! Form::close() !!}
 
@stop
