@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
<div class="justfy-content-center">
    <h1>Unidade</h1>
  
</div>
@stop

@section('content')
    <p>Cadastro de Unidade</p>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    
                    <div class="card-body">

                        <form action="{{route('unity.store')}}" method="POST">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="">Unidade</label>
                                {{ Form::text('name',null,['class' => 'form-control','placeholder'=>'Unidade '])}}
                            </div>
                            <div class="form-group">
                                    <label for="">Descrição</label>
                                    {{ Form::textArea('description',null,['class' => 'form-control','placeholder'=>'descrição','rows'=>5])}}
                            </div>

                            <div class="justify-content-right">
                                {{ Form::submit('Salvar',['class' => 'btn btn-primary'])}}
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
                                
                                <table class="table table-responsive table">
                                    <thead>
                                        <th>#</th>
                                        <th>Unidade</th>
                                        <th></th>
                                    </thead>
                                    <tbody>
                                        @if($unities)
                                            @foreach($unities as $unity)
                                            <tr>
                                                <td>{{$unity->id}}</td>
                                                <td>{{$unity->name}}</td>
                                                <td><a href="" class="btn btn-warning"> Editar</a> </td>
                                                <td> <a href="" class="btn btn-danger"> Excluir</a></td>
                                            </tr>
                                            @endforeach

                                            @else
                                            <tr>--</td><td>Não há registros</td></tr>
                                        @endif
                                        
                                        
                                    </tbody>
                                </table>                                   
                                    {{ $unities->links() }}
                                    
                                
                            </form>                               
                                                
                        </div>
                    </div>
            </div>
        </div>
        <br>
         <div class="row">
            <div class="container-fluid">
                <div class="col-md-4">
                    @include('auth.admin.includes.alerts')
                   
                </div>
             
            </div>     
        </div>
    </div>


@stop