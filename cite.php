<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Theme The Band</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
      <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
          <link rel="stylesheet" href="css/main.css">
          <link rel="stylesheet" href="css/right.css">
           <link rel="stylesheet" href="css/styleing.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
  
  
<!-- REVOLUTION BANNER CSS SETTINGS -->
<link rel="stylesheet" href="http://edumefree.com/_css_ar/fullwidth.css" media="screen" >
<link rel="stylesheet" href="http://edumefree.com/_rs-plugin/css/settings.css" media="screen" >

<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<!-- Jquery -->
<script src="http://edumefree.com/_js/jquery.js"></script>
<!-- Support media queries for IE8 -->
<script src="http://edumefree.com/_js/respond.min.js"></script>

<!-- HTML5 and CSS3-in older browsers-->
<script src="http://edumefree.com/_js/modernizr.custom.17475.js"></script>
	
	<style>
 body {
      font: 400;
     font-size: 22px;
      line-height: 1.8;
      color: #818181;
  }
  h2 {
      font-size: 24px;
      text-transform: uppercase;
      color: #303030;
      font-weight: 600;
      margin-bottom: 30px;
  }
  h4 {
      font-size: 19px;
      line-height: 1.375em;
      color: #303030;
      font-weight: 400;
      margin-bottom: 30px;
  }  
  .jumbotron {
      background-color: #f4511e;
      color: #fff;
      padding: 100px 25px;
      font-family: Montserrat, sans-serif;
  }
  .container-fluid {
      padding: 60px 50px;
  }
  .bg-grey {
      background-color: #f6f6f6;
  }
  .logo-small {
      color: #f4511e;
      font-size: 50px;
  }
  .logo {
      color: #f4511e;
      font-size: 200px;
  }
  .thumbnail {
      padding: 0 0 15px 0;
      border: none;
      border-radius: 0;
  }
  .thumbnail img {
      width: 100%;
      height: 100%;
      margin-bottom: 10px;
  }
  .carousel-control.right, .carousel-control.left {
      background-image: none;
      color: #f4511e;
  }
  .carousel-indicators li {
      border-color: #f4511e;
  }
  .carousel-indicators li.active {
      background-color: #f4511e;
  }
  .item h4 {
      font-size: 19px;
      line-height: 1.375em;
      font-weight: 400;
      font-style: italic;
      margin: 70px 0;
  }
  .item span {
      font-style: normal;
  }
  .panel {
      border: 1px solid #f4511e; 
      border-radius:0 !important;
      transition: box-shadow 0.5s;
  }
  .panel:hover {
      box-shadow: 5px 0px 40px rgba(0,0,0, .2);
  }
  .panel-footer .btn:hover {
      border: 1px solid #f4511e;
      background-color: #fff !important;
      color: #f4511e;
  }
  .panel-heading {
      color: #fff !important;
      background-color: #f4511e !important;
      padding: 25px;
      border-bottom: 1px solid transparent;
      border-top-left-radius: 0px;
      border-top-right-radius: 0px;
      border-bottom-left-radius: 0px;
      border-bottom-right-radius: 0px;
  }
  .panel-footer {
      background-color: white !important;
  }
  .panel-footer h3 {
      font-size: 32px;
  }
  .panel-footer h4 {
      color: #aaa;
      font-size: 14px;
  }
  .panel-footer .btn {
      margin: 15px 0;
      background-color: #f4511e;
      color: #fff;
  }
      #about ul li a {
        font-size: 22px;  
      }
  .navbar {
      margin-bottom: 0;
      background-color: #f4511e;
      z-index: 9999;
      border: 0;
      font-size: 16px !important;
      line-height: 1.42857143 !important;
      letter-spacing: 4px;
      border-radius: 0;
      font-family: Montserrat, sans-serif;
  }
  .navbar li a, .navbar .navbar-brand {
      color: #fff !important;
  }
  .navbar-nav li a:hover, .navbar-nav li.active a {
      color: #f4511e !important;
      background-color: #fff !important;
  }
  .navbar-default .navbar-toggle {
      border-color: transparent;
      color: #fff !important;
  }
  footer .glyphicon {
      font-size: 20px;
      margin-bottom: 20px;
      color: #f4511e;
  }
  .slideanim {visibility:hidden;}
  .slide {
      animation-name: slide;
      -webkit-animation-name: slide;
      animation-duration: 1s;
      -webkit-animation-duration: 1s;
      visibility: visible;
  }
  @keyframes slide {
    0% {
      opacity: 0;
      transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      transform: translateY(0%);
    }
  }
  @-webkit-keyframes slide {
    0% {
      opacity: 0;
      -webkit-transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      -webkit-transform: translateY(0%);
    }
  }
  @media screen and (max-width: 768px) {
    .col-sm-4 {
      text-align: center;
      margin: 25px 0;
    }
    .btn-lg {
        width: 100%;
        margin-bottom: 35px;
    }
  }
  @media screen and (max-width: 480px) {
    .logo {
        font-size: 150px;
    }
  }
  </style>
  
  <style>
      
 
  /*Start Header */  
      
   body {
    direction: rtl;
    float: left;
    overflow-x: hidden;
    width: 100%;
}
      header {
    background-color:ottom: 0;
    background-color: #f4511e;
    z-index: 9999;
    border: 0;
    font-size: 16px !important;
    line-height: 1.42857143 !important;
    letter-spacing: 4px;
    border-radius: 0;;
    padding: 8px 0;
}
      #logo {
    float: right;
}
      a {
    color: #0088cc;
    text-decoration: none;
}
      
      img {
    width: auto\9;
    height: auto;
    max-width: 100%;
    vertical-align: middle;
    border: 0;
    
}
      
      [class*="span"] {
    float: right;
    min-height: 1px;
}
      form {
        margin: 20px auto;  
      }
    form input [type="text"] {
    background-color: #ffffff;
    border: 1px solid #e2e2e2;
    box-shadow: 0 0 8px #e3e3e3 inset;
    transition: border linear .2s, box-shadow linear .2s;
      }
      form input [type="button"]{ border: none;
    background: #099ad1;
    color: #fff;
    padding: 7px 12px;
    text-decoration: none;
    transition: background .5s ease;
    -moz-transition: background .5s ease;
    -webkit-transition: background .5s ease;
    -o-transition: background .5s ease;
    display: inline-block;
    cursor: pointer;
    font-weight: 700;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    border-radius: 3px;
      
      }
      
      #contact_header {
    float: right;
    text-align: left;
}
      
    #phone {
    background: url(../../../_img/icon-phone.png) no-repeat scroll left center transparent !important;
    padding-left: 46px;
    text-align: left !important;
    float: left !important;
    font-size: 12px;
    color: #FFF;
    margin-top: 5px;
    direction: ltr;
}
      
    #phone strong {
    font-size: 18px;
    color: #66cccc;
    font-weight: 700;
    display: block;
}  

      #menu-top {
    float: left;
    color: #D0DBEB;
    font-size: 11px;
    margin-left: 0;
    margin-top: 0px;
}
      ul, ol {
    padding: 0;
    margin: 0 0 0;
    list-style: none;
}
      #menu-top ul li {
    display: inline-block;
    zoom: 1;
}
      }
