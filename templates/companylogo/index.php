<?php
defined('_JEXEC') or exit;
$doc = JFactory::getDocument();
//echo "<pre>";
//print_r($doc);
//echo "</pre>";
unset($doc->_scripts[JURI::root(true) . '/media/jui/js/jquery.min.js']);
unset($doc->_scripts[JURI::root(true) . '/media/jui/js/jquery-noconflict.js']);
unset($doc->_scripts[JURI::root(true) . '/media/jui/js/jquery-migrate.min.js']);
unset($doc->_scripts[JURI::root(true) . '/media/system/js/caption.js']);
unset($doc->_scripts[JURI::root(true) . '/media/jui/js/bootstrap.min.js']);
unset($doc->_scripts[JURI::root(true) . '/components/com_jcomments/js/jcomments-v2.3.js?v=12v']);

$doc->addStyleSheet(JUri::base(TRUE) . "/templates/" . $doc->template . "/css/reset.css");
$doc->addStyleSheet(JUri::base(TRUE) . "/templates/" . $doc->template . "/css/style.css");
$doc->addStyleSheet(JUri::base(TRUE) . "/templates/" . $doc->template . "/css/grid.css");
//$doc->addStyleSheet(JUri::base(TRUE) . "/templates/" . $doc->template . "/css/ie.css");
$doc->addScript(JUri::base(TRUE) . "/templates/" . $doc->template . "/js/jquery-1.7.1.min.js");
$doc->addScript(JUri::base(TRUE) . "/templates/" . $doc->template . "/js/cufon-yui.js");
$doc->addScript(JUri::base(TRUE) . "/templates/" . $doc->template . "/js/cufon-replace.js");
$doc->addScript(JUri::base(TRUE) . "/templates/" . $doc->template . "/js/Vegur_500.font.js");
$doc->addScript(JUri::base(TRUE) . "/templates/" . $doc->template . "/js/Ropa_Sans_400.font.js");
$doc->addScript(JUri::base(TRUE) . "/templates/" . $doc->template . "/js/FF-cash.js");
$doc->addScript(JUri::base(TRUE) . "/templates/" . $doc->template . "/js/tms-0.3.js");
$doc->addScript(JUri::base(TRUE) . "/templates/" . $doc->template . "/js/tms_presets.js");
$doc->addScript(JUri::base(TRUE) . "/templates/" . $doc->template . "/js/jquery.easing.1.3.js");
$doc->addScript(JUri::base(TRUE) . "/templates/" . $doc->template . "/js/script.js");
$doc->addScript(JUri::base(TRUE) . "/templates/" . $doc->template . "/js/html5.js");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <jdoc:include type="head" />
    <!--<title>Home</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/reset.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/grid.css" type="text/css" media="screen">
    <script src="js/jquery-1.7.1.min.js" type="text/javascript"></script>
    <script src="js/cufon-yui.js" type="text/javascript"></script>
    <script src="js/cufon-replace.js" type="text/javascript"></script>
    <script src="js/Vegur_500.font.js" type="text/javascript"></script>
    <script src="js/Ropa_Sans_400.font.js" type="text/javascript"></script>
    <script src="js/FF-cash.js" type="text/javascript"></script>
    <script src="js/tms-0.3.js" type="text/javascript"></script>
    <script src="js/tms_presets.js" type="text/javascript"></script>
    <script src="js/jquery.easing.1.3.js" type="text/javascript"></script>
    <script src="js/script.js" type="text/javascript"></script>-->

</head>
<body id="page1">
<!--==============================header=================================-->
<header>
    <div class="border-bot">
        <div class="main">
            <h1><a href="<?php echo JUri::base();?>">InternetCafe</a></h1>
            <nav>
