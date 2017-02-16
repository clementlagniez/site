<?php

namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Album;
use Session;

class AlbumsController extends Controller
{
    public function hub()
    {
        return view('pages.hub');
    }

    public function index()
	{
    	$albums = Album::latest('updated_at')->get();
 
    	return view('albums.index', ['albums'=>$albums]);
	}

	public function show($id)
	{
	    $album = Album::findOrFail($id);
	 
	    return view('albums.show', compact('album'));
	}

	public function create()
	{
	    return view('albums.create');
	}

	public function store(Request $request)
	{	
	    $this->validate($request, [
	        'name' => 'required',
	        'duration' => 'nullable',
	        'release' => 'nullable',
	    ]);
	 
	    $input = $request->all();
	 
	    Album::create($input);
	 
	    Session::flash('flash_message', 'Album successfully added !');
	 
	    return redirect()->route('albums.index');
	}

	public function edit($id)
	{
	    $album = Album::findOrFail($id);
	 
	    return view('albums.edit', compact('album'));
	}

	public function update(Request $request, $id)
	{
    	$album = Album::findOrFail($id);
 
	    $this->validate($request, [
	        'name' => 'required',
	        'duration' => 'nullable',
	        'release' => 'nullable',
	    ]);
	 
	    $input = $request->all();
	 
	    $album->fill($input)->save();
	 
	    Session::flash('flash_message', 'Album successfully modified !');
	 
	    return redirect()->route('albums.index');
	}

	public function destroy($id)
	{
	    $album = Album::findOrFail($id);
	 
	    $album->delete();
	 
	    Session::flash('flash_message', 'Album successfully deleted !');
	 
	    return redirect()->route('albums.index');
	}
}
