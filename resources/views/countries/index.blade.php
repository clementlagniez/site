@extends('layouts.master')
 
@section('content')
 
    <h1>Countries List</h1>
    <p class="lead">Here is the list of the Countries registered in the database. <a href="{{ route('countries.create') }}">Add a new one ?</a></p>
    <hr>
 
    @if(Session::has('flash_message'))
        <div class="alert alert-success fade in">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            {{ Session::get('flash_message') }}
        </div>
    @endif
 
    @foreach($countries as $country)
        <h3>{{ $country->name }}</p></h3>


        <div class="row">
            <div class="col-md-6">
                <a href="{{ route('countries.show', $country->id) }}" class="btn btn-info">Show Country</a>
                <a href="{{ route('countries.edit', $country->id) }}" class="btn btn-primary">Edit Country</a>
            </div>
            <div class="col-md-6 text-right">
                {!! Form::open([
                    'method' => 'DELETE',
                    'route' => ['countries.destroy', $country->id]
                ]) !!}
                {!! Form::submit('Delete this country ?', ['class' => 'btn btn-danger']) !!}
                {!! Form::close() !!}
            </div>
        </div>
        
        <hr>
    @endforeach
 
@stop
