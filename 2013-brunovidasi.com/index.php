<!-- INDEX.PHP DO SITE BRUNOVIDASI.COM DESENVOLVIDO POR BRUNO VIEIRA - © 2013 TODOS OS DIREITOS RESERVADOS -->
<!DOCTYPE html>
<html lang="pt-br">

<?php include("paginas/head.php"); ?></div>		

<body ondragstart='return false' oncontextmenu='return false' onselectstart="return false">

	<!-- DESFAZER MOSTRAR OS ERROS DO PHP PARA VISITANTES EM CASOS DE ERROS FUTUROS -->
	<?php ini_set('display_errors', 0 ); error_reporting(0); ?>
  
	<!-- PRÉ-CARREGAMENTO -->
	<div id="preload-container">
		<img class="preload-image" id="img0"  src="./preload/background_new.jpg" alt="preload-image">
		<img class="preload-image" id="img1"  src="./preload/handy_hand_new.png"           alt="preload-image">
	</div>
  
    <!-- BOTÕES IR E VOLTAR -->
  	<nav id="nav-page">
		<div class="default">
			<a class="previous" style="display:none;">
				<img src="./images/page-navigation-background.png" alt="" class="background">
				<img src="./images/page-navigation-left.png" alt="" class="button">
			</a>
			<a class="next">
				<img src="./images/page-navigation-background.png" alt="" class="background">
				<img src="./images/page-navigation-right.png" alt="" class="button">
			</a>
		</div>
		
		<div class="mobile">
			<a class="previous" style="display:none;">
				<img src="./images/page-navigation-left-mobile.png" alt="" class="button" width="40" height="40" />
			</a>
			<a class="next">
				<img src="./images/page-navigation-right-mobile.png" alt="" class="button" width="40" height="40" />
			</a>	
		</div>
	</nav>
  
	<!-- MINIMENU E CARREGAMENTO DO SITE -->  
	<header id="minimenu"><a href="#inicio"><img src="./images/brunologo100--.png"></a></header> 
	<div id="loading"><p><img src="./images/brunologo100.png"></p><br><img id="loading-gif" src="./images/preloader.gif"></div>
  
	<!-- MENU MOBILE -->
	<nav id="nav-mobile" class="nav">
		<img src="./images/button-menu.png" alt="Menu" width="40" class="menu-link" />
		<div class="container">
			<div class="iscroll">
				<div class="iscroll-inner">
					<img src="./images/brunologo100--.png" alt="Bruno Vieira" class="image" />
					<ul>
						<li class="current"><div class="link-container"><a data-target="#inicio">Início</a></div></li>
						<li><a data-target="#portfolio">Meus Projetos</a></li>
						<li><a href="http://www.brunovidasi.com/java.html">Desenvolvimento Java SE</a></li>
						<li><a href="http://www.brunovidasi.com/curriculo.pdf">Curriculum Vitae</a></li>
						<li><a href="http://blog.brunovidasi.com/" target="_blank">Blog</a></li>
						<li><a href="https://www.facebook.com/brunovidasi" target="_blank">Facebook</a></li>
						<li><a href="https://twitter.com/brunovidasi" target="_blank">Twitter</a></li>
						<li class="last"><a href="mailto:bruno@vidasi.com.br">E-mail</a></li>
					</ul>
				</div>
			</div>
		</div>
	</nav>
	
    <!-- PÁGINA 1 - INICIO -->
    <div id="inicio" class="page page-current loaded">		
        <div id="header-parallax" class="parallax">
            <div id="handy" class="header-parallax-container p-effect"> 
	            <div class="background"></div>
	            <div class="iscroll tablet">
                <div class="iscroll-inner"> 				
					<div id="iniciopc">
						<?php include("paginas/inicio.php"); ?>
					</div>				
					<div id="iniciomobile">
						<?php include("paginas/iniciomobile.html"); ?>
					</div>
                </div></div>
            </div>
        </div>
    </div>
	
    <!-- PÁGINA 2 - PORTIFÓLIO -->
	<div id="portfolio" class="page">
		<div class="iscroll-inner">
			<?php include("paginas/portfolio.php"); ?>	
		</div>
	</div>
	
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-43397149-1', 'brunovidasi.com');
  ga('send', 'pageview');
  
	console.log('Por favor, não entre no "Inspecionar Elemento" deste site.');
	console.log('www.brunovidasi.com - © 2013 - Todos os Direitos Reservados');
	console.log('-----------------------------------------------------------------');

</script>

	
</body>
</html>