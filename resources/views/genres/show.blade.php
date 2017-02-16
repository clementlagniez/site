@extends('layouts.master')
 
@section('content')
 
    <h1>{{ $genre->name }}</p></h1>

    <hr>
 
    <div class="row">
        <div class="col-md-6">
            <a href="{{ route('genres.index') }}" class="btn btn-info">Go back to list</a>
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
 
@stop
