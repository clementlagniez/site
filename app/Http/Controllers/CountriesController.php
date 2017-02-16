<?php

namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Country;
use Session;

class CountriesController extends Controller
{
    public function hub()
    {
        return view('pages.hub');
    }

    public function index()
	{
    	$countries = Country::latest('updated_at')->get();
 
    	return view('countries.index', ['countries'=>$countries]);
	}

	public function show($id)
	{
	    $country = Country::findOrFail($id);
	 
	    return view('countries.show', compact('country'));
	}

	public function create()
	{
	    return view('countries.create');
	}

	public function store(Request $request)
	{	
	    $this->validate($request, [
	        'name' => 'required',
	    ]);
	 
	    $input = $request->all();
	 
	    Country::create($input);
	 
	    Session::flash('flash_message', 'Country successfully added !');
	 
	    return redirect()->route('countries.index');
	}

	public function edit($id)
	{
	    $country = Country::findOrFail($id);
	 
	    return view('countries.edit', compact('country'));
	}

	public function update(Request $request, $id)
	{
    	$country = Country::findOrFail($id);
 
	    $this->validate($request, [
	        'name' => 'required',
	    ]);
	 
	    $input = $request->all();
	 
	    $country->fill($input)->save();
	 
	    Session::flash('flash_message', 'Country successfully modified !');
	 
	    return redirect()->route('countries.index');
	}

	public function destroy($id)
	{
	    $country = Country::findOrFail($id);
	 
	    $country->delete();
	 
	    Session::flash('flash_message', 'Country successfully deleted !');
	 
	    return redirect()->route('countries.index');
	}
}
