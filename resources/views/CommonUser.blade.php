<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Questionários disponíveis</title>
        <link rel="stylesheet" href="/resources/css/CommonUser.css" />
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
            href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
            rel="stylesheet"
        />
        <title>Super Admin</title>
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
            crossorigin="anonymous"
        />
    </head>
    <body>
        <header
            class="d-flex justify-content-between align-items-center p-3 bg-dark text-white"
        >
            <div class="d-flex align-items-center">
                <img
                    src="{{url('/imgs/logos/logo_ifnmg_sem_letras.png')}}"
                    class="ms-4"
                    style="width: 3rem"
                    alt="Logo IFNMG"
                />
                <div class="ms-3">
                    <h2 class="mb-0">IFNMG - Campus Almenara</h2>
                    <h2 class="mb-0">Sistema de Avaliação Institucional</h2>
                </div>
            </div>
            <div class="d-flex align-items-center me-5">
                <img
                    src="{{url('/imgs/icons/User_02.svg')}}"
                    class="me-2"
                    style="width: 2rem"
                    alt="Ícone Menu Usuario"
                />
                <p class="mb-0">Usuário Admin</p>
            </div>
        </header>

        <section class="container my-4">
            <div class="d-flex align-items-center mb-3">
                <img
                    src="{{url('/imgs/icons/Notebook_black.svg')}}"
                    class="me-3"
                    style="width: 3rem"
                    alt="Ícone Lista"
                />
                <h3 class="mb-0 fw-bold">Questionários disponíveis</h3>
            </div>

            <div class="d-flex flex-column align-items-center gap-3">
                <!--
                <div
                    class="d-flex align-items-center justify-content-between w-100 border border-light p-3 rounded shadow-sm"
                >
                    <span class="badge bg-success py-2 px-3">Aberto</span>
                    <div
                        class="flex-fill ms-3 text-white bg-primary p-3 rounded"
                    >
                        <p class="fw-bold mb-0">
                            Avaliação Qualitativa da disciplina Web 2
                        </p>
                    </div>
                    <a href="#" class="btn btn-dark text-white px-3"
                        >Visualizar/Responder</a
                    >
                </div>
                -->
                
            </div>
        </section>
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
