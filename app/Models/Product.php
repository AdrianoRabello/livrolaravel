<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use App\Models\Unity;


class Product extends Model
{
    //

    protected $fillable = ['name','description','category_id'];


    public function category()
    {
        return $this->belongsTo(Category::class);
    }


    public function teste()
    {
    
      return $this->belongsToMany(Unity::class,'unity_products')
             ->withPivot('amount');

    }



    // persistindo objeto no DB
    public function store($data)
    {        

        return $this->create($data);
        
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


   




    // ptenho que ver onde é o local correto para criar a validação
    // public function rules()
    // {
    //     return $rules = [
    //         'name'        => 'required|min:3|max:50',    
    //         'category_id' => 'required|numeric'
    //       ];
    // }



  
    


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
