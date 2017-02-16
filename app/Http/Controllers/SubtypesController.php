<?php

namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Subtype;
use Session;

class SubtypesController extends Controller
{
    public function hub()
    {
        return view('pages.hub');
    }

    public function index()
	{
    	$subtypes = Subtype::latest('updated_at')->get();
 
    	return view('subtypes.index', ['subtypes'=>$subtypes]);
	}

	public function show($id)
	{
	    $subtype = Subtype::findOrFail($id);
	 
	    return view('subtypes.show', compact('subtype'));
	}

	public function create()
	{
	    return view('subtypes.create');
	}

	public function store(Request $request)
	{	
	    $this->validate($request, [
	        'name' => 'required',
	    ]);
	 
	    $input = $request->all();
	 
	    Subtype::create($input);
	 
	    Session::flash('flash_message', 'Subtype successfully added !');
	 
	    return redirect()->route('subtypes.index');
	}

	public function edit($id)
	{
	    $subtype = Subtype::findOrFail($id);
	 
	    return view('subtypes.edit', compact('subtype'));
	}

	public function update(Request $request, $id)
	{
    	$subtype = Subtype::findOrFail($id);
 
	    $this->validate($request, [
	        'name' => 'required',
	    ]);
	 
	    $input = $request->all();
	 
	    $subtype->fill($input)->save();
	 
	    Session::flash('flash_message', 'Subtype successfully modified !');
	 
	    return redirect()->route('subtypes.index');
	}

	public function destroy($id)
	{
	    $subtype = Subtype::findOrFail($id);
	 
	    $subtype->delete();
	 
	    Session::flash('flash_message', 'Subtype successfully deleted !');
	 
	    return redirect()->route('subtypes.index');
	}
}
