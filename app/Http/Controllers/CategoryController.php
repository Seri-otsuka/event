<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function category(Category $category)
    {
        return $category->get();
    }
    
    public function index(Category $category){
       
       
        $categories = Category::all();
        return view('categories.index')->
        with(['articles' => $category->getByCategory(),
               'categories' => $categories]);
    }
}