#logo{
	float: right;
}
#contact_header{
	float: right;
	text-align: left;
}
#contact_header [class*="span"] {
    float: right;
    min-height: 1px;
    margin-right: 30px;
}
#phone {
    background: url("../../../_img/icon-phone.png") no-repeat scroll left center transparent !important;
    padding-left: 46px;
    text-align: left !important;
    float: left !important;
    font-size: 12px;
    color: #FFF;
    margin-top: 5px;
    direction: ltr
}
#menu-top {
    float: left;
    color: #D0DBEB;
    font-size: 11px;
    margin-left: 0;
    margin-top: 0px;
}

megamenu > li .drop-down-container.normal {
    position: absolute;
    top: 50px;
    left: -42px;
    left: inherit;
    display: none;
    width: auto;
    padding-top: 0px;
    padding-bottom: 0px;
    background: transparent none repeat scroll 0% 0%;
    right: inherit;
}

		@font-face {
	font-family: Droid Arabic Kufi;
	src: url("http://edumefree.com/font/DroidKufi-Regular.eot") /* EOT file for IE **/
	}
	@font-face {
		font-family: Droid Arabic Kufi;
		src: url("http://edumefree.com/font/DroidKufi-Regular.ttf") /* TTF file for CSS3 browsers*/
	}
	@font-face {
		font-family: 'DroidKufi-Regular';
		src: url(http://edumefree.com/font/GESSTwoMedium.otf);
		font-weight: normal;
		font-style: normal;
	}
	body{
		font-family: Droid Arabic Kufi;
	}
	
	.megamenu > li .drop-down-container.normal {
    position: absolute;
    top: 50px;
    left: 0;
    right: inherit;
    display: none;
    width: auto;
    padding-top: 0px;
    padding-bottom: 0px;
    background: none repeat scroll 0% 0% transparent;
}
      
      
      /* End Header  */
      
      
      
      
      .megamenu_container {
    width: 755px;
    height: auto;
    margin: auto;
    position: relative;
    left: auto;
    top: auto;
}
      
      
      header{
	background-color:#2d343e;
	padding:8px 0;
}
#menu-top{
	float:left;
	color:#d0dbeb;
	font-size:11px;
	margin-left:30px;
	margin-top:5px;
}
#menu-top ul li{
	display:inline-block;
	zoom: 1; *display: inline;
}
#menu-top ul li a {
	color:#d0dbeb;
}

