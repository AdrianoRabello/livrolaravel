@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
<div class="justfy-content-center">
    <h1>Categoria</h1>
  
</div>
@stop

@section('content')
    <p>You are logged in!</p>

    <div class="container-fluid">
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        
                        <div class="card-body">

                            <form action="{{route('category.store')}}" method="POST">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="">Categoria</label>
                                    <input type="text" class="form-control" name="name" id="name">
                                </div>
                                <div class="form-group">
                                        <label for="">Descrição</label>
                                        <textarea  type="text" class="form-control" name="description" id="description"> </textarea>
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
                                   
                                    <table class="table table-responsive table">
                                        <thead>
                                            <th>#</th>
                                            <th>Categoria</th>
                                            <th></th>
                                        </thead>
                                        <tbody>
                                            @if($categories)
                                                @foreach($categories as $category)
                                                <tr>
                                                    <td>{{$category->id}}</td>
                                                    <td>{{$category->name}}</td>
                                                    <td><a href="" class="btn btn-warning"> Editar</a> </td>
                                                    <td> <a href="" class="btn btn-danger"> Excluir</a></td>
                                                </tr>
                                                @endforeach

                                                @else
                                                <tr>--</td><td>Não há registros</td></tr>
                                            @endif

                                            
                                            
                                        </tbody>
                                    </table>
                                   
                                        {{ $categories->links() }}
                                        
                                    
                                </form>
                                
                                                    
                            </div>
                        </div>
                    </div>
            </div>
        </div>


@stop