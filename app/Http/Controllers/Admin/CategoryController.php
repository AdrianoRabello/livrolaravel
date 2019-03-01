<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use DB;

class CategoryController extends Controller
{
    //

    private $category;

    public function __construct(){

        $this->category = new Category();
    }

    public function index(){

      
        $categories =  DB::table('categories')->paginate(5);

      
        //$categories = Category::get();

        //return $categories;
       
        return view("auth.admin.cadastro.category",compact("categories"));
    }


    public function store(Request $request){

        //return dd($request->only(['name','description']));
        $category = new Category();
        //return dd(Category::all());
        $this->category->create($request->only(['name','description']));

        return redirect('/category');

    }
}
