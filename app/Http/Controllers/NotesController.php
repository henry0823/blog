<?php

namespace App\Http\Controllers;

use App\Note;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NotesController extends Controller
{
    public function index()
    {
    	$notes = Note::all();

    	return view('notes.index',compact('notes'));
    }

    public function show(Note $notes)
    {
    	return view('notes.show',compact('notes'));
    }

    public function create()
    {
    	return view('notes.create');
    }
	
	public function store(Request $request)
	{
    	$note = New note();
    	$note->title = $request->title;
    	$note->content = $request->content;
    	$note->save();
    	
    	return Redirect('/notes');

	}
}


