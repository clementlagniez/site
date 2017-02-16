<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    	Model::unguard();

        $this->call(AlbumsTableSeeder::class);
        $this->call(ArtistsTableSeeder::class);
        $this->call(BandsTableSeeder::class);
        $this->call(BooksTableSeeder::class);
        $this->call(CharactersTableSeeder::class);
        $this->call(CitiesTableSeeder::class);
        $this->call(CountriesTableSeeder::class);
        $this->call(GenresTableSeeder::class);
        $this->call(MoviesTableSeeder::class);
        $this->call(NationalitiesTableSeeder::class);
        $this->call(SongsTableSeeder::class);
        $this->call(StatesTableSeeder::class);
        $this->call(TracksTableSeeder::class);
        $this->call(TypesTableSeeder::class);
        $this->call(SubgenresTableSeeder::class);
        $this->call(SubtypesTableSeeder::class);
        $this->call(AlbumsSongsTableSeeder::class);
        $this->call(ArtistsAlbumsTableSeeder::class);
        $this->call(BandsArtistsTableSeeder::class);
        $this->call(BooksCharactersTableSeeder::class);
        $this->call(GenresAlbumsTableSeeder::class);
        $this->call(GenresBandsTableSeeder::class);
        $this->call(GenresBooksTableSeeder::class);
        $this->call(GenresMoviesTableSeeder::class);
        $this->call(MoviesArtistsTableSeeder::class);
        $this->call(MoviesCitiesTableSeeder::class);
        $this->call(SongsTracksTableSeeder::class);
        $this->call(SubtypesArtistsTableSeeder::class);

        Model::reguard();
    }
}
