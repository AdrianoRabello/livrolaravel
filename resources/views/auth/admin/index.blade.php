@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Dados do usuário</h1>
@stop

@section('content')
    

    <div class="container-fluid">
        <div class="row">

            <form action="{{route('userContact.store')}}" method="POST">
                {{ csrf_field() }}
                <div class="col-md-4">
                    <div class="card">                    
                        <div class="card-body">
                            <table class="table table-responsive table-sm">
                                <tr>
                                    <td>Nome</td>
                                    <td>{{$user->name}}</td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td>{{$user->email}}</td>
                                </tr>                    
                                <tr>
                                    <td>Id</td>
                                    <td>{{ Form::text('user_id',$user->id,['class' => 'form-control','placeholder'=>'Telefone ','readonly'])}}</td>
                                </tr>  
                                <tr>
                                    <td>Telefone</td>
                                    <td> {{ Form::text('number',null,['class' => 'form-control','placeholder'=>'Telefone '])}}</td>
                                </tr>                  
                            </table>                      
                        </div>
                    </div>                 
                    
                    <div class="form-group text-right">
                        {{ Form::submit('Cadastrar telefone',['class' => 'btn btn-primary'])}}
                    </div>
                </div>
                <div class="col-md-4">
                    <table class="table table-responsive table">
                        <thead>
                            <th>Nome</th>
                            <th>Telefone</th>
                            <th>#</th>
                        </thead>
                        <tbody>
                            @if($contacts)
                                @foreach($contacts as $contact)
                                <tr>
                                    <td>{{$contact->user->name}}</td>
                                    <td>{{$contact->number}}</td>
                                    {{-- <td>{{$category->name}}</td> --}}
                                    
                                    <td> <a href="" class="btn btn-danger"> Excluir</a></td>
                                </tr>
                                @endforeach

                                @else
                                <tr>
                                    <td>--</td>
                                    <td>Não há registros</td>
                                    <td>Não há registros</td>
                                </tr>
                            @endif                            
                        </tbody>
                    </table>
                    {{ $contacts->links() }}
                </div>
                
            </form>
        
        </div>
    </div>
@stop