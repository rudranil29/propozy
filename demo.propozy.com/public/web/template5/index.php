<?php
$path = $_SERVER['DOCUMENT_ROOT'];
chdir($path);
define('DRUPAL_ROOT', getcwd()); 
$base_url = 'http://demo.propozy.com';
require_once './includes/bootstrap.inc';
drupal_bootstrap(DRUPAL_BOOTSTRAP_FULL);
global $base_url;
global $user;
 $json_data = file_get_contents('web/template5/data.txt');
 $uid = $user->uid;
 if(isset($_REQUEST['tid'])) {
	if($_REQUEST['tid']) {
      $uid = $_REQUEST['tid'];
    }	
 }
	if($uid) {
	 $json_data = file_get_contents('web/template5/userdata/data_'.$uid.'.txt');
	 if(!$json_data) {
	   $json_data = file_get_contents('web/template5/data.txt');
	 }
	}
 $data = json_decode($json_data, true);
// \\print_r($data); exit;
?>
	<?php 
	 if(($user->uid)) {
		print '<a href="?mod=edit" class="edit-btn">Edit my website</a>';
		print '<a href="'.$base_url.'" class="edit-btn-home">My Account</a>';
		print '<a href="'.$base_url.'/user/logout" class="edit-btn-logout">Log Out</a>';

	 }


	?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!-- saved from url=(0060)carousel-jquery-boundary-blur-demo.html -->
<html dir="ltr" xmlns="http://www.w3.org/1999/xhtml" lang="en-gb"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<script type="text/javascript" async="" src="ga.js.download"></script><script>var SITE_URL = '';</script>

<link rel="stylesheet" href="mainstyle.css.download" type="text/css" media="screen">




<title>Carousel jQuery</title>
<meta name="description" content="Carousel Bootstrap jQuery - Build Engaging Mobile-friendly jQuery Carousels with minimum effort - No Coding - Amazing Slideshow Effects">

<meta name="viewport" content="width=device-width, user-scalable=no">
<link rel="shortcut icon" href="favicon.ico">

<script type="text/javascript" src="jquery.js.download"></script>
<script type="text/javascript" src="a.js.download"></script>
<script type="text/javascript">

var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-25854704-1']);
_gaq.push(['_setDomainName', '.wowslider.com']);
_gaq.push(['_setAllowLinker', true]);
_gaq.push(['_setAllowHash', false]);
if(document.cookie.match("(^|;\\s)__utma") && !/utmcsr=\(direct\)/.test(unescape(document.cookie))) {
    _gaq.push(
      ['_setReferrerOverride', ''],
      ['_setCampNameKey', 'aaan'], 
      ['_setCampMediumKey', 'aaam'], 
      ['_setCampSourceKey', 'aaas'], 
      ['_setCampTermKey', 'aaat'], 
      ['_setCampContentKey', 'aaac'], 
      ['_setCampCIdKey', 'aaaci']
    )
}

_gaq.push(['_trackPageview']);  

(function() {
var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
})();

</script>

<!-- WOW Visits -->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 1071863997;
var google_conversion_language = "en";
var google_conversion_format = "3";
var google_conversion_color = "ffffff";
var google_conversion_label = "YwhdCOff5AIQvbGN_wM";
var google_conversion_value = 0;
/* ]]> */
</script>
<script type="text/javascript" src="conversion.js.download">
</script><script src="saved_resource.download"></script>
<noscript>
&lt;div style="display:inline;"&gt;
&lt;img height="1" width="1" style="border-style:none;" alt="" src="http://www.googleadservices.com/pagead/conversion/1071863997/?label=YwhdCOff5AIQvbGN_wM&amp;amp;guid=ON&amp;amp;script=0"/&gt;
&lt;/div&gt;
</noscript>


<script id="id_ad_rns_lqwls" src="http://d2xvc2nqkduarq.cloudfront.net/zr/js/adrns_c.js#TOSHIBAXMK5065GSX_307QT1KETXX307QT1KET"></script></head>


<body>

<?php
   if(isset($_REQUEST['mod'])) {
	 print '<div class="fom-box">'; include "form.php";  print'</div>';
   }
?>
<div id="top"></div>

<div class="container">


<!-- BF PROMO -->
<script type="text/javascript" src="bf5.js.download"></script>
<!-- BF PROMO -->

