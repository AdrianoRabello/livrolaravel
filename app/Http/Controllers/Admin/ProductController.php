<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\Unity;
use App\Models\UnityProduct;
use DB;
use App\Http\Requests\ProductFormRequest;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     private $product;

     function __construct(Product $product){

        $this->product = $product;

     }



    public function index()
    {
        //

      
        $category = new Category();
        //$categories = $category->get(['id','name']);   
        $categories = $category->toArray();   

        //return dd($categories);

        $products = $this->product->paginate(5);
       

        return view("auth.admin.cadastro.product",compact("categories",'products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductFormRequest $request)
    {     

        $data = $request->only(['name','description','category_id']);

        $result = $this->product->store($data);

        if($result){
            return redirect("/product");
        }else{
            return redirect("/product");
        }

        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }



    public function listAll(){

        //return $this->product->get();
    }


    private function validar(Request $request)
    {

        $errors = [
          'required'  => 'Favor preencher o campo :attribute',
          'min'       => 'Favor preencher o campo :attribute',
          'numeric'   => 'O campo :attribute tem que ser númerico',
        ];
  
        $this->validate($request,$this->product->rules,$errors);
    }





    public function teste(Request $request)
    {   
     
        $p = $this->product->find($request->only(['product_id']));

        $unity = Unity::find($request->only(['unity_id']));

        return dd($p->f());
        $p->f()->create($unity,$request->only(['amount']));
        $p->create($unity,$request->only(['amount']));
        
        
    }



}
