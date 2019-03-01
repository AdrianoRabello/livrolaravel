<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Unity;
use App\Models\UnityProduct;

class UnityStockController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $unity = new Unity();
        $product = new Product();

      


        /*$unities  = $unity->toArray();
        $products = $product->toArray(); */

        $p = Product::first();

        $a = $p->teste;

        dd($a);

        //return dd($product);
        //$p->unityProduct->each(function($unity){
          // dd($unity->pivot->amount);
        //}); 

                


        

        return view('auth.admin.relatorio.unityStock',compact('unities','products'));
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        //
        //dd($request->only(['unity_id']));
        $unity = Unity::find($request->only(['unity_id']));

        //dd($unity->unityProduct);

        //$t = $unity->unityProduct();
        dd($unity->unityProduct);

        dd($t->name);
        //$a = $unity->unityProduct;

        //dd($unity->unityProduct);

    //     $unity->unityProduct->each(function($poduct){

    //         echo print($product->name);
    //    });

        //return dd($a);
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
