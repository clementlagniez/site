<?php

namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\State;
use Session;

class StatesController extends Controller
{
    public function hub()
    {
        return view('pages.hub');
    }

    public function index()
	{
    	$states = State::latest('updated_at')->get();
 
    	return view('states.index', ['states'=>$states]);
	}

	public function show($id)
	{
	    $state = State::findOrFail($id);
	 
	    return view('states.show', compact('state'));
	}

	public function create()
	{
	    return view('states.create');
	}

	public function store(Request $request)
	{	
	    $this->validate($request, [
	        'name' => 'required',
	    ]);
	 
	    $input = $request->all();
	 
	    State::create($input);
	 
	    Session::flash('flash_message', 'State successfully added !');
	 
	    return redirect()->route('states.index');
	}

	public function edit($id)
	{
	    $state = State::findOrFail($id);
	 
	    return view('states.edit', compact('state'));
	}

	public function update(Request $request, $id)
	{
    	$state = State::findOrFail($id);
 
	    $this->validate($request, [
	        'name' => 'required',
	    ]);
	 
	    $input = $request->all();
	 
	    $state->fill($input)->save();
	 
	    Session::flash('flash_message', 'State successfully modified !');
	 
	    return redirect()->route('states.index');
	}

	public function destroy($id)
	{
	    $state = State::findOrFail($id);
	 
	    $state->delete();
	 
	    Session::flash('flash_message', 'State successfully deleted !');
	 
	    return redirect()->route('states.index');
	}
}
