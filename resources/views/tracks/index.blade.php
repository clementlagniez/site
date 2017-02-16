@extends('layouts.master')
 
@section('content')
 
    <h1>Tracks List</h1>
    <p class="lead">Here is the list of the Tracks registered in the database. <a href="{{ route('tracks.create') }}">Add a new one ?</a></p>
    <hr>
 
    @if(Session::has('flash_message'))
        <div class="alert alert-success fade in">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            {{ Session::get('flash_message') }}
        </div>
    @endif
 
    @foreach($tracks as $track)
        <h3>{{ $track->number }}</p></h3>
 

        <div class="row">
            <div class="col-md-6">
                <a href="{{ route('tracks.show', $track->id) }}" class="btn btn-info">Show Track</a>
                <a href="{{ route('tracks.edit', $track->id) }}" class="btn btn-primary">Edit Track</a>
            </div>
            <div class="col-md-6 text-right">
                {!! Form::open([
                    'method' => 'DELETE',
                    'route' => ['tracks.destroy', $track->id]
                ]) !!}
                {!! Form::submit('Delete this track ?', ['class' => 'btn btn-danger']) !!}
                {!! Form::close() !!}
            </div>
        </div>
        
        <hr>
    @endforeach
 
@stop