<!--                <ul class="menu">-->
<!--                    <li><a class="active" href="index.html">About</a></li>-->
<!--                   <li><a href="index-1.html">Events</a></li>-->
<!--                    <li><a href="index-2.html">Services</a></li>-->
<!--                    <li><a href="index-3.html">Jobs</a></li>-->
<!--                   <li><a href="index-4.html">Contacts</a></li>-->
<!--                </ul>-->
                <jdoc:include type="modules" name="position-0" />
            </nav>
            <div class="clear"></div>
        </div>
    </div>
    <div class="row-bot">
        <div class="slider-wrapper">
            <div class="slider">
                <ul class="items">
                    <li>
                        <img src="<?php echo JUri::base(TRUE) . "/templates/" . $doc->template;?>/images/slider-img1.jpg" alt="" />
                    </li>
                    <li>
                        <img src="<?php echo JUri::base(TRUE) . "/templates/" . $doc->template;?>/images/slider-img2.jpg" alt="" />
                    </li>
                    <li>
                        <img src="<?php echo JUri::base(TRUE) . "/templates/" . $doc->template;?>/images/slider-img3.jpg" alt="" />
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>
<!--==============================content================================-->
<section id="content"><div class="ic">More Website Templates @ TemplateMonster.com - Mrach 03, 2012!</div>
    <div class="main">
        <div class="container_12">
            <div class="wrapper">
                <article class="grid_8">
                    <jdoc:include type="component" name="" />
                </article>
                <article class="grid_4">
                    <div class="indent-left">
                        <h3 class="prev-indent-bot"><cufon class="cufon cufon-canvas" alt="New " style="width: 62px; height: 30px;"><canvas width="88" height="32" style="width: 88px; height: 32px; top: 1px; left: -2px;"></canvas><cufontext>New </cufontext></cufon><cufon class="cufon cufon-canvas" alt="Service" style="width: 87px; height: 30px;"><canvas width="103" height="32" style="width: 103px; height: 32px; top: 1px; left: -2px;"></canvas><cufontext>Service</cufontext></cufon></h3>
                        <figure class="p2"><img src="images/page3-img3.jpg" alt=""></figure>
                        <p class="prev-indent-bot">Vel eum iriure dolor in hendrerit tumzril delenit augue duis dolore.</p>
                        <p class="margin-bot"><a class="link-1" href="#">View More</a></p>
                        <h3 class="p1"><cufon class="cufon cufon-canvas" alt="Our " style="width: 52px; height: 30px;"><canvas width="78" height="32" style="width: 78px; height: 32px; top: 1px; left: -2px;"></canvas><cufontext>Our </cufontext></cufon><cufon class="cufon cufon-canvas" alt="Services" style="width: 98px; height: 30px;"><canvas width="118" height="32" style="width: 118px; height: 32px; top: 1px; left: -2px;"></canvas><cufontext>Services</cufontext></cufon></h3>
<!--                        <ul class="list-1">-->
<!--                            <li><a href="#">Consetetur sadipscing elitr, sed diam nonumy eirmod tempor</a></li>-->
<!--                            <li><a href="#">Invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. </a></li>-->
<!--                            <li><a href="#">At vero eos et accusam et justo duo dolores et ea rebum.</a></li>-->
<!--                            <li><a href="#">Stet clita kasd gubergren, no sea</a></li>-->
<!--                            <li><a href="#">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam.</a></li>-->
<!--                            <li><a href="#">Nonumy eirmod tempor invidunt ut labore et dolore magna.</a></li>-->
<!--                        </ul>-->
                        <jdoc:include type="modules" name="position-1" />
                        <a class="link-1 margin-left" href="#">Read More</a>
                    </div>
                </article>
            </div>
        </div>
    </div>
</section>
<!--==============================footer=================================-->
<footer>
    <div class="main">
        <div class="container_12">
            <div class="wrapper">
                <div class="grid_3">
                    <div class="spacer-1">
                        <a href="index.html"><img src="<?php echo JUri::base(TRUE) . "/templates/" . $doc->template;?>/images/footer-logo.png" alt=""></a>
                    </div>
                </div>
                <div class="grid_5">
                    <div class="indent-top2">
                        <p class="prev-indent-bot">&copy; 2012 Interior <a rel="nofollow" href="http://www.templatemonster.com/" target="_blank">Website Template</a> by TemplateMonster.com</p>
                        Phone: +1 800 559 6580 Email: <a href="#">info@internetcafe.com</a>
                    </div>
                </div>
                <div class="grid_4">
                    <ul class="list-services">
                        <li><a class="item-1" href="#"></a></li>
                        <li><a class="item-2" href="#"></a></li>
                        <li><a class="item-3" href="#"></a></li>
                        <li><a class="item-4" href="#"></a></li>
                    </ul>
                    <span class="footer-text">&copy; 2012 <a class="link color-2" href="#">Privacy Policy</a></span>
                </div>
            </div>
        </div>
    </div>
</footer>
<script type="text/javascript"> Cufon.now(); </script>
<script type="text/javascript">
    $(window).load(function() {
        $('.slider')._TMS({
            duration:1000,
            easing:'easeOutQuint',
            preset:'diagonalFade',
            slideshow:7000,
            banners:false,
            pauseOnHover:true,
            pagination:true,
            pagNums:false
        });
    });
</script>
</body>
</html>