.ie7 #menu-top ul li a {
	color:#d0dbeb;
	margin-left:5px;
}
nav{
	width:100%;
	background:#0099cc;
	/* Old browsers */
	background:#0099cc -moz-linear-gradient(top,rgba(255,255,255,.2) 0%,rgba(0,0,0,.2) 100%);
	/* FF3.6+*/
	background:#0099cc -webkit-gradient(linear,left top,left bottom,color-stop(0%,rgba(255,255,255,.2)),color-stop(100%,rgba(0,0,0,.2)));
	/* Chrome,Safari4+*/
	background:#0099cc -webkit-linear-gradient(top,rgba(255,255,255,.2) 0%,rgba(0,0,0,.2) 100%);
	/* Chrome10+,Safari5.1+*/
	background:#0099cc -o-linear-gradient(top,rgba(255,255,255,.2) 0%,rgba(0,0,0,.2) 100%);
	/* Opera11.10+*/
	background:#0099cc -ms-linear-gradient(top,rgba(255,255,255,.2) 0%,rgba(0,0,0,.2) 100%);
	/* IE10+*/
	background:#0099cc linear-gradient(top,rgba(255,255,255,.2) 0%,rgba(0,0,0,.2) 100%);
	margin-bottom:10px;
	color:#fff;
}
#phone {
	background:url(../_img/icon-phone.png) no-repeat center right;
	padding-right:46px;
	text-align:right;
	float:left;
	font-size:12px;
	color: #fff;
	margin-top:5px;
}
#phone strong {
	font-size:18px;
	color: #66cccc;
	font-weight:700;
	display:block;
}
    
      #services span {
          
      }
      
      
/* #Site Footer
================================================ */
footer {
	background-color:#fff;
	color:#666;
	border-top: 1px solid #e0eaf0;
	width:100%;
	padding-top:60px;
	padding-bottom:45px;
}
#brand-footer {
	text-align:center;
}

#contacts-footer ul {
	list-style:none; 
	margin-left:0;
}
#contacts-footer ul li {
	line-height:25px;
}
#quick-links ul {
	list-style:none; 
	margin-left:0;
}
#quick-links ul li {
	background:url(../_img/arrow-gray.png) right center no-repeat;
	padding-right:15px; 
}
      
      
      
/* #Homepage
================================================ */
#main-boxes {
	margin-top:-35px;
	position:relative;
	z-index:1;
	margin-bottom:35px;
}
.feat h3{
	text-shadow: 1px 2px 0px rgba(255,255,255,1);
}
/* #Sliders */
#static-image {
	width:100%;
	max-width:100%;
	margin-top:-20px;
	text-align:center;
	background-color:#0099cc;
}

.feat {
	padding-right:60px;
	position:relative;
	margin-bottom:20px;
}
.feat.last {
	margin-bottom:0px;
}
.feat i {
	color:#F66;
	right:0;
	margin:0;
	padding:0;
	position:absolute;
}
      
/*============================================================================================*/
/* 2. PAGES AND CONTENT */
/*============================================================================================*/

/* #Homepage
================================================ */
#main-boxes {
	margin-top:-35px;
	position:relative;
	z-index:1;
	margin-bottom:35px;
}
.feat h3{
	text-shadow: 1px 2px 0px rgba(255,255,255,1);
}
/* #Sliders */
#static-image {
	width:100%;
	max-width:100%;
	margin-top:-20px;
	text-align:center;
	background-color:#0099cc;
}

