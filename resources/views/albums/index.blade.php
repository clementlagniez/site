@extends('layouts.master')
 
@section('content')
 
    <h1>Albums List</h1>
    <p class="lead">Here is the list of the Albums registered in the database. <a href="{{ route('albums.create') }}">Add a new one ?</a></p>
    <hr>
 
    @if(Session::has('flash_message'))
        <div class="alert alert-success fade in">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            {{ Session::get('flash_message') }}
        </div>
    @endif
 
    @foreach($albums as $album)
        <h3>{{ $album->name }}</h3>

        @if($album->release != NULL)
            <p><u><b>Released :</b></u> {{ $album->release }}</p>
        @endif

        @if($album->duration != NULL)
            <p><u><b>Duration :</b></u> {{ $album->duration }}</p>
        @endif
 
        <div class="row">
            <div class="col-md-6">
                <a href="{{ route('albums.show', $album->id) }}" class="btn btn-info">Show Album</a>
                <a href="{{ route('albums.edit', $album->id) }}" class="btn btn-primary">Edit Album</a>
            </div>
            <div class="col-md-6 text-right">
                {!! Form::open([
                    'method' => 'DELETE',
                    'route' => ['albums.destroy', $album->id]
                ]) !!}
                {!! Form::submit('Delete this album ?', ['class' => 'btn btn-danger']) !!}
                {!! Form::close() !!}
            </div>
        </div>
        
        <hr>
    @endforeach
 
@stop
