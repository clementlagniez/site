@extends('layouts.master')
 
@section('content')
 
    <h1>Cities List</h1>
    <p class="lead">Here is the list of the Cities registered in the database. <a href="{{ route('characters.create') }}">Add a new one ?</a></p>
    <hr>
 
    @if(Session::has('flash_message'))
        <div class="alert alert-success fade in">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            {{ Session::get('flash_message') }}
        </div>
    @endif
 
    @foreach($cities as $city)
        <h3>{{ $city->name }}</p></h3> 

        <div class="row">
            <div class="col-md-6">
                <a href="{{ route('cities.show', $city->id) }}" class="btn btn-info">Show City</a>
                <a href="{{ route('cities.edit', $city->id) }}" class="btn btn-primary">Edit City</a>
            </div>
            <div class="col-md-6 text-right">
                {!! Form::open([
                    'method' => 'DELETE',
                    'route' => ['cities.destroy', $city->id]
                ]) !!}
                {!! Form::submit('Delete this city ?', ['class' => 'btn btn-danger']) !!}
                {!! Form::close() !!}
            </div>
        </div>
        
        <hr>
    @endforeach
 
@stop
