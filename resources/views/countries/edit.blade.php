@extends('layouts.master')
 
@section('content')
 
    <h1>Edit Country</h1>
    <p class="lead">Edit the country below. <a href="{{ route('countries.index') }}">Go back to all countries.</a></p>
    <hr>
 
    {!! Form::model(
        $country, [
            'method' => 'PATCH',
            'route' => ['countries.update', $country->id]
        ]
    ) !!}
 
    <div class="form-group @if ($errors->get('name')): has-error @endif">
        {!! Form::label('name', 'Country :', ['class' => 'control-label']) !!}
        {!! Form::text('name', null, ['class' => 'form-control']) !!}
        @if ($errors->has('name'))
            <p class="help-block">{{ $errors->first('name') }}</p>
        @endif
    </div>
 
    {!! Form::submit('Update Country', ['class' => 'btn btn-primary']) !!}
 
    {!! Form::close() !!}
 
@stop
