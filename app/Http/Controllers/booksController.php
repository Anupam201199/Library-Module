<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;


class booksController extends Controller
{
    public function index() 
    {
    $books = \App\book::all();
	return view('/laravel/books')->with('allbooks',$books);
	
	}
	public function entry()
	{
		return view('laravel.entry');
}

public function store(Request $request)
{
    request()->validate([
        'Title' => 'required',
        'Author' => 'required',
    ]);
    $cover = $request->file('bookcover');
    $extension = $cover->getClientOriginalExtension();
    Storage::disk('public')->put($cover->getFilename().'.'.$extension,  File::get($cover));
	$newbook=new \App\book();
	$newbook->title=request('Title');
	$newbook->author=request('Author');
    $newbook->mime=$cover->getClientMimeType();
    
    
    $newbook->original_filename = $cover->getClientOriginalName();
    $newbook->filename = $cover->getFilename().'.'.$extension;
    $newbook->save();

    return redirect('/laravel/books')
        ->with('success','Book added successfully...');
}

	}
