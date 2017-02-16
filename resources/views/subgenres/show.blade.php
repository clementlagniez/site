@extends('layouts.master')
 
@section('content')
 
    <h1>{{ $subgenre->name }}</p></h1>

    <hr>
 
    <div class="row">
        <div class="col-md-6">
            <a href="{{ route('subgenres.index') }}" class="btn btn-info">Go back to list</a>
            <a href="{{ route('subgenres.edit', $subgenre->id) }}" class="btn btn-primary">Edit Subgenre</a>
        </div>
        <div class="col-md-6 text-right">
                {!! Form::open([
                    'method' => 'DELETE',
                    'route' => ['subgenres.destroy', $subgenre->id]
                ]) !!}
                {!! Form::submit('Delete this subgenre ?', ['class' => 'btn btn-danger']) !!}
                {!! Form::close() !!}
        </div>
    </div>
 
@stop
