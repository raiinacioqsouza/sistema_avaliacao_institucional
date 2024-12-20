<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login SAI Campus Almenara</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
</head>
<body class="bg-light d-flex align-items-center" style="min-height: 100vh;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="text-center mb-4">
                    <img src="{{ url('/images/ifnmg.png') }}" alt="Logo IFNMG Campus Almenara" class="img-fluid" style="max-width: 150px;">
                </div>
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h2 class="text-center mb-4">Sistema de Avaliação Institucional</h2>
                        <form id="loginForm">
                            <div class="mb-3">
                                <label for="user" class="form-label">Usuário</label>
                                <input type="email" class="form-control" id="user" name="user" placeholder="Digite seu e-mail" required>
                            </div>
                            <div class="mb-3">
                                <label for="pass" class="form-label">Senha</label>
                                <input type="password" class="form-control" id="pass" name="pass" placeholder="Digite sua senha" required>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Lidar com a autenticação via AJAX
        document.getElementById('loginForm').addEventListener('submit', function (e) {
            e.preventDefault();

            const user = document.getElementById('user').value;
            const pass = document.getElementById('pass').value;

            // Enviar os dados para a API de login
            fetch('{{ url('/api/loginteste') }}', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-Requested-With': 'XMLHttpRequest'
                },
                body: JSON.stringify({
                    user: user,
                    pass: pass
                })
            })
            .then(response => response.json())
            .then(data => {
                if (data.token) {
                    // Se o login for bem-sucedido, armazenar o token no localStorage
                    localStorage.setItem('token', data.token);
                    alert('Login bem-sucedido!');

                    // Redireciona para a página principal após o login
                    window.location.href = '/CommonUser'; // Substitua para a página desejada
                } else {
                    alert('Erro: ' + (data.error || 'Credenciais inválidas.'));
                }
            })
            .catch(error => {
                console.error('Erro ao tentar autenticar:', error);
                alert('Erro ao tentar autenticar!');
            });
        });


    </script>
</body>
</html>
