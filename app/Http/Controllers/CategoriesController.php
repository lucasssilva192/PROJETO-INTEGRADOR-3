<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index(){
        return view('category.index')->with('categories', Category::all());
    }

    public function create(){
        return view('category.create');
    }

    public function show(Category $category){
        return view('category.show')->with(['category' => $category, 'products' => $category->products()->paginate(6)]);
    }

    public function store(Request $request){
        Category::create($request->all());
        session()->flash('success', 'Categoria criada com sucesso');
        return redirect(route('category.index'));
    }

    public function edit(Category $category){
        return view('category.edit')->with('category', $category);
    }

    public function update(Request $request, Category $category){
        $category->update($request->all());
        session()->flash('success', 'Categoria alterada com sucesso');
        return redirect(route('category.index'));
    }

    public function destroy(Category $category){
        $category->delete();
        session()->flash('success', 'Categoria excluída com sucesso');
        return redirect(route('category.index'));
    }
}
