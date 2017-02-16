@extends('layouts.master')
 
@section('content')
 
    <h1>Subtypes List</h1>
    <p class="lead">Here is the list of the Subtypes registered in the database. <a href="{{ route('subtypes.create') }}">Add a new one ?</a></p>
    <hr>
 
    @if(Session::has('flash_message'))
        <div class="alert alert-success fade in">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            {{ Session::get('flash_message') }}
        </div>
    @endif
 
    @foreach($subtypes as $subtype)
        <h3>{{ $subtype->name }}</p></h3> 

        <div class="row">
            <div class="col-md-6">
                <a href="{{ route('subtypes.show', $subtype->id) }}" class="btn btn-info">Show Subtype</a>
                <a href="{{ route('subtypes.edit', $subtype->id) }}" class="btn btn-primary">Edit Subtype</a>
            </div>
            <div class="col-md-6 text-right">
                {!! Form::open([
                    'method' => 'DELETE',
                    'route' => ['subtypes.destroy', $subtype->id]
                ]) !!}
                {!! Form::submit('Delete this subtype ?', ['class' => 'btn btn-danger']) !!}
                {!! Form::close() !!}
            </div>
        </div>
        
        <hr>
    @endforeach
 
@stop
