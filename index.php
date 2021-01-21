<?php

$titulo = "KdeliciaBolos - Página Inicial";
require_once "config.php";
include PROJECT_ROOT . "/parte_html/head.php";
include PROJECT_ROOT . "/parte_html/headerIndex.php" ?>

<body class="hidden-sn black-skin scrollbar scrollbar-night-fade">

    <main class="container">
        <p class="h1 text-center font-weight-bold fonte-principal text-uppercase">Bolos e Massas</p>
        <hr class="black">
    </main>

    <main class="container">
        <div class="row">
            <div class="col-md-6 mb-3">
                <div class="card brown">
                    <div class="view overlay">
                        <img src="img/banner/image-bolo.png" class="card-img-top container photoMassas" alt="Massas do bolo de chocolate" style="padding: 5px">
                        <a href="bolos.php">
                            <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>
                    <div class="card-body text-center">
                        <p class="card-title white-text fonte-principal h1 text-uppercase">Bolos</p>
                        <a href="bolos.php" class="btn btn-outline-white btn-rounded btn-block white-text btn-lg font-weight-bold">Quero ver</a>
                    </div> <!-- ./card-body text-center -->
                </div>
                <!--/.Card-->
            </div><!-- ./Col-md-6 mb-3 -->

            <div class="col-md-6 mb-3">
                <div class="card brown">
                    <div class="view overlay rounded">
                        <img src="img/banner/image-massa.png" class="card-img-top container photoMassas" alt="Massas do Bolo branco" style="padding: 5px">
                        <a href="massas.php">
                            <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>
                    <div class="card-body text-center">
                        <p class="card-title white-text fonte-principal h1 text-uppercase ">Massas</p>
                        <a href="massas.php" class="btn btn-outline-white btn-rounded btn-block white-text btn-lg font-weight-bold">Quero ver</a>
                    </div> <!-- ./card-body text-center -->
                </div>
                <!--/.Card-->
            </div><!-- ./Col-md-6 mb-3 -->
        </div><!-- Grid row -->
    </main><!-- ./end main -->

    <main></main>
</body>

<?php
include PROJECT_ROOT . "/parte_html/footer.php" ?>