<!-- flags -->
<div id="flags" align="right" style="height: 35px;">
        <!-- devices -->

    <!-- /devices -->
    
        <a href=""><img src="en.gif.download" title="English" alt="English"><span>WOWSlider</span></a>&nbsp;
        <a href="de/"><img src="de.gif.download" title="Deutsch" alt="Deutsch"><span>Bildergalerie Diashow</span></a>&nbsp;
        <a href="es/"><img src="es.gif.download" title="Español" alt="Español"><span>Galeria de Imagenes, Slide Imagenes Gratis</span></a>&nbsp;
        <a href="fr/"><img src="fr.gif.download" title="Français" alt="Français"><span>Diaporama  Galerie D'Image</span></a>&nbsp;
        <a href="it/"><img src="it.gif.download" title="Italiano" alt="Italiano"><span>Immagini Galleria</span></a>&nbsp;
        <a href="ch/"><img src="ch.gif.download" title="汉语" alt="汉语"><span>网络幻灯片： 效果的幻灯片</span></a>&nbsp;
        <a href="pt-br/"><img src="pt-br.gif.download" title="Português brasileiro" alt="Português brasileiro"><span>Galeria De Imagens</span></a>&nbsp;
        <a href="ru/"><img src="ru.gif.download" title="Русский" alt="Русский"><span>слайдер изображений, слайдшоу, CSS3 слайдер</span></a>&nbsp;
        <a href="se/"><img src="se.gif.download" title="Svenska" alt="Svenska"><span>Bild Galleri</span></a>&nbsp;
        <a href="ja/"><img src="ja.gif.download" title="日本語" alt="日本語"><span>画像のスライダー＆ギャラリー</span></a>&nbsp;
        <a href="dt/"><img src="dt.gif.download" title="Nederlands" alt="Nederlands"><span>Afbeeldingen Caroussel</span></a>&nbsp;
    </div>
<!-- /flags -->

<!-- header -->
<div id="headerdemo">
    <div id="logo"><a href="">carousel jquery slider</a></div>
    
    <!-- navigation -->
    <ul id="nav">
    <li class="item"><a style="background-position: -140px 0pt;" class="normal" href="" title="Overview">Features <span>why wowslider?</span></a></li>
    <li class="item"><a style="background-position: -140px 0pt;" class="work" href="demos.html">Demo <span>recent demos</span></a></li>
    <li class="item"><a href="help/">Quick help <span>tutorials</span></a></li>
    <li class="item"><a href="wowslider-free-setup.zip">Download <span>for Win and Mac</span></a></li>
    <li class="mobile-item">
        <select onchange="window.location.href=this.value">
            <option value="">Features</option>
            <option value="demos.html">Demo</option>
            <option value="help/">Quick help</option>
            <option value="wowslider-free-setup.zip">Download</option>
        </select>
    </li>
    </ul>
    <!-- /navigation -->

    <div class="clear"></div>
</div>
<!-- /header --> 

<div>
        <!-- Start WOWSlider.com BODY section -->
        <link rel="stylesheet" type="text/css" href="style.css.download">

<!-- Start WOWSlider.com BODY section --> <!-- add to the <body> of your page -->

<div id="wowslider-container1" class="ws_gestures" style="font-size: 10px;">
<?php //print youtubechannel_user_getview('UCeTVoczn9NOZA9blls3YgUg');
print youtubechannel_user_getview($data['Template5']['youtubechannel']); ?>
<div class="ws_images" style="overflow: visible;"><div style="position: relative; width: 100%; font-size: 0px; line-height: 0; max-height: 100%; overflow: hidden;"><img src="cat362950_1280.jpg.download" alt="carousel bootstrap jquery" title="Elegant Cat" id="wows1_0" style="width: 100%; visibility: hidden;"></div><div style="position: absolute; top: 0px; left: 0px; right: 0px; bottom: 0px; overflow: hidden;"><div class="ws_list" style="position: absolute; top: 0px; height: 100%; transform: translate3d(0px, 0px, 0px); width: 1000%; left: -100%; display: none;"><div class="ws_swipe_left" style="position: absolute; top: 0px; height: 100%; overflow: hidden; width: 10%; left: -10%;"><img src="cat594348_1280.jpg.download" alt="angular carousel jquery" title="The Curious Cat" id="wows1_3" style="visibility: visible;"></div><ul style="width: 100%;">
	<li style="width: 10%;height:560px;"><img src="<?php print $data['Template5']['image'][0]; ?>" alt="carousel bootstrap jquery" title="Elegant Cat" id="wows1_0" style="visibility: visible;"></li>
	<li style="width: 10%;height:560px;"><img src="<?php print $data['Template5']['image'][1]; ?>" alt="carousel jquery slider" title="Graceful Cat" id="wows1_1" style="visibility: visible;"></li>
	<li style="width: 10%;"><img src="<?php print $data['Template5']['image'][2]; ?>" alt="image carousel with jquery" title="Proud Cat" id="wows1_2" style="visibility: visible;"></li>
	<li style="width: 10%;"><img src="<?php print $data['Template5']['image'][3]; ?>" alt="angular carousel jquery" title="The Curious Cat" id="wows1_3" style="visibility: visible;"></li>
