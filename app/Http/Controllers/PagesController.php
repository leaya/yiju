<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function docs()
    {
        $categories = Category::where('parent_id', null)->with('subCat')->Orderby('order')->get();
        return view('pages.docs', compact('categories'));
    }

    public function home()
    {
        return view('pages.home');
    }

    public function score()
    {
        return view('pages.score');
    }

    public function email()
    {
        return view('emails.test');
    }

    public function send(Request $request)
    {
        dd($request->all());
    }
}
