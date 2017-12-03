<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function docs()
    {
        $categories = Category::with('posts')->get();
        return view('pages.docs', compact('categories'));
    }
}
