<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductUnity extends Model
{
    //

    protected $fillable = ['amount','product_id','unity_id'];


    public function store($amount)
    {
        $this->create($data);
    }

    
}
