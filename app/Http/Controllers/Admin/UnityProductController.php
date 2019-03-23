<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Unity;
use App\Models\UnityProduct;
use App\Http\Requests\UnityProductFormRequest;

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


        $unities  = $unity->toArray();
        $products = $product->toArray();     
   

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
    public function store(UnityProductFormRequest $request)
    {      
       
        // salva os dados do request na variavel data em forma de array e 
        //depois pede para model poersistir
        $unityProduct = new UnityProduct();       
        $data = $request->only(['unity_id','product_id','description','amount']);
        $result = $unityProduct->store($data);     

        if($result)
        {

            $response = [
                'success' => true,
                "message" => "Estoque atualizado com sucesso"
              ];

             return redirect()->to('/entry')->with('success',$response['message']);
        }
        //return dd($result);

        
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


    public function transfer()
    {
        //return view("auth.admin.cadastro.transfer");
        //return "teste";

        $unity = new Unity();
        $product = new Product();  


        $unities  = $unity->toArray();
        $products = $product->toArray();     
   

        return view('auth.admin.cadastro.transfer',compact('unities','products'));
    }
}
