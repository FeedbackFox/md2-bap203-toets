<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Link;

class LinksController extends Controller
{
    function index() {
        $links = Link::all();

        return view('laravel-links')->with ('links',$links);
    }

    function showLinksForm() {
        return view('link-toevoegen');
    }

    function handleLinksForm(Request $request) {
        $validatedData = $request->validate([
            'title' => 'required|min:8',
            'description' => 'required',
            'url' => 'required|url'
        ]);

        $link = new Link;
        $link->title = $request->title;
        $link->description = $request->description;
        $link->url = $request->url;
        $link->save();
        return view('laravel-links');

    }
}
