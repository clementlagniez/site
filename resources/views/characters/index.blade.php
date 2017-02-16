@extends('layouts.master')
 
@section('content')
 
    <h1>Characters List</h1>
    <p class="lead">Here is the list of the Characters registered in the database. <a href="{{ route('characters.create') }}">Add a new one ?</a></p>
    <hr>
 
    @if(Session::has('flash_message'))
        <div class="alert alert-success fade in">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            {{ Session::get('flash_message') }}
        </div>
    @endif
 
    @foreach($characters as $character)
        <h3>{{ $character->name }} @if($character->lastname != NULL){{ $character->lastname }}</p>
        @endif</h3>

        @if($character->known_as != NULL)
            <p><u><b>Known as :</b></u> {{ $character->known_as }}</p>
        @endif

        @if($character->age != NULL)
            <p><u><b>Age :</b></u> {{ $character->age }}</p>
        @endif
 
        <div class="row">
            <div class="col-md-6">
                <a href="{{ route('characters.show', $character->id) }}" class="btn btn-info">Show Character</a>
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
        
        <hr>
    @endforeach
 
@stop