.feat {
	padding-right:60px;
	position:relative;
	margin-bottom:20px;
}
.feat.last {
	margin-bottom:0px;
}
.feat i {
	color:#F66;
	right:0;
	margin:0;
	padding:0;
	position:absolute;
}
/* #Courses
================================================ */
.col-left {
	padding:30px 30px 15px 30px;
	background-color:#fff;
	border: 1px solid #e2e2e2;
	-webkit-border-radius: 5px;
	-moz-border-radius: 5px;
	border-radius: 5px;
	margin-bottom:30px;
	position:relative;
}
.col-right{
	padding:30px 30px 15px 30px;
	background-color:#fff;
	border: 1px solid #e2e2e2;
	-webkit-border-radius: 5px;
	-moz-border-radius: 5px;
	border-radius: 5px;
	margin-bottom:60px;
	position:relative;
}
.col-left h3, .widget h4 {
	text-transform:uppercase;
	font-size:14px;
	color:#bbbbbb;
	margin:0 0 15px 0;
	padding:0;
	line-height:17px;
}
ul.submenu-col {
	list-style:none;
	margin:0;
	padding:0;
	font-weight:700;
	font-size:14px;
}
ul.submenu-col li a {
	text-decoration:none;
	padding: 4px 10px;
	display:block;
	margin-bottom:3px;
}
ul.submenu-col li a#active {
	background:#099ad1 url(../_img/arrow.png) no-repeat  10px center;
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	border-radius: 3px;
	color:#fff;
}
ul.submenu-col li a:hover {
	background:#efefef;
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	border-radius: 3px;
	color:#326e99;
}
      /* start boxx  */
      #main-boxes {
    margin-top: -35px;
    position: relative;
    z-index: 1;
    margin-bottom: 35px;
}
[class*="span"] {
    float: left;
    min-height: 1px;
}
      .box-style-2 a {
    color: #FFF;
    font-size: 12px;
    text-shadow: 1px 1px 0px rgba(0, 0, 0, 0.3);
    font-weight: 700;
}
      .box-style-2 h3 {
    color: #FF9;
    font-size: 23px;
}
      p {
    margin: 0 0 15px 0;
}
      
      
      

/*start skills*/
.skills .skill{
  margin-top: 20px;
  width: 32%;
}
.skills .skill:nth-of-type(2){
  margin-left: 2%;
  margin-right: 2%;
}
.skills h3{
  text-transform: uppercase;
  margin-bottom: 15px;
  font-family: 'Poiret One', cursive;
}

.skills .skill p{
  color: rgba(255,255,255,.6);
  letter-spacing: 1px;
  line-height:1.5em;
}



@media (max-width:767px){
  .skills .skill{
    width:auto;
    float: none;
  }
  .skills .skill:nth-of-type(2){
    margin-left: 0;
    margin-right: 0;
  }
}
@media (min-width:768px) and (max-width:991px){
  .skills .skill{
    width:auto;
    width: 48%;
  }
}
/*end skills*/

      .footer  ul li {
    display: inline-block;
    zoom: 1;
    padding: 10px;      
}
    .footer  ul li:hover {
    background: #123;    
        
        
      }
  //    
</style>
   <script>
       
		<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-67062609-1', 'auto');
  ga('send', 'pageview');

</script>

<script type='text/javascript'>
  var googletag = googletag || {};
  googletag.cmd = googletag.cmd || [];
  (function() {
    var gads = document.createElement('script');
    gads.async = true;
    gads.type = 'text/javascript';
    var useSSL = 'https:' == document.location.protocol;
    gads.src = (useSSL ? 'https:' : 'http:') +
      '//www.googletagservices.com/tag/js/gpt.js';
    var node = document.getElementsByTagName('script')[0];
    node.parentNode.insertBefore(gads, node);
  })();
</script>

