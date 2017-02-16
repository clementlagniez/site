@extends('layouts.master')
 
@section('content')
 
    <h1>{{ $subtype->name }}</p></h1>

    <hr>
 
    <div class="row">
        <div class="col-md-6">
            <a href="{{ route('subtypes.index') }}" class="btn btn-info">Go back to list</a>
            <a href="{{ route('subtypes.edit', $subtype->id) }}" class="btn btn-primary">Edit Subtype</a>
        </div>
        <div class="col-md-6 text-right">
                {!! Form::open([
                    'method' => 'DELETE',
                    'route' => ['subtypes.destroy', $subtype->id]
                ]) !!}
                {!! Form::submit('Delete this subtype ?', ['class' => 'btn btn-danger']) !!}
                {!! Form::close() !!}
        </div>
    </div>
 
@stop