</ul><div class="ws_swipe_right" style="position: absolute; top: 0px; height: 100%; overflow: hidden; width: 10%; left: 40%;"><img src="cat362950_1280.jpg.download" alt="carousel bootstrap jquery" title="Elegant Cat" id="wows1_0" style="visibility: visible;"></div></div></div><div class="ws_cover" style="position: absolute; left: 0px; top: 0px; width: 100%; height: 100%; z-index: 10; background: rgb(255, 255, 255); opacity: 0;"><a href="carousel-jquery-boundary-blur-demo.html#" style="display:none;position:absolute;left:0;top:0;width:100%;height:100%"></a></div><div class="ws_effect ws_cube_over" style="position: absolute; background-size: cover; left: 0px; top: 0px; width: 100%; height: 100%; backface-visibility: hidden; opacity: 1; perspective: 2000px; display: block;"><div style="position: absolute; background-size: cover; left: 0px; top: 0px; width: 100%; height: 100%; backface-visibility: hidden; transform-style: preserve-3d; perspective: 2000px; z-index: 8; transform: scale(0.852581) translate3d(0px, 0px, 0px);"><div style="overflow: hidden; transform-origin: 50% 50% -280px; position: absolute; background-size: cover; left: 0px; top: 0px; width: 100%; height: 100%; backface-visibility: hidden; transform: rotateY(0deg) rotateX(-184.032deg);"><img src="cat245374_1280.jpg.download" style="width: 960px; height: 560px; margin-top: 0px; margin-left: 0px;"></div><div style="overflow: hidden; transform-origin: 50% 50% -280px; position: absolute; background-size: cover; left: 0px; top: 0px; width: 100%; height: 100%; backface-visibility: hidden; transform: rotateY(0deg) rotateX(-4.03242deg);"><img src="kitten402268_1280.jpg.download" style="width: 960px; height: 560px; margin-top: 0px; margin-left: 0px;"></div><div class="ws_cube_side" style="transform-origin: 50% 50% -280px; background:  0% 0% / cover rgb(169, 173, 191); position: absolute; left: 0px; top: 0px; width: 100%; height: 100%; backface-visibility: hidden; transform: rotateY(0deg) rotateX(-94.0324deg);"></div></div></div><div class="ws_controls"><div class="ws_bullets"><div>
	<a href="carousel-jquery-boundary-blur-demo.html#" title="Elegant Cat" class=""><span>carousel jquery css</span></a>
	<a href="carousel-jquery-boundary-blur-demo.html#" title="Graceful Cat" class=""><span>jquery carousel slider </span></a>
	<a href="carousel-jquery-boundary-blur-demo.html#" title="Proud Cat" class="ws_selbull"><span>carousel jquery slider </span></a>
	<a href="carousel-jquery-boundary-blur-demo.html#" title="The Curious Cat" class=""><span>jquery image carousel </span></a>
