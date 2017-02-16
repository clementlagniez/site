@extends('layouts.master')
 
@section('content')
 
    <h1>{{ $song->name }}</h1>

        @if($song->duration != NULL)
            <p><u><b>Duration :</b></u> {{ $song->duration }}</p>
        @endif

    <hr>
 
    <div class="row">
        <div class="col-md-6">
            <a href="{{ route('songs.index') }}" class="btn btn-info">Go back to list</a>
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
 
@stop
