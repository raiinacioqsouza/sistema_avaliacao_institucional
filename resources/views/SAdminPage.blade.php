<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('/css/SAdmin.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Super Admin</title>
</head>
<body class="bg-light">

   <div >
    
        <header class="sadmin-header bg-dark d-flex justify-content-between align-items-center p-5 pb-5">
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
        <!-- <nav class="home-navbar">

        </nav> -->
        <section class="sadmin-questionaire-container">
            <div class="sadmin-search-quest-bar">
                <input type="text" class="sadmin-search-input" name="sadmin-search" placeholder="Pesquisar.." id="sadmin-search">
                <a href="#" rel="noopener noreferrer" class="sadmin-create-questionare-link">
                    Criar questionário
                </a>
            </div>

          <div class="sadmin-questionare-display">
            <div class="sadmin-questionare-list-container">
                <strong class="questionare-status">Aberto</strong>
                <div class="sadmin-questionare-description-container">
                    <a href="#" rel="noopener noreferrer"  class="sadmin-questionare-access-link" >
                        Avaliação Qualitativa da discilpina Web 2
                    </a>
                    <div class="sadmin-questionare-update-container">
                        <img src="\resources\imgs\icons\Notebook.svg" alt="Figura" class="sadmin-questionare-update-figure">
                        <p class="sadmin-questionare-update">Atualização: 20/09/2024</p>
                    </div>
                </div>

                <img src="\resources\imgs\icons\Chart_Bar_Vertical_01.svg" alt="Figura Dados" class="sadmin-questionare-data-fig">

                <p class="sadmin-questionare-responses">25 respostas </p>

                <a href="#" rel="noopener noreferrer" target="_blank" class="sadmin-questionare-analysis-link">
                    Analisar os resultados
                </a>

                <a href="#" class="sadmin-questionare-options">
                    <img src="\resources\imgs\icons\More_Horizontal.svg" alt="Menu Opções" class="sadmin-questionare-options-fig">
                </a>

            </div>
          </div>
        </section>
    
   
</body>
</html>