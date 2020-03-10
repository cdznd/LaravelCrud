@extends('Templates.template')

@section('content')

    <h1 class="text-center">CRUD</h1>

    <hr>

    <div class="text-center">
    
        <button class="btn btn-sucess"></button>

    </div>

    <div class="col-8 m-auto">

        <table class="table table-dark text-center">

            <thead>

                <tr>

                    <th scope="col">ID</th>
                    <th scope="col">Tittle</th>
                    <th scope="col">Autor</th>
                    <th scope="col">Price</th>
                    <th scope="col">Action</th>

                </tr>

            </thead>

            <tbody>

                @foreach($book as $books)

                    @php

                        $user = $books->find($books->id)->relUsers;


                    @endphp

                    

                    <tr>

                        <th scope="row">{{$books->id}}</th>
                        <td>{{$books->title}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$books->price}}</td>

                        <td>

                            <a href="">

                                <button class="btn btn-dark">Visualizar</button>

                            </a>

                            <a href="">

                                <button class="btn btn-primary">Editar</button>

                            </a>

                            <a href="">

                                <button class="btn btn-danger">Excluir</button>
                            
                            </a>

                    </tr>

                @endforeach

            </tbody>

        </table>

    </div>

@endsection