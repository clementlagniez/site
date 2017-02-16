<?php

namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Type;
use Session;

class TypesController extends Controller
{
    public function hub()
    {
        return view('pages.hub');
    }

    public function index()
	{
    	$types = Type::latest('updated_at')->get();
 
    	return view('types.index', ['types'=>$types]);
	}

	public function show($id)
	{
	    $type = Type::findOrFail($id);
	 
	    return view('types.show', compact('type'));
	}

	public function create()
	{
	    return view('types.create');
	}

	public function store(Request $request)
	{	
	    $this->validate($request, [
	        'name' => 'required',
	    ]);
	 
	    $input = $request->all();
	 
	    Type::create($input);
	 
	    Session::flash('flash_message', 'Type successfully added !');
	 
	    return redirect()->route('types.index');
	}

	public function edit($id)
	{
	    $type = Type::findOrFail($id);
	 
	    return view('types.edit', compact('type'));
	}

	public function update(Request $request, $id)
	{
    	$type = Type::findOrFail($id);
 
	    $this->validate($request, [
	        'name' => 'required',
	    ]);
	 
	    $input = $request->all();
	 
	    $type->fill($input)->save();
	 
	    Session::flash('flash_message', 'Type successfully modified !');
	 
	    return redirect()->route('types.index');
	}

	public function destroy($id)
	{
	    $type = Type::findOrFail($id);
	 
	    $type->delete();
	 
	    Session::flash('flash_message', 'Type successfully deleted !');
	 
	    return redirect()->route('types.index');
	}
}
