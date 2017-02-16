@extends('layouts.master')
 
@section('content')
 
    <h1>Edit Artist</h1>
    <p class="lead">Edit this artist below. <a href="{{ route('artists.index') }}">Go back to all artists.</a></p>
    <hr>
 
    {!! Form::model($artist, [
    'method' => 'PATCH',
    'route' => ['artists.update', $artist->id]
]) !!}
 
    <div class="form-group @if ($errors->get('name')): has-error @endif">
        {!! Form::label('name', 'Name :', ['class' => 'control-label']) !!}
        {!! Form::text('name', null, ['class' => 'form-control']) !!}
        @if ($errors->has('name'))
            <p class="help-block">{{ $errors->first('name') }}</p>
        @endif
    </div>
 
    <div class="form-group @if ($errors->get('known_as')): has-error @endif">
        {!! Form::label('known_as', 'Known as (optionnal):', ['class' => 'control-label']) !!}
        {!! Form::textarea('known_as', null, ['class' => 'form-control']) !!}
        @if ($errors->has('known_as'))
            <p class="help-block">{{ $errors->first('known_as') }}</p>
        @endif
    </div>

    <div class="form-group @if ($errors->get('lastname')): has-error @endif">
        {!! Form::label('lastname', 'Lastname (optionnal):', ['class' => 'control-label']) !!}
        {!! Form::text('lastname', null, ['class' => 'form-control']) !!}
        @if ($errors->has('lastname'))
            <p class="help-block">{{ $errors->first('lastname') }}</p>
        @endif
    </div>

    <div class="form-group @if ($errors->get('birth')): has-error @endif">
        {!! Form::label('birth', 'Birth (optionnal):', ['class' => 'control-label']) !!}
        {!! Form::text('birth', null, ['class' => 'form-control']) !!}
        @if ($errors->has('birth'))
            <p class="help-block">{{ $errors->first('birth') }}</p>
        @endif
    </div>

    <div class="form-group @if ($errors->get('death')): has-error @endif">
        {!! Form::label('death', 'Death (optionnal):', ['class' => 'control-label']) !!}
        {!! Form::text('death', null, ['class' => 'form-control']) !!}
        @if ($errors->has('death'))
            <p class="help-block">{{ $errors->first('death') }}</p>
        @endif
    </div>
 
    {!! Form::submit('Update Artist', ['class' => 'btn btn-primary']) !!}
 
    {!! Form::close() !!}
 
@stop
