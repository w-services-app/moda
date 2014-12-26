<?php
if (!defined('IN_GS')) {
    die('you cannot load this page directly.');
}
/* * **************************************************
 *
 * @File: 		template.php
 * @Package:		GetSimple
 * @Action:		Moda theme for GetSimple CMS
 *
 * *************************************************** */
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title><?php get_site_name(); ?></title>
        <?php get_header(); ?>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="<?php get_theme_url(); ?>/assets/css/bootstrap.min.css">
        <!--[if lte IE 7]>
        <link rel="stylesheet" href="<?php get_theme_url(); ?>/assets/css/ie_7_8.css">
        <![endif]-->

        <style>
            body {
                padding-top: 50px;
                padding-bottom: 20px;
            }
        </style>
        <link rel="stylesheet" href="<?php get_theme_url(); ?>/assets/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="<?php get_theme_url(); ?>/assets/css/main.css">

        <script src="<?php get_theme_url(); ?>/assets/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    </head>
    <body>
        <!--[if lte IE 7]>
                <p class="browsehappy lead">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul id="nav"  class="nav navbar-nav">
                        <?php get_navigation(return_page_slug()); ?>

                        <!--<li><a href="#home">Главная</a></li>
                            <li><a href="#details">Детали</a></li>
                            <li><a href="#gurantija">Гарантии</a></li>
                            <li><a href="#otzivi">Отзывы</a></li>
                            <li><a href="#contact">Контакты</a></li>
                        -->
                    </ul>
                </div><!--/.navbar-collapse -->
            </div> <!-- /container -->
        </nav>

        <div class="container">
            <header class="tracked" id="home">
                <div class="row">
                    <div class="col-sm-12 col-md-6">
                        <a href="/">
                            <img src="<?php get_theme_url(); ?>/assets/images/logo.svg" alt="" class="logo img-responsive" />
                        </a>
                    </div>
                    <?php getPageContent('home'); ?>
                </div>
            </header>
        </div> <!-- /container -->

        <div class="jumbotron" id="bg">
            <div class="container">
                <?php getPageContent('jumbotron'); ?>
            </div>
        </div> 

        <div class="container">
            <div class="row">
                <?php getPageContent('jail'); ?>
            </div>
        </div>

        <div class="tracked" id="details">
            <?php getPageContent('details'); ?>
        </div>

        <div class="tracked" id="gurantija">
            <?php getPageContent('gurantija'); ?>            
        </div>

        <div id="otzivi" class="tracked" >
            <div class="container">
                <?php getPageContent('otzivi'); ?>            
            </div>      
        </div>


        <div class="container-fluid promo">
            <div class="row pull-left pre_promo">
                <div class="col-md-4">
                    <p>
                        <span class="header_desk">
                            БЛИСТАЙТЕ НА ЛЮБОМ <br />
                            МЕРОПРИЯТИИ!  
                        </span>
                        <span class="description">
                            Модные элементы и строгость 
                            классического стиля — это ли не искусство? 
                            Красота кроется в деталях модного кроя, 
                            а это сделает Тебя заметной, 
                            а ярко красный цвет ткани будет 
                            магнитом притягивать восторженные взгляды. 
                        </span>
                        <span class="price">
                            Цена 130 €<br />
                            Доставка по России — бесплатно! 
                        </span>
                    </p>
                </div>
            </div>
            <div class="row pull-right promo_images">
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <div class="caption">
                            <h3 class="heder">Закажи</h3>
                            <img src="/data/uploads/images/promo_step1.png" data-src="/data/uploads/images/promo_step1.png" alt="...">
                            <p class="caption">Вы оставляете <br />заявку на сайте в форме внизу</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <div class="caption">
                            <h3 class="heder">Потверди</h3>
                            <img src="/data/uploads/images/promo_step2.png" data-src="/data/uploads/images/promo_step1.png" alt="...">
                            <p class="caption">Вы оставляете <br />заявку на сайте в форме внизу</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <div class="caption">
                            <h3 class="heder">Получи</h3>
                            <img src="/data/uploads/images/promo_step3.png" data-src="/data/uploads/images/promo_step1.png" alt="...">
                            <p class="caption">Вы оставляете <br />заявку на сайте в форме внизу</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <div class="caption">
                            <h3 class="heder">Оплати</h3>
                            <img src="/data/uploads/images/promo_step4.png" data-src="/data/uploads/images/promo_step1.png" alt="...">
                            <p class="caption">Вы оставляете <br />заявку на сайте в форме внизу</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row pull-right pre_promo">

            </div>
            <!--            <div class="row pull-right">
                <div class="col-sm-6 col-md-3">
                    <p class="heder">Закажи</p>
                    <img src="img/promo_step1.png" alt=""/>
                    <p class="caption">Вы оставляете <br />заявку на сайте в форме внизу</p>
                </div>
                <div class="col-sm-6 col-md-3">
                    <p class="heder">Потверди</p>
                    <img src="img/promo_step2.png" alt=""/>
                    <p class="caption">Менеджер связывается с Вами для подтверждения заказа</p>
                </div>
                <div class="col-sm-6 col-md-3">
                    <p class="heder">Получи</p>
                    <img src="img/promo_step3.png" alt=""/>
                    <p class="caption">Мы быстро доставляем Вашу посылку по указанному адресу</p>
                </div>
                <div class="col-sm-6 col-md-3">
                    <p class="heder">Оплати</p>
                    <img src="img/promo_step4.png" alt=""/>
                    <p class="caption">Вы получаете свой товар и платите за него на почте или курьеру</p>
                </div>
            </div>
            -->
        </div>

        <div class="tracked" id="contact">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12">
                        <div class="page-header">
                            <h1 class="lead"><?php getPageTitle('contact'); ?><br />
                                <?php getPageContent('contact'); ?>
                            </h1>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <p class="lead">Картинка текст или всё вмести по желанию</p>            
                        <p class=""> 
                            <a href="#" data-toggle="modal" data-target="#sootvetsvie-razmerov">
                                Соответствие размеров женской одежды и параметров тела, см 
                            </a>
                        </p> 
                        <p class=""> 
                            <a href="#" data-toggle="modal" data-target="#preobrazovanie-razmera">
                                Преобразование размера
                            </a>
                        </p> 
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="footer_form_div">
                            <form class="footer_form" role="form">
                                <div class="alert response_footer lead" role="alert"></div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon"><span class="glyphicon glyphicon-user"></span></div>
                                        <input class="form-control name" type="text" placeholder="Ваше Имя" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                                        <input class="form-control email" type="email" placeholder="Полный адрес доставки" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon"><span class="glyphicon glyphicon-compressed"></span></div>
                                        <select class="form-control razmer">
                                            <option value="not-select">РАЗМЕР (ГОСТ 17522-72).</option>
                                            <option value="36">36</option>
                                            <option value="38">38</option>
                                            <option value="40">40</option>
                                            <option value="42">42</option>
                                            <option value="44">44</option>
                                            <option value="46">46</option>
                                            <option value="48">48</option>
                                            <option value="50">50</option>
                                            <option value="52">52</option>
                                            <option value="54">54</option>
                                            <option value="56">56</option>
                                            <option value="58">58</option>
                                            <option value="60">60</option>
                                            <option value="62">62</option>                                                                    
                                            <option value="64">64</option>
                                            <option value="66">66</option>
                                            <option value="68">68</option>
                                        </select>
                                    </div>
                                </div>
                                <!--
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon"><span class="glyphicon glyphicon-tint"></span></div>
                                        <select class="form-control color">
                                            <option value="not-select">Цвет</option>
                                            <option value="Коричневый">Коричневый</option>
                                            <option value="Красный">Красный</option>
                                            <option value="Зелёный">Зелёный</option>
                                            <option value="Жёлтый">Жёлтый</option>
                                            <option value="Белый">Белый</option>
                                            <option value="Чёрный">Чёрный</option>
                                            <option value="Фиалетовы">Фиалетовы</option>
                                            <option value="Голубой">Голубой</option>
                                        </select>
                                    </div>
                                </div>
                                -->
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon"><span class="glyphicon glyphicon-comment"></span></div>
                                        <textarea rows="3" placeholder="Ваши дополнительные пожелания, и просьбы." class="form-control messages" ></textarea>
                                    </div>
                                </div>                            
                                <div class="form-group">
                                    <input type="button" class="btn btn-danger footer_send" value="Заказать" />
                                </div>                                    
                            </form>
                            <small class="lead" style="color: #FFF">Ваши контактные данные в безопасности, и не будут переданы третьим лицам.</small>
                        </div>

                        <div class="modal fade" id="sootvetsvie-razmerov" tabindex="-1" role="dialog" aria-labelledby="sootvetsvie-razmerovLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Закрыть</span></button>
                                        <h4 class="modal-title" id="sootvetsvie-razmerovLabel">Соответствие размеров женской одежды и параметров тела, см </h4>
                                    </div>
                                    <div class="modal-body">
                                        <div class="panel panel-default">
                                            <div class="panel-heading">Соответствие размеров женской одежды и параметров тела, см </div>
                                            <div class="table-responsive">
                                                <?php getPageContent('sootvetsvie-razmerov'); ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="modal fade" id="preobrazovanie-razmera" tabindex="-1" role="dialog" aria-labelledby="preobrazovanie-razmeraLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Закрыть</span></button>
                                        <h4 class="modal-title" id="preobrazovanie-razmeraLabel">Преобразование размера</h4>
                                    </div>
                                    <div class="modal-body">
                                        <div class="panel panel-default">
                                            <div class="panel-heading">Женская одежда</div>
                                            <div class="table-responsive">
                                                <?php getPageContent('preobrazovanie-razmera'); ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>            
            </div>
        </div>
        <div class="container">
            <hr>
            <footer>
                <div class="row" >
                    <div class="col-sm-12 col-md-6">
                        <a href="/">
                            <img src="img/logo.svg" alt="" class="logo img-responsive" />
                        </a>
                        <p class="sub_logo"></p> 
                    </div>
                    <div class="col-sm-12 col-md-3 col-md-offset-3">
                        <p class="adress">Латвия, Рига, ул. Лачплеша 52/54-8А, LV-1011.<br />
                            тел.: (+371) 26128821 </p>
                    </div>
                </div>
            </footer>
        </div> <!-- /container -->        
        <div class="back_top">
            <a href="#home">
                <span class="glyphicon glyphicon-circle-arrow-up"></span>
            </a>
        </div>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.js"></script>
        <script>window.jQuery || document.write('<script src="<?php get_theme_url(); ?>/assets/js/vendor/jquery-1.11.1.js"><\/script>');</script>
        <script src="<?php get_theme_url(); ?>/assets/js/vendor/bootstrap.min.js"></script>
        <script src="<?php get_theme_url(); ?>/assets/js/vendor/jquery-scrollTo/jquery.scrollTo.min.js"></script>
        <script src="<?php get_theme_url(); ?>/assets/js/vendor/waypoints/waypoints.js"></script>

        <script src="<?php get_theme_url(); ?>/assets/js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function (b, o, i, l, e, r) {
                b.GoogleAnalyticsObject = l;
                b[l] || (b[l] =
                        function () {
                            (b[l].q = b[l].q || []).push(arguments)
                        });
                b[l].l = +new Date;
                e = o.createElement(i);
                r = o.getElementsByTagName(i)[0];
                e.src = '//www.google-analytics.com/analytics.js';
                r.parentNode.insertBefore(e, r)
            }(window, document, 'script', 'ga'));
            ga('create', 'UA-XXXXX-X');
            ga('send', 'pageview');
        </script>
    </body>
</html>
