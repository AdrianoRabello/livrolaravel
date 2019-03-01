<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;

class UnityProduct extends Model
{
    //

    protected $fillable = ['amount','product_id','unity_id'];


    public function store($amount)
    {
        $this->create($data);
    }


    public function listProdctForUnity()
    {
        return DB::table('unity_products')
        ->join('products', 'products.id', '=', 'unities.unity_id')       
        ->get();
    }
}
