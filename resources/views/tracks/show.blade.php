@extends('layouts.master')
 
@section('content')
 
    <h1>{{ $track->number }}</p></h1>

    <hr>
 
    <div class="row">
        <div class="col-md-6">
            <a href="{{ route('tracks.index') }}" class="btn btn-info">Go back to list</a>
            <a href="{{ route('tracks.edit', $track->id) }}" class="btn btn-primary">Edit Track</a>
        </div>
        <div class="col-md-6 text-right">
                {!! Form::open([
                    'method' => 'DELETE',
                    'route' => ['tracks.destroy', $track->id]
                ]) !!}
                {!! Form::submit('Delete this track ?', ['class' => 'btn btn-danger']) !!}
                {!! Form::close() !!}
        </div>
    </div>
 
@stop
