@extends('layouts.master')
 
@section('content')
 
    <h1>{{ $book->name }}</h1>

        @if($book->release != NULL)
            <p><u><b>Released :</b></u> {{ $book->release }}</p>
        @endif

        @if($book->nopages != NULL)
            <p><u><b>N° of pages :</b></u> {{ $book->nopages }}</p>
        @endif

    <hr>
 
    <div class="row">
        <div class="col-md-6">
            <a href="{{ route('books.index') }}" class="btn btn-info">Go back to list</a>
            <a href="{{ route('books.edit', $book->id) }}" class="btn btn-primary">Edit Book</a>
        </div>
        <div class="col-md-6 text-right">
                {!! Form::open([
                    'method' => 'DELETE',
                    'route' => ['books.destroy', $book->id]
                ]) !!}
                {!! Form::submit('Delete this book ?', ['class' => 'btn btn-danger']) !!}
                {!! Form::close() !!}
        </div>
    </div>
 
@stop
