@extends('layouts.master')
 
@section('content')
 
    <h1>Books List</h1>
    <p class="lead">Here is the list of the Books registered in the database. <a href="{{ route('books.create') }}">Add a new one ?</a></p>
    <hr>
 
    @if(Session::has('flash_message'))
        <div class="alert alert-success fade in">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            {{ Session::get('flash_message') }}
        </div>
    @endif
 
    @foreach($books as $book)
        <h3>{{ $book->name }}</h3>

        @if($book->release != NULL)
            <p><u><b>Released :</b></u> {{ $book->release }}</p>
        @endif

        @if($book->nopages != NULL)
            <p><u><b>N° of pages :</b></u> {{ $book->nopages }}</p>
        @endif
 
        <div class="row">
            <div class="col-md-6">
                <a href="{{ route('books.show', $book->id) }}" class="btn btn-info">Show Book</a>
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
        
        <hr>
    @endforeach
 
@stop
