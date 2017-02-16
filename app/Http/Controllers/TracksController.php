<?php

namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Track;
use Session;

class TracksController extends Controller
{
    public function hub()
    {
        return view('pages.hub');
    }

    public function index()
	{
    	$tracks = Track::latest('updated_at')->get();
 
    	return view('tracks.index', ['tracks'=>$tracks]);
	}

	public function show($id)
	{
	    $track = Track::findOrFail($id);
	 
	    return view('tracks.show', compact('track'));
	}

	public function create()
	{
	    return view('tracks.create');
	}

	public function store(Request $request)
	{	
	    $this->validate($request, [
	        'number' => 'required',
	    ]);
	 
	    $input = $request->all();
	 
	    Track::create($input);
	 
	    Session::flash('flash_message', 'Track successfully added !');
	 
	    return redirect()->route('tracks.index');
	}

	public function edit($id)
	{
	    $track = Track::findOrFail($id);
	 
	    return view('tracks.edit', compact('track'));
	}

	public function update(Request $request, $id)
	{
    	$track = Track::findOrFail($id);
 
	    $this->validate($request, [
	        'number' => 'required',
	    ]);
	 
	    $input = $request->all();
	 
	    $track->fill($input)->save();
	 
	    Session::flash('flash_message', 'Track successfully modified !');
	 
	    return redirect()->route('tracks.index');
	}

	public function destroy($id)
	{
	    $track = Track::findOrFail($id);
	 
	    $track->delete();
	 
	    Session::flash('flash_message', 'Track successfully deleted !');
	 
	    return redirect()->route('tracks.index');
	}
}
