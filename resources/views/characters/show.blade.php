@extends('layouts.master')
 
@section('content')
 
    <h1>{{ $character->name }} @if($character->lastname != NULL) {{ $character->lastname }}</p> @endif</h1>

        @if($character->known_as != NULL)
            <p><u><b>Known as :</b></u> {{ $character->known_as }}</p>
        @endif

        @if($character->age != NULL)
            <p><u><b>Age :</b></u> {{ $character->age }}</p>
        @endif

    <hr>
 
    <div class="row">
        <div class="col-md-6">
            <a href="{{ route('characters.index') }}" class="btn btn-info">Go back to list</a>
            <a href="{{ route('characters.edit', $character->id) }}" class="btn btn-primary">Edit Character</a>
        </div>
        <div class="col-md-6 text-right">
                {!! Form::open([
                    'method' => 'DELETE',
                    'route' => ['characters.destroy', $character->id]
                ]) !!}
                {!! Form::submit('Delete this character ?', ['class' => 'btn btn-danger']) !!}
                {!! Form::close() !!}
        </div>
    </div>
 
@stop
