<?php

namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Movie;
use Session;

class MoviesController extends Controller
{
    public function hub()
    {
        return view('pages.hub');
    }

    public function index()
	{
    	$movies = Movie::latest('updated_at')->get();
 
    	return view('movies.index', ['movies'=>$movies]);
	}

	public function show($id)
	{
	    $movie = Movie::findOrFail($id);
	 
	    return view('movies.show', compact('movie'));
	}

	public function create()
	{
	    return view('movies.create');
	}

	public function store(Request $request)
	{	
	    $this->validate($request, [
	        'name' => 'required',
	        'release' => 'nullable',
	        'year' => 'nullable',
	        'duration' => 'nullable',
	    ]);
	 
	    $input = $request->all();
	 
	    Movie::create($input);
	 
	    Session::flash('flash_message', 'Movie successfully added !');
	 
	    return redirect()->route('movies.index');
	}

	public function edit($id)
	{
	    $movie = Movie::findOrFail($id);
	 
	    return view('movies.edit', compact('movie'));
	}

	public function update(Request $request, $id)
	{
    	$movie = Movie::findOrFail($id);
 
	    $this->validate($request, [
	        'name' => 'required',
	        'release' => 'nullable',
	        'year' => 'nullable',
	        'duration' => 'nullable',
	    ]);
	 
	    $input = $request->all();
	 
	    $movie->fill($input)->save();
	 
	    Session::flash('flash_message', 'Movie successfully modified !');
	 
	    return redirect()->route('movies.index');
	}

	public function destroy($id)
	{
	    $movie = Movie::findOrFail($id);
	 
	    $movie->delete();
	 
	    Session::flash('flash_message', 'Movie successfully deleted !');
	 
	    return redirect()->route('movies.index');
	}
}
