@extends('layouts.master')
 
@section('content')
 
    <h1>Edit Type</h1>
    <p class="lead">Edit the type below. <a href="{{ route('types.index') }}">Go back to all types.</a></p>
    <hr>
 
    {!! Form::model($type, [
    'method' => 'PATCH',
    'route' => ['types.update', $type->id]
]) !!}
 
    <div class="form-group @if ($errors->get('name')): has-error @endif">
        {!! Form::label('name', 'name :', ['class' => 'control-label']) !!}
        {!! Form::text('name', null, ['class' => 'form-control']) !!}
        @if ($errors->has('name'))
            <p class="help-block">{{ $errors->first('name') }}</p>
        @endif
    </div>
 
    {!! Form::submit('Update Type', ['class' => 'btn btn-primary']) !!}
 
    {!! Form::close() !!}
 
@stop
