<footer class="page-footer text-center text-md-left pt-4 footer-size brown">
    <div class="footer-copyright py-3 text-left">
        <!--Social buttons-->
        <div class="social-section text-center">
            <div class="text-center ml-auto">
                <ul class="list-unstyled list-inline">
                    <a href="https://www.facebook.com/salete.devargasferreirapersch" target="_blank">
                        <button type="button" class="btn btn-floating btn-rounded btn-fb" data-toggle="tooltip" data-placement="top" title="Facebook">
                            <i class="fab fa-facebook-f fa-2x"></i>
                        </button>
                    </a> <!-- Facebook -->
                    <a href="https://www.instagram.com/salettepersch/" target="_blank">
                        <button type="button" class="btn btn-floating btn-rounded purple-gradient" data-toggle="tooltip" data-placement="top" title="Instagram">
                            <i class="fab fa-instagram fa-2x"></i>
                        </button>
                    </a> <!-- Instagram -->
                    <a href="https://wa.me/5569999160127" target="_blank">
                        <button type="button" class="btn btn-floating btn-rounded btn-success" data-toggle="tooltip" data-placement="top" title="WhatsApp">
                            <i class="fab fa-whatsapp fa-2x white-text"></i>
                        </button>
                    </a> <!-- Whatsapp -->
                </ul>
                <!-- ./End list-unstyled list-inline -->
            </div>
            <!-- ./End text-center ml-auto -->
        </div>
        <!-- ./End social-section text-center -->

        <div class="container-fluid float-right">
            <p class="white-text">Feito por
                <a href="https://www.facebook.com/thiago.persch" class="white-text font-footer font-weight-bold" target="_blank">PERSCH DEVELOPMENT&nbsp;</a>
                <i class="far fa-copyright"></i>
            </p>
        </div>
        <!-- ./End container-fluid float-right -->
    </div>
    <!--/.Social buttons-->
</footer>

<!-- Compiled and minified JavaScript -->
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="js/popper.min.js"></script>
<script type="text/javascript" src="js/mdb.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/scrolling-nav.js"></script>

<script type="text/javascript">
    // Material Select Initialization
    $(document).ready(function() {
        $('.mdb-select').materialSelect();
    });

    // SideNav Initialization
    $(".button-collapse").sideNav();

    new WOW().init()

    // Tooltips Initialization
    $(function() {
        $('[data-toggle="tooltip"]').tooltip()
    })
    $('.carousel').carousel()


    $('.carousel.carousel-multi-item.v-2 .carousel-item').each(function() {
        var next = $(this).next();
        if (!next.length) {
            next = $(this).siblings(':first');
        }
        next.children(':first-child').clone().appendTo($(this));

        for (var i = 0; i < 4; i++) {
            next = next.next();
            if (!next.length) {
                next = $(this).siblings(':first');
            }
            next.children(':first-child').clone().appendTo($(this));
        }
    });
</script>