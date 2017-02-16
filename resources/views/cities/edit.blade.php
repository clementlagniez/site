@extends('layouts.master')
 
@section('content')
 
    <h1>Edit City</h1>
    <p class="lead">Edit the city below. <a href="{{ route('cities.index') }}">Go back to all cities.</a></p>
    <hr>
 
    {!! Form::model($city, [
    'method' => 'PATCH',
    'route' => ['cities.update', $city->id]
]) !!}
 
    <div class="form-group @if ($errors->get('name')): has-error @endif">
        {!! Form::label('name', 'City\'s name :', ['class' => 'control-label']) !!}
        {!! Form::text('name', null, ['class' => 'form-control']) !!}
        @if ($errors->has('name'))
            <p class="help-block">{{ $errors->first('name') }}</p>
        @endif
    </div>
 
    {!! Form::submit('Update City', ['class' => 'btn btn-primary']) !!}
 
    {!! Form::close() !!}
 
@stop
