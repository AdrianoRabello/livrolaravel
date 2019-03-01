@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
<div class="justfy-content-center">
    <h1>Tests</h1>
  
</div>
@stop

@section('content')
    <p>You are logged in!</p>

    <div class="container-fluid">
            <div class="row">
               
                <div class="col-md-8">
                        <div class="card">
                            
                            <div class="card-body">
    
                                <form action="" method="POST">
                                  
                                   
                                    <table class="table table-responsive table">
                                        <thead>
                                            <th>#</th>
                                            <th>Categoria</th>
                                            <th>tste</th>
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
                                                <tr>--</td><td>Não há registros</td></tr>
                                            @endif

                                            
                                            
                                        </tbody>
                                    </table>
                                   
                                        {{-- {{ $contacts->links() }} --}}
                                        
                                    
                                </form>
                                
                                                    
                            </div>
                        </div>
                    </div>
            </div>
        </div>


@stop