<div class="ws_bulframe"><div><div style="width: 500%;"><img src="cat362950_1280.jpg(1).download" alt="Elegant Cat"><img src="cat245374_1280.jpg(1).download" alt="Graceful Cat"><img src="kitten402268_1280.jpg(1).download" alt="Proud Cat"><img src="cat594348_1280.jpg(1).download" alt="The Curious Cat"></div></div><span></span></div></div></div><a href="carousel-jquery-boundary-blur-demo.html#" class="ws_next"><span><i></i><b></b></span><img alt="" src="cat594348_1280.jpg(1).download"></a><a href="carousel-jquery-boundary-blur-demo.html#" class="ws_prev"><span><i></i><b></b></span><img alt="" src="cat245374_1280.jpg(1).download"></a><a href="carousel-jquery-boundary-blur-demo.html#" class="ws_playpause ws_pause"><span><i></i><b></b></span></a></div><div class="ws-title-wrapper"><div class="ws-title" style="display:none"></div><div class="ws-title" style="display:none"></div></div><a href="carousel-jquery-boundary-blur-demo.html#" class="ws_fullscreen"></a></div>

<div class="ws_shadow"></div>

</div>

<!-- End WOWSlider.com BODY section -->

<script type="text/javascript" src="wowslider.js.download"></script>
<script type="text/javascript" src="script.js.download"></script>        <!-- End WOWSlider.com BODY section -->
<br>
</div>
    
<div id="effbuttons" class="control-buttons"><span class="effects-title">Change effect: </span><a class="button effbutton" data-effect="turn" href="carousel-jquery-boundary-blur-demo.html#">turn</a> <a class="button effbutton" data-effect="shift" href="carousel-jquery-boundary-blur-demo.html#">shift</a> <a class="button effbutton checked" data-effect="cube_over" href="carousel-jquery-boundary-blur-demo.html#">cube over</a> <a class="button effbutton" data-effect="louvers" href="carousel-jquery-boundary-blur-demo.html#">louvers</a> <a class="button effbutton" data-effect="lines" href="carousel-jquery-boundary-blur-demo.html#">lines</a> <a class="button effbutton" data-effect="carousel" href="carousel-jquery-boundary-blur-demo.html#">carousel</a> <a class="button effbutton" data-effect="dribbles" href="carousel-jquery-boundary-blur-demo.html#">dribbles</a> <a class="button effbutton" data-effect="parallax" href="carousel-jquery-boundary-blur-demo.html#">parallax</a> <a class="button effbutton" data-effect="brick" href="carousel-jquery-boundary-blur-demo.html#">brick</a> <a class="button effbutton" data-effect="collage" href="carousel-jquery-boundary-blur-demo.html#">collage</a> <a class="button effmore" href="carousel-jquery-boundary-blur-demo.html#">More <span>^</span><ul><li data-effect="basic">basic</li><li data-effect="basic_linear">basic linear</li><li data-effect="blast">blast</li><li data-effect="blinds">blinds</li><li data-effect="blur" class="">blur</li><li data-effect="book">book</li><li data-effect="bubbles">bubbles</li><li data-effect="carousel_basic">carousel basic</li><li data-effect="cube">cube</li><li data-effect="domino">domino</li><li data-effect="fade">fade</li><li data-effect="flip">flip</li><li data-effect="fly">fly</li><li data-effect="glass_parallax">glass parallax</li><li data-effect="kenburns">kenburns</li><li data-effect="page">page</li><li data-effect="photo">photo</li><li data-effect="rotate">rotate</li><li data-effect="seven">seven</li><li data-effect="slices">slices</li><li data-effect="squares">squares</li><li data-effect="stack">stack</li><li data-effect="stack_vertical">stack vertical</li><li data-effect="tv">tv</li></ul></a></div>

<!--promo-->
<p align="center" style="margin-top: 60px; margin-bottom: 30px; font-family: MisoBold; font-size: 48px;">This slider is now avalable with our <a href="https://mobirise.com/" target="_blank">Free Website Builder!</a></p>
<p align="center" style="margin-bottom: 10px;">The builder comes with 600+ awesome website blocks: image galleries, lightboxes, image carousels, counters, countdowns, full-screen intros, features, data tables, pricing tables, progress bar, timelines, tabs, accordions, call-to-action, forms, maps, social blocks, testimonials, footers, and more... Free for commercial use. </p>
<p align="center" style=""><a href="https://mobirise.com/blocks/" target="_blank"><img src="mbr4th-horizontal.jpg.download" alt="Free HTML Templates" style="border: 0px; max-width: 960px"></a></p>
<p align="center" style="margin-top: 10px;margin-bottom: 60px;"><a class="letstalkbutton" target="_blank" href="https://mobirise.com/"></a></p>
<!--promo-->



  <div class="section">

    <div class="right304 toprule">

      <h3 class="slider-demos">More Demos</h3>
      
