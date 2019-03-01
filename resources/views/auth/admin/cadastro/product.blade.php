@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Produto</h1>
@stop


@section('content')
<p>Cadastro de produto</p>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    
                    <div class="card-body">

                        <form action="{{route('product.store')}}" method="POST">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="">Nome</label>
                                
                                {{ Form::text('name',null,['class' => 'form-control','placeholder'=>'nome '])}}
                               
                            </div>
                            <div class="form-group">
                                    <label for="">Descrição</label>
                                   
                                    {{ Form::textArea('description',null,['class' => 'form-control','placeholder'=>'descrição ','id'=>'description','rows'=>5])}}
                            </div>

                            <div class="form-group">
                                <label for="">Categoria</label>
                                @if($categories)
                                    <select class="form-control" name="category_id">
                                    
                                    <option value="">Selecione</option>
                                    @foreach($categories as $category)
                                    
                                        <option value="{{$category->id}}">{{$category->name}}</option>                                       
                                    
                                    @endforeach 

                                    {{-- {{Form::select('categories',$categories,null,['class'=>'form-control'])}} --}}
    
                                @else
                                <option value="0">Não há categoria cadastrada</option>
                                @endif
                                    </select>
                            </div>
                         

                            <div class="justify-content-right">
                                <button type="submit" name="button" class="btn btn-primary ">Salvar</button>
                            </div>
                            
                        </form>
                       
                                            
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card">                        
                    <div class="card-body">
                        <form action="{{route('category.store')}}" method="POST">
                            {{ csrf_field() }}                              
                            <table class="table table-responsive table-striped table-bordered">
                                <thead>
                                    <th>#</th>
                                    <th>Produto</th>
                                    <th>Categoria</th>
                                    <th></th>
                                    <th></th>
                                </thead>
                                <tbody>
                                    @if($products)
                                        @foreach($products as $product)
                                        <tr>
                                            <td>{{$product->id}}</td>
                                            <td>{{$product->name}}</td>
                                            <td>{{$product->category->name}}</td>
                                            <td><a href="" class="btn btn-warning"> Editar</a> </td>
                                            <td> <a href="" class="btn btn-danger"> Excluir</a></td>
                                        </tr>
                                        @endforeach

                                        @else
                                            <tr><td>--</td><td>Não há registros</td></tr>
                                     @endif                                      
                                </tbody>
                            </table>
                        </form>
                        {{ $products->links() }}   
                    </div>
                </div>
            </div>
        </div>
        <br/>
        <div class="row">
            <div class="container-fluid">
                <div class="col-md-4">
                    @if ($errors->any())
                        @foreach ($errors->all() as $error)
                          <div class="alert alert-danger alert-dismissible text-center" role="alert">
                            {{$error}}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                        @endforeach
                    @endif
                </div>
             
            </div>     
        </div>
    </div>

@stop