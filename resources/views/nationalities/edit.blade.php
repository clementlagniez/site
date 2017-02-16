@extends('layouts.master')
 
@section('content')
 
    <h1>Edit Nationality</h1>
    <p class="lead">Edit the nationality below. <a href="{{ route('nationalities.index') }}">Go back to all nationalities.</a></p>
    <hr>
 
    {!! Form::model($nationality, [
    'method' => 'PATCH',
    'route' => ['nationalities.update', $nationality->id]
]) !!}
 
    <div class="form-group @if ($errors->get('name')): has-error @endif">
        {!! Form::label('name', 'Nationality :', ['class' => 'control-label']) !!}
        {!! Form::text('name', null, ['class' => 'form-control']) !!}
        @if ($errors->has('name'))
            <p class="help-block">{{ $errors->first('name') }}</p>
        @endif
    </div>
 
    {!! Form::submit('Update Nationality', ['class' => 'btn btn-primary']) !!}
 
    {!! Form::close() !!}
 
@stop
