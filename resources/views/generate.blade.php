@extends('layouts.navbar')

@section('titulo', 'Generate')

@section('conteudo')

<div class="container">
        <div class="row justify-content-center align-items-center min-vh-100">
            <div class="col-12 col-md-8 col-lg-6">

                <form>
                <div class="form-group row">
                    <label for="inputUrl" class="col-sm-2 col-form-label">https:localhost</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputUrl" placeholder="Nome">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="inputURL" class="col-sm-2 col-form-label">Minha URL</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputURL" placeholder="URL">
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Acessar</button>
                    </div>
                </div>
                </form>

            </div>
        </div>
</div>

@endsection