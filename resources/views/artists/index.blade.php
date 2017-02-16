@extends('layouts.master')
 
@section('content')
 
    <h1>Artists List</h1>
    <p class="lead">Here is the list of the Artists registered in the database. <a href="{{ route('artists.create') }}">Add a new one ?</a></p>
    <hr>
 
    @if(Session::has('flash_message'))
        <div class="alert alert-success fade in">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            {{ Session::get('flash_message') }}
        </div>
    @endif
 
    @foreach($artists as $artist)
        <h3>{{ $artist->name }} {{ $artist->lastname }}</h3>

        @if($artist->known_as != NULL)
            <p><u><b>Known as :</b></u> {{ $artist->known_as }}</p>
        @endif

        <p><u><b>Birth :</b></u> {{ $artist->birth }}</p>

        @if($artist->death != NULL)
            <p><u><b>Death :</b></u> {{ $artist->death }}</p>
        @endif
 
        <div class="row">
            <div class="col-md-6">
                <a href="{{ route('artists.show', $artist->id) }}" class="btn btn-info">Show Artist</a>
                <a href="{{ route('artists.edit', $artist->id) }}" class="btn btn-primary">Edit Artist</a>
            </div>
            <div class="col-md-6 text-right">
                {!! Form::open([
                    'method' => 'DELETE',
                    'route' => ['artists.destroy', $artist->id]
                ]) !!}
                {!! Form::submit('Delete this artist ?', ['class' => 'btn btn-danger']) !!}
                {!! Form::close() !!}
            </div>
        </div>
        
        <hr>
    @endforeach
 
@stop
