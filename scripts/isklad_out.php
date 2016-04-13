<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $page_title; ?></title>
    <meta name="description" content="<?php echo $page_desc; ?>">
	<meta name="keywords"  content="<?php echo $page_kwords; ?>">
	<meta name="author" content="Ilia Zykov">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
	<link rel="icon" href="/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/default.css"/>
    <link rel="stylesheet" href="/css/main.css"/>
    <link rel="stylesheet" href="<?php echo $page_css; ?>"/>
</head>

<body>
    
<header>
    <div class="inner clearfix">
        <a href="/"><img src="/images/logo.png" alt="isklad" class="logo"></a>
        <div class="contact-info">
            <div class="title">Надежный склад</div>
            <p>+7 (977) 948-55-12</p>
            <p><a href="mailto:info@isklad.ru">info@isklad.ru</a></p>
        </div>
    </div>
</header>

<nav id="main-nav">
    <div class="inner clearfix">
        <a href="/" class="menu-item <?php echo $menu_active[0]; ?>"><i class="fa fa-home"></i> У нас</a>
        <a href="/services/" class="menu-item <?php echo $menu_active[1]; ?>"><i class="fa fa-user"></i> Вы можете</a>
        <a href="/orders/" class="menu-item <?php echo $menu_active[2]; ?>"><i class="fa fa-lock"></i> Сохранить</a>
        <a href="/goods/" class="menu-item <?php echo $menu_active[3]; ?>"><i class="fa fa-archive"></i> Свой груз</a>
    </div>
</nav>

<section id="content">
	<div class="inner clearfix">
		<?php echo $page_body; ?>
	</div>
</section>

<nav id="free">
    <div class="inner">
        <a href="/tariff/" class="menu-item <?php echo $menu_active[4]; ?>"><i class="fa fa-thumbs-up"></i> Бесплатно*.</a>
        <div class="desc">*Два дня с момента разгрузки.</div>
    </div>
</nav>

<footer>
    <div class="inner">
        <nav id="footer-nav" class="clearfix">
            <a href="/">Контакты</a>
            <a href="/services/">Услуги</a>
            <a href="/orders/">Заказы</a>
            <a href="/goods/">Ограничения</a>
            <a href="/tariff/">Стоимость</a>
        </nav>
    </div>
</footer>

</body>

</html>