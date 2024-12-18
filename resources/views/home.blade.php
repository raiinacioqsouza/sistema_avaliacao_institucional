<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login SAI Campus Almenara</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
</head>
<body class="bg-light d-flex align-items-center" style="min-height: 100vh;">

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="text-center mb-4">
                    <img src="{{url('/images/ifnmg.png')}}" alt="Logo IFNMG Campus Almenara" class="img-fluid" style="max-width: 150px;">
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
    </div>





    <script src="firebase.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
