@extends('layouts.master')
 
@section('content')
 
    <h1>{{ $nationality->name }}</p></h1>

    <hr>
 
    <div class="row">
        <div class="col-md-6">
            <a href="{{ route('nationalities.index') }}" class="btn btn-info">Go back to list</a>
            <a href="{{ route('nationalities.edit', $nationality->id) }}" class="btn btn-primary">Edit Nationality</a>
        </div>
        <div class="col-md-6 text-right">
                {!! Form::open([
                    'method' => 'DELETE',
                    'route' => ['nationalities.destroy', $nationality->id]
                ]) !!}
                {!! Form::submit('Delete this nationality ?', ['class' => 'btn btn-danger']) !!}
                {!! Form::close() !!}
        </div>
    </div>
 
@stop
