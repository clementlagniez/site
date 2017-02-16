@extends('layouts.master')
 
@section('content')
 
    <h1>Add a new Book</h1>
    <p class="lead">Add the required informations below</p>
    <hr>
    {!! Form::open([
        'route' => 'books.store'
    ]) !!}
 
    <div class="form-group">
        {!! Form::label('name', 'Book\'s name :', ['class' => 'control-label']) !!}
        {!! Form::text('name', null, ['class' => 'form-control']) !!}
    </div>
 
    <div class="form-group">
        {!! Form::label('nopages', 'Number of pages (optional):', ['class' => 'control-label']) !!}
        {!! Form::textarea('nopages', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('release', 'Released in (optional):', ['class' => 'control-label']) !!}
        {!! Form::textarea('release', null, ['class' => 'form-control']) !!}
    </div>

    {!! Form::submit('Create New Book', ['class' => 'btn btn-primary']) !!}
 
    {!! Form::close() !!}
@stop