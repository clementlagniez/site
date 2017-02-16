<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateForeignTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::table('books_characters', function (Blueprint $table) {
            $table->foreign('book_id')->references('id')->on('books');
            $table->foreign('character_id')->references('id')->on('characters');
        });

        Schema::table('movies_artists', function (Blueprint $table) {
            $table->foreign('movie_id')->references('id')->on('movies');
            $table->foreign('artist_id')->references('id')->on('artists');
        });

        Schema::table('movies_cities', function (Blueprint $table) {
            $table->foreign('movie_id')->references('id')->on('movies');
            $table->foreign('city_id')->references('id')->on('cities');
        });

        Schema::table('subtypes_artists', function (Blueprint $table) {
            $table->foreign('subtype_id')->references('id')->on('subtypes');
            $table->foreign('artist_id')->references('id')->on('artists');
        });

        Schema::table('bands_artists', function (Blueprint $table) {
            $table->foreign('band_id')->references('id')->on('bands');
            $table->foreign('artist_id')->references('id')->on('artists');
        });

        Schema::table('genres_bands', function (Blueprint $table) {
            $table->foreign('genre_id')->references('id')->on('genres');
            $table->foreign('band_id')->references('id')->on('bands');
        });

        Schema::table('genres_movies', function (Blueprint $table) {
            $table->foreign('genre_id')->references('id')->on('genres');
            $table->foreign('movie_id')->references('id')->on('movies');
        });

        Schema::table('genres_books', function (Blueprint $table) {
            $table->foreign('genre_id')->references('id')->on('genres');
            $table->foreign('book_id')->references('id')->on('books');
        });

        Schema::table('artists_albums', function (Blueprint $table) {
            $table->foreign('artist_id')->references('id')->on('artists');
            $table->foreign('album_id')->references('id')->on('albums');
        });

        Schema::table('genres_albums', function (Blueprint $table) {
            $table->foreign('genre_id')->references('id')->on('genres');
            $table->foreign('album_id')->references('id')->on('albums');
        });

        Schema::table('albums_songs', function (Blueprint $table) {
            $table->foreign('album_id')->references('id')->on('albums');
            $table->foreign('song_id')->references('id')->on('songs');
        });

        Schema::table('songs_tracks', function (Blueprint $table) {
            $table->foreign('song_id')->references('id')->on('songs');
            $table->foreign('track_id')->references('id')->on('tracks');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        Schema::dropIfExists('books_characters');
        Schema::dropIfExists('movies_artists');
        Schema::dropIfExists('movies cities');
        Schema::dropIfExists('subtypes_artists');
        Schema::dropIfExists('bands_artists');
        Schema::dropIfExists('genres_bands');
        Schema::dropIfExists('genres_movies');
        Schema::dropIfExists('genres_books');
        Schema::dropIfExists('artists_albums');
        Schema::dropIfExists('genres_albums');
        Schema::dropIfExists('albums_songs');
        Schema::dropIfExists('songs_tracks');
    }
}
