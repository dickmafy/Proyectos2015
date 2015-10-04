/* Start of CMSMS style sheet 'Chris' */
body {
background: #fff;
margin:0;
padding:0;
font-family: proxima-nova-1, proxima-nova-2, tahoma;
/*font-family: proxima-nova-1,proxima-nova-2, tahoma;*/
font-size: 14px;
color: #bdbaba;
}
* { font-family: GothamBook !important; }
/*
@font-face {
	font-family: 'FuturaBkBTBook';
	src: url('font/futura_bk_bt_book-webfont.eot');
	src: local('☺'), url('font/futura_bk_bt_book-webfont.ttf') format('truetype'), url('font/futura_bk_bt_book-webfont.svg#webfonthzairim3') format('svg');
	font-weight: normal;
	font-style: normal;
}
*/
@font-face {
    font-family: 'GothamBook';
    src: url('font/gotham_book.eot');
    src: url('font/gotham_book.eot?#iefix') format('embedded-opentype'),
         url('font/gotham_book.woff') format('woff'),
         url('font/gotham_book') format('truetype'),
         url('font/gotham_book.svg#gotham_bookregular') format('svg');
    font-weight: normal;
    font-style: normal;
}
@font-face {
    font-family: 'GothamMedium';
    src: url('font/gotham_medium.eot');
    src: url('font/gotham_medium.eot?#iefix') format('embedded-opentype'),
         url('font/gotham_medium.woff') format('woff'),
         url('font/gotham_medium.ttf') format('truetype'),
         url('font/gotham_medium.svg#gotham_mediumregular') format('svg');
    font-weight: normal;
    font-style: normal;
}
#header {
padding: 0 50px;
width: 980px;
height: 120px;
margin: auto;
position: relative;
}
#logo {
position:absolute;
top: 18px;
left:50px;
width: 210px;
height: 120px;
display:block;
text-indent:-5000px;
}
#logo.default {
background: url(images/logo.png) -6px center no-repeat;
}

#logo.textiles {
background: url(uploads/images/logo-textiles.jpg) -6px center no-repeat;
}
#main {
min-width: 980px;
margin: auto;
padding: 0 50px 50px 50px;
}
ul#menu {
display:block;
float:right;
margin:0;
padding:55px 0 0;
line-height:40px;
}
ul#menu li {
list-style: none;
display: block;
float:left;
padding: 0 10px;
}
ul#menu li, ul#menu li a{
font-size: 14px;
}
a {
font-size: 13px;
color: #bdbaba;
text-decoration: none;
}
a:hover, li.currentpage {
color: #60a00e;
}
#footer{
display:none;
}

#slideshow {
    position:relative;
    margin: auto;
    width: 980px;
}

#slideshow img {
    position:absolute;
    top:0;
    left:0;
}


#projects_list {
overflow:hidden;
padding:0;
width:980px !important;
height: 500px;
margin: 15px auto;
margin-bottom: 0;
}
#projects_list img { border: 0; }
#projects_list .gal {
	float: left;
	width: 220px;
	height: 192px;
	text-align: center;
	margin:0 0 40px 30px;
	overflow: hidden;
}
#projects_list .gal span {
	line-height: 35px;
}
.img {
border: solid 1px #cdcdcd;
padding: 5px;
display: block;
}
.gal_menu {
color: #a4a3a3;
width: 972px;
margin: auto;
height: 25px;
}
.gal_menu a {
display:block;
color: #817c7c;
background: #d9d9d9;
padding: 2px 10px;
margin-left: 5px;
float: right;
-moz-border-radius: 5px;
}
.gal_menu a:hover, .gal_menu a.current {
background: #7c9b3d;
color: #fffbfb;
}

.clear { clear: both; }

#press_list {
overflow:hidden;
padding:0;
width:980px;
height: 500px;
margin: 35px auto;
margin-bottom: 0;
text-align: center;
}
#press_list .press {
float: left;
padding: 0;
margin: 0 0px 10px 30px;
width: 300px;
height: 270px;
}
#press_list .press .img {
border: solid 1px #e1e1e1;
padding: 6px;
}
#press_list .press .title a {
line-height: 28px;
text-transform: uppercase;
color: #999999;
text-align: center;
font-size: 14px;
}
.fl { float: left; }
#galleria {
position: absolute;
top: 0px;
left: 0px;
height: 100%;
width: 100%;
overflow: hidden;
display:none;
z-index: 999;
background: #fff;
}
#social {
width:980px;
margin:auto;
padding-top:23px;
}
#social a {
float:right;
margin-left: 6px;
margin-top:15px;
}
#social a img {
border:0;
}
.register_form #mce-EMAIL{
width:154px!important;
padding:0 0 0 5px !important;
height:22px;
float:left;
border:1px solid #ccc;
margin:0!important;
color:#6C6C6C;
}

#social .register .register_form #mc-embedded-subscribe{
width:36px!important;
height:24px!important;
float:left;
padding:0!important;
margin:0!important;
background:#fff!important;
min-width:36px;
border-bottom:1px solid #ccc!important;
border-right:1px solid #ccc!important;
border-top:1px solid #ccc!important;
color:#ccc!important;
font-size:13px!important;
-webkit-border-radius: 0px;
-moz-border-radius: 0px;
border-radius: 0px;
clear:none;
line-height:0px!important;
}

#social .register .register_form .form_container{
 width:200px;
float:left;
height:auto;
}

.register_title{
   color: #669900;
    font-size: 12px !important;
    font-weight: bold !important;
    padding-bottom: 10px !important;
    width: 100%;
}

.register_form form{
padding:0!important;
}

.register_form{
 width:20%;
float:left;
text-align:left!important;
}

.contact_register{
width:400px;
float:left;
margin-top:10px;
}

.contact_register .register_form{
 width:100%!important;
float:left;
text-align:left!important;
}


.contact_register .register_title{
width:35%!important;
line-height: 25px;
}

.contact_register .register_form #mc-embedded-subscribe{
width:36px!important;
height:24px!important;
float:left;
padding:0!important;
margin:0!important;
background:#fff!important;
min-width:36px;
border-bottom:1px solid #ccc!important;
border-right:1px solid #ccc!important;
border-top:1px solid #ccc!important;
color:#ccc!important;
font-size:13px!important;
-webkit-border-radius: 0px;
-moz-border-radius: 0px;
border-radius: 0px;
clear:none;
line-height:0px!important;
}
table.showrooms {
margin-top:15px;
border-top:solid 1px #e2e2e2;
}
table.showrooms td {
color: #333333;
}
table.showrooms td span.title {
color: #669900;
}
/* End of 'Chris' */

