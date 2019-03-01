@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
<div class="justfy-content-center">
    <h1>Relatório de produtos</h1>
  
</div>
@stop

@section('content')
    <p>produtos por unidade</p>

    <div class="container-fluid">
        <div class="row">
        <form action="{{route('unityStock.list')}}" method="POST">
                {{ csrf_field() }}
                <div class="col-md-4">
                    {{-- <div class="form-group">
                        {{Form::label('product', 'Produto',['class'=>'text-muted'])}}
                        {{Form::select('product_id',$products,null,['class'=>'form-control'])}}
                    </div>
                    <div class="form-group">
                        {{Form::label('categories', 'Quantidae',['class'=>'text-muted'])}}
                        {{Form::text('amount',null,['class'=>'form-control'])}}
                    </div> --}}
                    <div class="form-group">
                        {{Form::label('unity_id', 'Unidade',['class'=>'text-muted'])}}                   
                        {{Form::select('unity_id',$unities,null,['class'=>'form-control'])}}
                    </div>
                    <div class="form-group">
                        <button type="submit" name="button" class="btn btn-primary ">Visualizar</button>
                    </div>                    
                </div>
                <div class="col-md-4">
                    <div class="card">                        
                        <div class="card-body">
                            <form action="{{route('category.store')}}" method="POST">
                                {{ csrf_field() }}                              
                                <table class="table table-responsive table-striped table-bordered">
                                    <thead>
                                        <th>#</th>
                                        <th>Unidade</th>
                                        <th>Produto</th>
                                        <th>Quantidade</th>
                                        <th></th>
                                    </thead>
                                    <tbody>
                                        {{-- @if($itens)
                                            @foreach($itens as $iten) --}}
                                            <tr>
                                                {{-- <td>{{$iten->nome}}</td>
                                                <td>{{$iten->name}}</td>
                                                <td>{{$iten->}}</td>
                                                <td><a href="" class="btn btn-warning"> Editar</a> </td>
                                                <td> <a href="" class="btn btn-danger"> Excluir</a></td> --}}
                                            </tr>
                                            {{-- @endforeach

                                            @else
                                                tr><td>--</td><td>Não há registros</td></tr>
                                        @endif                                       --}}
                                    </tbody>
                                </table>
                            </form>
                            {{-- {{ $products->links() }}    --}}
                        </div>
                    </div>
                </div>
               
            </form>
            
        </div>
    </div>

@stop