@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
<div class="justfy-content-center">
    <h1>Tranferência</h1>
  
</div>
@stop

@section('content')
    <p>Transferencia de mercadoria de mercadoria</p>

    <div class="container-fluid">
        <div class="row">
        <form action="{{route('entry.store')}}" method="POST" class="">
                {{ csrf_field() }}
                <div class="col-md-6">
                    
                   
                    <div class="col-md-6">
                        {{Form::label('unity_id', 'Unidade de origem',['class'=>'text-muted'])}}                   
                        {{Form::select('unity_id',$unities,null,['class'=>'form-control'])}}
                    </div>
                    <div class="col-md-6">
                            {{Form::label('unity_id', 'Unidade destino',['class'=>'text-muted'])}}                   
                            {{Form::select('unity_id',$unities,null,['class'=>'form-control'])}}
                    </div>
                    
                    <br>
                    <div class="col-md-6">
                        {{Form::label('product', 'Produto',['class'=>'text-muted'])}}
                        {{Form::select('product_id',$products,null,['class'=>'form-control'])}}
                    </div>
                   
                    <div class="col-md-6">
                        {{Form::label('categories', 'Quantidade',['class'=>'text-muted'])}}
                        {{Form::number('amount',null,['class'=>'form-control'])}}
                    </div>
                   
                   
                    <div class="col-md-12">
                        {{Form::label('description', 'Descricão',['class'=>'text-muted'])}}                   
                        {{Form::textArea('description',null,['class'=>'form-control',"rows"=>5])}}
                    </div>
                    <div class="col-md-12">
                        <br>
                        <button type="submit" name="button" class="btn btn-primary ">Salvar</button>
                    </div>   
                    @include('auth.admin.includes.alerts')                 
                </div>
                <div class="col-md-4">
                    <div class="card">                        
                        <div class="card-body">
                            <form action="{{route('category.store')}}" method="POST">
                                {{ csrf_field() }}                              
                        
                            </form>
                            {{-- {{ $products->links() }}    --}}
                        </div>
                    </div>
                </div>
               
            </form>
            
        </div>
        
    </div>

@stop