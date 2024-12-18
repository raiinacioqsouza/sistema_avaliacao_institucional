@extends('layouts.app')  {{-- Inclui o layout base para essa página --}}

@section('title', 'Login - Sistema de Avaliação Institucional')

@section('content')  {{-- Aqui começa o conteúdo da página --}}
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="text-center mb-4">
                <img src="{{ asset('resources/imgs/logos/ifnmg.png') }}" alt="Logo IFNMG Campus Almenara" class="img-fluid" style="max-width: 150px;">
            </div>
            <div class="card shadow-sm">
                <div class="card-body">
                    <h2 class="text-center mb-4">Sistema de Avaliação Institucional</h2>
                    <form>
                        <div class="mb-3">
                            <label for="user" class="form-label">Usuário</label>
                            <input type="text" class="form-control" id="user" name="user" placeholder="Digite seu usuário" required>
                        </div>
                        <div class="mb-3">
                            <label for="pass" class="form-label">Senha</label>
                            <input type="password" class="form-control" id="pass" name="pass" placeholder="Digite sua senha" required>
                        </div>
                        <div class="form-check mb-3">
                            <input type="checkbox" class="form-check-input" id="keep-connected" name="keep-connected">
                            <label for="keep-connected" class="form-check-label">Permanecer conectado</label>
                        </div>
                        <div class="d-grid mb-3">
                            <button type="submit" class="btn btn-success">Acessar</button>
                        </div>
                        <div class="text-center">
                            <a href="#" target="_blank" class="text-decoration-none me-3">Alterar Senha</a>
                            <a href="#" target="_blank" class="text-decoration-none">Recuperar Senha</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection  {{-- Fim do conteúdo --}}
