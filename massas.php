<?php

$titulo = "KdeliciaBolos - Página Inicial";
require_once "config.php";
include PROJECT_ROOT . "/parte_html/head.php";
include PROJECT_ROOT . "/parte_html/headerIndex.php" ?>

<body class="hidden-sn black-skin scrollbar scrollbar-night-fade">

    <main class="container">
        <p class="h1 text-center font-weight-bold fonte-principal text-uppercase">Massas</p>
        <hr class="black" style="size: 2px">
    </main>


    <main class="container">

        <div class="row">
            <div class="col-md-6 mb-4">
                <!--Card-->
                <div class="card brown photoMassas">
                    <div class="view">
                        <img src="img/massasDeBolos/chocolate.png" class="card-img-top" alt="Massa de Chocolate">
                    </div>
                    <div class="card-body text-center">
                        <p class="card-title font-weight-bold white-text h3">Massa de Chocolate</p>
                        <p class="card-title white-text h4">R$ 40,00 p/ Kg</p>
                    </div> <!-- ./ End card-body text-center -->
                </div> <!-- ./ End card default-color-dark -->
            </div> <!-- End -->

            <div class="col-md-6 mb-4">
                <!--Card-->
                <div class="card brown photoMassas">
                    <div class="view">
                        <img src="img/massasDeBolos/branca.png" class="card-img-top" alt="Massa de Branca">
                    </div>
                    <div class="card-body text-center">
                        <p class="card-title font-weight-bold white-text h3">Massa Branca</p>
                        <p class="card-title white-text h4">R$ 40,00 p/ Kg</p>
                    </div> <!-- ./ End card-body text-center -->
                </div>
                <!-- ./ End card default-color-dark -->
                <!-- End Card -->
            </div> <!-- End -->
        </div><!-- Grid row -->
    </main>


</body>


<?php
include PROJECT_ROOT . "/parte_html/footer.php" ?>