<script type='text/javascript'>
  googletag.cmd.push(function() {

    var mapping = googletag.sizeMapping().addSize([1500,900], [970, 90]).addSize([600, 600], [728, 90]).addSize([500, 500], [320, 50]).build();

    googletag.defineSlot('/74140080/Edu_allcourses_Middle_Courses_List', [468, 60], 'div-gpt-ad-1448278534797-0').addService(googletag.pubads());
    googletag.defineSlot('/74140080/Edu_allcourses_Right_or_Left_Courses_List', [300, 250], 'div-gpt-ad-1448278534797-1').addService(googletag.pubads());
    googletag.defineSlot('/74140080/Edu_allcourses_top_courses_list', [468, 60], 'div-gpt-ad-1448278534797-2').addService(googletag.pubads());
    googletag.defineSlot('/74140080/Edu_ClassRoom_after_video', [468, 60], 'div-gpt-ad-1448278534797-3').addService(googletag.pubads());
    googletag.defineSlot('/74140080/Edu_ClassRoom_before_video', [468, 60], 'div-gpt-ad-1448278534797-4').addService(googletag.pubads());
    googletag.defineSlot('/74140080/Edu_ClassRoom_right_or_left', [300, 250], 'div-gpt-ad-1448278534797-5').addService(googletag.pubads());
    googletag.defineSlot('/74140080/Edu_CourseDetails_after_video', [468, 60], 'div-gpt-ad-1448278534797-6').addService(googletag.pubads());
    googletag.defineSlot('/74140080/Edu_CourseDetails_before_video', [468, 60], 'div-gpt-ad-1448278534797-7').addService(googletag.pubads());
    googletag.defineSlot('/74140080/Edu_CourseDetails_right_or_left', [300, 250], 'div-gpt-ad-1448278534797-8').addService(googletag.pubads());
    googletag.defineSlot('/74140080/Edu_forum_after_section_2', [300, 250], 'div-gpt-ad-1448278534797-9').addService(googletag.pubads());
    googletag.defineSlot('/74140080/Edu_forum_after_sections_1', [300, 250], 'div-gpt-ad-1448278534797-10').addService(googletag.pubads());    
    googletag.defineSlot('/74140080/Edu_Forum_main_page_top', [728, 90], 'div-gpt-ad-1448278534797-11').defineSizeMapping(mapping).addService(googletag.pubads());
    googletag.defineSlot('/74140080/Edu_Homepage_Middle_Courses_List', [468, 60], 'div-gpt-ad-1448278534797-12').addService(googletag.pubads());
    googletag.defineSlot('/74140080/Edu_Homepage_Right_or_Left_Courses_List', [300, 250], 'div-gpt-ad-1448278534797-13').addService(googletag.pubads());
    googletag.defineSlot('/74140080/Edu_Homepage_Top_Before_Courses_List', [468, 60], 'div-gpt-ad-1448278534797-14').addService(googletag.pubads());
    googletag.defineSlot('/74140080/Edu_profile_menu_bottom', [300, 250], 'div-gpt-ad-1448278534797-15').addService(googletag.pubads());
    googletag.defineSlot('/74140080/Edu_profile_top', [468, 60], 'div-gpt-ad-1448278534797-16').addService(googletag.pubads());
    googletag.pubads().enableSingleRequest();
    googletag.enableServices();
  });
</script>

    </head>
   
   <body>
<!----start header----->
<header>
	<div class="container">

   	  <div class="row">
    	<div class="span2" id="logo"><a href="the team"><img src="" alt="Logo"></a></div>
<div class="span5" style="padding-top:10px">        
            <form method="get" action="login">
            
            
            	<input style="margin-bottom: 0px" name="q" class="span4" placeholder="ابحث عن ما تريده " value="" type="text">
            	<input class="button_medium" value="بحث" type="submit">
            </form>
			</div>


        <div id="contact_header" class="span5">
        
        	<div id="phone" class="hidden-phone"><strong> +20 (2) 01091341484 </strong>الخط الساخن</div>
            
            <div id="menu-top">
            	<ul>
                	<li><a href="home.php" title="Home">الصفحة الرئيسية</a> | </li>
                	                    	<li><a href="login.html" title="News and Events">دخول</a> | </li>
                    	<li><a href="rigster.php "> التسجيل </a>
                                    </ul>
                
                &nbsp;&nbsp;&nbsp;&nbsp;                
                <ul>
                	<li><a style="color: #6CC !important; float:left;" href="lang -arabic" title="عربى"> عربى</li>
                	<li><a style="color: inherit;float:left;" href="lang-english" title="English">| English</li>
                </ul>
            </div>
        </div><!-- End span8-->
        </div><!-- End row-->
    </div><!-- End container-->

</header><!-- End Header-->


     <div class="clear"></div>
    <!-- End container-->
