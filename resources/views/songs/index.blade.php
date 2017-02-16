@extends('layouts.master')
 
@section('content')
 
    <h1>Songs List</h1>
    <p class="lead">Here is the list of the Songs registered in the database. <a href="{{ route('songs.create') }}">Add a new one ?</a></p>
    <hr>
 
    @if(Session::has('flash_message'))
        <div class="alert alert-success fade in">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            {{ Session::get('flash_message') }}
        </div>
    @endif
 
    @foreach($songs as $song)
        <h3>{{ $song->name }}</h3>

        @if($song->duration != NULL)
            <p><u><b>Duration :</b></u> {{ $song->duration }}</p>
        @endif

 
        <div class="row">
            <div class="col-md-6">
                <a href="{{ route('songs.show', $song->id) }}" class="btn btn-info">Show Song</a>
                <a href="{{ route('songs.edit', $song->id) }}" class="btn btn-primary">Edit Song</a>
            </div>
            <div class="col-md-6 text-right">
                {!! Form::open([
                    'method' => 'DELETE',
                    'route' => ['songs.destroy', $song->id]
                ]) !!}
                {!! Form::submit('Delete this song ?', ['class' => 'btn btn-danger']) !!}
                {!! Form::close() !!}
            </div>
        </div>
        
        <hr>
    @endforeach
 
@stop
