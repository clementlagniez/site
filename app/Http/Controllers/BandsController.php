<?php

namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Band;
use Session;

class BandsController extends Controller
{
    public function hub()
    {
        return view('pages.hub');
    }

    public function index()
	{
    	$bands = Band::latest('updated_at')->get();
 
    	return view('bands.index', ['bands'=>$bands]);
	}

	public function show($id)
	{
	    $band = Band::findOrFail($id);
	 
	    return view('bands.show', compact('band'));
	}

	public function create()
	{
	    return view('bands.create');
	}

	public function store(Request $request)
	{	
	    $this->validate($request, [
	        'name' => 'required',
	        'formed' => 'nullable',
	    ]);
	 
	    $input = $request->all();
	 
	    Band::create($input);
	 
	    Session::flash('flash_message', 'Band successfully added !');
	 
	    return redirect()->route('bands.index');
	}

	public function edit($id)
	{
	    $band = Band::findOrFail($id);
	 
	    return view('bands.edit', compact('band'));
	}

	public function update(Request $request, $id)
	{
    	$band = Band::findOrFail($id);
 
	    $this->validate($request, [
	        'name' => 'required',
	        'formed' => 'nullable',
	    ]);
	 
	    $input = $request->all();
	 
	    $band->fill($input)->save();
	 
	    Session::flash('flash_message', 'Band successfully modified !');
	 
	    return redirect()->route('bands.index');
	}

	public function destroy($id)
	{
	    $band = Band::findOrFail($id);
	 
	    $band->delete();
	 
	    Session::flash('flash_message', 'Band successfully deleted !');
	 
	    return redirect()->route('bands.index');
	}
}
