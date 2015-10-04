<script src="../js/run.js" type="text/javascript"></script>

<?php
$url="http://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
?>

<!--  jQuery library-->
<link href="../jsor-jcarousel/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="../jsor-jcarousel/skins/tango/skin.css" />
<script type="text/javascript" src="../jsor-jcarousel/lib/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="../jsor-jcarousel/lib/jquery.jcarousel.min.js"></script>
<script type="text/javascript">
function mycarousel_initCallback(carousel) {
    jQuery('.jcarousel-control a').bind('click', function() {
        carousel.scroll(jQuery.jcarousel.intval(jQuery(this).text()));
        return false;
    });
    jQuery('.jcarousel-scroll select').bind('change', function() {
        carousel.options.scroll = jQuery.jcarousel.intval(this.options[this.selectedIndex].value);
        return false;
    });
    jQuery('#mycarousel-next').bind('click', function() {
        carousel.next();
        return false;
    });
    jQuery('#mycarousel-prev').bind('click', function() {
        carousel.prev();
        return false;
    });
};
/*
jQuery(document).ready(function() {
    jQuery('#mycarousel').jcarousel({
       horizontal: true,
       scroll: 1,
     initCallback: mycarousel_initCallback
   });
});

jQuery(document).ready(function() {
    jQuery('#mycarousel2').jcarousel({
       horizontal: true,
       scroll: 1,
     initCallback: mycarousel_initCallback
   });

});
*/
</script>
<!--Fin  jQuery library-->

<script type="text/javascript">
$(document).ready(function(){

$(window).scroll(function(){
  if ($(this).scrollTop() > 100) {
    $('.scrollup').fadeIn();
  } else {
    $('.scrollup').fadeOut();
  }
});

$('.scrollup').click(function(){
  $("html, body").animate({ scrollTop: 0 }, 600);
  return false;
});

});
</script>


<style type="text/css">
.scrollup{
width:40px;
height:40px;
text-indent:-9999px;
opacity:0.9;
position:fixed;
bottom:50px;
right:100px;
display:none;
background: url('../imagenes/icon_top.png') no-repeat;
}
</style>

