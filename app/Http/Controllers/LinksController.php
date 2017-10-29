<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Link;

class LinksController extends Controller
{
    public function index()
    {
        $links = Link::latest()->get();
        return view('links.index', compact('links'));
    }

    public function show(Link $link)
    {
        return view('links.show', compact('link'));
    }

    public function create()
    {
        return view('links.create');
    }

    public function insert(Request $request)
    {
    	$request->validate([
    		'title' => 'required',
		    'url' => 'required'
	    ]);

        Link::create([
        	'title' => $request->title,
	        'url' => $request->url,
	        'description' => $request->description
        ]);

        return redirect('/links')->with(['message' => 'New link created.']);
    }

    public function edit(Link $link)
    {
	    return view('links.edit', compact('link'));
    }

    public function update(Request $request, Link $link)
    {
	    $request->validate([
		    'title' => 'required',
		    'url' => 'required'
	    ]);

    	$link->update([
    		'title' => $request->title,
		    'url' => $request->url,
		    'description' => $request->description
	    ]);

    	return redirect('/links')->with(['message' => 'Link updated.']);
    }

    public function delete(Link $link)
    {
        $link->delete();

	    return redirect('/links')->with(['message' => 'Link deleted.']);
    }
}
