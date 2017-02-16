@extends('layouts.master')
 
@section('content')
 
    <h1>Movies List</h1>
    <p class="lead">Here is the list of the Movies registered in the database. <a href="{{ route('movies.create') }}">Add a new one ?</a></p>
    <hr>
 
    @if(Session::has('flash_message'))
        <div class="alert alert-success fade in">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            {{ Session::get('flash_message') }}
        </div>
    @endif
 
    @each('movies.detail', $movies, 'movie') 
@stop
