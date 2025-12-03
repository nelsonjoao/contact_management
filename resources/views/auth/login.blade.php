@extends('layouts.app')

@section('content')
     <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-6">
                <div class="card p-5">
                    <p class="display-6 text-center">LOGIN</p>

                    <form action="{{ route('authenticate') }}" method="post">

                        @csrf

                        <div class="mb-3">
                            <label for="username" class="form-label">Usuário</label>
                            <input type="text" class="form-control" id="email" name="email" {{ old('email') }}>
                            @error('email')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">Senha</label>
                            <input type="password" class="form-control" id="password" name="password">
                            @error('password')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="row mt-4">
                           
                            <div class="col text-center align-self-center">
                                <button type="submit" class="btn btn-dark px-5">ENTRAR</button>
                            </div>
                        </div>

                    </form>

                      @if(session('invalid_login'))
                        <div class="alert alert-danger text-center mt-4">
                            {{ session('invalid_login') }}
                        </div>
                    @endif

                    

                </div>
            </div>
        </div>
    </div>
@endsection