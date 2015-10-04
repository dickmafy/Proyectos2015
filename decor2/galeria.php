<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0042)http://www.chrisbarrettdesign.com/projects -->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><meta name="viewport" content="width=device-width">
<link rel="canonical" href="./galeria_files/galeria.html"><link rel="shortcut icon" href="http://www.chrisbarrettdesign.com/favicon.ico">
<link rel="icon" href="http://www.chrisbarrettdesign.com/animated_favicon1.gif" type="image/gif">
<title>Projects | Chris Barrett Design</title>


<!--<base href="http://www.chrisbarrettdesign.com/">--><base href=".">



<link rel="stylesheet" type="text/css" href="./galeria_files/stylesheet.php">


<link rel="start" title="Home Page, shortcut key=1" href="http://www.chrisbarrettdesign.com/">
<link rel="prev" title="About" href="http://www.chrisbarrettdesign.com/about">
<link rel="next" title="Chris Barrett Textiles" href="http://www.chrisbarrettdesign.com/textiles">

<!--[if IE 6]>
<script type="text/javascript" src="modules/MenuManager/CSSMenu.js"></script>
<![endif]-->


<!--[if IE 6]>
<script type="text/javascript"  src="uploads/NCleanBlue/js/ie6fix.js"></script>
<script type="text/javascript">
 // argument is a CSS selector
 DD_belatedPNG.fix('.sbar-top,.sbar-bottom,.main-top,.main-bottom,#version');
</script>
<style type="text/css">
/* enable background image caching in IE6 */
html {filter:expression(document.execCommand("BackgroundImageCache", false, true));} 
</style>
<![endif]-->

<script type="text/javascript" async="" src="./galeria_files/ga.js"></script><script type="text/javascript" src="./galeria_files/jsapi"></script>
	<script type="text/javascript">
		google.load("jquery", "1.4.2");
		google.load("jqueryui", "1.8.4");
	</script><script src="./galeria_files/jquery.min.js" type="text/javascript"></script><script src="./galeria_files/jquery-ui.min.js" type="text/javascript"></script>
<script type="text/javascript" src="./galeria_files/easing.js"></script>
<script type="text/javascript" src="./galeria_files/vgrid.js"></script>

<script type="text/javascript" src="./galeria_files/usy3mzm.js"></script>
<script type="text/javascript">try{Typekit.load();}catch(e){}</script>

  </head>  <body>
    <div id="header">
	            <a id="logo" href="http://www.chrisbarrettdesign.com/" class="default">Chris Barrett Design</a>
				 

<ul id="menu">


<li><a href="http://www.chrisbarrettdesign.com/about"><span>ABOUT</span></a>


</li>


<li class="currentpage"><span>PROJECTS</span>


</li>


<li><a href="http://www.chrisbarrettdesign.com/textiles"><span> TEXTILES</span></a>


</li>


<li><a href="http://www.chrisbarrettdesign.com/press"><span>PRESS</span></a>


</li>


<li><a href="http://www.chrisbarrettdesign.com/chris-likes"><span>CHRIS LIKES</span></a>


</li>


<li><a href="http://www.chrisbarrettdesign.com/showrooms"><span>SHOWROOMS</span></a>


</li>


<li><a href="http://www.chrisbarrettdesign.com/contact"><span>CONTACT</span></a>


</li>
</ul>

		</div>
		<div id="main">
	<script type="text/javascript" src="./galeria_files/prototype.js"></script>
    <script type="text/javascript" src="./galeria_files/scriptaculous.js"></script>
	<script type="text/javascript" src="./galeria_files/effects.js"></script>
    
    <script type="text/javascript" src="./galeria_files/carousel.js"></script>
<style>

