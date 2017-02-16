@extends('layouts.master')
 
@section('content')
 
    <h1>{{ $band->name }}</h1>

        @if($band->formed != NULL)
            <p><u><b>Formed in :</b></u> {{ $band->formed }}</p>
        @endif

    <hr>
 
    <div class="row">
        <div class="col-md-6">
            <a href="{{ route('bands.index') }}" class="btn btn-info">Go back to list</a>
            <a href="{{ route('bands.edit', $band->id) }}" class="btn btn-primary">Edit Band</a>
        </div>
        <div class="col-md-6 text-right">
                {!! Form::open([
                    'method' => 'DELETE',
                    'route' => ['bands.destroy', $band->id]
                ]) !!}
                {!! Form::submit('Delete this band ?', ['class' => 'btn btn-danger']) !!}
                {!! Form::close() !!}
        </div>
    </div>
 
@stop
