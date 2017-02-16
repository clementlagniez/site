<?php

namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Nationality;
use Session;

class NationalitiesController extends Controller
{
    public function hub()
    {
        return view('pages.hub');
    }

    public function index()
	{
    	$nationalities = Nationality::latest('updated_at')->get();
 
    	return view('nationalities.index', ['nationalities'=>$nationalities]);
	}

	public function show($id)
	{
	    $nationality = Nationality::findOrFail($id);
	 
	    return view('nationalities.show', compact('nationality'));
	}

	public function create()
	{
	    return view('nationalities.create');
	}

	public function store(Request $request)
	{	
	    $this->validate($request, [
	        'name' => 'required',
	    ]);
	 
	    $input = $request->all();
	 
	    Nationality::create($input);
	 
	    Session::flash('flash_message', 'Nationality successfully added !');
	 
	    return redirect()->route('nationalities.index');
	}

	public function edit($id)
	{
	    $nationality = Nationality::findOrFail($id);
	 
	    return view('nationalities.edit', compact('nationality'));
	}

	public function update(Request $request, $id)
	{
    	$nationality = Nationality::findOrFail($id);
 
	    $this->validate($request, [
	        'name' => 'required',
	    ]);
	 
	    $input = $request->all();
	 
	    $nationality->fill($input)->save();
	 
	    Session::flash('flash_message', 'Nationality successfully modified !');
	 
	    return redirect()->route('nationalities.index');
	}

	public function destroy($id)
	{
	    $nationality = Nationality::findOrFail($id);
	 
	    $nationality->delete();
	 
	    Session::flash('flash_message', 'Nationality successfully deleted !');
	 
	    return redirect()->route('nationalities.index');
	}
}
