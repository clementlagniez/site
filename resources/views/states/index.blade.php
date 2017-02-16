@extends('layouts.master')
 
@section('content')
 
    <h1>States List</h1>
    <p class="lead">Here is the list of the States registered in the database. <a href="{{ route('states.create') }}">Add a new one ?</a></p>
    <hr>
 
    @if(Session::has('flash_message'))
        <div class="alert alert-success fade in">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            {{ Session::get('flash_message') }}
        </div>
    @endif
 
    @foreach($states as $state)
        <h3>{{ $state->name }}</p></h3> 

        <div class="row">
            <div class="col-md-6">
                <a href="{{ route('states.show', $state->id) }}" class="btn btn-info">Show State</a>
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
        
        <hr>
    @endforeach
 
@stop
