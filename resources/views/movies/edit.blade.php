@extends('layouts.master')
 
@section('content')
 
    <h1>Edit Movie</h1>
    <p class="lead">Edit the movie below. <a href="{{ route('movies.index') }}">Go back to all movies.</a></p>
    <hr>
 
    {!! Form::model($movie, [
    'method' => 'PATCH',
    'route' => ['movies.update', $movie->id]
]) !!}
 
    <div class="form-group @if ($errors->get('name')): has-error @endif">
        {!! Form::label('name', 'Title :', ['class' => 'control-label']) !!}
        {!! Form::text('name', null, ['class' => 'form-control']) !!}
        @if ($errors->has('name'))
            <p class="help-block">{{ $errors->first('name') }}</p>
        @endif
    </div>
 
    <div class="form-group @if ($errors->get('release')): has-error @endif">
        {!! Form::label('release', 'Release (optionnal):', ['class' => 'control-label']) !!}
        {!! Form::textarea('release', null, ['class' => 'form-control']) !!}
        @if ($errors->has('release'))
            <p class="help-block">{{ $errors->first('release') }}</p>
        @endif
    </div>

    <div class="form-group @if ($errors->get('year')): has-error @endif">
        {!! Form::label('year', 'Year (optionnal):', ['class' => 'control-label']) !!}
        {!! Form::text('year', null, ['class' => 'form-control']) !!}
        @if ($errors->has('year'))
            <p class="help-block">{{ $errors->first('year') }}</p>
        @endif
    </div>

    <div class="form-group @if ($errors->get('duration')): has-error @endif">
        {!! Form::label('duration', 'Duration (optionnal | in minutes):', ['class' => 'control-label']) !!}
        {!! Form::text('duration', null, ['class' => 'form-control']) !!}
        @if ($errors->has('duration'))
            <p class="help-block">{{ $errors->first('duration') }}</p>
        @endif
    </div>
 
    {!! Form::submit('Update Movie', ['class' => 'btn btn-primary']) !!}
 
    {!! Form::close() !!}
 
@stop