.carousel .panel { text-align: center; position: absolute; width: 100%; height:100%; }
a#cleft { width: 39px; height: 50px; display: block; background: url(images/left.png); background-position: 0 0; position: absolute; top: 45%; left: 0px; z-index: 99; }
a#cright { width: 39px; height: 50px; display: block; background: url(images/right.png); background-position: 0 0; position: absolute; top: 45%; right: 0px; z-index: 99; }
a#cleft:hover, a#cright:hover { background-position: 0 -50px; }
#gthumbs img { filter: alpha(opacity=60); opacity: 0.6; margin-left: 5px; cursor:pointer; }
#gthumbs img.selected, #gthumbs img:hover { filter: alpha(opacity=100); opacity: 1; }

</style>
	<script type="text/javascript">

timers = new Array();
		oldSetTimeout = window.setTimeout;
		window.setTimeout = function(code, interval) {
		  timers.push(oldSetTimeout(code, interval));
		}

		function resetTimeouts() {
		  timers = new Array();
		}

		function clearTimeouts() {
		  for (var i= 0;i < timers.length; i++) {
			clearTimeout(timers[i]);
		  }
		  resetTimeouts();
		}
//Galleria.loadTheme('http://galleria.aino.se/media/galleria/src/themes/fullscreen/galleria.fullscreen.js');
	$(document).ready( function() {
		/*
		$(window).resize( function() {
			$('.carousel').height( ($(window).height()-140)+'px');
		});
		*/
		//$('#projects_list').css('margin-left', ($('#logo').position().left-45)+'px');
		if(!$.browser.msie) {
			$("#projects_list").vgrid({
				easeing: "easeOutQuint",
				time: 800,
				delay: 60,
				forceAnim: 1
				//, selRefGrid: "#projects_list div.gal"
				//, selFitWidth: ["#main", "#after"]
				//, gridDefWidth: 220 + 0 + 0 + 0
				,onFinish: function() {
					$("#projects_list").css({
						'width': '980px'
					});
				}
			
			});
		}
		else {
			$("#projects_list").css('height','auto');
		}
		
		$("#projects_list img").hover(function(){
			$(this).fadeTo("fast", 0.5);
		},function(){
			$(this).fadeTo("fast", 1);
		});
	})
	
	function gal_close() {
		$('body').css('overflow','auto');
		$('#galleria').hide();
		$('#galleria').html('');
	}

	var loaded = 0;
	function show_gal() {
		if(loaded==1) return;
		$('#loading').remove();
		$('#gtitle').show();
		$('.carousel').show();
		$('#gthumbs').show();
		loaded = 1;
	}
	
	function get_gallery(gid) {
		if(!gid) return;
		$('body').css('overflow','hidden');
		$('#galleria').css('top', $(window).scrollTop()+'px');
		$('#galleria').show();
		$('#galleria').html('<table id="loading" width="100%" height="100%"><tr><td align="center" valign="middle"><img src="images/loading.gif" alt="loading"/></td></tr></table><div id="gtitle" style="position:relative;text-align:center;height:70px;display:none;line-height:70px;font-size:14px"></div><div class="carousel" style="position:relative; width:100%; height:100%; display:none; overflow:hidden"></div><div id="gthumbs" style="padding:10px; display:none;height:50px"><table align="center" cellpadding="0" cellspacing="0"><tr></tr></table></div>');
		$.post('ajax.php', { action: 'projects', gid: gid }, function(response) {
			var data = eval( "(" + response + ")" );
			if(data.length==0) {
				alert('No photos');
				gal_close();
			}
			else {
				loaded = 0;
				$('.carousel').height( ($(window).height()-140)+'px');
				if(data.length>1) {
					$('.carousel').append('<a href="#" onclick="switch_panels_manual(-1); return false" id="cleft"></a>');
					$('.carousel').append('<a href="#" onclick="switch_panels_manual(1); return false" id="cright"></a>');
				}
				num_panels = data.length;
				current_panel = 1;
				$('#gtitle').html(data[0].title+'<a style="position:absolute;top:0px;right:20px;cursor:pointer;display:block;width:69px;height:69px;background:url(images/close.png) center no-repeat" href="#" onclick="gal_close(); return false"></a>');
				//$('#galleria').html($('#galleria').html() + '<div class="carousel" style="width:100%;height:100%;display:none">');
				for(var i in data) if(i!='length') {
					$('.carousel').append('<div id="panel'+(parseInt(i)+1)+'" class="panel"'+(i>0?' style="display:none"':'')+'"><img style="height:100%" src="'+data[i].image+'" alt="" '+(i==0?'onload="show_gal()"':'')+'/></div>');
					$('#gthumbs table tr').append('<td><img rel="'+(parseInt(i)+1)+'" id="'+(parseInt(i)+1)+'" '+(i==0?'class="selected" ':'')+'src="'+data[i].thumb+'" height="50" alt="" onclick="switch_panels_product('+(parseInt(i)+1)+')"/></td>');
					//if(i==data.length-1) alert(data[i].image);
				}
			}
		});
	}