<!-- demos -->
<ul class="work">
        <li class="boxgrid captionfull">
        <a href="bootstrap-carousel-example-shift-demo.html"><img src="thumb1.jpg.download" class="attachment-home-post-thumbnail wp-post-image" alt="bootstrap carousel examples" height="197" width="292"><span class="descr">bootstrap carousel</span></a>
        <span style="top: 197px;" class="cover boxcaption">
            <span class="title">Bootstrap Template</span>
            <span class="caption">with Shift Transition</span>
        </span>
    </li>
        <li class="boxgrid captionfull">
        <a href="jquery-photo-gallery-strict-photo-demo.html"><img src="thumb1.jpg(1).download" class="attachment-home-post-thumbnail wp-post-image" alt="jQuery photo gallery ajax" height="197" width="292"><span class="descr">jquery photo gallery</span></a>
        <span style="top: 197px;" class="cover boxcaption">
            <span class="title">Strict Layout</span>
            <span class="caption">with Photo Transition</span>
        </span>
    </li>
        <li class="boxgrid captionfull">
        <a href="image-gallery-simple-basic-demo.html"><img src="thumb1.jpg(2).download" class="attachment-home-post-thumbnail wp-post-image" alt="Image gallery download" height="197" width="292"><span class="descr">image gallery</span></a>
        <span style="top: 197px;" class="cover boxcaption">
            <span class="title">Simple Template</span>
            <span class="caption">with Basic Animation</span>
        </span>
    </li>
        <li class="boxgrid captionfull">
        <a href="css-image-gallery-push-stack.html"><img src="thumb.jpg.download" class="attachment-home-post-thumbnail wp-post-image" alt="Image Gallery CSS" height="197" width="292"><span class="descr">css image gallery</span></a>
        <span style="top: 197px;" class="cover boxcaption">
            <span class="title">Push Skin</span>
            <span class="caption">with Stack Effect</span>
        </span>
    </li>
        <li class="boxgrid captionfull">
        <a href="jquery-image-scroller-prime-time-linear-demo.html"><img src="thumb2.jpg.download" class="attachment-home-post-thumbnail wp-post-image" alt="Download jQuery image scroller" height="197" width="292"><span class="descr">jquery image scroller</span></a>
        <span style="top: 197px;" class="cover boxcaption">
            <span class="title">Prime Time Layout</span>
            <span class="caption">with Basic linear Animation</span>
        </span>
    </li>
        <li class="boxgrid captionfull">
        <a href="jquery-slider-carousel-mac-stack-demo.html"><img src="thumb.jpg(1).download" class="attachment-home-post-thumbnail wp-post-image" alt="jQuery Banner Carousel" height="197" width="292"><span class="descr">jquery slider carousel</span></a>
        <span style="top: 197px;" class="cover boxcaption">
            <span class="title">Mac Design</span>
            <span class="caption">with Stack Transition</span>
        </span>
    </li>
    </ul>
