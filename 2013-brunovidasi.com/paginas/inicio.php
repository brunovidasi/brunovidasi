<!-- INICIO.PHP (PÁGINA 1 - INÍCIO) DO SITE BRUNOVIDASI.COM DESENVOLVIDO POR BRUNO VIEIRA - © 2013 TODOS OS DIREITOS RESERVADOS -->

<?php 
# Local DB access removed from the public repo.
$conecta = false;

if ($conecta) {
    mysql_select_db("brunovid_intranet", $conecta) or print(mysql_error());
}

# Define charset utf-8
mysql_set_charset('utf8');

# Faz o comando sql
$sql = "SELECT * FROM site LIMIT 1";

# Pega os resultados e conecta no banco
$result = mysql_query($sql, $conecta);

# Grava os dados do banco nas variáveis para usar no site
while($consulta = mysql_fetch_array($result)) {
   
   $titulo = $consulta['titulo'];
   
   $email_pessoal = $consulta['email_pessoal'];
   $email_profissional = $consulta['email_profissional'];
   
   $facebook = $consulta['facebook'];
   $txt_facebook = $consulta['txt_facebook'];
   $em_facebook = $consulta['em_facebook'];
   
   $twitter = $consulta['twitter'];
   $txt_twitter = $consulta['txt_twitter'];
   $em_twitter = $consulta['em_twitter'];
   
   $googleplus = $consulta['googleplus'];
   $txt_googleplus = $consulta['txt_googleplus'];
   $em_googleplus = $consulta['em_googleplus'];
   
   $linkedin = $consulta['linkedin'];
   $txt_linkedin = $consulta['txt_linkedin'];
   $em_linkedin = $consulta['em_linkedin'];
   
   $youtube = $consulta['youtube'];
   $txt_youtube = $consulta['txt_youtube'];
   $em_youtube = $consulta['em_youtube'];
   
   $mapa = $consulta['mapa'];
   $txt_mapa = $consulta['txt_mapa'];
   $em_mapa = $consulta['em_mapa'];
   $url_mapa = $consulta['url_mapa'];
   
   $empresa = $consulta['empresa_titulo'];
   $txt_empresa = $consulta['txt_empresa'];
   $txt2_empresa = $consulta['txt2_empresa'];
   $em_empresa = $consulta['em_empresa'];
   $url_empresa = $consulta['empresa_url'];
   
   $portfolio_titulo = $consulta['portfolio_titulo'];
   $portfolio = $consulta['portfolio'];
   $curriculo = $consulta['curriculo'];
   $portfolio_java = $consulta['portfolio_java'];
   $portfolio_web = $consulta['portfolio_web'];
   
   $titulo_portfolio = $consulta['titulo_portfolio'];
   $titulo_curriculo = $consulta['titulo_curriculo'];
   $titulo_web = $consulta['titulo_web'];
   $titulo_java = $consulta['titulo_java'];
   
} 

?>

<!-- BOTÕES DE REDES SOCIAIS
<nav id="social-container">
	<a href="https://twitter.com/share" class="twitter-share-button" data-url="http://www.brunovidasi.com/" data-via="brunovidasi" data-lang="pt" data-hashtags="brunovidasi" data-dnt="true">
	Tweetar</a><script type="text/javascript" src="./js/twitter.js"></script>
	
    <div class="g-plusone" data-size="medium" data-href="http://www.brunovidasi.com/"></div>

    <iframe class="fb-like" 
	src="http://www.facebook.com/plugins/follow.php?href=https%3A%2F%2Fwww.facebook.com%2Fbrunovidasi&layout=button_count&show_faces=true&colorscheme=light&font&width=450&appId=113797118738669" 
	scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:120px; height:21px;" allowTransparency="true"></iframe>
</nav> -->
  
