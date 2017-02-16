@extends('layouts.master')
 
@section('content')
 
    <h1>Edit State</h1>
    <p class="lead">Edit the state below. <a href="{{ route('states.index') }}">Go back to all states.</a></p>
    <hr>
 
    {!! Form::model($state, [
    'method' => 'PATCH',
    'route' => ['states.update', $state->id]
]) !!}
 
    <div class="form-group @if ($errors->get('name')): has-error @endif">
        {!! Form::label('name', 'State :', ['class' => 'control-label']) !!}
        {!! Form::text('name', null, ['class' => 'form-control']) !!}
        @if ($errors->has('name'))
            <p class="help-block">{{ $errors->first('name') }}</p>
        @endif
    </div>
 
    {!! Form::submit('Update State', ['class' => 'btn btn-primary']) !!}
 
    {!! Form::close() !!}
 
@stop
