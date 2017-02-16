@extends('layouts.master')
 
@section('content')
 
    <h1>Genres List</h1>
    <p class="lead">Here is the list of the Genres registered in the database. <a href="{{ route('genres.create') }}">Add a new one ?</a></p>
    <hr>
 
    @if(Session::has('flash_message'))
        <div class="alert alert-success fade in">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            {{ Session::get('flash_message') }}
        </div>
    @endif
 
    @foreach($genres as $genre)
        <h3>{{ $genre->name }}</p></h3>


        <div class="row">
            <div class="col-md-6">
                <a href="{{ route('genres.show', $genre->id) }}" class="btn btn-info">Show Genre</a>
                <a href="{{ route('genres.edit', $genre->id) }}" class="btn btn-primary">Edit Genre</a>
            </div>
            <div class="col-md-6 text-right">
                {!! Form::open([
                    'method' => 'DELETE',
                    'route' => ['genres.destroy', $genre->id]
                ]) !!}
                {!! Form::submit('Delete this genre ?', ['class' => 'btn btn-danger']) !!}
                {!! Form::close() !!}
            </div>
        </div>
        
        <hr>
    @endforeach
 
@stop
