<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Unity extends Model
{
    //

    protected $fillable = ['name','description'];


    public function store(Array $data){

        $this->create($data);
    }



    public function listAll()
    {
      return $this->get();
    }



      // transforma os dados da model em forma de array, chave = id  valor = nome
      public function toArray()
      {
        $products = $this->listAll();
        
        $data = Array();
        foreach ($products as $product) {
          $data[$product->id]  = $product->name;
        }
  
        return $data;
  
      }


    public function teste ()
    {
      return $this->belongsToMany(Product::class,'unity_products')->withPivot('amount');
    }



    // para setar o parametro ao atributo do objeto
    public function setNameAttribute($value)
    {
        $this->attributes['name'] = strtolower($value);
    }  

    public function getNameAttribute($value)
    {
      return strtoupper($value);
    }




    // description
    public function setDescriptionAttribute($value)
    {
        $this->attributes['description'] = strtolower($value);
    }

    public function getDescriptionAttribute($value)
    {
      return strtoupper($value);
    }



}
