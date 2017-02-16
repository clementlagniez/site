@extends('layouts.master')
 
@section('content')
 
    <h1>{{ $album->name }}</h1>

        @if($album->release != NULL)
            <p><u><b>Released :</b></u> {{ $album->release }}</p>
        @endif

        @if($album->duration != NULL)
            <p><u><b>Duration :</b></u> {{ $album->duration }}</p>
        @endif

    <hr>
 
    <div class="row">
        <div class="col-md-6">
            <a href="{{ route('albums.index') }}" class="btn btn-info">Go back to list</a>
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
 
@stop
