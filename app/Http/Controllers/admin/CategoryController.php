<?php

namespace App\Http\Controllers\admin;

use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
    public function showcategory(){
        $categories=Category::all();
        if ($categories == null)
            abort('404');
        return view('admin.category.categoriesList')->with('categories', $categories);
    }

    public function addcategory(){


        return view('admin.category.addCategories');
    }
    public function addNewCategory(Request $request){

        $newCategory = new Category();
        $newCategory->name_en = $request->input('name_en');
        $newCategory->name_ar = $request->input('name_ar');
        $newCategory->save();
        return redirect()->route('addcategory');
    }


    public function editcategory($id){
        $categories = Category::find($id);
        if ($categories == null)
            abort('404');
return view('admin.category.edit')->with('categories', $categories);
    }

    public function submiteditcat(Request $request, $categoryID){
        $categories = Category::find($categoryID);
        if ($categories == null)
            abort('404');
        $categories->name_en = $request->input('name_en');
        $categories->name_ar = $request->input('name_ar');

        $categories->save();

        return redirect()->route('catlist');
    }
    public function deletecategory($categoryID){
        $categories = Category::find($categoryID);
        if ($categories == null)
            abort('404');
        return view('admin.category.delete')->with('categories', $categories);
    }

    public function destroy($id){
        $categories = Category::find($id);
        if ($categories == null)
            abort('404');
        if($categories != null)
            $categories->delete();
        return redirect()->route('catlist');
    }

    public function categorydetails($categoryID){
        $categories = Category::find($categoryID);
        if ($categories == null)
            abort('404');
        return view('admin.category.details')->with('categories', $categories);

    }
    }
