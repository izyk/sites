<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $page_title; ?></title>
    <meta name="description" content="<?php echo $page_desc; ?>">
	<meta name="keywords"  content="<?php echo $page_kwords; ?>">
	<meta name="author" content="Ilia Zykov">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
	<link rel="icon" href="/favicon.png" type="image/png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/default.css"/>
    <link rel="stylesheet" href="/css/main.css"/>
    <link rel="stylesheet" href="<?php echo $page_css; ?>"/>
</head>

<body>

<!-- Yandex.Metrika counter --> <script type="text/javascript"> (function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter36999125 = new Ya.Metrika({ id:36999125, clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true }); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = "https://mc.yandex.ru/metrika/watch.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks"); </script> <noscript><div><img src="https://mc.yandex.ru/watch/36999125" style="position:absolute; left:-9999px;" alt="" /></div></noscript> <!-- /Yandex.Metrika counter -->
<!-- Google analytics -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-76892504-1', 'auto');
  ga('send', 'pageview');
</script>

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
        <a href="/" class="menu-item <?php echo $menu_active[0]; ?>"><i class="fa fa-user"></i> Вы можете</a>
        <a href="/recommends/" class="menu-item <?php echo $menu_active[1]; ?>"><i class="fa fa-lock"></i> Сохранить</a>
        <a href="/orders/" class="menu-item <?php echo $menu_active[2]; ?>"><i class="fa fa-archive"></i> Свой груз</a>
        <a href="/contacts/" class="menu-item <?php echo $menu_active[3]; ?>"><i class="fa fa-home"></i> У нас</a>
    </div>
</nav>

<section id="content">
	<div class="inner clearfix">
		<?php echo $page_body; ?>
	</div>
</section>

<nav id="free">
    <div class="inner">
        <a href="/tariff/" class="menu-item <?php echo $menu_active[4]; ?>"><i class="fa fa-thumbs-up"></i> Бесплатно*</a>
        <div class="desc">*Два дня с момента разгрузки.</div>
    </div>
</nav>

<footer>
    <div class="inner">
        <nav id="footer-nav" class="clearfix">
            <a href="/">Услуги</a>
            <a href="/recommends/">Рекомендации</a>
            <a href="/orders/">Клиентам</a>
            <a href="/contacts/">Контакты</a>
            <a href="/tariff/">Стоимость</a>
        </nav>
    </div>
</footer>

</body>

</html>