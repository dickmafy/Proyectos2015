<!DOCTYPE html>
<html>
<?php include './header.php'; ?>
<style>
.no-js #loader { display: none;  }
.js #loader { display: block; position: absolute; left: 100px; top: 0; }
.se-pre-con {
	position: fixed;
	left: 0px;
	top: 0px;
	width: 100%;
	height: 100%;
	z-index: 9999;
	background: url(imagen/logo.png) center no-repeat #fff;
}
</style>

<!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>-->
<!--<script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>-->
<script>
	//paste this code under head tag or in a seperate js file.
	// Wait for window load
	$( document ).ready(function() {
		// Animate loader off screen
		$(".se-pre-con").fadeOut(1000);;
	});
</script>
<body class="home page page-id-2564 page-template page-template-template-full-width-slideshow-php">
<!-- Paste this code after body tag -->
<div class="se-pre-con" style="background-color: black;">
            <!--contenido antes-->
            </div>
	<!-- Ends -->
	
	<div class="content">
	<!--contenido despues del cargador-->
	</div>

    <div id="main-container">
        <!--INICIO MENU --> <?php include './menu.php'; ?> <!-- FIN MENU -->
        <script type="text/javascript">
            jQuery(document).ready(function($) {
                $('#full-width-slider').pexetoSlideshow({
                    thumbContainerId: 'slider-navigation',
                    autoplay: true,
                    interval: 4000,
                    pauseInterval: 5000,
                    hideContent: true,
                    hideText: "Ocultar Menú",
                    showText: "Mostrar Menú"
                });
            });
        </script>

        <div style="height: auto; width: 100%; min-width: 0px; min-height: 0px;" id="full-width-slider" class="center">
            <div id="slider" class="slider-frame">
                <div id="slider-img-wrapper">
                    <div style="display: none;" class="loading"></div>


                    <img class="current" style="display: none; visibility: visible; height: auto; width: 100%; min-width: 0px; min-height: 0px; margin-left: 0px;" src="inicio_files/p1.jpg">
                    <img class="" style="display: none; visibility: visible; height: auto; width: 100%; min-width: 0px; min-height: 0px; margin-left: 0px; opacity: 1;" src="inicio_files/p2.jpg">
                    <img class="" style="display: none; visibility: visible; height: auto; width: 100%; min-width: 0px; min-height: 0px; margin-left: 0px; opacity: 1;" src="inicio_files/p3.jpg">
                    <img class="" style="display: block; visibility: visible; height: auto; width: 100%; min-width: 0px; min-height: 0px; margin-left: 0px; opacity: 1;" src="inicio_files/p4.jpg">
                    <img style="display: none; visibility: visible; height: auto; width: 100%; min-width: 0px; min-height: 0px; margin-left: 0px;" src="inicio_files/p5.jpg">
                    <img style="display: none; visibility: visible; height: auto; width: 100%; min-width: 0px; min-height: 0px; margin-left: 0px;" src="inicio_files/p6.jpg">
                    <img style="display: none; visibility: visible; height: auto; width: 100%; min-width: 0px; min-height: 0px; margin-left: 0px;" src="inicio_files/p7.jpg">
                    <img style="display: none; visibility: visible; height: auto; width: 100%; min-width: 0px; min-height: 0px; margin-left: 0px;" src="inicio_files/p8.jpg">
                    <img style="display: none; visibility: visible; height: auto; width: 100%; min-width: 0px; min-height: 0px; margin-left: 0px;" src="inicio_files/p9.jpg">
                    <img style="display: none; visibility: visible; height: auto; width: 100%; min-width: 0px; min-height: 0px; margin-left: 0px;" src="inicio_files/p10.jpg">
                    <img style="display: none; visibility: visible; height: auto; width: 100%; min-width: 0px; min-height: 0px; margin-left: 0px;" src="inicio_files/p11.jpg">
                    <img style="display: none; visibility: visible; height: auto; width: 100%; min-width: 0px; min-height: 0px; margin-left: 0px;" src="inicio_files/p12.jpg">
                    <img style="display: none; visibility: visible; height: auto; width: 100%; min-width: 0px; min-height: 0px; margin-left: 0px;" src="inicio_files/p13.jpg">
                    <img style="display: none; visibility: visible; height: auto; width: 100%; min-width: 0px; min-height: 0px; margin-left: 0px;" src="inicio_files/p14.jpg">
                    <img style="display: none; visibility: visible; height: auto; width: 100%; min-width: 0px; min-height: 0px; margin-left: 0px;" src="inicio_files/p15.jpg">
                    <img style="display: none; visibility: visible; height: auto; width: 100%; min-width: 0px; min-height: 0px; margin-left: 0px;" src="inicio_files/p16.jpg">

                </div>
            </div>
        </div>
        <div class="bg-image-pattern"></div>
        <div style="bottom: 0px;" id="slider-navigation-container" class="center with-arrows">
            <div id="slider-navigation-wrapper" class="relative">
                <a class="prev browse" id="left-arrow"></a>
                <a class="next browse" id="right-arrow"></a>
                <div style="visibility: visible;" id="slider-navigation">
                    <div class="items">
                        <div>
                            <div style="background-image: none;" class="thumbnail-wrapper"><img style="opacity: 1;" class="" src="inicio_files/timthumb_012.jpg" alt="">
                            </div>
                            <div style="background-image: none;" class="thumbnail-wrapper"><img class="" style="opacity: 1;" src="inicio_files/timthumb_002.jpg" alt="">
                            </div>
                            <div style="background-image: none;" class="thumbnail-wrapper"><img class="" style="opacity: 1;" src="inicio_files/timthumb_009.jpg" alt="">
                            </div>
                            <div style="background-image: none;" class="thumbnail-wrapper"><img class="active" style="opacity: 1;" src="inicio_files/timthumb_015.jpg" alt="">
                            </div>
                        </div>
                        <div>
                            <div style="background-image: none;" class="thumbnail-wrapper"><img style="opacity: 1;" src="inicio_files/timthumb_005.jpg" alt="">
                            </div>
                            <div style="background-image: none;" class="thumbnail-wrapper"><img style="opacity: 1;" src="inicio_files/timthumb_007.jpg" alt="">
                            </div>
                            <div style="background-image: none;" class="thumbnail-wrapper"><img style="opacity: 1;" src="inicio_files/timthumb_016.jpg" alt="">
                            </div>
                            <div style="background-image: none;" class="thumbnail-wrapper"><img style="opacity: 1;" src="inicio_files/timthumb.jpg" alt="">
                            </div>
                        </div>
                        <div>
                            <div style="background-image: none;" class="thumbnail-wrapper"><img style="opacity: 1;" src="inicio_files/timthumb_008.jpg" alt="">
                            </div>
                            <div style="background-image: none;" class="thumbnail-wrapper"><img style="opacity: 1;" src="inicio_files/timthumb_014.jpg" alt="">
                            </div>
                            <div style="background-image: none;" class="thumbnail-wrapper"><img style="opacity: 1;" src="inicio_files/timthumb_006.jpg" alt="">
                            </div>
                            <div style="background-image: none;" class="thumbnail-wrapper"><img style="opacity: 1;" src="inicio_files/timthumb_010.jpg" alt="">
                            </div>
                        </div>
                        <div>
                            <div style="background-image: none;" class="thumbnail-wrapper"><img style="opacity: 1;" src="inicio_files/timthumb_004.jpg" alt="">
                            </div>
                            <div style="background-image: none;" class="thumbnail-wrapper"><img style="opacity: 1;" src="inicio_files/timthumb_011.jpg" alt="">
                            </div>
                            <div style="background-image: none;" class="thumbnail-wrapper"><img style="opacity: 1;" src="inicio_files/timthumb_013.jpg" alt="">
                            </div>
                            <div style="background-image: none;" class="thumbnail-wrapper"><img style="opacity: 1;" src="inicio_files/timthumb_003.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

       <?php include 'footer.php';        ?>
    </div>
    <!-- end #main-container -->


    <!-- FOOTER ENDS -->

    <!-- ngg_resource_manager_marker -->
    <script type="text/javascript" src="inicio_files/public.js"></script>
    <script type="text/javascript" src="inicio_files/comment-reply.js"></script>


