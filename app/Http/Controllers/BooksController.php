<?php

namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Book;
use Session;

class BooksController extends Controller
{
    public function hub()
    {
        return view('pages.hub');
    }

    public function index()
	{
    	$books = Book::latest('updated_at')->get();
 
    	return view('books.index', ['books'=>$books]);
	}

	public function show($id)
	{
	    $book = Book::findOrFail($id);
	 
	    return view('books.show', compact('book'));
	}

	public function create()
	{
	    return view('books.create');
	}

	public function store(Request $request)
	{	
	    $this->validate($request, [
	        'name' => 'required',
	        'nopages' => 'nullable',
	        'release' => 'nullable',
	    ]);
	 
	    $input = $request->all();
	 
	    Book::create($input);
	 
	    Session::flash('flash_message', 'Book successfully added !');
	 
	    return redirect()->route('books.index');
	}

	public function edit($id)
	{
	    $book = Book::findOrFail($id);
	 
	    return view('books.edit', compact('book'));
	}

	public function update(Request $request, $id)
	{
    	$book = Book::findOrFail($id);
 
	    $this->validate($request, [
	        'name' => 'required',
	        'nopages' => 'nullable',
	        'release' => 'nullable',
	    ]);
	 
	    $input = $request->all();
	 
	    $book->fill($input)->save();
	 
	    Session::flash('flash_message', 'Book successfully modified !');
	 
	    return redirect()->route('books.index');
	}

	public function destroy($id)
	{
	    $book = Book::findOrFail($id);
	 
	    $book->delete();
	 
	    Session::flash('flash_message', 'Book successfully deleted !');
	 
	    return redirect()->route('books.index');
	}
}
