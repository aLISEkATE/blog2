<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view("categories.index", compact("categories"));
    }

    public function show(Category $category) 
    {
        return view("categories.show", compact("category"));
    }

    public function create(Category $create) 
    {
        return view("categories.create.create", compact("create"));
    }
    public function store(Request $request)
    {
        
        $validated = $request->validate([
            "category_name" => ["required", "max:20"]
        ]);
    
        Category::create([
            "category_name" => $request->category_name
        ]);

        return redirect("/categories");
    }

    public function update(Request $request, Category $category)
    {
        $validated = $request->validate([
            "category_name" => ["required", "max:20"]
        ]);

        $category->category_name = $validated["category_name"];

        $category->save();
        return redirect("/categories/" . $category->id);
    }

    public function edit(Category $category) 
    {
        return view("categories.edit.edit", compact("category"));
    }

    public function destroy(Category $category) 
    {
      $category->delete();
      return redirect("/categories");
    }
    
}
