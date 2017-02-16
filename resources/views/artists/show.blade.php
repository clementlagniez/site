@extends('layouts.master')
 
@section('content')
 
    <h1>{{ $artist->name }} {{ $artist->lastname }}</h1>

        @if($artist->known_as != NULL)
            <p><u><b>Known as :</b></u> {{ $artist->known_as }}</p>
        @endif

        @if($artist->birth != NULL)
            <p><u><b>Birth :</b></u> {{ $artist->birth }}</p>
        @endif

        @if($artist->death != NULL)
            <p><u><b>Death :</b></u> {{ $artist->death }}</p>
        @endif
        
    <hr>
 
    <div class="row">
        <div class="col-md-6">
            <a href="{{ route('artists.index') }}" class="btn btn-info">Go back to list</a>
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
 
@stop
