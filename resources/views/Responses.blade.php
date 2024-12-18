<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/resources/css/Responses.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Respostas</title>
</head>
<body class="bg-light">
    <header class="responses-header bg-dark d-flex justify-content-between align-items-center p-5 pb-5">
        <div class="d-flex align-items-center">
            <img src="{{url('/imgs/logos/logo_ifnmg_sem_letras.png')}}" class="ms-4" style="width: 3rem" alt="Logo IFNMG">
            <div class="ml-3 text-white">
                <h2 class="responses-logo-title mb-1 responsive-title">IFNMG - Campus Almenara</h2>
                <h2 class="responses-logo-description mb-0 responsive-description">Sistema de Avaliação Institucional</h2>
            </div>
        </div>
        <div class="d-flex align-items-center text-white">
            <img src="{{url('/imgs/icons/User_02.svg')}}" class="responses-user-icon mr-2" alt="Ícone Menu Usuario">
            <p class="mb-0 responsive-user">Usuário Admin</p>
        </div>
    </header>
    

    <section class="responses-main-container container mt-5">
        <div class="header-container d-flex justify-content-between align-items-center mb-4">
            <div class="d-flex align-items-center">
                <img src="{{url('/imgs/icons/Chart_Bar_Vertical_01.svg')}}" alt="Ícone Gráfico Barras" class="responses-desc-icon mr-2">
                <strong class="responses-title">Estatísticas do Questionário</strong>
            </div>
            <a href="#" class="btn btn-outline-dark export-link">Exportar</a>
        </div>

        <div class="responses-data-container">
            <div class="discipline-desc-container p-3 border rounded d-flex align-items-center mb-4">
                <p class="discipline-text mb-0 mr-2">Disciplina Atual:</p>
                <span class="discipline-desc bg-primary text-white px-3 py-1 rounded">Web 2</span>
            </div>

            <div class="question-response-container">
                <p class="question mb-3">1 - Como você avalia o seu grau de domínio da disciplina web 2?</p>
                -- Grafico gerado pelo js com dados do banco de dados
                -- imagem ilustrativa somente para prototipo <img src="{{url('/imgs/grafico-1.png')}}" alt="gráfico questão 1" class="response-graphic-img img-fluid">
            </div>
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
