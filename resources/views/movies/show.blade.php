@extends('layouts.master')
 
@section('content')
 
    <h1>{{ $movie->name }}</p></h1>

        @if($movie->duration != NULL)
            <p><u><b>Duration :</b></u> {{ $movie->duration }}</p>
        @endif

    <hr>
 
    <div class="row">
        <div class="col-md-6">
            <a href="{{ route('movies.index') }}" class="btn btn-info">Go back to list</a>
            <a href="{{ route('movies.edit', $movie->id) }}" class="btn btn-primary">Edit Movie</a>
        </div>
        <div class="col-md-6 text-right">
                {!! Form::open([
                    'method' => 'DELETE',
                    'route' => ['movies.destroy', $movie->id]
                ]) !!}
                {!! Form::submit('Delete this movie ?', ['class' => 'btn btn-danger']) !!}
                {!! Form::close() !!}
        </div>
    </div>
 
@stop