<!-- COPYRIGHT -->
<footer id="copyright">© Copyright 2013 - <?php echo date('Y'); ?> | Desenvolvido por <a href="mailto:<?php echo $email_pessoal; ?>" >Bruno Vieira</a> </footer>


	<!-- CONTEÚDO DE DENTRO DO CELULAR -->
    <div class="device">
        <a class="nav-button" id="home-button" href="#home-container"></a>
        <div class="device-content">
		
			<div id="andro-clock">
				<div id="time">
				<span class="hour"></span>
				<span class="minute"></span>
				</div>		
				<div id="date"></div>
			</div> 		
		  
			<input id="search" type="text", placeholder="Pesquisar", autocomplete="on" />
			
			<ul id="nav" class="clearfix">
			
				<li id="twitter">
				<a class="nav-button" href="#twitter-container"></a>
				<h3>Twitter</h3>
				</li>
				
				<li id="googleplus">
				<a class="nav-button" href="#googleplus-container"></a>
				<h3>Google+</h3>
				</li>
			
				<li id="mail" class="odd">
				<a class="nav-button" href="#mail-container"></a>
				<h3>E-mail</h3>
				</li>
			
				<li id="facebook">
				<a class="nav-button" href="#fb-container"></a>
				<h3>Facebook</h3>
				</li>
			
				<li id="youtube">
				<a class="nav-button" href="#youtube-container"></a>
				<h3>Youtube</h3>
				</li>
			
				<li id="linkedin" class="odd">
				<a class="nav-button" href="#linkedin-container"></a>
				<h3>LinkedIn</h3>
				</li>
			
				<li id="vidasi">
				<a class="nav-button" href="#vidasi-container"></a>
				<h3>Vidasi</h3>
				</li>
			
				<li id="maps">
				<a class="nav-button" href="#maps-container"></a>
				<h3>Mapas</h3>
				</li>
			
				<li id="more" class="odd">
				<a class="nav-button" href="#more-container"></a>
				<h3>Portfólio</h3>
				</li>
				
			</ul>
        </div>
    </div> 

	<!-- CONTEÚDO DO LADO DO CELULAR --> 
    <div class="text parallax hidden">
	
        <div id="home-container" class="content">
			<h2><?php echo $titulo; ?></h2><br>
			<!--<img style="display: none" src="./images/eu.jpg" alt="Bruno Vieira" usemap="#restrito" width="330px"><br>-->  
			<img style="display: none" src="http://graph.facebook.com/1772288181/picture?type=large" alt="Bruno Vieira" usemap="#restrito" width="330px"><br>  
			<h6 style="background-color: #transparent; display: none">
			<div id="claim" class="claim"></div>
			</h6>
        </div>

        <div id="twitter-container" class="content hidden">
			<h2><a href="http://twitter.com/#!/<?php echo $twitter; ?>" target="_blank">@<?php echo $twitter; ?></a></h2><br><br>
			<?php if(!empty($em_twitter)){ 
				echo $em_twitter . '<br><br>';
			} ?>
			<p><?php echo $txt_twitter; ?></p>
        </div>

        <div id="googleplus-container" class="content hidden">
			<h2><a href="https://plus.google.com/<?php echo $googleplus; ?>/posts" target="_blank">Bruno Vieira+</a></h2><br><br>
			<?php if(!empty($em_googleplus)){ 
				echo $em_googleplus . '<br><br>';
			} ?>
			<p><?php echo $txt_googleplus; ?></p><br><br>
		</div>

        <div id="fb-container" class="content hidden">
			<h2><a href="http://fb.com/<?php echo $facebook; ?>" target="_blank">Facebook</a></h2><br><br>
			<?php if(!empty($em_facebook)){ 
				echo $em_facebook . '<br><br>';
			} ?>
			<p><?php echo $txt_facebook; ?></p>
        </div>

        <div id="mail-container" class="content hidden">
			<h2><a class="email" href="mailto:<?php echo $email_pessoal; ?>">Bruno Vieira@</a></h2><br><br>
			<!--<p><b>E-mail Profissional:</b></p>
			<p><a href="mailto:<?php echo $email_profissional; ?>"><?php echo $email_profissional; ?></a></p><br><br>-->
			<p><b>E-mail Pessoal:</b></p>
			<p><a href="mailto:<?php echo $email_pessoal; ?>"><?php echo $email_pessoal; ?></a></p><br><br>
        </div>

        <div id="linkedin-container" class="content hidden">
			<h2><a href="http://www.linkedin.com/in/<?php echo $linkedin; ?>" target="_blank">LinkedIn</a></h2><br><br>
			<?php if(!empty($em_linkedin)){ 
				echo $em_linkedin . '<br><br>';
			} ?>
			<p><?php echo $txt_linkedin; ?></p>
        </div>

        <div id="youtube-container" class="content hidden">
			<h2><a href="http://www.youtube.com/user/<?php echo $youtube; ?>" target="_blank">Meus Vídeos</a></h2><br><br>
			<?php if(!empty($em_youtube)){ 
				echo $em_youtube . '<br><br>';
			} ?>
			<p><?php echo $txt_youtube; ?></p><br><br>
        </div>

        <div id="vidasi-container" class="content hidden">
			<h2><a href=<?php echo $url_empresa; ?> target="_blank"><?php echo $empresa; ?></a></h2><br><br>
			<?php if(!empty($em_empresa)){ 
				echo $em_empresa . '<br><br>';
			} ?>
			<p><?php echo $txt_empresa; ?></p><br><br>
			<p><?php echo $txt2_empresa; ?></p>
        </div>

        <div id="maps-container" class="content hidden">
			<h2><a href=""><?php echo $mapa; ?></a></h2><br><br>
			<?php if(!empty($em_mapa)){ 
				echo $em_mapa . '<br><br>';
			} ?>
			<p><?php echo $txt_mapa; ?></p>
        </div>

        <div id="more-container" class="content hidden">
			<h2><?php echo $portfolio_titulo; ?><br></h2><br><br>
			
			<?php if(!empty($portfolio)){ 
				echo '<p><a href="'. $portfolio .'">'. $portfolio_titulo .'</a><br></p><br><br>';
			} ?>
			
			<?php if(!empty($portfolio_web)){ 
				echo '<p><a href="'. $portfolio_web .'">'. $titulo_web .'</a><br></p><br><br>';
			} ?>
			
			<?php if(!empty($portfolio_java)){ 
				echo '<p><a href="'. $portfolio_java .'" target="_blank">'. $titulo_java .'</a><br></p><br><br>';
			} ?>
			
			<?php if(!empty($curriculo)){ 
				echo '<p><a href="'. $curriculo .'" target="_blank">'. $titulo_curriculo .'</a><br></p><br><br>';
			} ?>
			
        </div>
		
    </div>