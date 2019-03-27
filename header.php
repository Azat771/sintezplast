<!DOCTYPE HTML>
<html lang= "ru-RU">
<head>
<meta charset= "utf-8">
<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<script src="<?php bloginfo('template_url'); ?>/js/bootstrap.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/lazysizes.js" async="" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/main.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/jquery.maskedinput.js"></script>
<script>
    $(function($){
        $('[name="phone"]').mask("+7(999) 999-9999");
    });
</script>
<title>Пример сайта</title>
<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
<link rel="icon" href="/favicon.ico" type="image/x-icon" />
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Fira+Sans+Extra+Condensed" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</head>
<body>
<nav class="navbar navbar-expand-md navbar-light d-none d-sm-block">
    <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="#" class="nav-link">История</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">География поставок</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Стратегия компании</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Фотогалерея</a>
                </li>
            </ul>
            <form role="search" method="get" id="searchform" class="search-form form-inline ml-auto" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="s" id="s">
                <button class="btn btn-primary my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></button>
            </form>
        </div>
    </div>
</nav>
<nav class="navbar navbar-expand-md navbar-dark bg-dark sticky-top">
    <div class="container-fluid">
        <?php if(is_front_page() || is_home() ){ ?>
            <img class="navbar-brand img" src="/logo-companii-tacoy" alt="1" title="" />
        <?php } else { ?>  
            <a href="<?php echo home_url(); ?>"><img class="img navbar-brand" src="/logo-companii-tacoy" alt="1" title="" /></a>
        <?php } ?>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item d-block d-sm-none">
                    <a href="#" class="nav-link">История</a>
                </li>
                <li class="nav-item d-block d-sm-none">
                    <a href="#" class="nav-link">География поставок</a>
                </li>
                <li class="nav-item d-block d-sm-none">
                    <a href="#" class="nav-link">Стратегия компании</a>
                </li>
                <li class="nav-item d-block d-sm-none">
                    <a href="#" class="nav-link">Фотогалерея</a>
                </li>
                <div class="dropdown-divider d-block d-md-none"></div>
                <li class="nav-item dropdown">
                    <button class="btn btn-dark btn-md menu" type="button"><a href="o-kompanii">О компании</a></button>    
                    <button type="button" class="btn btn-md btn-dark dropdown-toggle dropdown-toggle-split d-md-none" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="sr-only">Toggle Dropdown</span>
                    </button>           
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item wdth" href="ustavnye-dokumenty">Уставные документы</a>
                        <a class="dropdown-item wdth" href="rekvizity">Реквизиты</a>
                        <a class="dropdown-item wdth" href="#">Договор потсавки (скачать)</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <button class="btn btn-dark btn-md menu" type="button"><a href="#">Каталог</a></button>   
                    <button type="button" class="btn btn-md btn-dark dropdown-toggle dropdown-toggle-split d-md-none" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="sr-only">Toggle Dropdown</span>
                    </button>              
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item wdth" href="#">Водоснабжение</a>
                        <a class="dropdown-item wdth" href="#">Водоотведение</a>
                        <a class="dropdown-item wdth" href="#">Газораспределние</a>
                        <a class="dropdown-item wdth" href="#">Кабелезащита - системы трубопроводов для защиты кабеля</a>
                        <a class="dropdown-item wdth" href="#">Решения для промышленности - системы технологических полимерных трубопроводов</a>
                        <a class="dropdown-item wdth" href="#">Системы ирригации</a>
                        <a class="dropdown-item wdth" href="#">Оборудование для сварки ПЭ труб</a>
                        <a class="dropdown-item wdth" href="#">Запорно-регулирующая арматура</a>
                        <a class="dropdown-item wdth" href="#">Гибкие системы трубопроводов отопления и ГВС</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <button class="btn btn-dark btn-md menu" type="button"><a href="o-kompanii">Прайс-листы</a></button>    
                    <button type="button" class="btn btn-md btn-dark dropdown-toggle dropdown-toggle-split d-md-none" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="sr-only">Toggle Dropdown</span>
                    </button>                
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item wdth" href="#">Полиэтиленовые трубы Водопроводно-напорные ПЭ 80 (cкачать прайс)</a>
                        <a class="dropdown-item wdth" href="#">Трубы полиэтиленовые для газопроводов ПЭ 80, ПЭ 100 (скачать прайс)</a>
                        <a class="dropdown-item wdth" href="#">Полиэтиленовые трубы Водопроводно-напорные ПЭ 100 (скачать прайс)</a>
                        <a class="dropdown-item wdth" href="#">Фитинги электросварные</a>
                        <a class="dropdown-item wdth" href="#">Канализационные трубы (скачать прайс)</a>
                        <a class="dropdown-item wdth" href="#">Фитинги (скачать прайс)</a>
                        <a class="dropdown-item wdth" href="#">Сварочное оборудование (скачать прайс)</a>
                    </div>
                </li>
                <li class="nav-item">
                    <button class="btn btn-dark btn-md menu" type="button"><a href="gosty">ГОСТы</a></button>
                </li>
                <li class="nav-item">
                    <button class="btn btn-dark btn-md menu" type="button"><a href="kontakty">Контакты</a></button>
                </li>
                <li class="nav-item">
                    <button class="btn btn-dark btn-md menu" type="button"><a href="#">Услуги</a></button>
                </li>
            </ul>
            <div class="dropdown-divider d-block d-md-none"></div>
            <div class="phone mr-md-3 ml-md-5 mb-2 mb-md-0"><a href="tel:+79872964324">+7(987)296-43-24</a></div>
            <button type="button" class="btn btn-outline-light" data-toggle="modal" data-target="#popup">
                Заказать звонок
            </button>
            <form class="form-inline ml-auto d-block d-md-none my-2 d-flex">
                <input class="form-control mr-sm-2 w-75" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-primary my-2 my-sm-0 mx-auto" type="submit"><i class="fas fa-search"></i></button>
            </form>
        </div>
    </div>
