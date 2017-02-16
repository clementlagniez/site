<?php

namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Artist;
use Session;

class ArtistsController extends Controller
{
    public function hub()
    {
        return view('pages.hub');
    }

    public function index()
	{
    	$artists = Artist::latest('updated_at')->get();
 
    	return view('artists.index', ['artists'=>$artists]);
	}

	public function show($id)
	{
	    $artist = Artist::findOrFail($id);
	 
	    return view('artists.show', compact('artist'));
	}

	public function create()
	{
	    return view('artists.create');
	}

	public function store(Request $request)
	{	
	    $this->validate($request, [
	        'name' => 'required',
	        'known_as' => 'nullable',
	        'lastname' => 'nullable',
	        'birth' => 'nullable',
	        'death' => 'nullable',
	    ]);
	 
	    $input = $request->all();
	 
	    Artist::create($input);
	 
	    Session::flash('flash_message', 'Artist successfully added !');
	 
	    return redirect()->route('artists.index');
	}

	public function edit($id)
	{
	    $artist = Artist::findOrFail($id);
	 
	    return view('artists.edit', compact('artist'));
	}

	public function update(Request $request, $id)
	{
    	$artist = Artist::findOrFail($id);
 
	    $this->validate($request, [
	        'name' => 'required',
	        'known_as' => 'nullable',
	        'lastname' => 'nullable',
	        'birth' => 'nullable',
	        'death' => 'nullable',
	    ]);
	 
	    $input = $request->all();
	 
	    $artist->fill($input)->save();
	 
	    Session::flash('flash_message', 'Artist successfully modified !');
	 
	    return redirect()->route('artists.index');
	}

	public function destroy($id)
	{
	    $artist = Artist::findOrFail($id);
	 
	    $artist->delete();
	 
	    Session::flash('flash_message', 'Artist successfully deleted !');
	 
	    return redirect()->route('artists.index');
	}
}
