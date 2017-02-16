<h3>{{ $movie->name }}</p></h3>

@if($movie->release != NULL)
    <p><u><b>Release :</b></u> {{ $movie->release }}</p>
@endif

@if($movie->year != NULL)
    <p><u><b>Year :</b></u> {{ $movie->year }}</p>
@endif

@if($movie->duration != NULL)
    <p><u><b>Duration :</b></u> {{ $movie->duration }}</p>
@endif

<div class="row">
    <div class="col-md-6">
        <a href="{{ route('movies.show', $movie->id) }}" class="btn btn-info">Show Movie</a>
        <a href="{{ route('movies.edit', $movie->id) }}" class="btn btn-primary">Edit Movie</a>
    </div>
    <div class="col-md-6 text-right">
        {!! Form::open([
            'method' => 'DELETE',
            'route' => ['movies.destroy', $movie->id]
        ]) !!}
        {!! Form::submit('Delete this movie ?', ['class' => 'btn btn-danger']) !!}
        {!! Form::close() !!}
    </div>
</div>

<hr>