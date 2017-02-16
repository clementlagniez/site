@extends('layouts.master')
 
@section('content')
 
    <h1>Edit Subgenre</h1>
    <p class="lead">Edit the subgenre below. <a href="{{ route('subgenres.index') }}">Go back to all subgenres.</a></p>
    <hr>
 
    {!! Form::model($subgenre, [
    'method' => 'PATCH',
    'route' => ['subgenres.update', $subgenre->id]
]) !!}
 
    <div class="form-group @if ($errors->get('name')): has-error @endif">
        {!! Form::label('name', 'Subgenre :', ['class' => 'control-label']) !!}
        {!! Form::text('name', null, ['class' => 'form-control']) !!}
        @if ($errors->has('name'))
            <p class="help-block">{{ $errors->first('name') }}</p>
        @endif
    </div>
 
    {!! Form::submit('Update Subgenre', ['class' => 'btn btn-primary']) !!}
 
    {!! Form::close() !!}
 
@stop