<!-- End Header-->
     
          <!----start nav----->
        
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">   ONLINE EXAM </a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#home">الصفحه الرئيسيه</a></li>
        <li><a href="home.html">الامتحانات</a></li>
        <li><a href=""></a></li>
        <li><a href="profile.php"> المستخدمين</a></li>
      </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="index.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        </ul></div>
      </nav>
    
<!-----------end nav--------->

<!--------start slider-------------->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="img/02.jpg" alt="New York">
     
    </div>

    <div class="item">
      <img src="img/03.jpg" alt="Chicago">
    </div>

    <div class="item">
      <img src="img/04.jpg" alt="Los Angeles">
      </div>
      <div class="item">
      <img src="img/slide-3.jpg" alt="Los Angeles">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
 <!--------end slider------------- --->
       </div>
<!------start  content-------------->
<br><br><br>
  


 <div class="container-fluid" style="margin-bottom:10px; margin-left:110px;
     ">
      <div class="row">
           <div class="col-md-3" id="skils" style="margin-left:20px; pading:20px;">
    	<div class="box" style=" background-color: #474e5d; color:#fff; padding:50px;width:350px;">
                   <h3 style="font-size:22px; font-weight:bold;">امتحانات مجانية</h3>
                    <p  style="font-size:18px;">احصل على حق دخول الامتحانات عقب انهاء الدورة التدريبية                    	
                    </p>
            
            </div></div>
 
                  <div class="col-md-3"  id="skils"  style="margin-left:20px; pading:20px;">
        	<div class="box" style="background-color: #1abc9c;
      color: #ffffff; padding:50px;width:350px;">
                    <h3   style="font-size:22px; font-weight:bold;">دورات مجانية</h3>
                    <p  style="font-size:18px;"> 
                    	جميع الدورات مجانية.تعلم واحصل على حق الدخول فى اى وقت واى مكان.
                    </p>
                
            </div>
        </div>        
        <div class="col-md-3"  id="skils" style="margin-left:20px">
            	<div class="box" style=" background-color: #2f2f2f;
    color: #ffffff; padding:50px;width:350px;">
        	<h3  style="font-size:22px; font-weight:bold;">كن معتمد</h3>
                    <p  style="font-size:18px;">اسأل عن شهادتك المعتمده بعد اجتياز الامتحان النهائى من موقعنا</p>
        </div>
     </div></div>
       </div>
           <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <ul class="nav navbar-nav" style="text-align:center; font-size:20px; font-weight:bold;margin-left:30px;">
                 <li><a href="#">  قسم علوم الحاسب </a></li>
                 <li><a href="#">قسم نظم المعلومات </a></li>
        <li><a href="#">   قسم الاداره والمحاسبه</a></li>
                 <li><a href="#">قسم علم الاجتماع  </a></li>
                
      </ul>
               </div>
         
                 
    <!-----------end sidebar ------->
<br>
      <!-- Container (Services Section) -->
