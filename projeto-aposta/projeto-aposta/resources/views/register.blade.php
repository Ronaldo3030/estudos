@extends('layouts.padrao')
@section('style')
    .container-main{
    display: grid;
    align-items: center;
    justify-items: center;
    grid-template-columns: 1fr;
    }
    .cep{
    display:grid;
    grid-template-columns: 4fr 2fr;
    }
    .form-label{
    font-size: 14px;
    margin-bottom: 0;
    }
    .required{
    font-weight: 700;
    color: #d75353;
    }
@endsection
@section('title', 'Registre-se')

@section('content')
    <div class="container-main">
        <h1 class="mb-4">Criar conta no Bet Your Luck</h1>
        <form action="" method="POST" class="w-25">
            <h4 class="mb-3">Dados básicos</h4>
            <div class="form-floating mb-3">
                <input name="email" type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Email<span class="required">*</span></label>
            </div>
            <div class="form-floating mb-3">
                <input name="senha" type="password" class="form-control" id="floatingInput" placeholder="Senha">
                <label for="floatingInput">Senha<span class="required">*</span></label>
            </div>
            <div class="form-floating mb-3">
                <input name="confirme-senha" type="password" class="form-control" id="floatingInput"
                    placeholder="Confirme a senha">
                <label for="floatingInput">Confirme a senha<span class="required">*</span></label>
            </div>
            <hr>
            <h4 class="mb-3">Dados pessoais</h4>
            <div class="form-floating mb-3">
                <input name="primeiro-nome" type="text" class="form-control" id="floatingInput"
                    placeholder="Primeiro nome">
                <label for="floatingInput">Primeiro nome<span class="required">*</span></label>
            </div>
            <div class="form-floating mb-3">
                <input name="segundo-nome" type="text" class="form-control" id="floatingInput"
                    placeholder="Segundo nome">
                <label for="floatingInput">Segundo nome<span class="required">*</span></label>
            </div>
            <div class="form-floating mb-3">
                <input name="data-nascimento" type="text" class="form-control" id="floatingInput"
                    placeholder="Data de nascimento">
                <label for="floatingInput">Data de nascimento<span class="required">*</span></label>
            </div>
            <div class="form-floating mb-3">
                <input name="cep" type="text" class="form-control" id="floatingInput" placeholder="CEP">
                <label for="floatingInput">CEP<span class="required">*</span></label>
            </div>
            <div class="form-floating mb-3">
                <input name="cidade" type="text" class="form-control" id="floatingInput" placeholder="Cidade">
                <label for="floatingInput">Cidade<span class="required">*</span></label>
            </div>
            <div class="form-floating mb-3">
                <input name="estado" type="text" class="form-control" id="floatingInput" placeholder="Estado">
                <label for="floatingInput">Estado<span class="required">*</span></label>
            </div>
            <div class="form-floating mb-3">
                <input name="endereço" type="text" class="form-control" id="floatingInput" placeholder="Endereço">
                <label for="floatingInput">Endereço<span class="required">*</span></label>
            </div>
            <div class="form-floating mb-3">
                <input name="telefone" type="text" class="form-control" id="floatingInput" placeholder="Telefone">
                <label for="floatingInput">Telefone<span class="required">*</span></label>
            </div>
            <div class="mb-3">
                <label for="formFile" class="form-label">Foto de perfil</label>
                <input name="arquivo" class="form-control" type="file" id="formFile">
            </div>
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </form>
    </div>
@endsection
