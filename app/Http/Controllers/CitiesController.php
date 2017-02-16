<?php

namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\City;
use Session;

class CitiesController extends Controller
{
    public function hub()
    {
        return view('pages.hub');
    }

    public function index()
	{
    	$cities = City::latest('updated_at')->get();
 
    	return view('cities.index', ['cities'=>$cities]);
	}

	public function show($id)
	{
	    $city = City::findOrFail($id);
	 
	    return view('cities.show', compact('city'));
	}

	public function create()
	{
	    return view('cities.create');
	}

	public function store(Request $request)
	{	
	    $this->validate($request, [
	        'name' => 'required',
	    ]);
	 
	    $input = $request->all();
	 
	    City::create($input);
	 
	    Session::flash('flash_message', 'City successfully added !');
	 
	    return redirect()->route('cities.index');
	}

	public function edit($id)
	{
	    $city = City::findOrFail($id);
	 
	    return view('cities.edit', compact('city'));
	}

	public function update(Request $request, $id)
	{
    	$city = City::findOrFail($id);
 
	    $this->validate($request, [
	        'name' => 'required',
	    ]);
	 
	    $input = $request->all();
	 
	    $city->fill($input)->save();
	 
	    Session::flash('flash_message', 'City successfully modified !');
	 
	    return redirect()->route('cities.index');
	}

	public function destroy($id)
	{
	    $city = City::findOrFail($id);
	 
	    $city->delete();
	 
	    Session::flash('flash_message', 'City successfully deleted !');
	 
	    return redirect()->route('cities.index');
	}
}
