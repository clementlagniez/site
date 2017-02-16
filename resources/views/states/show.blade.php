@extends('layouts.master')
 
@section('content')
 
    <h1>{{ $state->name }}</p></h1>

    <hr>
 
    <div class="row">
        <div class="col-md-6">
            <a href="{{ route('states.index') }}" class="btn btn-info">Go back to list</a>
            <a href="{{ route('states.edit', $state->id) }}" class="btn btn-primary">Edit State</a>
        </div>
        <div class="col-md-6 text-right">
                {!! Form::open([
                    'method' => 'DELETE',
                    'route' => ['states.destroy', $state->id]
                ]) !!}
                {!! Form::submit('Delete this state ?', ['class' => 'btn btn-danger']) !!}
                {!! Form::close() !!}
        </div>
    </div>
 
@stop
