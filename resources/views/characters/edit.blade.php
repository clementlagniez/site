@extends('layouts.master')
 
@section('content')
 
    <h1>Edit Character</h1>
    <p class="lead">Edit the character below. <a href="{{ route('characters.index') }}">Go back to all characters.</a></p>
    <hr>
 
    {!! Form::model($character, [
    'method' => 'PATCH',
    'route' => ['characters.update', $character->id]
]) !!}
 
    <div class="form-group @if ($errors->get('name')): has-error @endif">
        {!! Form::label('name', 'character\'s name :', ['class' => 'control-label']) !!}
        {!! Form::text('name', null, ['class' => 'form-control']) !!}
        @if ($errors->has('name'))
            <p class="help-block">{{ $errors->first('name') }}</p>
        @endif
    </div>
 
    <div class="form-group @if ($errors->get('lastname')): has-error @endif">
        {!! Form::label('lastname', 'Lastname (optionnal):', ['class' => 'control-label']) !!}
        {!! Form::textarea('lastname', null, ['class' => 'form-control']) !!}
        @if ($errors->has('lastname'))
            <p class="help-block">{{ $errors->first('lastname') }}</p>
        @endif
    </div>

    <div class="form-group @if ($errors->get('known_as')): has-error @endif">
        {!! Form::label('known_as', 'Known as (optionnal):', ['class' => 'control-label']) !!}
        {!! Form::text('known_as', null, ['class' => 'form-control']) !!}
        @if ($errors->has('known_as'))
            <p class="help-block">{{ $errors->first('known_as') }}</p>
        @endif
    </div>

    <div class="form-group @if ($errors->get('age')): has-error @endif">
        {!! Form::label('age', 'Age (optionnal):', ['class' => 'control-label']) !!}
        {!! Form::text('age', null, ['class' => 'form-control']) !!}
        @if ($errors->has('age'))
            <p class="help-block">{{ $errors->first('age') }}</p>
        @endif
    </div>
 
    {!! Form::submit('Update Character', ['class' => 'btn btn-primary']) !!}
 
    {!! Form::close() !!}
 
@stop
