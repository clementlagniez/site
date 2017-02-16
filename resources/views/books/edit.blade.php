@extends('layouts.master')
 
@section('content')
 
    <h1>Edit Book</h1>
    <p class="lead">Edit the book below. <a href="{{ route('books.index') }}">Go back to all books.</a></p>
    <hr>
 
    {!! Form::model($book, [
    'method' => 'PATCH',
    'route' => ['books.update', $book->id]
]) !!}
 
    <div class="form-group @if ($errors->get('name')): has-error @endif">
        {!! Form::label('name', 'Book\'s name :', ['class' => 'control-label']) !!}
        {!! Form::text('name', null, ['class' => 'form-control']) !!}
        @if ($errors->has('name'))
            <p class="help-block">{{ $errors->first('name') }}</p>
        @endif
    </div>
 
    <div class="form-group @if ($errors->get('nopages')): has-error @endif">
        {!! Form::label('nopages', 'Number of pages (optionnal):', ['class' => 'control-label']) !!}
        {!! Form::textarea('nopages', null, ['class' => 'form-control']) !!}
        @if ($errors->has('nopages'))
            <p class="help-block">{{ $errors->first('nopages') }}</p>
        @endif
    </div>

    <div class="form-group @if ($errors->get('release')): has-error @endif">
        {!! Form::label('release', 'Released (optionnal):', ['class' => 'control-label']) !!}
        {!! Form::text('release', null, ['class' => 'form-control']) !!}
        @if ($errors->has('release'))
            <p class="help-block">{{ $errors->first('release') }}</p>
        @endif
    </div>
 
    {!! Form::submit('Update Book', ['class' => 'btn btn-primary']) !!}
 
    {!! Form::close() !!}
 
@stop
