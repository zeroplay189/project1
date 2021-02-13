<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
 {
     $data = [
         'categories' => Category::all(),
     ];
    return view('category.index', $data);
 }


public function create()
{
    return view('category.create');
}

}
