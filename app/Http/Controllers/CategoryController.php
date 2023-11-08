<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class CategoryController extends Controller
{
    //
    public function index() {
        $categories = Category::all();
        return view('admin.category.category', compact('categories'));
    }

    public function create(Request $request) {
        $category = new Category;
        $category->category_name = $request->category_name;
        $category->user_id =  $request->user_id;
        $category->save();
    }
}
