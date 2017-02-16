@extends('layouts.master')
 
@section('content')
 
    <h1>Edit Album</h1>
    <p class="lead">Edit the album below. <a href="{{ route('artists.index') }}">Go back to all albums.</a></p>
    <hr>
 
    {!! Form::model($album, [
    'method' => 'PATCH',
    'route' => ['albums.update', $album->id]
]) !!}
 
    <div class="form-group @if ($errors->get('name')): has-error @endif">
        {!! Form::label('name', 'Album\'s name :', ['class' => 'control-label']) !!}
        {!! Form::text('name', null, ['class' => 'form-control']) !!}
        @if ($errors->has('name'))
            <p class="help-block">{{ $errors->first('name') }}</p>
        @endif
    </div>
 
    <div class="form-group @if ($errors->get('duration')): has-error @endif">
        {!! Form::label('duration', 'Album\'s duration (optionnal):', ['class' => 'control-label']) !!}
        {!! Form::textarea('duration', null, ['class' => 'form-control']) !!}
        @if ($errors->has('duration'))
            <p class="help-block">{{ $errors->first('duration') }}</p>
        @endif
    </div>

    <div class="form-group @if ($errors->get('release')): has-error @endif">
        {!! Form::label('release', 'Released (optionnal):', ['class' => 'control-label']) !!}
        {!! Form::text('release', null, ['class' => 'form-control']) !!}
        @if ($errors->has('release'))
            <p class="help-block">{{ $errors->first('release') }}</p>
        @endif
    </div>
 
    {!! Form::submit('Update Album', ['class' => 'btn btn-primary']) !!}
 
    {!! Form::close() !!}
 
@stop
