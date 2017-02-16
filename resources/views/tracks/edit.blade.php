@extends('layouts.master')
 
@section('content')
 
    <h1>Edit Track</h1>
    <p class="lead">Edit the track below. <a href="{{ route('tracks.index') }}">Go back to all tracks.</a></p>
    <hr>
 
    {!! Form::model($track, [
    'method' => 'PATCH',
    'route' => ['tracks.update', $track->id]
]) !!}
 
    <div class="form-group @if ($errors->get('number')): has-error @endif">
        {!! Form::label('number', 'Number :', ['class' => 'control-label']) !!}
        {!! Form::text('number', null, ['class' => 'form-control']) !!}
        @if ($errors->has('number'))
            <p class="help-block">{{ $errors->first('number') }}</p>
        @endif
    </div>
 
    {!! Form::submit('Update Track', ['class' => 'btn btn-primary']) !!}
 
    {!! Form::close() !!}
 
@stop
