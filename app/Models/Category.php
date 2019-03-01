<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //

    protected $fillable = ['name','description'];  

    


    // para retornar um valor da maneira que desejarmos
    public function getNameAttribute($value)
    {
      return strtoupper($value);
    }
    

    public function products()
    {
      return $this->hasMany(Product::class);
    }
}
