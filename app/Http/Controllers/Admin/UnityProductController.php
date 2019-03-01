<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Unity;
use App\Models\UnityProduct;

class UnityProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * 
     * 
     */

     private $unityProduct;

     public function __construct(UnityProduct $unityProduct)
     {
        $this->unityProduct = $unityProduct;
     }
    public function index()
    {
        //

        $unity = new Unity();
        $product = new Product();

        //return dd($unity->listAll());


        $unities  = $unity->toArray();
        $products = $product->toArray();
        


        //return dd($product->toArray());

        return view('auth.admin.cadastro.unityProduct',compact('unities','products'));
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
     * Store a newly created resource in storage.AA
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $product = Product::find($request->only(['product_id']));
        $unity   = Unity::find($request->only(['unity_id']));

        $this->unityProduct->create($request->only(['product_id','unity_id','amount']));

        return redirect()->to('entry');
       

        
     
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
}