</body>

</html>
<!--
<li id="menu-item-2611" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-2611"><a href="#">Departamentos<span class="drop-arrow"></span></a>
                                            <ul class="sub-menu">
                                                <li id="menu-item-2557" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2557"><a href="<?=$comercial?>">Toquepala | Chacaria – Surco</a>
                                                </li>
                                                <li id="menu-item-2614" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2614"><a href="#">Pershing | San Isidro</a>
                                                </li>
                                                <li id="menu-item-2625" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2625"><a href="#">J. Strauss | San Borja</a>
                                                </li>                                                                                                            
                                                <li id="menu-item-2631" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2631"><a href="#">Bolognesi | La Punta</a>
                                                </li>                                                                                                            
                                                <li id="menu-item-2635" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2635"><a href="#">San Miguel</a>
                                                </li>                                                                                                            
                                                <li id="menu-item-2963" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2963"><a href="#">28 de Julio | Miraflores</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li id="menu-item-2640" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-2640"><a href="#">Residenciales<span class="drop-arrow"></span></a>
                                            <ul class="sub-menu">
                                                <li id="menu-item-2639" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2639"><a href="#">Pueblo Libre</a>
                                                </li>                                                                                                            
                                                <li id="menu-item-2644" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2644"><a href="#">Casa Higuereta</a>
                                                </li>                                                                                                            
                                                <li id="menu-item-2711" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2711"><a href="#">Los Lucumos | La Molina</a>
                                                </li>                                                                                                            
                                                <li id="menu-item-2648" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2648"><a href="#">Oceano Pacifico | Surco</a>
                                                </li>                                                                                                            
                                                <li id="menu-item-2657" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2657"><a href="#">Loma Amarilla | Monterrico</a>
                                                </li>                                                                                                            
                                                <li id="menu-item-2941" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2941"><a href="#">Pedro Dulanto | Barranco</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li id="menu-item-2547" class="menu-item menu-item-type-taxonomy menu-item-object-portfolio_category menu-item-has-children menu-item-2547"><a href="http://carlosmaza.com/portfolio_category/comerciales/">Comerciales<span class="drop-arrow"></span></a>
                                            <ul class="sub-menu">
                                                <li id="menu-item-2663" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2663"><a href="#">Cevicheria Jesús María</a>
                                                </li>                                                                                                            
                                                <li id="menu-item-2660" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2660"><a href="#">Boutique R&amp;R Moda</a>
                                                </li>                                                                                                            
                                                <li id="menu-item-2666" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2666"><a href="#">Chocolateria Dulciana</a>
                                                </li>                                                                                                            
                                                <li id="menu-item-2669" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2669"><a href="#">Perfumería</a>
                                                </li>
                                            </ul>
                                        </li>
-->