@extends('layouts.master')
 
@section('content')
 
    <h1>Edit Subtype</h1>
    <p class="lead">Edit the subtype below. <a href="{{ route('subtypes.index') }}">Go back to all subtypes.</a></p>
    <hr>
 
    {!! Form::model($subtype, [
    'method' => 'PATCH',
    'route' => ['subtypes.update', $subtype->id]
]) !!}
 
    <div class="form-group @if ($errors->get('name')): has-error @endif">
        {!! Form::label('name', 'Subtype :', ['class' => 'control-label']) !!}
        {!! Form::text('name', null, ['class' => 'form-control']) !!}
        @if ($errors->has('name'))
            <p class="help-block">{{ $errors->first('name') }}</p>
        @endif
    </div>
 
    {!! Form::submit('Update Subtype', ['class' => 'btn btn-primary']) !!}
 
    {!! Form::close() !!}
 
@stop
