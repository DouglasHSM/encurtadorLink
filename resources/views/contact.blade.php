@extends('layouts.navbar')
@section('titulo', 'contato')



@section('conteudo')

@extends('layouts.navbar')

@section('titulo', 'Home')



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
                    <label for="inputNome" class="col-sm-2 col-form-label">Nome</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputNome" placeholder="nome">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="inputMensagem" class="col-sm-2 col-form-label">Mensagem</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputMensagem" placeholder="Mensagem">
                    </div>
                </div>
                
                <fieldset class="form-group">
                    <div class="row">
                    <legend class="col-form-label col-sm-2 pt-0">Motivo ?</legend>
                    <div class="col-sm-10">
                        <div class="form-check">
                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="reclamação" checked>
                        <label class="form-check-label" for="gridRadios1">
                            Reclamação
                        </label>
                        </div>
                        <div class="form-check">
                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="suporte">
                        <label class="form-check-label" for="gridRadios2">
                            Suporte
                        </label>
                        </div>
                        
                        
                        <div class="form-check">
                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="suestão">
                        <label class="form-check-label" for="gridRadios3">
                            Sugestão
                        </label>
                        </div>
                        
                    </div>
                    </div>
                </fieldset>
                
                <div class="form-group row">
                    <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Entrar</button>
                    </div>
                </div>
                </form>

            </div>
        </div>
</div>
@endsection



@endsection