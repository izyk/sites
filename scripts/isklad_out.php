<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<base href="http://isklad.ru/">
    <title><?php echo $page_title; ?></title>
    <meta name="description" content="<?php echo $page_desc; ?>">
	<meta name="keywords" content="склад, ответственное хранение, складские услуги, сервис-ориентированный склад">
	<meta name="author" content="Ilia Zykov">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/default.css"/>
    <link rel="stylesheet" href="css/main.css"/>
</head>

<body>
    
<header>
    <div class="inner clearfix">
        
        <a href="./"><img src="images/2_logo.png" alt="" class="logo"></a>

        <div class="contact-info">
            <div class="title">Надежный склад</div>
            <p>+7 (495) 123-45-67</p>
            <p><a href="mailto:info@isklad.ru">info@isklad.ru</a></p>
        </div>

    </div>
</header>

<nav id="main-nav">
    <div class="inner clearfix">
        <a href="/" class="menu-item <?php echo $menu_active[0]; ?>"><i class="fa fa-home"></i> У нас</a>
        <a href="youcan/" class="menu-item <?php echo $menu_active[1]; ?>"><i class="fa fa-user"></i> Вы можете</a>
        <a href="keep/" class="menu-item <?php echo $menu_active[2]; ?>"><i class="fa fa-lock"></i> Сохранить</a>
        <a href="goods/" class="menu-item <?php echo $menu_active[3]; ?>"><i class="fa fa-archive"></i> Свой груз</a>
    </div>
</nav>

<section id="content">
    <div class="inner"><?php echo $page_body; ?>
    </div>
</section>

<nav id="free">
    <div class="inner">
        <a href="tariff/" class="menu-item <?php echo $menu_active[4]; ?>"><i class="fa fa-thumbs-up"></i> Бесплатно*.</a>
        <div class="desc">*Два дня с момента разгрузки.</div>
    </div>
</nav>

<footer>
    <div class="inner">
        <nav id="footer-nav" class="clearfix">
            <a href="/">О нас</a>
            <a href="youcan/">Услуги</a>
            <a href="keep/">Клиентам</a>
            <a href="goods/">Товары</a>
            <a href="tariff/">Цены</a>
        </nav>
    </div>
</footer>

</body>

</html>