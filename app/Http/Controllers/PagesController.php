<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Session;
 
class PagesController extends Controller
{
    public function hub()
    {
        return view('pages.hub');
    }

    public function index()
    {
        return view('pages.index');
    }
}