@extends('layouts.master')
 
@section('content')
 
    <h1>{{ $city->name }}</p></h1>

    <hr>
 
    <div class="row">
        <div class="col-md-6">
            <a href="{{ route('cities.index') }}" class="btn btn-info">Go back to list</a>
            <a href="{{ route('cities.edit', $city->id) }}" class="btn btn-primary">Edit City</a>
        </div>
        <div class="col-md-6 text-right">
                {!! Form::open([
                    'method' => 'DELETE',
                    'route' => ['cities.destroy', $city->id]
                ]) !!}
                {!! Form::submit('Delete this city ?', ['class' => 'btn btn-danger']) !!}
                {!! Form::close() !!}
        </div>
    </div>
 
@stop
