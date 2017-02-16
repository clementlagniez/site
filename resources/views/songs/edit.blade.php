@extends('layouts.master')
 
@section('content')
 
    <h1>Edit Book</h1>
    <p class="lead">Edit the song below. <a href="{{ route('songs.index') }}">Go back to all songs.</a></p>
    <hr>
 
    {!! Form::model($song, [
    'method' => 'PATCH',
    'route' => ['songs.update', $song->id]
]) !!}
 
    <div class="form-group @if ($errors->get('name')): has-error @endif">
        {!! Form::label('name', 'Song\'s name :', ['class' => 'control-label']) !!}
        {!! Form::text('name', null, ['class' => 'form-control']) !!}
        @if ($errors->has('name'))
            <p class="help-block">{{ $errors->first('name') }}</p>
        @endif
    </div>

    <div class="form-group @if ($errors->get('duration')): has-error @endif">
        {!! Form::label('duration', 'Duration (optionnal):', ['class' => 'control-label']) !!}
        {!! Form::text('duration', null, ['class' => 'form-control']) !!}
        @if ($errors->has('duration'))
            <p class="help-block">{{ $errors->first('duration') }}</p>
        @endif
    </div>
 
    {!! Form::submit('Update Song', ['class' => 'btn btn-primary']) !!}
 
    {!! Form::close() !!}
 
@stop