</script>

<link rel="stylesheet" type="text/css" href="./galeria_files/galleria.fullscreen.css">
<div class="gal_menu">
		<a href="file:///C:/Users/DIEGO/Desktop/TEST/residencial.html">Residential</a>
		<a href="file:///C:/Users/DIEGO/Desktop/TEST/comercial.html">Commercial</a>
		<a href="./galeria_files/galeria.html" class="current">All</a>
	<div style="float:right;padding-right: 15px;line-height: 20px;">PROJECT TYPE: </div>
</div>
<div class="clear"></div>
	<div id="projects_list" style="position: relative; width: 980px; overflow: hidden; height: 1160px; display: block;">
						<div class="gal" id="285" style="margin: 0px 0px 40px 5px; position: absolute; left: 0px; top: 0px;">
					<a href="http://www.chrisbarrettdesign.com/project/12th-street" class="img">
						<!-- Old version : onclick="get_gallery(285);return false;" -->
						<img src="./galeria_files/290_small.jpg" alt="">
					</a>
					<span style="padding-left: 17px;">12TH STREET</span>
				</div>
						<div class="gal" id="293" style="position: absolute; left: 225px; top: 0px;">
					<a href="http://www.chrisbarrettdesign.com/project/mulholland-drive" class="img">
						<!-- Old version : onclick="get_gallery(293);return false;" -->
						<img src="./galeria_files/304_small.jpg" alt="" style="opacity: 1;">
					</a>
					<span style="padding-left: 17px;">MULHOLLAND DRIVE</span>
				</div>
						<div class="gal" id="254" style="position: absolute; left: 475px; top: 0px;">
					<a href="http://www.chrisbarrettdesign.com/project/wellesley-avenue" class="img">
						<!-- Old version : onclick="get_gallery(254);return false;" -->
						<img src="./galeria_files/263_small.jpg" alt="">
					</a>
					<span style="padding-left: 17px;">WELLESLEY AVENUE</span>
				</div>
						<div class="gal" id="6" style="position: absolute; left: 725px; top: 0px;">
					<a href="http://www.chrisbarrettdesign.com/project/mi-sueno" class="img">
						<!-- Old version : onclick="get_gallery(6);return false;" -->
						<img src="./galeria_files/230_small.jpg" alt="">
					</a>
					<span style="padding-left: 17px;">MI SUEÑO</span>
				</div>
						<div class="gal" id="264" style="margin: 0px 0px 40px 5px; position: absolute; left: 0px; top: 232px;">
					<a href="http://www.chrisbarrettdesign.com/project/6th-street" class="img">
						<!-- Old version : onclick="get_gallery(264);return false;" -->
						<img src="./galeria_files/265_small.jpg" alt="" style="opacity: 1;">
					</a>
					<span style="padding-left: 17px;">6TH STREET</span>
				</div>
						<div class="gal" id="74" style="position: absolute; left: 225px; top: 232px;">
					<a href="http://www.chrisbarrettdesign.com/project/aderno-street" class="img">
						<!-- Old version : onclick="get_gallery(74);return false;" -->
						<img src="./galeria_files/232_small.jpg" alt="">
					</a>
					<span style="padding-left: 17px;">ADERNO STREET</span>
				</div>
						<div class="gal" id="76" style="position: absolute; left: 475px; top: 232px;">
					<a href="http://www.chrisbarrettdesign.com/project/palisades-beach-road" class="img">
						<!-- Old version : onclick="get_gallery(76);return false;" -->
						<img src="./galeria_files/104_small.jpg" alt="">
					</a>
					<span style="padding-left: 17px;">PALISADES BEACH ROAD</span>
				</div>
						<div class="gal" id="20" style="position: absolute; left: 725px; top: 232px;">
					<a href="http://www.chrisbarrettdesign.com/project/san-onofre-drive" class="img">
						<!-- Old version : onclick="get_gallery(20);return false;" -->
						<img src="./galeria_files/21_small.jpg" alt="">
					</a>
					<span style="padding-left: 17px;">SAN ONOFRE DRIVE</span>
				</div>
						<div class="gal" id="32" style="margin: 0px 0px 40px 5px; position: absolute; left: 0px; top: 464px;">
					<a href="http://www.chrisbarrettdesign.com/project/comme-ca" class="img">
						<!-- Old version : onclick="get_gallery(32);return false;" -->
						<img src="./galeria_files/33_small.jpg" alt="">
					</a>
					<span style="padding-left: 17px;">COMME ÇA</span>
				</div>
						<div class="gal" id="88" style="position: absolute; left: 225px; top: 464px;">
					<a href="http://www.chrisbarrettdesign.com/project/sashi-sushi-sake-lounge" class="img">
						<!-- Old version : onclick="get_gallery(88);return false;" -->
						<img src="./galeria_files/89_small.jpg" alt="">
					</a>
					<span style="padding-left: 17px;">SASHI SUSHI + SAKE LOUNGE</span>
				</div>
						<div class="gal" id="40" style="position: absolute; left: 475px; top: 464px;">
					<a href="http://www.chrisbarrettdesign.com/project/32nd-and-the-strand" class="img">
						<!-- Old version : onclick="get_gallery(40);return false;" -->
						<img src="./galeria_files/41_small.jpg" alt="">
					</a>
					<span style="padding-left: 17px;">32ND AND THE STRAND</span>
				</div>
						<div class="gal" id="42" style="position: absolute; left: 725px; top: 464px;">
					<a href="http://www.chrisbarrettdesign.com/project/hotel-oceana" class="img">
						<!-- Old version : onclick="get_gallery(42);return false;" -->
						<img src="./galeria_files/144_small.jpg" alt="">
					</a>
					<span style="padding-left: 17px;">HOTEL OCEANA</span>
				</div>
						<div class="gal" id="44" style="margin: 0px 0px 40px 5px; position: absolute; left: 0px; top: 696px;">
					<a href="http://www.chrisbarrettdesign.com/project/brentwood" class="img">
						<!-- Old version : onclick="get_gallery(44);return false;" -->
						<img src="./galeria_files/55_small.jpg" alt="">
					</a>
					<span style="padding-left: 17px;">BRENTWOOD</span>
				</div>
						<div class="gal" id="63" style="position: absolute; left: 225px; top: 696px;">
					<a href="http://www.chrisbarrettdesign.com/project/loma-linda-drive" class="img">
						<!-- Old version : onclick="get_gallery(63);return false;" -->
						<img src="./galeria_files/64_small.jpg" alt="">
					</a>
					<span style="padding-left: 17px;">LOMA LINDA DRIVE</span>
				</div>
						<div class="gal" id="237" style="position: absolute; left: 475px; top: 696px;">
					<a href="http://www.chrisbarrettdesign.com/project/fisher-street" class="img">
						<!-- Old version : onclick="get_gallery(237);return false;" -->
						<img src="./galeria_files/239_small.jpg" alt="">
					</a>
					<span style="padding-left: 17px;">FISHER STREET</span>
				</div>
						<div class="gal" id="47" style="position: absolute; left: 725px; top: 696px;">
					<a href="http://www.chrisbarrettdesign.com/project/wildlife" class="img">
						<!-- Old version : onclick="get_gallery(47);return false;" -->
						<img src="./galeria_files/61_small.jpg" alt="">
					</a>
					<span style="padding-left: 17px;">WILDLIFE</span>
				</div>
						<div class="gal" id="86" style="margin: 0px 0px 40px 5px; position: absolute; left: 0px; top: 928px;">
					<a href="http://www.chrisbarrettdesign.com/project/" class="img">
						<!-- Old version : onclick="get_gallery(86);return false;" -->
						<img src="./galeria_files/87_small.jpg" alt="">
					</a>
					<span style="padding-left: 17px;">ROYAL CLEANERS</span>
				</div>
						<div class="gal" id="72" style="position: absolute; left: 225px; top: 928px;">
					<a href="http://www.chrisbarrettdesign.com/project/bel-air" class="img">
						<!-- Old version : onclick="get_gallery(72);return false;" -->
						<img src="./galeria_files/73_small.jpg" alt="">
					</a>
					<span style="padding-left: 17px;">BEL AIR</span>
				</div>
						<div class="gal" id="70" style="position: absolute; left: 475px; top: 928px;">
					<a href="http://www.chrisbarrettdesign.com/project/crescent" class="img">
						<!-- Old version : onclick="get_gallery(70);return false;" -->
						<img src="./galeria_files/71_small.jpg" alt="">
					</a>
					<span style="padding-left: 17px;">CRESCENT</span>
				</div>
			</div>
	
	<div style="clear:left" id="after"></div>
	<div id="galleria"></div>
	<div id="social">
		<div class="register">
		<!-- Begin MailChimp Signup Form -->
		<link href="./galeria_files/slim-081711.css" rel="stylesheet" type="text/css">
		<div id="mc_embed_signup" class="register_form">
		<form action="http://chrisbarrettdesign.us5.list-manage.com/subscribe/post?u=28047895ac841f31da09ce908&id=5847a89f88" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate="">
			<label class="register_title" for="mce-EMAIL">Join our mailing list!</label>
			<span class="form_container">
				<input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="Email address" required="">
				<input type="submit" value="Go" name="subscribe" id="mc-embedded-subscribe" class="button">
			</span>
		</form>
		</div>

		<!--End mc_embed_signup-->
		</div>
		<div style="float: right;">
			<a style="float: left; padding-left:5px;" href="http://www.facebook.com/pages/Chris-Barrett-Design/106822119366139" target="_blank"> <img src="./galeria_files/fb.jpg" alt="facebook"> </a> 
			<a style="float: left; padding-left:5px;" href="http://twitter.com/#!/cbarrettdesign" target="_blank"> <img src="./galeria_files/tw.jpg" alt="twitter"> </a>
			<a style="float: left; padding-left:5px;" href="http://instagram.com/chrisbarrettdesign" target="_blank"> <img src="./galeria_files/instagram.jpg" alt="instagram"> </a> 
			<a style="float: left; padding-left:5px;" href="http://pinterest.com/cbarrettdesign/" target="_blank"> <img src="./galeria_files/pinterest.jpg" alt="pinterest"> </a>
			<a style="float: left; padding-left:5px;" href="http://www.houzz.com/pro/chrisbarrett/chris-barrett-design" target="_blank"> <img src="./galeria_files/houzz.jpg" alt="houzz"> </a>
		</div>
	</div>
	

<!--[if lte IE 7]>
<style type="text/css">
	#social .register .register_form #mc-embedded-subscribe{
		line-height: 12px !important;		
		font-family:arial!important;
		border:none!important;
	}
	
	.form_container{
		border:1px solid #ccc;
	}
	
	.register_form #mce-EMAIL{
		line-height: 24px !important;
		border-left:none!important;
		border-top:none!important;
		border-bottom:none!important;
		border-right:1px solid #ccc;
	}
</style>
<![endif]-->
<!-- Add code here that should appear in the content block of all new pages -->
		</div>

         <div id="footer">
<script type="text/javascript">// <![CDATA[
var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-19272967-1']);
_gaq.push(['_trackPageview']);

(function() {
var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
})();
// ]]></script>
</div>

  

<span id="_vgridspan" style="display: none;"> </span></body></html>