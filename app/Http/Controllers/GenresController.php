<?php

namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Genre;
use Session;

class GenresController extends Controller
{
    public function hub()
    {
        return view('pages.hub');
    }

    public function index()
	{
    	$genres = Genre::latest('updated_at')->get();
 
    	return view('genres.index', ['genres'=>$genres]);
	}

	public function show($id)
	{
	    $genre = Genre::findOrFail($id);
	 
	    return view('genres.show', compact('genre'));
	}

	public function create()
	{
	    return view('genres.create');
	}

	public function store(Request $request)
	{	
	    $this->validate($request, [
	        'name' => 'required',
	    ]);
	 
	    $input = $request->all();
	 
	    Genre::create($input);
	 
	    Session::flash('flash_message', 'Genre successfully added !');
	 
	    return redirect()->route('genres.index');
	}

	public function edit($id)
	{
	    $genre = Genre::findOrFail($id);
	 
	    return view('genres.edit', compact('genre'));
	}

	public function update(Request $request, $id)
	{
    	$genre = Genre::findOrFail($id);
 
	    $this->validate($request, [
	        'name' => 'required',
	    ]);
	 
	    $input = $request->all();
	 
	    $genre->fill($input)->save();
	 
	    Session::flash('flash_message', 'Genre successfully modified !');
	 
	    return redirect()->route('genres.index');
	}

	public function destroy($id)
	{
	    $genre = Genre::findOrFail($id);
	 
	    $genre->delete();
	 
	    Session::flash('flash_message', 'Genre successfully deleted !');
	 
	    return redirect()->route('genres.index');
	}
}
