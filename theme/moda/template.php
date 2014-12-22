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

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <style>
            body {
                padding-top: 50px;
                padding-bottom: 20px;
            }
        </style>
        <link rel="stylesheet" href="<?php get_theme_url(); ?>/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="<?php get_theme_url(); ?>/css/main.css">

        <script src="<?php get_theme_url(); ?>/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
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
                        <li><a href="#home">Главная</a></li>
                        <li><a href="#details">Детали</a></li>
                        <li><a href="#gurantija">Гарантии</a></li>
                        <li><a href="#otzivi">Отзывы</a></li>
                        <li><a href="#contact">Контакты</a></li>
                    </ul>
                </div><!--/.navbar-collapse -->
            </div> <!-- /container -->
        </nav>

        <div class="container">
            <header class="tracked" id="home">
                <div class="row">
                    <div class="col-sm-12 col-md-6">
                        <a href="/">
                            <img src="<?php get_theme_url(); ?>/images/logo.svg" alt="" class="logo img-responsive" />
                        </a>
                    </div>
                    <div class="col-sm-12 col-md-4 col-md-offset-2">
                        <p class="brand">Латвия, Рига, ул. Лачплеша 52/54-8А, LV-1011.<br />тел.: (+371) 26128821</p>
                    </div>
                </div>
            </header>
        </div> <!-- /container -->

        <div class="jumbotron" id="bg">
            <div class="container">
                <!--<div class="pull-right top_right1">
                    <p class="line1">Приобразись </p>
                    <p class="line2">в красном платье </p>
                    <p class="line3">из коллекции «FANTASY»</p>
                </div>
                
                <div class="pull-right top_rigth2">
                    <p class="line1">Оплата производится при получении платья</p>
                </div>-->
                <div class="pull-right bottom-right">
                    <div class="header_form_div">
                        <p class="line1">Почувствуй вкус УСПЕХА!</p>
                        <p class="line2">Заполни форму, 
                            <br />и мы вышлем Тебе последний, 
                            <br />и следующие выпуски наших каталогов 
                            <br />абсолютно бесплатно!
                        </p>
                        <form class="header_form" role="form">
                            <div class="alert response" role="alert"></div>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon"><span class="glyphicon glyphicon-user"></span></div>
                                    <input class="form-control name" type="text" placeholder="Ваше Имя" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                                    <input class="form-control email" type="email" placeholder="Ваш email" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                                    <input class="form-control messages" type="email" placeholder="Ваше сообщение" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="button" class="btn btn-danger header_send" value="Отправить" />
                            </div>                                    
                        </form>
                        <small class="confrm">Ваши контактные данные в безопасности,<br />и не будут переданы третьим лицам.</small>
                    </div>
                </div>
                <div class="pull-left bootom_left">
                    <p class="line1">На этой недели, </p>
                    <p class="line2">приобретая красное платье –</p> 
                    <p class="line3">вечерний аксессуар — </p>
                    <p class="line4">В ПОДАРОК</p>
                </div>
            </div>
        </div> 

        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-3">
                    <div class="thumbnail">
                        <img data-holder-rendered="true" src="images/jail2.jpg" style="height: 200px; display: block;" data-src="holder.js/200%x150" alt="200%x150">
                        <div class="caption">
                            <p class="lead">В учебном заведении будите ловить влюбленные взгляды лучших парней</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="thumbnail">
                        <img data-holder-rendered="true" src="images/jail3.jpg" style="height: 200px; display: block;" data-src="holder.js/200%x150" alt="200%x150">
                        <div class="caption">
                            <p class="lead">В офисе, на деловой встрече строгий фасон подчеркнет Ваш деловой стиль </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="thumbnail">
                        <img data-holder-rendered="true" src="images/jail4.jpg" style="height: 200px; display: block;" data-src="holder.js/200%x150" alt="200%x150">
                        <div class="caption">
                            <p class="lead">В ресторане, с красивым аксессуаром платье превращается в вечернее</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="thumbnail">
                        <img data-holder-rendered="true" src="images/jail1.jpg" style="height: 200px; display: block;" data-src="holder.js/200%x150" alt="200%x150">
                        <div class="caption">
                            <p class="lead">В клубе или на прогулке в этом платье Вы будите чувствовать себя свободно</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="tracked" id="details">
            <div class="container well">
                <div class="row">
                    <div class="col-sm-12 col-md-12">
                        <div class="page-header">
                            <h1 class="lead">Рассмотрите внимательно это платье, и примите правильное решение.<br />
                                <small>Красота кроется в деталях!</small>
                            </h1>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 col-md-3">
                        <div class="thumbnail">
                            <a href="#" data-toggle="modal" data-target="#thumbnail1" class="hidden-sm hidden-xs visible-md visible-lg">
                                <img data-holder-rendered="true" src="images/ob260-1.jpg" class="" style="display: block;" data-src="holder.js/200%x150" alt="200%x150">
                            </a>
                            <a href="#" data-toggle="modal" data-target="#thumbnail1" class="visible-sm visible-xs hidden-md hidden-lg">
                                <img data-holder-rendered="true" src="images/ob330-1.jpg" class="" style="display: block;" data-src="holder.js/200%x150" alt="200%x150">
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="thumbnail">
                            <a href="#" data-toggle="modal" data-target="#thumbnail2" class="hidden-sm hidden-xs visible-md visible-lg">
                                <img data-holder-rendered="true" src="images/ob260-2.jpg" class="" style="display: block;" data-src="holder.js/200%x150" alt="200%x150">
                            </a>
                            <a href="#" data-toggle="modal" data-target="#thumbnail2" class="visible-sm visible-xs hidden-md hidden-lg">
                                <img data-holder-rendered="true" src="images/ob330-2.jpg" class="" style="display: block;" data-src="holder.js/200%x150" alt="200%x150">
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="thumbnail">
                            <a href="#" data-toggle="modal" data-target="#thumbnail3" class="hidden-sm hidden-xs visible-md visible-lg">
                                <img data-holder-rendered="true" src="images/ob260-3.jpg" class="" style="display: block;" data-src="holder.js/200%x150" alt="200%x150">
                            </a>
                            <a href="#" data-toggle="modal" data-target="#thumbnail3" class="visible-sm visible-xs hidden-md hidden-lg">
                                <img data-holder-rendered="true" src="images/ob330-3.jpg" class="" style="display: block;" data-src="holder.js/200%x150" alt="200%x150">
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="thumbnail">
                            <a href="#" data-toggle="modal" data-target="#thumbnail4" class="hidden-sm hidden-xs visible-md visible-lg">
                                <img data-holder-rendered="true" src="images/ob260-4.jpg" class="" style="display: block;" data-src="holder.js/200%x150" alt="200%x150">
                            </a>
                            <a href="#" data-toggle="modal" data-target="#thumbnail4" class="visible-sm visible-xs hidden-md hidden-lg">
                                <img data-holder-rendered="true" src="images/ob330-4.jpg" class="" style="display: block;" data-src="holder.js/200%x150" alt="200%x150">
                            </a>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-sm-6 col-md-3">
                        <div class="thumbnail">
                            <a href="#" data-toggle="modal" data-target="#thumbnail5" class="hidden-sm hidden-xs visible-md visible-lg">
                                <img data-holder-rendered="true" src="images/ob260-5.jpg" class="" style="display: block;" data-src="holder.js/200%x150" alt="200%x150">
                            </a>
                            <a href="#" data-toggle="modal" data-target="#thumbnail5" class="visible-sm visible-xs hidden-md hidden-lg">
                                <img data-holder-rendered="true" src="images/ob330-5.jpg" class="" style="display: block;" data-src="holder.js/200%x150" alt="200%x150">
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="thumbnail">
                            <a href="#" data-toggle="modal" data-target="#thumbnail6" class="hidden-sm hidden-xs visible-md visible-lg">
                                <img data-holder-rendered="true" src="images/ob260-6.jpg" class="" style="display: block;" data-src="holder.js/200%x150" alt="200%x150">
                            </a>
                            <a href="#" data-toggle="modal" data-target="#thumbnail6" class="visible-sm visible-xs hidden-md hidden-lg">
                                <img data-holder-rendered="true" src="images/ob330-6.jpg" class="" style="display: block;" data-src="holder.js/200%x150" alt="200%x150">
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="thumbnail">
                            <a href="#" data-toggle="modal" data-target="#thumbnail7" class="hidden-sm hidden-xs visible-md visible-lg">
                                <img data-holder-rendered="true" src="images/ob260-7.jpg" class="" style="display: block;" data-src="holder.js/200%x150" alt="200%x150">
                            </a>
                            <a href="#" data-toggle="modal" data-target="#thumbnail7" class="visible-sm visible-xs hidden-md hidden-lg">
                                <img data-holder-rendered="true" src="images/ob330-7.jpg" class="" style="display: block;" data-src="holder.js/200%x150" alt="200%x150">
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="thumbnail">
                            <a href="#" data-toggle="modal" data-target="#thumbnail8" class="hidden-sm hidden-xs visible-md visible-lg">
                                <img data-holder-rendered="true" src="images/ob260-8.jpg" class="" style="display: block;" data-src="holder.js/200%x150" alt="200%x150">
                            </a>
                            <a href="#" data-toggle="modal" data-target="#thumbnail8" class="visible-sm visible-xs hidden-md hidden-lg">
                                <img data-holder-rendered="true" src="images/ob330-8.jpg" class="" style="display: block;" data-src="holder.js/200%x150" alt="200%x150">
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="thumbnail1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Закрыть</span></button>
                            <h4 class="modal-title" id="myModalLabel">Трендовое платье коллекции</h4>
                        </div>
                        <div class="modal-body">

                            <div class="thumbnail">
                                <img data-holder-rendered="true" src="images/ob600-1.jpg" 
                                     data-src="holder.js/200%x150" alt="Красное платье вблизи"/>
                                <div class="caption">
                                    <p class="lead">Одев это платье к Вам придет ощущение праздника и счастья, предопределяет успех.</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="thumbnail2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Закрыть</span></button>
                            <h4 class="modal-title" id="myModalLabel">Уют, очарование, улыбка — эмоции обладательницы этого платья</h4>
                        </div>
                        <div class="modal-body">

                            <div class="thumbnail">
                                <img data-holder-rendered="true" src="images/ob600-2.jpg" data-src="holder.js/200%x150" alt="200%x150"/>
                                <div class="caption">
                                    <p class="lead">Красное, классическое платье - символ женственности и красоты, и Вы можете стать символом.</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="thumbnail3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Закрыть</span></button>
                            <h4 class="modal-title" id="myModalLabel">Блистайте на любом мероприятии! </h4>
                        </div>
                        <div class="modal-body">

                            <div class="thumbnail">
                                <img data-holder-rendered="true" src="images/ob600-3.jpg" data-src="holder.js/200%x150" alt="200%x150"/>
                                <div class="caption">
                                    <p class="lead">Платья изготавливаются исключительно из экологически чистых и безопасных высококачественных натуральных материалов.</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="thumbnail4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Закрыть</span></button>
                            <h4 class="modal-title" id="myModalLabel">Легкость и сексуальность образа</h4>
                        </div>
                        <div class="modal-body">

                            <div class="thumbnail">
                                <img data-holder-rendered="true" src="images/ob600-4.jpg" data-src="holder.js/200%x150" alt="200%x150"/>
                                <div class="caption">
                                    <p class="lead">Классические красное платье подчеркивают плавные линии женской фигуры и стройность силуэта, не выходя за допустимые рамки делового этикета.</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="thumbnail5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Закрыть</span></button>
                            <h4 class="modal-title" id="myModalLabel">Блистайте на любом мероприятии! </h4>
                        </div>
                        <div class="modal-body">

                            <div class="thumbnail">
                                <img data-holder-rendered="true" src="images/ob600-5.jpg" data-src="holder.js/200%x150" alt="200%x150"/>
                                <div class="caption">
                                    <p class="lead">Согласно традициям, лучших ателье, подол платья, рукава и горловина подшиты вручную - платье приобретает дорогой законченный вид. </p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="thumbnail6" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Закрыть</span></button>
                            <h4 class="modal-title" id="myModalLabel">Превосходный, изящный силуэт женской фигуры</h4>
                        </div>
                        <div class="modal-body">

                            <div class="thumbnail">
                                <img data-holder-rendered="true" src="images/ob600-6.jpg" data-src="holder.js/200%x150" alt="200%x150"/>
                                <div class="caption">
                                    <p class="lead">Традиционная длина платья - чуть ниже колена (юбка солнце-клеш) сделает Ваш образ необыкновенно женственным и элегантным (романтичным)</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="thumbnail7" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Закрыть</span></button>
                            <h4 class="modal-title" id="myModalLabel">Платье наделяет хозяйку строгостью и уверенностью в себе</h4>
                        </div>
                        <div class="modal-body">

                            <div class="thumbnail">
                                <img data-holder-rendered="true" src="images/ob600-7.jpg" data-src="holder.js/200%x150" alt="200%x150"/>
                                <div class="caption">
                                    <p class="lead">Сдержанный, безупречный стиль снискал любовь миллионов женщин во всем мире. Классика - это всегда победа и успех.</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="thumbnail8" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Закрыть</span></button>
                            <h4 class="modal-title" id="myModalLabel">Легкость и флирт, строгость и сдержанность</h4>
                        </div>
                        <div class="modal-body">

                            <div class="thumbnail">
                                <img data-holder-rendered="true" src="images/ob600-8.jpg" data-src="holder.js/200%x150" alt="200%x150"/>
                                <div class="caption">
                                    <p class="lead">Безупречное качество одежды HISTORY идет рука об руку с передовыми технологиями и высочайшими навыками специалистов.</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="tracked" id="gurantija">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12">
                        <div class="page-header">
                            <h1 class="lead">Гарантия высокого качаства<br />
                                <small>Обрати вниманее на качество материала,технологию производства, и поймёшь, что это платье для Тебя.</small>
                            </h1>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6 col-md-6">        
                        <div class="thumbnail">
                            <a href="#" data-toggle="modal" data-target="#gagrntija1" >
                                <img data-holder-rendered="true" src="assets/images/fragment06m.jpg" class="img-thumbnail" data-src="holder.js/200%x150" alt="200%x150">
                            </a>                          
                            <div class="caption">
                                <p><strong>Сертификат материала<br /></strong>
                                    Превосходное качество материала подтверждает его сертификат качества<br />
                                    50% шерсти и 50% полистирола<br />
                                    плотность — 360 gr/ml<br /> 
                                    Универсальная, итальянская ткань в изделии, из которой комфортно чувствуешь себя при любой температуре.<br /> 
                                    Оно нежно прилегает к телу, в нем комфортно и легко.<br />
                                    <br />
                                </p>                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6">        
                        <div class="thumbnail">
                            <a href="#" data-toggle="modal" data-target="#gagrntija2" >
                                <img data-holder-rendered="true" src="assets/images/fragment02m.jpg" class="img-thumbnail" data-src="holder.js/200%x150" alt="200%x150">
                            </a>                          
                            <div class="caption">
                                <p><strong>Новейшее оборудование</strong><br /> 
                                    Только на высоко технологичном оборудовании возможно достичь идеальной классические линии,<br />
                                    и сделать декоративные строчки, которые подчеркнут достоинства, а уникальность покроя дает гарантию,<br /> 
                                    что такого же платья больше нет в Твоем городе.<br />
                                    Дорогая ткань придаст Вашему образу дополнительный шарм.<br /><br />

                                </p>
                            </div>                                              
                        </div>
                    </div>                        
                </div>

                <div class="row">
                    <div class="col-sm-6 col-md-6">        
                        <div class="thumbnail">
                            <a href="#" data-toggle="modal" data-target="#gagrntija3" >
                                <img data-holder-rendered="true" src="assets/images/fragment05m.jpg" class="img-thumbnail" data-src="holder.js/200%x150" alt="200%x150">
                            </a>                          
                            <div class="caption">
                                <p><strong>Идеальная строчка</strong><br />                                    
                                    Идеально выполненные классические линии изделия сразу бросается в глаза,<br /> ручная работа заметна только профессионалам.
                                    Красное платье до колен превосходно подчеркивает изящный силуэт женской фигуры.<br /> 
                                    В этом красном платье, незамеченной вы точно не останетесь.<br />
                                    В платье такого качества — еще один “шаг к победе” на любом светском мероприятии. <br />

                                </p>
                            </div>                                              
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6">        
                        <div class="thumbnail">
                            <a href="#" data-toggle="modal" data-target="#gagrntija4" >
                                <img data-holder-rendered="true" src="assets/images/fragment03m.jpg" class="img-thumbnail" data-src="holder.js/200%x150" alt="200%x150">
                            </a>                          
                            <div class="caption">
                                <p><strong>Декоративная вставка</strong><br />                                   
                                    Элегантность, но не чопорность!<br />
                                    Платье приковывает внимание выразительным ярким цветом и декоративной вставкой по форме груди. <br />
                                    Небольшие, но существенные детали создают особую выразительность.<br />
                                    Высоко качественная ткань платья вносит практичность в этот букет эмоций.<br /><br />

                                </p>
                            </div>                                              
                        </div>                        
                    </div>                                
                </div>

                <div class="row">
                    <div class="col-sm-6 col-md-6">        
                        <div class="thumbnail">
                            <a href="#" data-toggle="modal" data-target="#gagrntija5" >
                                <img data-holder-rendered="true" src="assets/images/fragment07m.jpg" class="img-thumbnail" data-src="holder.js/200%x150" alt="200%x150">
                            </a>                          
                            <div class="caption">
                                <p><strong>Молния вшита идеально</strong><br />
                                    Полушерстяное красное платье — одна из трендовых вещей нашей коллекции, подчеркивает Ваш педантичный подход не только к делам, но и вещам. Это платье подходит как для дневного, так и для вечернего look-a. 
                                    Это удобное платье Вашего гардероба имеет все шансы стать Вашей самой любимой вещью.

                                </p>
                            </div>                                              
                        </div>                          
                    </div>
                    <div class="col-sm-6 col-md-6">        
                        <div class="thumbnail">
                            <a href="#" data-toggle="modal" data-target="#gagrntija6" >
                                <img data-holder-rendered="true" src="assets/images/fragment04m.jpg" class="img-thumbnail" data-src="holder.js/200%x150" alt="200%x150">
                            </a>                          
                            <div class="caption">
                                <p><strong>Волосяные швы</strong><br />
                                    Блистайте на любом мероприятии!<br />Модные элементы и строгость классического стиля— это ли не искусство?<br />
                                    Красота кроется в деталях, в идеальных швах модного кроя, а это сделает Вас заметной,
                                    а ярко красный цвет ткани будет магнитом притягивать восторженные взгляды. <br />

                                </p>
                            </div>                                              
                        </div>                         
                    </div>                                
                </div>
            </div>
            <div class="modal fade" id="gagrntija1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Закрыть</span></button>
                            <h4 class="modal-title" id="myModalLabel">Гарантия1 Заголовок</h4>
                        </div>
                        <div class="modal-body">

                            <div class="thumbnail">
                                <img data-holder-rendered="true" src="assets/images/fragment06.jpg" data-src="holder.js/200%x150" alt="200%x150"/>
                                <div class="caption">
                                    <p class="lead">Описание Гарантияй1</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="gagrntija2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Закрыть</span></button>
                            <h4 class="modal-title" id="myModalLabel">Гарантия2 Заголовок</h4>
                        </div>
                        <div class="modal-body">

                            <div class="thumbnail">
                                <img data-holder-rendered="true" src="assets/images/fragment02.jpg" data-src="holder.js/200%x150" alt="200%x150"/>
                                <div class="caption">
                                    <p class="lead">Описание Гарантияй</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="gagrntija3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Закрыть</span></button>
                            <h4 class="modal-title" id="myModalLabel">Гарантия3 Заголовок</h4>
                        </div>
                        <div class="modal-body">
                            <div class="thumbnail">
                                <img data-holder-rendered="true" src="assets/images/fragment05.jpg" data-src="holder.js/200%x150" alt="200%x150"/>
                                <div class="caption">
                                    <p class="lead">Описание Гарантияй3</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="gagrntija4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Закрыть</span></button>
                            <h4 class="modal-title" id="myModalLabel">Гарантия4 Заголовок</h4>
                        </div>
                        <div class="modal-body">

                            <div class="thumbnail">
                                <img data-holder-rendered="true" src="assets/images/fragment03.jpg" data-src="holder.js/200%x150" alt="200%x150"/>
                                <div class="caption">
                                    <p class="lead">Описание Гарантияй4</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="gagrntija5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Закрыть</span></button>
                            <h4 class="modal-title" id="myModalLabel">Гарантия5 Заголовок</h4>
                        </div>
                        <div class="modal-body">
                            <div class="thumbnail">
                                <img data-holder-rendered="true" src="assets/images/fragment07.jpg" data-src="holder.js/200%x150" alt="200%x150"/>
                                <div class="caption">
                                    <p class="lead">Описание Гарантияй5</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="gagrntija6" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Закрыть</span></button>
                            <h4 class="modal-title" id="myModalLabel">Гарантия6 Заголовок</h4>
                        </div>
                        <div class="modal-body">
                            <div class="thumbnail">
                                <img data-holder-rendered="true" src="assets/images/fragment04.jpg" data-src="holder.js/200%x150" alt="200%x150"/>
                                <div class="caption">
                                    <p class="lead">Описание Гарантияй6</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="otzivi" class="tracked" >
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12">
                        <div class="page-header">
                            <h1 class="lead">Отзывы покупательниц <br />
                                <small>Тех кого мы сделали красивие</small>
                            </h1>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-6">
                        <div class="thumbnail media">
                            <a class="media-left" href="#">
                                <img class="img-rounded" alt="" src="images/01otz.jpg" />
                            </a>
                            <div class="media-body">
                                <h4 class="media-heading">Светлана Красина</h4>
                                <p class="">С этого сайга я делала два заказа, и они оба дошли. Заказывала я 2 офисных платья, 
                                    длиной ниже колена. Пришедшие покупки были такого же отличного качества, как и на Фото, 
                                    но самое главным для меня было, что они очень хорошо сидят на мне. Спасибо мастерам.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-6">
                        <div class="thumbnail media">
                            <a class="media-left" href="#">
                                <img class="img-responsive img-rounded" alt="" src="images/02otz.jpg" />
                            </a>
                            <div class="media-body">
                                <h4 class="media-heading">Катя Грачева</h4>
                                <p class="">
                                    Очень хорошее качество вещей плюс дизайн, плюс дорогие ткани. Вещи, приходит как на Фото, цвета совпадают. 
                                    Одежда такого уровня в магазинах продаётсл дороже, размеры совпадают Качество и дизайн вещей мхе очень нравитсия. 
                                    Сайт очень порадовал, спасибо!
                                </p> 
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6 col-md-6">
                        <div class="thumbnail media">
                            <a class="media-left" href="#">
                                <img class="img-responsive img-rounded" alt="" src="images/03otz.jpg" />
                            </a>
                            <div class="media-body">
                                <h4 class="media-heading">Вера Николаева</h4>
                                <p class=""> Этот сайт прекрасная альтернатива долгим и утомительным походам по магазинам, 
                                    другим сайтам, каторые. являются перекупщиками. А перекупщики не отвечают за качество. На этом же сайте оригинальные, мордые и качественные вещи, быстрая и удобная доставка.
                                    А впечатлена сервисом и качеством. Спасибо организаторам и мастерам. Буру заказывать ещё.<br /><br /><br />
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-6">
                        <div class="thumbnail media">
                            <a class="media-left" href="#">
                                <img class="img-responsive img-rounded" alt="" src="images/04otz.jpg" />
                            </a>
                            <div class="media-body">
                                <h4 class="media-heading">Ирина Николаева</h4>
                                <p class="">
                                    Хотела бы обратить внимание, что на сайте представлена удобная таблица размеров, в разных вариациях, 
                                    благодаря которой легко понять свой размер, надо лишь измерить себя. И вщи там, как показал мой опыт, 
                                    не маломерки, а как раз такого размера, какой заявлен на сайт. Даж с моим высоким ростом не слоажно 
                                    подобрать платье хорошей длины, которое бы село идеальна груди и талия была на талии, что даже в дорогих 
                                    магазинах стаиовигс я проблем.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
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
            <div class="row pull-right promo_img">
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <div class="caption">
                            <h3 class="heder">Закажи</h3>
                            <img src="img/promo_step1.png" data-src="img/promo_step1.png" alt="...">
                            <p class="caption">Вы оставляете <br />заявку на сайте в форме внизу</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <div class="caption">
                            <h3 class="heder">Потверди</h3>
                            <img src="img/promo_step2.png" data-src="img/promo_step1.png" alt="...">
                            <p class="caption">Вы оставляете <br />заявку на сайте в форме внизу</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <div class="caption">
                            <h3 class="heder">Получи</h3>
                            <img src="img/promo_step3.png" data-src="img/promo_step1.png" alt="...">
                            <p class="caption">Вы оставляете <br />заявку на сайте в форме внизу</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <div class="caption">
                            <h3 class="heder">Оплати</h3>
                            <img src="img/promo_step4.png" data-src="img/promo_step1.png" alt="...">
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
                            <h1 class="lead">Оформить заказ<br />
                                <small>На указанный Вами адрес будет отправлено красное платье, за которое Вы расплатитесь при получении товара.</small>
                            </h1>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <p class="lead">Картинка текст или всё вмести по желанию</p>            
                        <p class="lead"> 
                            <a href="#" data-toggle="modal" data-target="#razmer_odezdi">
                                ТАБЛИЦА РАЗМЕРОВ ЖЕНСКОЙ ОДЕЖДЫ (ГОСТ 17522-72).
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

                        <div class="modal fade" id="razmer_odezdi" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Закрыть</span></button>
                                        <h4 class="modal-title" id="myModalLabel">ТАБЛИЦА РАЗМЕРОВ ЖЕНСКОЙ ОДЕЖДЫ (ГОСТ 17522-72).</h4>
                                    </div>
                                    <div class="modal-body">
                                        <div class="panel panel-default">
                                            <div class="panel-heading">ТАБЛИЦА РАЗМЕРОВ ЖЕНСКОЙ ОДЕЖДЫ (ГОСТ 17522-72).</div>
                                            <table class="table table-bordered table-responsive table-striped table-hover table-condensed">
                                                <thead>
                                                    <tr>
                                                        <th><strong>РОССИЙСКИЙ<br>РАЗМЕР</strong></th>
                                                        <th><strong>ОБХВАТ<br>ГРУДИ</strong></th>
                                                        <th><strong>ОБХВАТ<br>БЕДЕР</strong></th>
                                                    </tr>
                                                    <tr>
                                                        <th></th>
                                                        <th colspan="2">CM</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><strong>36</strong></td>
                                                        <td>72</td>
                                                        <td>80</td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>38</strong></td>
                                                        <td>76</td>
                                                        <td>84</td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>40</strong></td>
                                                        <td>80</td>
                                                        <td>88</td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>42</strong></td>
                                                        <td>84</td>
                                                        <td>92</td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>44</strong></td>
                                                        <td>88</td>
                                                        <td>96</td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>46</strong></td>
                                                        <td>92</td>
                                                        <td>100</td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>48</strong></td>
                                                        <td>96</td>
                                                        <td>104</td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>50</strong></td>
                                                        <td>100</td>
                                                        <td>108</td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>52</strong></td>
                                                        <td>104</td>
                                                        <td>112</td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>54</strong></td>
                                                        <td>108</td>
                                                        <td>116</td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>56</strong></td>
                                                        <td>112</td>
                                                        <td>120</td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>58</strong></td>
                                                        <td>116</td>
                                                        <td>124</td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>60</strong></td>
                                                        <td>120</td>
                                                        <td>128</td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>62</strong></td>
                                                        <td>124</td>
                                                        <td>132</td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>64</strong></td>
                                                        <td>128</td>
                                                        <td>136</td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>66</strong></td>
                                                        <td>132</td>
                                                        <td>140</td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>68</strong></td>
                                                        <td>136</td>
                                                        <td>144</td>
                                                    </tr>
                                                </tbody>
                                            </table>                   
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
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.1.js"><\/script>');</script>
        <script src="js/vendor/bootstrap.min.js"></script>
        <script src="js/vendor/jquery-scrollTo/jquery.scrollTo.min.js"></script>
        <script src="js/vendor/waypoints/waypoints.js"></script>

        <script src="js/main.js"></script>

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