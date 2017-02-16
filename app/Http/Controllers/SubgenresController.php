<?php

namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Subgenre;
use Session;

class SubgenresController extends Controller
{
    public function hub()
    {
        return view('pages.hub');
    }

    public function index()
	{
    	$subgenres = Subgenre::latest('updated_at')->get();
 
    	return view('subgenres.index', ['subgenres'=>$subgenres]);
	}

	public function show($id)
	{
	    $subgenre = Subgenre::findOrFail($id);
	 
	    return view('subgenres.show', compact('subgenre'));
	}

	public function create()
	{
	    return view('subgenres.create');
	}

	public function store(Request $request)
	{	
	    $this->validate($request, [
	        'name' => 'required',
	    ]);
	 
	    $input = $request->all();
	 
	    Subgenre::create($input);
	 
	    Session::flash('flash_message', 'Subgenre successfully added !');
	 
	    return redirect()->route('subgenres.index');
	}

	public function edit($id)
	{
	    $subgenre = Subgenre::findOrFail($id);
	 
	    return view('subgenres.edit', compact('subgenre'));
	}

	public function update(Request $request, $id)
	{
    	$subgenre = Subgenre::findOrFail($id);
 
	    $this->validate($request, [
	        'name' => 'required',
	    ]);
	 
	    $input = $request->all();
	 
	    $subgenre->fill($input)->save();
	 
	    Session::flash('flash_message', 'Subgenre successfully modified !');
	 
	    return redirect()->route('subgenres.index');
	}

	public function destroy($id)
	{
	    $subgenre = Subgenre::findOrFail($id);
	 
	    $subgenre->delete();
	 
	    Session::flash('flash_message', 'Subgenre successfully deleted !');
	 
	    return redirect()->route('subgenres.index');
	}
}
