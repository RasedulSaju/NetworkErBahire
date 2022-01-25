<!--Footer-->
<footer class="page-footer wow zoomIn stylish-color-dark text-center text-md-left mt-4 pt-4">

    <!--Footer Links-->
    <div class="container">

        <!-- Footer links -->
        <div class="row text-center text-md-left mt-3 pb-3">

            <!--First column-->
            <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                <h6 class="text-uppercase mb-4 font-weight-bold">Network Er Bahire</h6>
                <p>An easy tour and travel management system for foreigners & natives.<br /><b>Network Er Bahire</b> is a simple travel system that is created for <b>Software Engineering Laboratory</b> project</p>
            </div>
            <!--/.First column-->

            <hr class="w-100 clearfix d-md-none">

            <!--Second column-->
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                <h6 class="text-uppercase mb-4 font-weight-bold">Coded With</h6>
                <p>
                    <a href="#">HTML</a>
                </p>
                <p>
                    <a href="#">CSS</a>
                </p>
                <p>
                    <a href="#">JavaScript</a>
                </p>
                <p>
                    <a href="#">PHP</a>
                </p>
                <p>
                    <a href="#">MySQL</a>
                </p>
                <p>
                    <a href="#">Bootstrap</a>
                </p>
                <p>
                    <a href="#">Material Design Bootstrap</a>
                </p>
            </div>
            <!--/.Second column-->

            <hr class="w-100 clearfix d-md-none">

            <!--Third column-->
            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
                <h6 class="text-uppercase mb-4 font-weight-bold">Team Mates</h6>
                <p>
                    <a href="#" title="011 142 107">Alif Nomani Rahman</a>
                </p>
                <p>
                    <a href="#" title="011 172 096">Shifeata Kaderi (Borshon)</a>
                </p>
                <p>
                    <a href="#" title="011 173 047">Sayed Md. Nur Hossain</a>
                </p>
                <p>
                    <a href="#" title="011 173 069">Intekhab Alam</a>
                </p>
                <p>
                    <a href="#" title="011 181 002">Rakibul Islam</a>
                </p>
                <p>
                    <a href="#" title="011 181 007">Rasedul Islam</a>
                </p>
            </div>
            <!--/.Third column-->

            <hr class="w-100 clearfix d-md-none">

            <!--Fourth column-->
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                <h6 class="text-uppercase mb-4 font-weight-bold">Details</h6>
                <p>
                    <i class="fas fa-home mr-3"></i> United International University
                </p>
                <p>
                    <i class="fas fa-envelope mr-3"></i> CSI 322
                </p>
                <p>
                    <i class="fas fa-phone mr-3"></i> A
                </p>
                <p>
                    <i class="fas fa-print mr-3"></i> 2
                </p>
            </div>
            <!--/.Fourth column-->

        </div>
        <!-- Footer links -->

        <hr>

        <div class="row py-3 d-flex align-items-center">

            <!--Grid column-->
            <div class="col-md-7 col-lg-8">

                <!--Copyright-->
                <p class="text-center text-md-left grey-text">
                    &copy; <?php echo Date('Y') ?> Copyright: <a href="../NetworkErBahire/">Network Er Bahire</a>
                </p>
                <!--/.Copyright-->

            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-md-5 col-lg-4 ml-lg-0">

                <!--Social buttons-->
                <div class="social-section text-center text-md-left">
                    <ul class="list-unstyled list-inline">
                        <li class="list-inline-item mx-0">
                            <a href="https://www.facebook.com" target="_blank" class="btn-floating btn-sm rgba-white-slight mr-xl-4">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </li>
                        <li class="list-inline-item mx-0">
                            <a href="https://twitter.com" target="_blank" class="btn-floating btn-sm rgba-white-slight mr-xl-4">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                        <li class="list-inline-item mx-0">
                            <a href="https://www.youtube.com" target="_blank" class="btn-floating btn-sm rgba-white-slight mr-xl-4">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </li>
                        <li class="list-inline-item mx-0">
                            <a href="https://www.linkedin.com" target="_blank" class="btn-floating btn-sm rgba-white-slight mr-xl-4">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <!--/.Social buttons-->

            </div>
            <!--Grid column-->

        </div>

    </div>
</footer>

<!--/.Footer-->
<!-- SCRIPTS -->

<!-- JQuery -->
<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>

<!-- Bootstrap tooltips -->
<script type="text/javascript" src="js/popper.min.js"></script>

<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="js/bootstrap.min.js"></script>

<!-- MDB core JavaScript -->
<script type="text/javascript" src="js/mdb.min.js"></script>
<script>
    $(function() {
        var selectedClass = "";
        $(".filter").click(function() {
            selectedClass = $(this).attr("data-rel");
            $("#gallery").fadeTo(100, 0.1);
            $("#gallery div").not("." + selectedClass).fadeOut().removeClass('animation');
            setTimeout(function() {
                $("." + selectedClass).fadeIn().addClass('animation');
                $("#gallery").fadeTo(300, 1);
            }, 300);
        });
    });
</script>

<script>
    //Animation init
    new WOW().init();

    //Modal
    $('#myModal').on('shown.bs.modal', function() {
        $('#myInput').focus()
    })

    // Material Select Initialization
    $(document).ready(function() {
        $('.mdb-select').materialSelect();
    });

    // MDB Lightbox Init
    $(function() {
        $("#mdb-lightbox-ui").load("mdb-addons/mdb-lightbox-ui.html");
    });
</script>

<script>
    // Data Picker Initialization
    $('.datepicker').pickadate();
</script>
</body>

</html>