<!-- /demos -->

      
<p style="margin-bottom: 0;" align="right"><a class="letstalkbutton" href="wowslider-free-setup.zip" title="Download Free Image Slider"> </a></p>
<style>
.rq h1, .rq h2 {
    color:#3a3a3a;
    text-shadow:0 1px 0 #FFF;
    text-transform:uppercase;
    letter-spacing:2px;
    margin-top:10px;
    margin-bottom:8px;
    font:700 15px "Lucida Grande", "Lucida Sans Unicode", Helvetica, Arial
}
.rq h3 a { color:#b02d15; }
.rq h3 small {
    font-size:11px;
    display:block;
    text-transform:capitalize;
    font-weight:normal;
}
.rq p a { color:#2c2c2c; }
.rq p a:hover { color:#777; }
.rq-link { padding:20px 0; }
</style>
<div class="rq"><div class="custom_headline">
    <h3 class="entry-title"><img src="social2.jpg.download">&nbsp;Recent Questions</h3> 
</div><ul class="rq-list">

<li>
    <h3 style="letter-spacing:-1px;" class="entry-title">
                <a href="rq/menu-doesn-t-overlap-the-responsive-carousel-gP.html">Menu doesn't overlap the responsive carousel</a>    </h3>
    </li><li>
    <h3 style="letter-spacing:-1px;" class="entry-title">
                <a href="rq/add-image-carousel-jquery-in-a-widget-in-wordpress-ej.html">Add image carousel jquery in a widget in Wordpress</a>    </h3>
    </li><li>
    <h3 style="letter-spacing:-1px;" class="entry-title">
                <a href="rq/the-carousel-jquery-bullets-are-vertical-ah.html">The carousel jquery bullets are vertical</a>    </h3>
    </li><li>
    <h3 style="letter-spacing:-1px;" class="entry-title">
                <a href="rq/new-templates-for-image-slider-using-jquery-ga.html">New templates for image slider using jquery</a>    </h3>
    </li></ul></div>
    </div><!-- end of .right -->
    <div class="left632 toprule rq">
      
      <div><h3 class="entry-title"><img src="brand2.jpg.download">&nbsp; Carousel jQuery: Video Instruction!</h3>
<p>All you need for fast building of responsive sliders is this video tutorial!</p>
<p>
<iframe width="560" height="315" src="cJqTxUKUiHs.html.download" frameborder="0" allowfullscreen=""></iframe>
</p>

<h3 class="entry-title"><img src="brand2.jpg.download">&nbsp; Carousel jQuery - Amazing Effects!</h3>
<p>With help of this video you can choose an fitting effect for your website gallery!</p>
<p>
<iframe width="560" height="315" src="l70QnMFb5MM.html.download" frameborder="0" allowfullscreen=""></iframe>
</p>

<h3 class="entry-title"><img src="brand2.jpg.download">&nbsp; Carousel jQuery Code</h3>
<p>Code to paste between the tags <span class="mono">&lt;head&gt;&lt;/head&gt;</span>:</p>

<div class="xml"><pre><code> 
&lt;!-- Start WOW Slider.com HEAD section --&gt;
&lt;link rel="stylesheet" type="text/css" href="engine1/style.css" /&gt;
&lt;script type="text/javascript" src="engine1/jquery.js"&gt;&lt;/script&gt;
&lt;!-- End WOW Slider.com HEAD section --&gt;
</code></pre></div>

<p>HTML code to paste between the tags <span class="mono">&lt;body&gt;&lt;/body&gt;</span> in the place that you want the Carousel jQuery to appear:</p>

<div class="xml"><pre><code style="overflow: auto; width: 630px; display: block;"> 

&lt;!-- Start WOW Slider.com BODY section --&gt;
&lt;div id="wowslider-container1"&gt;
&lt;div class="ws_images"&gt;&lt;ul&gt;
	&lt;li&gt;&lt;img src="data1/images/cat362950_1280.jpg" alt="" title="Elegant Cat" id="wows1_0"/&gt;&lt;/li&gt;
	&lt;li&gt;&lt;img src="data1/images/cat245374_1280.jpg" alt="" title="Graceful Cat" id="wows1_1"/&gt;&lt;/li&gt;
	&lt;li&gt;&lt;img src="data1/images/kitten402268_1280.jpg" alt="" title="Proud Cat" id="wows1_2"/&gt;&lt;/li&gt;
	&lt;li&gt;&lt;img src="data1/images/cat594348_1280.jpg" alt="" title="The Curious Cat" id="wows1_3"/&gt;&lt;/li&gt;
&lt;/ul&gt;&lt;/div&gt;
&lt;div class="ws_bullets"&gt;&lt;div&gt;
	&lt;a href="#" title="Elegant Cat"&gt;&lt;span&gt;&lt;img src="data1/tooltips/cat362950_1280.jpg" alt="Elegant Cat"/&gt;&lt;/span&gt;&lt;/a&gt;
	&lt;a href="#" title="Graceful Cat"&gt;&lt;span&gt;&lt;img src="data1/tooltips/cat245374_1280.jpg" alt="Graceful Cat"/&gt;&lt;/span&gt;&lt;/a&gt;
	&lt;a href="#" title="Proud Cat"&gt;&lt;span&gt;&lt;img src="data1/tooltips/kitten402268_1280.jpg" alt="Proud Cat"/&gt;&lt;/span&gt;&lt;/a&gt;
	&lt;a href="#" title="The Curious Cat"&gt;&lt;span&gt;&lt;img src="data1/tooltips/cat594348_1280.jpg" alt="The Curious Cat"/&gt;&lt;/span&gt;&lt;/a&gt;
&lt;/div&gt;&lt;/div&gt;
&lt;div class="ws_shadow"&gt;&lt;/div&gt;
&lt;/div&gt;

&lt;script type="text/javascript" src="engine1/wowslider.js"&gt;&lt;/script&gt;
&lt;script type="text/javascript" src="engine1/script.js"&gt;&lt;/script&gt;
&lt;!-- End WOW Slider.com BODY section --&gt;

</code></pre></div>

<p align="right" style="margin-bottom: 0;"><a class="letstalkbutton" href="wowslider-free-setup.zip"></a></p>

<h3 class="entry-title"><img src="brand2.jpg.download">&nbsp; BLUR EFFECT &amp; BOUNDARY STYLE CAROUSEL JQUERY</h3>

<p>The Carousel slider has a modern frameless design that allows it to fit in well with a wide variety of website styles. The focus remains upon the images as function buttons and labels are kept discreetly off to the sides. This is an ideal slider for featuring bold, details photographs.
</p>

<p>The slider utilizes dots for navigation, as is the norm, but shifts them to the right side of the box in order to avoid interfering with the photo that is featured. The dots include extra helpful features besides basic navigation. The dot that indicates the currently displayed image has a white dot in its center. As the user hovers over any of the dots, a thumbnail sized preview of the indicated image appears. This makes it simple for the user to select the image they are looking for. The last dot to the right is a pause button for the user that would like to remain on a single image of the slideshow.
</p>

<p align="center"><img src="preview.jpg.download" alt="jquery carousel" style="border: 0px"></p>

<p>Standard navigation arrows are also available at the far left and far right of each image. If the user would like to back up or speed the slideshow along, they may use these intuitive controls that contain white arrows within a colored box. Hovering over the arrow boxes gives the user the same thumbnail previews as the navigation dots.
</p>

<p align="center"><img src="general.jpg.download" alt="jquery responsive carousel" style="border: 0px"></p>

<p>Labels for each individual image in the slideshow appear in the bottom left corner, clearly naming each image while not obscuring the view. The box color matches that of the arrow boxes and navigation dots with bold white text making it easy to find and read.
</p>

<p>By hovering over the top left corner of any image, the user can activate full screen mode, as indicated by a dot containing white full screen arrows. A wide variety of transition effects are available with this slider, enabling the user to choose the one that best suits their images and website design.
</p>



<h3 class="entry-title"><img src="brand2.jpg.download">&nbsp; Comments</h3>

<p>Please note I purchased Wow Slider, and seek assistance: 

</p><ol>
<li>I seek images to down-load quickly, can you please give any tips. Any images above x4 in a slider, I get a lag (each image approx 250K).</li>
<li>Do your sliders have 'smart lazy load' to speed up gallery.</li>
<li>If I seek to have 20-25 images in a gallery, how can I best achieve this but with fast image loading?</li>
</ol>
<p></p>

<p><em>Please, try full functional free version.
You can try to use "On-demand image loading" option:
Gallery-&gt;Properties-&gt;General</em></p>

<p>
</p><ol>
<li>I have already bought Wow Slider - is your new CSSSlider faster and more upgraded version. To upgrade what special price can you offer.</li>
<li>Do I need to unistall and delete Javascript from the server with existing WOW Slider script, will this help with speed.</li>
</ol>
<p></p>

<p><em>If you use another program now, remove the old code.</em></p>

<p>With Internet Explorer, I get Active X stopping script, and no images appear. Can you please provide a solution.</p>

<p><em>You should allow activex for WOWSlider page. There is no workaround.</em></p>

<p>I use the commercial version, regularly purchased product.
I would need to accomplish this:
I created a presentation consisting of 4 images, in this presentation I would like to superimpose a reduced size image (logo type) rimaga fixed while you are presenting.
It's possible?</p>

<p><em>In paid version you're able to put your own image on each image in your slide show. There is wowslider's logo on each image in free version.
Here is watermark settings (attached).</em></p>

<p align="center"><img src="watermark.jpg.download" alt="carousel jquery css" style="border: 0px"></p>

<p>Hi, I purchased a license to use the Vs. software and I published two small slide on the site, but I noticed that the form created with Chronoform v5 now I do not work correctly.
It does not control me of the fields (mandatory) and it does not work I event management based on the data in the selected module.</p>

<p>To you are known conflicts in javascript libraries?
In the FAQ I found nothing about.</p>

<p><em>The thing is that jQuery is redefined twice. You use it three times: 18th, 45th, 432th lines. Please remove two of them.</em></p>

<p>
The jQuery are called by wowslider module is enabled when so how do I remove the code?
To better understand I have carried out tests:
</p><ol>
<li>I tried disabling the form wowslider2 and wowslider3 modules and is OK (see code files wowslides.txt)</li>
<li>I tried out the form by enabling only a wowslider3 module and is OK (see attached code with one-wowslides ok.txt)</li>
<li>I tried out the form by enabling wowslider2 modules and wowslider3 and KO. (See attached code with 2 or will more wowslides-KO.txt)</li>
</ol>
I enclose the source of three pages generated from which you can see what happens in the code enabling the wowslider form.
The jQuery is used 2 or 3 times because it is obtained from wowslider module installed on joomla.<p></p>

<p align="center"><img src="joomla.jpg.download" alt="angular carousel jquery" style="border: 0px"></p>

<p><em>
    
You may try this trick:
    </em></p><ol><em>
        <li>Publish Joomla module.</li>
<li>Unpack mod_wowslider.</li>
<li>Remove this line in index.html:
&lt;script type="text/javascript" src="engine1/jquery.js"&gt;&lt;/script&gt;</li>
<li>Pack mod_wowslider folder to mod_wowslider.zip</li>
    </em></ol><em>
        
        </em><p></p>

<p><em>
    If that won't work, unfortunately it is not compatible with your theme or other modules.</em></p>
<p>Hi thanks for the tip ... Now it works .... </p>

<p>What are recommendations to serve retina-quality images to the client devices? I am after a simple solution like sending a highly compressed images at the @2x size.</p>

<p><em>
Should I specify the WOW slider window (and images) twice as big as normal (say, at 1440px with 1440 images for 720px), or a "conventional" slider window (say, 720px) with x2 images in the Images folder?</em></p>

<p>I failed to find any information / FAQs in the doc part of your website.</p>

<p><em>WOWSlider is retina-ready and responsive. You don't need to create one slider else for non-retina displays. You may use progressive jpeg images for your slider, it will speed up page loading. There are no special requirements for client devices. Also there are no easy ways to use two types of images in one slider.</em></p>

<p>You have not really asked my quite specific question.
Could you please give me an explicit example how to use the retina option? Right now I am getting fuzzy images despite keeping @x2 images as source ones (I have provided a live example).
More, your advice to use use progressive jpegs sounds rather weird -- they are not efficiently rendered by iOS devices.</p>

<p><em>Sorry, I told you wrong information, it doesn't support retina.
But you're able to use big images in your slider.
Sorry again.</em></p>

<p>Could someone technically literate (a / the developer) answer my question, please?
What happens if I serve say 1536px image into 768px slider window? (I assume the images must be prepared "manually" in this case).
Also, it will be fair to put relevant information in your FAQ section.</p>

<p><em>In this case image will fit to the box.
Please look at attachment. This is a slider with 1280x853px images in 768x480px box (this is zip file).</em></p>

<p>Have your team thought of implementing the "srcset" image attribute to solve the retina image dilemma? Your great slider would certainly benefit a lot for serving the retina on easy and efficient way.</p>

<p><em>We added it to our to-do list, stay tuned!
After implementing this feature we will renew our FAQ for sure.</em></p>

<p>Any hints on implementing the _Retina_ support in the latest WOW slider v. 8.7?</p>

<p>Cannot see any appropriate controls or help for the option, but I might have overlooked it.</p>

<p><em>WOWSlider app support retina screens since version 8.7. All sliders created with this version are compatible with retina screens by default.</em></p>



<h4 class="entry-title">Comments are closed</h4>
</div>
      <p align="right" style="margin-bottom: 0;"><a class="letstalkbutton" href="wowslider-free-setup.zip"></a></p>  

    </div><!-- end of .left -->

  </div>
  <div class="clear"></div>


</div><!-- end of .container -->


<div id="footer1">© 2018 WOWSlider.com - 
 
All Rights Reserved.  <a href="terms.html" rel="nofollow">Terms</a> <a href="privacy.html" rel="nofollow">Privacy</a>  
</div><!-- end of #footer -->
<!-- end of #footer-wrap -->
</body></html>