<div class="container-fluid text-center" id="services">
  <div class="row">
    <div class="col-sm-3">
      <span class="glyphicon glyphicon-leaf logo-small"></span>
      <h4>  computer secince </h4>
      <p>
    تعريف علوم الحاسب علوم الحاسب هو علم مختص بإمكانية تطبيق المعرفة التي تنتج عن الحاسوب والرياضيات على كافة فروع المعرفة، مع إمكانية تحليل المعضلات وتحديد متطلبات حلها باستعمال الحاسوب، مع القيام بجميع التصميمات اللازمة، ثمّ تنفيذها وتقييم النظام وكافة العمليات الأخرى والبرامج التي تستعمل، لتسهيل العمل بفعالية أكبر وتحقيق الأهداف المشتركة الخاصة بالفرق والمجموعات. لمحة تاريخية عن علوم الحاسب يرجع فضل اختراع أول آلة حاسوب إلى العالم تشارلز بابيج.</p>
    
        <a href="#" class="btn btn-default btn-lg"> MORE </a>
    </div>
    <div class="col-sm-3">
      <span class="glyphicon glyphicon-certificate logo-small"></span>
      <h4> information system </h4>
      <p>
           نظم المعلومات تعرف نظم المعلومات بأنها الأنظمة التي تتكون من مجموعة من الأشخاص، وسجلات البيانات، وبعض العمليّات اليدويّة وغير اليدويّة، وتعالج هذه النظم بالعموم البيانات والمعلومات الخاصة بكل منظومة، كما يمكن تعريفه بأنه مجموعة من العناصر التي تتداخل فيما بينها لجمع ومعالجة وتخزين وتوزيع المعلومات عن موضوعٍ معيّن بشكلٍ منهجي، وذلك لإسناد التنظيم، والتحكم به، والتحليل، وتشكيل تصوّر حالي ومستقبلي واضح عن الموضوع قيد البحث. نظم المعلومات هي مجموعة من البرامج التي تستخدم لأرشفة     </p>
                        <a href="#" class="btn btn-default btn-lg"> MORE </a>
    </div>
    <div class="col-sm-3">
      <span class="glyphicon glyphicon-wrench logo-small"></span>
      <h4 style="color:#303030">Accounting managment system</h4>
      <p>
          تعريف المحاسبة تُعرفُ المحاسبةُ باللغةِ الإنجليزيّة بِمُصطلحِ (Accounting)، وهي عبارةٌ عن مجموعةٍ مِنَ الخطوات، والطُرق الفنيّة المُتّبعة لبيان نشاط المُؤسسة، ومدى تأثيره على هيكليّة أموالها، وأيضاً تُعرفُ المحاسبةُ بأنّها تقنيةٌ تُستخدمُ لرصدِ الحركات الماليّة الخاصّة بالمنشأة، والتي تعتمدُ على قياسِ قيمةِ التّكاليف، والأرباح، والمصاريف، وغيرها من القِيَم المُحاسبيّة. ومن التّعريفات الأُخرى للمحاسبة أنّها الأداة التي تستخدمُ لوصف طبيعة النّشاطات الاقتصاديّة من خلال العملِ   
              
                </p>
                
        <a href="#" class="btn btn-default btn-lg"> MORE </a>
                </div>

     <div class="col-sm-3">
      <span class="glyphicon glyphicon-lock logo-small"></span>
      <h4>soicated    </h4>
      <p>
       علم الاجتماع هو عبارة عن دراسة علمية للسلوك الاجتماعي الذي يقوم به الأفراد، والأساليب التي يطبقها المجمتع باتباع المنهج العلمي وخطواته، ويعتبر توجهاً اكاديمياً حديثاً نسبياً، فقد تطور في بداية القرن التاسع عشر، حيث يهتم بشكل أساسي بالعمليات والقواعد الاجتماعية التي تجمع وتفصل الناس، ليس كأفراد فقط، وإنّما كأعضاء مجموعات وجمعيات ومؤسسات.المجتمع المدني وهذا يؤدي الي دمج النسيج المجتمعي  للمؤسسات الاجتماعيه ...................
       ...........................
       ...........................
    
      ..</p>
        <a href="#" class="btn btn-default btn-lg"> MORE </a>
    </div>
    </div></div>
    
    </nav>

    <!-- end container-->
		
    
    
<!-- Container (Contact Section) -->
<div id="contact" class="container-fluid bg-grey">
  <h2 class="text-center">CONTACT</h2>
  <div class="row">
    <div class="col-sm-5">
      <p>Contact us and we'll get back to you within 24 hours.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span>kafer_ elshick</p>
      <p><span class="glyphicon glyphicon-phone"></span> +0 
      010 9 13 41 484 </p>
      <p><span class="glyphicon glyphicon-envelope"></span> me32219@gmail.com</p>
    </div>
    <div class="col-sm-7 slideanim">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
      <div class="row">
        <div class="col-sm-12 form-group">
          <button class="btn btn-default pull-right" type="submit">Send</button>
        </div>
      </div>
    </div>
  </div>
</div>
       
    <div class="footer">
      
      
      <center>
       <label>
        <span> contact </span>  Me </label>
        
         <ul>
            <li><i class="fa fa-twitter-square fa-2x" aria-hidden="true" ></i></li> 
            <li><i class="fa fa-facebook-square fa-2x" aria-hidden="true"></i></li> 
            <li><i class="fa fa-skype fa-2x" aria-hidden="true"></i></li> 
            <li><i class="fa fa-google-plus-official fa-2x" aria-hidden="true"></i></li><br><br><br><br><br><br>
            <p>Designed by <span> belal ammar </span></p>
            </ul></div></center>
        
 <!--End Footer-->


    
        
        

    
     <script src="script.js"></script>
    </body>
</html>
         
         
