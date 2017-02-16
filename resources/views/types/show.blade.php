@extends('layouts.master')
 
@section('content')
 
    <h1>{{ $type->name }}</p></h1>

    <hr>
 
    <div class="row">
        <div class="col-md-6">
            <a href="{{ route('types.index') }}" class="btn btn-info">Go back to list</a>
            <a href="{{ route('types.edit', $type->id) }}" class="btn btn-primary">Edit Type</a>
        </div>
        <div class="col-md-6 text-right">
                {!! Form::open([
                    'method' => 'DELETE',
                    'route' => ['types.destroy', $type->id]
                ]) !!}
                {!! Form::submit('Delete this type ?', ['class' => 'btn btn-danger']) !!}
                {!! Form::close() !!}
        </div>
    </div>
 
@stop
