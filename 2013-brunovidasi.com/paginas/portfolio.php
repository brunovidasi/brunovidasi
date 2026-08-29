<!-- PORTFOLIO.PHP (PÁGINA 2 - PORTIFÓLIO) DO SITE BRUNOVIDASI.COM DESENVOLVIDO POR BRUNO VIEIRA - © 2013 TODOS OS DIREITOS RESERVADOS -->

<?php 
# Local DB access removed from the public repo.
# Configure the database connection in a private environment only.
$conecta = false;

if ($conecta) {
    mysql_select_db("brunovid_intranet", $conecta) or print(mysql_error());
}

# Define charset utf-8
mysql_set_charset('utf8');

# Faz o comando sql
$sql = "SELECT * FROM portfolio WHERE id=1";

# Pega os resultados e conecta no banco
$result = mysql_query($sql, $conecta);

# Grava os dados do banco nas variáveis para usar no site
while($consulta = mysql_fetch_array($result)) {

	$texto_web  	= $consulta['texto_web'];
	$texto_java 	= $consulta['texto_java'];
	$texto_sistema 	= $consulta['texto_sistema'];
	
	$link_web  		= $consulta['link_web'];
	$link_java 		= $consulta['link_java'];
	$link_sistema 	= $consulta['link_sistema'];
	
}

?>

<!-- TÍTULO -->
<div class="description clearfix" >
	<h1></h1>
	<h2>{ Portfólio }<br><br></h2>	
</div>

<div id="reviews" class="clearfix" >

<!-- PRIMEIRA COLUNA -->
<div class="column">

<!-- DESENVOLVIMENTO WEB -->
<div class="review">
	<h3><div class="br"><br></div><br>WebSites</h3>
	<div class="author">Desenvolvimento de WebSites e Blogs</div><br>
	<div class="gallery1" align="center">
		<div class="default1">
			<a href="#"><img src="./images/portfolio/brunovidasi.com.png" alt="" class="image0 image40 sitebruno"></a>
			<a href="#"><img src="./images/portfolio/comunidadeadventista.com.png" alt="" class="image0 image50 siteadventista"></a>
			<a href="#"><img src="./images/portfolio/vidasi.com.br.png" alt="" class="image0 image50 sitevidasi"></a>
		</div><br>
	</div>
	
	<p><?php echo $texto_web; ?></p>
	
	<div class="author versites">
		<?php if(!empty($link_web)) { ?>
			<a href="<?php echo $link_web; ?>" target="_blank">Vizualizar Portfólio</a>
		<?php }else{ ?>
			<span style="color:#C6E2FF;">Links não disponíveis por enquanto.</span>
		<?php } ?>
	</div>
</div><br><br>

</div>

<!-- SEGUNDA COLUNA -->
<div class="column">

<!-- DESENVOLVIMENTO JAVA -->
<div class="review">
	<h3><div class="br"><br></div><br>Java SE</h3>
	<div class="author">Desenvolvimento de Aplicativos</h3></div><br>
	<div class="gallery1" align="center">
		<div class="default1">
			<a href="#"><img src="./images/portfolio/calcularnotas.png" alt="" class="image0 image50 calculanotas"></a>
		</div><br>
	</div>
	
	<p><?php echo $texto_java; ?></p>	
	
	<div class="author verjava">
		<?php if(!empty($link_java)) { ?>
			<a href="<?php echo $link_java; ?>" target="_blank">Vizualizar Portfólio</a>
		<?php }else{ ?>
			<span style="color:#C6E2FF;">Links não disponíveis por enquanto.</span>
		<?php } ?>
	</div>
</div><br><br>

</div>

<!-- TERCEIRA COLUNA -->
<div class="column last">

<!-- DESENVOLVIMENTO DE SISTEMAS WEB -->
<div class="review">
	<h3><div class="br"><br></div><br>Sistemas Web</h3>
	<div class="author">Desenvolvimento de Sistemas Web</h3></div><br>
	<div class="gallery1" align="center">
		<div class="default1">
			<a href="#"><img src="./images/portfolio/timesheet.png" alt="" class="image0 image50 timesheet"></a>
			<a href="#"><img src="./images/portfolio/intranet.png"  alt="" class="image0 image50 intranet"></a>
			<a href="#"><img src="./images/portfolio/intranet2.png" alt="" class="image0 image50 intranet2"></a>
		</div><br>
	</div>
	
	<p><?php echo $texto_sistema; ?></p>
	
	<div class="author versites" >
		<?php if(!empty($link_sistema)) { ?>
			<a href="<?php echo $link_sistema; ?>" target="_blank">Vizualizar Portfólio</a>
		<?php }else{ ?>
			<span style="color:#C6E2FF; text-decoration: bold;">Links não disponíveis por enquanto.</span>
		<?php } ?>
	</div>
</div><br><br>

</div>

</div>

<!-- MODALS -->

 
 
<!-- mascara para cobrir o site -->  
<div id="mascara"></div>

<footer id="copyright" class="copyright">© Copyright 2013 - <?php print date('Y'); ?> | Desenvolvido por <a href="mailto:bruno@brunovidasi.com" >Bruno Vieira</a> </footer>

