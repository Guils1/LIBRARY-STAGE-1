<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
<body>

<main class="container-md mt-2">
    <div id="carouselExampleControls" class="carousel slide mt-3" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://umlivropordia.com.br/wp-content/uploads/2022/08/1500x660-kindleUnlimited.jpeg"
                    class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://sm.ign.com/t/ign_it/screenshot/default/kindle-unlimited-over-one-million-ebooks-bookwall-desktop-15_hw21.1280.jpg"
                    class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://gkpb.com.br/wp-content/uploads/2021/04/gkpb-kindle-unlimited.jpeg"
                    class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" id="seta" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" id="seta" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="row justify-content-center mt-4 mb-2">
        <div class="col col-lg-12 mt-2">
            <div class="alert alert-success" id="epc" role="alert">
                <h4 class="alert-heading" style="text-align: center;">Frases de incentivo à leitura que vão provar que para voar só é preciso
                    ter imaginação!</h4>
                <hr>
                <p class="mb-0">Em meio a tantas tecnologias e informações, ter o hábito de ler se tornou algo raro
                    e pouco valorizado por parte da nova geração. O que precisamos entender é que geralmente são os
                    livros que alimentam a imaginação dos criadores dessas inovações. Selecionamos as mais
                    inspiradoras frases de incentivo à leitura que, com certeza, vão despertar a sua criatividade.
                    Confira!</p>
            </div>
        </div>


        <!-- --------------Cards -->

        <div class="card-group">
            <div class="card">
                <img src="https://www.frasesdobem.com.br/wp-content/uploads/2020/11/se-existem.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title">Karyne Santiago</h5>
                <p class="card-text">Se existem tantos livros para ler, é porque ainda existe muita coisa para se aprender.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>
            <div class="card">
                <img src="https://www.frasesdobem.com.br/wp-content/uploads/2020/11/ler-e.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title">Karyne Santiago</h5>
                <p class="card-text">Ler é conhecer o mundo com a imaginação.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>
            <div class="card">
                <img src="https://www.frasesdobem.com.br/wp-content/uploads/2020/11/ler-um.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title">Karyne Santiago</h5>
                <p class="card-text">Ler um livro é nunca estar só.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>
            </div>

            <!-- -------------------------- -->

            <div class="card-group mt-3">
            <div class="card">
                <img src="https://www.frasesdobem.com.br/wp-content/uploads/2020/11/a-leitura.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title">Karyne Santiago</h5>
                <p class="card-text">A leitura exercita o cérebro e acalma a alma.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>
            <div class="card">
                <img src="https://www.frasesdobem.com.br/wp-content/uploads/2020/11/doses-diarias.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title">Karyne Santiago</h5>
                <p class="card-text">Doses diárias de leitura rejuvenescem a alma.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>
            <div class="card">
                <img src="https://www.frasesdobem.com.br/wp-content/uploads/2020/11/quem-mal.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title">Karyne Santiago</h5>
                <p class="card-text">Quem mal lê, mal ouve, mal fala, mal vê.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>
            </div>

            <?php 
                if($_GET['v'] == 'books'){
                    include_once('backend/conexao.php');
                    include_once('frontend/books.php');
                }else if($_GET['v'] == 'insertbooks'){
                    include_once('backend/conexao.php');
                    include_once('frontend/insertbooks.php');
                }else {
                    include_once('index.php');
                }
            ?>

        <!-- --------------Cards -->
</main>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
    crossorigin="anonymous"></script>
</body>
</html>