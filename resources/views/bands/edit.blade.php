@extends('layouts.master')
 
@section('content')
 
    <h1>Edit Band</h1>
    <p class="lead">Edit the band below. <a href="{{ route('bands.index') }}">Go back to all bands.</a></p>
    <hr>
 
    {!! Form::model($band, [
    'method' => 'PATCH',
    'route' => ['bands.update', $band->id]
]) !!}
 
    <div class="form-group @if ($errors->get('name')): has-error @endif">
        {!! Form::label('name', 'Band\'s name :', ['class' => 'control-label']) !!}
        {!! Form::text('name', null, ['class' => 'form-control']) !!}
        @if ($errors->has('name'))
            <p class="help-block">{{ $errors->first('name') }}</p>
        @endif
    </div>
 
    <div class="form-group @if ($errors->get('formed')): has-error @endif">
        {!! Form::label('formed', 'Formed in (optionnal):', ['class' => 'control-label']) !!}
        {!! Form::textarea('formed', null, ['class' => 'form-control']) !!}
        @if ($errors->has('formed'))
            <p class="help-block">{{ $errors->first('formed') }}</p>
        @endif
    </div>
 
    {!! Form::submit('Update Band', ['class' => 'btn btn-primary']) !!}
 
    {!! Form::close() !!}
 
@stop
