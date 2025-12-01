@extends('layouts.app')

@section('content')
     <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-6">
                <div class="card p-5">
                    <p class="display-6 text-center">LOGIN</p>

                    <form action="«" method="post">

                        @csrf

                        <div class="mb-3">
                            <label for="username" class="form-label">Usuário</label>
                            <input type="text" class="form-control" id="username" name="username">
                            
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">Senha</label>
                            <input type="password" class="form-control" id="password" name="password">
                           
                        </div>

                        <div class="row mt-4">
                           
                            <div class="col text-center align-self-center">
                                <button type="submit" class="btn btn-dark px-5">ENTRAR</button>
                            </div>
                        </div>

                    </form>

                   

                    

                </div>
            </div>
        </div>
    </div>
@endsection