</nav>
<div class="modal fade" id="popup" tabindex="-1" role="dialog" aria-labelledby="popup" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="popup">Закажите обратный звонок</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row justify-content-center my-md-5">
                    <?= $msg_box; // вывод сообщений ?>
                    <form name="MyForm" action="" id="callbacks" method="post">
                        <div class="form-row justify-content-center mx-2">
                            <input type="text" class="col-10 form-control mb-3" name="name" placeholder="Ваше имя" required />
                            <input type="phone" class="col-10 form-control mb-3" name="phone" placeholder="Ваш номер телефона" required />
                            <input type="submit" value="Отправить" id="btncontcall" class="btn btn-secondary col-10 mb-3"/>
                            <div class="wrap col text-center mb-3 color">
                                <input type="checkbox" checked required>
                                <label><span>Я даю согласие на обработку <a target="new" class="color" href="politika-konfidencialnosti">персональных данных.</a></span></label>
                            </div>
                        </div>
                    </form>
                    <div id="erconts"></div>
                </div>
            </div> 
            <script>
            $(document).ready(function() {
                $("#btncontcall").click(function(){ 
                    $.ajax({
                        type: "POST",
                        url:"/wp-content/themes/truby/mail.php", // Адрес обработчика
                        data:$("#callbacks").serialize(),
                        error:function(){$("#erconts").html("Произошла ошибка!");},
                        beforeSend: function() {
                            $("#erconts").html("Отправляем данные...");
                        },
                        success: function(result){
                            $("#erconts").html(result);
                            checkThis();
                        }
                    });
                    return false;
                });
            });
            </script>
        </div>
    </div>
</div>
<div class="container">
<div class="bread"><?php if ( function_exists( 'dimox_breadcrumbs' ) ) dimox_breadcrumbs(); ?></div>
</div>
