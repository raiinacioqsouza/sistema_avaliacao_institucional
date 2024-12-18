<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criação de Questionários</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
</head>
<body class="bg-light">
    <!-- <header class="d-flex justify-content-between align-items-center p-3 bg-dark text-white">
        <div class="d-flex align-items-center">
            <img src="{{url('/imgs/logos/logo_ifnmg_sem_letras.png')}}" class="ms-4" style="width: 3rem" alt="Logo IFNMG">
            <div class="ms-3">
                <h2 class="mb-0">IFNMG - Campus Almenara</h2>
                <h3 class="mb-0">Sistema de Avaliação Institucional</h3>
            </div>
        </div>
        <div class="d-flex align-items-center me-4">
            <img src="{{url('/imgs/icons/User_02.svg')}}" class="me-2" style="width: 2rem" alt="Ícone Usuário">
            <p class="mb-0">Usuário Admin</p>
        </div>
    </header> -->

    <nav class="navbar navbar-expand-lg navbar-light bg-dark d-flex justify-content-between align-items-center p-3 text-white">
  <a class="navbar-brand" href="#"><img src="{{url('/imgs/logos/logo_ifnmg_sem_letras.png')}}" class="ms-4" style="width: 3rem" alt="Logo IFNMG"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse " id="navbarNav">
    <ul class="navbar-nav text-white">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Features</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Pricing</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </li>
    </ul>
  </div>
</nav>

    <main class="container my-4">
        <section class="bg-white p-4 rounded shadow-sm">
            <h1 class="text-center mb-4">Criar Novo Questionário</h1>
            <form>
                <div class="mb-3">
                    <label for="title" class="form-label">Título do Questionário</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Digite o título" required>
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Descrição</label>
                    <textarea class="form-control" id="description" name="description" placeholder="Digite a descrição do questionário" rows="3"></textarea>
                </div>

                <div class="mb-4">
                    <h2 class="mb-3">Perguntas</h2>
                    <div class="question-item border p-3 mb-3 rounded">
                        <div class="mb-3">
                            <label for="question1" class="form-label">Pergunta 1</label>
                            <input type="text" class="form-control" id="question1" name="question[]" placeholder="Digite a pergunta" required>
                        </div>

                        <div class="mb-3">
                            <label for="question_type1" class="form-label">Tipo de Resposta</label>
                            <select class="form-select" id="question_type1" name="question_type[]">
                                <option value="text">Resposta Textual</option>
                                <option value="multiple_choice">Escolha Múltipla</option>
                                <option value="rating">Avaliação</option>
                            </select>
                        </div>
                    </div>

                    <button type="button" class="btn btn-outline-primary w-100 mb-3">Adicionar Pergunta</button>
                </div>

                <button type="submit" class="btn btn-success w-100">Criar Questionário</button>
            </form>
        </section>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
