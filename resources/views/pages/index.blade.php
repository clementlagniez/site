@extends('layouts.master')
 
@section('content')
 
    <h1><u>Index</u></h1>
    <p class="lead">
        This database is for an informative purpose only.</br>
        From here you can reach the different sections of the site to add or update informations contained in the database.</br></br>

        <i>May be changed for a "category" pattern soon (ex : Craft for books, movies, etc | Location for countries, cities, etc | Living for artists, characters, bands, etc)</i></br></br>

        <u>Albums</u> : <a href="{{ route('albums.index') }}" class="btn btn-info">Reach Albums index</a> </br>
        <u>Artists</u> : <a href="{{ route('artists.index') }}" class="btn btn-info">Reach Artists index</a> </br>
        <u>Bands</u> : <a href="{{ route('bands.index') }}" class="btn btn-info">Reach Bands index</a> </br>
        <u>Books</u> : <a href="{{ route('books.index') }}" class="btn btn-info">Reach Books index</a> </br>
        <u>Characters</u> : <a href="{{ route('characters.index') }}" class="btn btn-info">Reach Characters index</a> </br>
        <u>Cities</u> : <a href="{{ route('cities.index') }}" class="btn btn-info">Reach Cities index</a> </br>
        <u>Countries</u> : <a href="{{ route('countries.index') }}" class="btn btn-info">Reach Countries index</a> </br>
        <u>Genres</u> : <a href="{{ route('genres.index') }}" class="btn btn-info">Reach Genres index</a> </br>
        <u>Instruments</u> : <a href="{{ route('instruments.index') }}" class="btn btn-info">Reach Instruments index</a> </br>
        <u>Movies</u> : <a href="{{ route('movies.index') }}" class="btn btn-info">Reach Movies index</a> </br>
        <u>Nationalities</u> : <a href="{{ route('nationalities.index') }}" class="btn btn-info">Reach Nationalities index</a> </br>
        <u>Songs</u> : <a href="{{ route('songs.index') }}" class="btn btn-info">Reach Songs index</a> </br>
        <u>States</u> : <a href="{{ route('states.index') }}" class="btn btn-info">Reach States index</a> </br>
        <u>Subgenres</u> : <a href="{{ route('subgenres.index') }}" class="btn btn-info">Reach Subgenres index</a> </br>
        <u>Subtypes</u> : <a href="{{ route('subtypes.index') }}" class="btn btn-info">Reach Subtypes index</a> </br>
        <u>Tracks</u> : <a href="{{ route('tracks.index') }}" class="btn btn-info">Reach Tracks index</a> </br>
        <u>Types</u> : <a href="{{ route('types.index') }}" class="btn btn-info">Reach Types index</a> </br>

    </p>
    <hr>
 
@stop