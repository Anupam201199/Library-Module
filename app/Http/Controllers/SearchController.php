<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\book;
use Illuminate\Support\Facades\Input;
use Session;


class SearchController extends Controller
{
    public function search(){
    	$q = Input::get ( 'q' );
    $user = book::where('Title','LIKE','%'.$q.'%')->orWhere('Author','LIKE','%'.$q.'%')->get();
    $books = \App\book::all();
	
    if(count($user) > 0)
        return view('laravel/SearchResults')->withDetails($user)->withQuery ( $q )->with('allbooks',$books);
    else
	Session::flash('message','No Details found. Try to search again !');

     return view ('laravel/SearchResults');

    }
}
