<?php

namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Character;
use Session;

class CharactersController extends Controller
{
    public function hub()
    {
        return view('pages.hub');
    }

    public function index()
	{
    	$characters = Character::latest('updated_at')->get();
 
    	return view('characters.index', ['characters'=>$characters]);
	}

	public function show($id)
	{
	    $character = Character::findOrFail($id);
	 
	    return view('characters.show', compact('character'));
	}

	public function create()
	{
	    return view('characters.create');
	}

	public function store(Request $request)
	{	
	    $this->validate($request, [
	        'name' => 'required',
	        'knonwn_as' => 'nullable',
	        'lastname' => 'nullable',
	        'age' => 'nullable',
	    ]);
	 
	    $input = $request->all();
	 
	    Character::create($input);
	 
	    Session::flash('flash_message', 'Character successfully added !');
	 
	    return redirect()->route('characters.index');
	}

	public function edit($id)
	{
	    $character = Character::findOrFail($id);
	 
	    return view('characters.edit', compact('character'));
	}

	public function update(Request $request, $id)
	{
    	$character = Character::findOrFail($id);
 
	    $this->validate($request, [
	        'name' => 'required',
	        'known_as' => 'nullable',
	        'lastname' => 'nullable',
	        'age' => 'nullable',
	    ]);
	 
	    $input = $request->all();
	 
	    $character->fill($input)->save();
	 
	    Session::flash('flash_message', 'Character successfully modified !');
	 
	    return redirect()->route('characters.index');
	}

	public function destroy($id)
	{
	    $character = Character::findOrFail($id);
	 
	    $character->delete();
	 
	    Session::flash('flash_message', 'Character successfully deleted !');
	 
	    return redirect()->route('characters.index');
	}
}
