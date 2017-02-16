<?php

namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Song;
use Session;

class SongsController extends Controller
{
    public function hub()
    {
        return view('pages.hub');
    }

    public function index()
	{
    	$songs = Song::latest('updated_at')->get();
 
    	return view('songs.index', ['songs'=>$songs]);
	}

	public function show($id)
	{
	    $song = Song::findOrFail($id);
	 
	    return view('songs.show', compact('song'));
	}

	public function create()
	{
	    return view('songs.create');
	}

	public function store(Request $request)
	{	
	    $this->validate($request, [
	        'name' => 'required',
	        'duration' => 'nullable',
	    ]);
	 
	    $input = $request->all();
	 
	    Song::create($input);
	 
	    Session::flash('flash_message', 'Song successfully added !');
	 
	    return redirect()->route('songs.index');
	}

	public function edit($id)
	{
	    $song = Song::findOrFail($id);
	 
	    return view('songs.edit', compact('song'));
	}

	public function update(Request $request, $id)
	{
    	$song = Song::findOrFail($id);
 
	    $this->validate($request, [
	        'name' => 'required',
	        'duration' => 'nullable',
	    ]);
	 
	    $input = $request->all();
	 
	    $song->fill($input)->save();
	 
	    Session::flash('flash_message', 'Song successfully modified !');
	 
	    return redirect()->route('songs.index');
	}

	public function destroy($id)
	{
	    $song = Song::findOrFail($id);
	 
	    $song->delete();
	 
	    Session::flash('flash_message', 'Song successfully deleted !');
	 
	    return redirect()->route('songs.index');
	}
}
