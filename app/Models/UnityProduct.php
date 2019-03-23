<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;

class UnityProduct extends Model
{
    //

    protected $fillable = ['product_id','unity_id','description','amount'];

    // persiste os dados no DB
    public function store($data)
    {
        return $this->create($data);
    }
}
