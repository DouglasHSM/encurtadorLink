@extends('layouts.navbar')

@section('titulo', 'Register')


@section('conteudo')

<div class="container">
        <div class="row justify-content-center align-items-center min-vh-100">
            <div class="col-12 col-md-8 col-lg-6">

                <form>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                    <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="inputSenha" class="col-sm-2 col-form-label">Senha</label>
                    <div class="col-sm-10">
                    <input type="passworld" class="form-control" id="inputSenha" placeholder="Senha">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="inputConfirmarSenha" class="col-sm-2 col-form-label">Confirmar Senha</label>
                    <div class="col-sm-10">
                    <input type="passworld" class="form-control" id="inputConfirmarSenha" placeholder="Confirmar Senha">
                    </div>
                </div

                
                <div class="form-group row">
                    <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Register</button>
                    </div>
                </div>
                </form>

            </div>
        </div>
</div>

@endsection