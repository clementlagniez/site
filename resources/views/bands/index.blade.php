@extends('layouts.master')
 
@section('content')
 
    <h1>Bands List</h1>
    <p class="lead">Here is the list of the Bands registered in the database. <a href="{{ route('bands.create') }}">Add a new one ?</a></p>
    <hr>
 
    @if(Session::has('flash_message'))
        <div class="alert alert-success fade in">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            {{ Session::get('flash_message') }}
        </div>
    @endif
 
    @foreach($bands as $band)
        <h3>{{ $band->name }}</h3>

        @if($band->formed != NULL)
            <p><u><b>Formed in :</b></u> {{ $band->formed }}</p>
        @endif
 
        <div class="row">
            <div class="col-md-6">
                <a href="{{ route('bands.show', $band->id) }}" class="btn btn-info">Show Band</a>
                <a href="{{ route('bands.edit', $band->id) }}" class="btn btn-primary">Edit Band</a>
            </div>
            <div class="col-md-6 text-right">
                {!! Form::open([
                    'method' => 'DELETE',
                    'route' => ['bands.destroy', $band->id]
                ]) !!}
                {!! Form::submit('Delete this band ?', ['class' => 'btn btn-danger']) !!}
                {!! Form::close() !!}
            </div>
        </div>
        
        <hr>
    @endforeach
 
@stop
