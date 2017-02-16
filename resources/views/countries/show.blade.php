@extends('layouts.master')
 
@section('content')
 
    <h1>{{ $country->name }}</p></h1>

    <hr>
 
    <div class="row">
        <div class="col-md-6">
            <a href="{{ route('countries.index') }}" class="btn btn-info">Go back to list</a>
            <a href="{{ route('countries.edit', $country->id) }}" class="btn btn-primary">Edit Country</a>
        </div>
        <div class="col-md-6 text-right">
                {!! Form::open([
                    'method' => 'DELETE',
                    'route' => ['countries.destroy', $country->id]
                ]) !!}
                {!! Form::submit('Delete this country ?', ['class' => 'btn btn-danger']) !!}
                {!! Form::close() !!}
        </div>
    </div>
 
@stop
