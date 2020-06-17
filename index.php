<?php include('config.php'); ?>

<!DOCTYPE html>

<html>

<head>

	<title>O Programador Expert</title>

	<meta charset="utf-8" />

	<meta name="theme-color" content="black">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<meta name="msapplication-navbutton-color" content="black">

	<link rel="stylesheet" type="text/css" href="<?php echo INCLUDE_PATH; ?>estilo/style.css" />
	<link href="https://fonts.googleapis.com/css?family=Righteous&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">

	<script src="https://kit.fontawesome.com/92ee4dadad.js" crossorigin="anonymous"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" type="image/x-icon" href="<?php echo INCLUDE_PATH; ?>favicon.ico" />
	<!-- Tags para SEO: -->
	<meta name="keywords" content="como aprender a programar,aprender a programar,python,javascript,programador">
	<meta name="description" content="Blog para programadores.">

	<!--Mail chimp: -->

	<script id="mcjs">!function(c,h,i,m,p){m=c.createElement(h),p=c.getElementsByTagName(h)[0],m.async=1,m.src=i,p.parentNode.insertBefore(m,p)}(document,"script","https://chimpstatic.com/mcjs-connected/js/users/942a4d717b383e1d84c1815db/f59d85d538e8ea2880ec99004.js");</script>

</head>

<body>

<?php

	$url = isset($_GET['url']) ? $_GET['url'] : 'home';

	switch ($url) {
		case 'blog':
			echo '<target target="blog" />';
			break;
	}

?>

<?php new Email(); ?>

<header>
	
		<div class="logo left">
			<!--<img class="left" src="images/img-logo.png" width="55px"/>-->
			<a class="left" href="<?php echo INCLUDE_PATH; ?>"><h1> O PROGRAMADOR EXPERT <b> | </b></h1></a>
		</div> <!--logo-->

		<nav class="desktop left">
			<ul>
                <li><a href="<?php echo INCLUDE_PATH; ?>">home</a></li>
				<li><a href="<?php echo INCLUDE_PATH_BLOG; ?>">blog</a></li>
                <!--<li><a href="<?php /*echo INCLUDE_PATH*/; ?>star-coders">Curso Gratuito</a></li>-->
				<li><a href="https://devmarket.oprogramadorexpert.com.br/">devmarket</a></li>
				<li><a href="<?php echo INCLUDE_PATH_LIVRO; ?>">livro</a></li>
			</ul>
		</nav>

		<nav class="mobile left">
			<div class="botao-menu-mobile">
				<p><i class="fa fa-bars"></i> <b>Menu</b></p>
			</div>
			<ul>
				<li><a href="<?php echo INCLUDE_PATH; ?>">home</a></li>
				<li><a href="<?php echo INCLUDE_PATH_BLOG; ?>">blog</a></li>
                <!--<li><a href="<?php /*echo INCLUDE_PATH;*/ ?>star-coders">Curso Gratuito</a></li>-->
				<li><a href="https://devmarket.oprogramadorexpert.com.br/">devmarket</a></li>
                <li><a href="<?php echo INCLUDE_PATH_LIVRO; ?>">livro</a></li>
                <li><a href="">Instagram</a></li>
                <li><a href="">Twitter</a></li>
                <li><a href="">Facebook</a></li>
			</ul>
		</nav>

        <div class="redes-sociais-header right">
			<a href="https://www.instagram.com/oprogramadorexpert/?hl=pt-br"><i class="fab fa-instagram"></i></a>
            <a href="https://www.facebook.com/programadorexpert/?ref=bookmarks"><i class="fab fa-facebook-f"></i></a>
            <a href="https://twitter.com/oprogexpert"><i class="fab fa-twitter"></i></a>
        </div>

		<div class="clear"></div>

</header>

<?php

	if(file_exists('pages/'.$url.'.php')){
		include('pages/'.$url.'.php');
	}else{
		if($url != 'blog'){
			include('pages/404.php');
		}else{
			include('pages/home.php');
		}
	}

?>

<section class="redes-sociais">
    <div class="center">

        <div class="w50 left img-redes-sociais">
            <img src="images/redes-sociais.png" width="300px;">
        </div>
        <div class="w50 right texto-redes-sociais">
            <a href="https://www.instagram.com/oprogramadorexpert/?hl=pt-br"><i class="fab fa-instagram"></i></a>
            <a href="https://www.facebook.com/programadorexpert/?ref=bookmarks"><i class="fab fa-facebook-f"></i></a>
            <a href="https://twitter.com/oprogexpert"><i class="fab fa-twitter"></i></a>
        </div>
        <div class="clear"></div>

    </div>
</section>

<section class="background-black"></section>

<footer class="footer">
    <div class="center">
        <div class="w50 left">
            <p>O PROGRAMADOR EXPERT © 2020</p>
        </div>
        <div class="w50 right">
            <p>Todos os direitos reservados</p>
        </div>
        <div class="clear"></div>
    </div>
</footer>


<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/main.js"></script>


</body>

</html>
