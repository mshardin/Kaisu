<?php

namespace App\Http\Controllers;

use App\Recipe;

use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index() 
    {	
    	if (Auth::check()) {
    		$user = Auth::user();
    	} else {
    		return redirect('/auth/login');
    	}

    	$recipes = Recipe::all();

    	return view('pages.home', compact('recipes', 'user', 'author'));
    }
}
