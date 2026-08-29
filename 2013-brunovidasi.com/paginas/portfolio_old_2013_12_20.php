<!-- PORTFOLIO.PHP (PÁGINA 2 - PORTIFÓLIO) DO SITE BRUNOVIDASI.COM DESENVOLVIDO POR BRUNO VIEIRA - © 2013 TODOS OS DIREITOS RESERVADOS -->

<script>
$(document).ready(function(){
    $("a[rel=modal]").click( function(ev){
        ev.preventDefault();
 
        var id = $(this).attr("href");
 
        var alturaTela = $(document).height();
        var larguraTela = $(window).width();
     
        //colocando o fundo preto
        $('#mascara').css({'width':larguraTela,'height':alturaTela});
        $('#mascara').fadeIn(1000);
        $('#mascara').fadeTo("slow",0.8);
 
        var left = ($(window).width() /2) - ( $(id).width() / 2 );
        var top = ($(window).height() / 2) - ( $(id).height() / 2 );
     
        $(id).css({'top':top,'left':left});
        $(id).show();  
    });
 
    $("#mascara").click( function(){
        $(this).hide();
        $(".window").hide();
    });
 
    $('.fechar').click(function(ev){
        ev.preventDefault();
        $("#mascara").hide();
        $(".window").hide();
    });
});
</script>

<style>
.window{
	display:none;
	height:auto;
	position:absolute;
	left:0;
	top:0;
	background:#FFF;
	z-index:9900;
	padding:10px;
	border-radius:1px;
}
#mascara{
    display:none;
    position:absolute;
    left:0;
    top:0;
    z-index:9000;
    background-color:#000;
}


	.brsites{
		width:900px;
	}
	
	.brjava{
		width:630px;
	}

 
.fechar{display:block; text-align:right;}
</style>

<!-- TÍTULO -->
<div class="description clearfix" >
	<h1></h1>
	<h2>Portfólio<br><br></h2>	
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
	
	<p>HTML5, CSS3, PHP, JavaScript, JQuery e tudo o que a Web tem a me oferecer.</p>
	
	<div class="author versites">
		<a href="#sites" rel="modal">Vizualizar Todos</a>
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
	
	<p>Standard Edition, Orientação a Objetos, NetBeans, Banco de Dados, e toda a independência de plataforma do Java. </p>	
	
	<div class="author verjava">
		<a href="http://www.brunovidasi.com/java.html" target="_blank">Vizualizar Todos</a>
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
	
	<p>PHP, CodeIgniter, Bootstrap, MySQL, PhpMyAdmin, e muito dedo para programar sistemas seguros e funcionais.</p>
	
	<div class="author versites" style="color:#C6E2FF;">
		Links não disponíveis por enquanto.
	</div>
</div><br><br>

</div>

</div>

<!-- MODALS -->
<div class="window brsites" id="sites">
    <iframe width="100%" height="500" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="./paginas/portfolio/sites.html"></iframe>
</div>

<div class="window brjava" id="java">
	<iframe width="100%" height="500" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="./paginas/portfolio/java.html"></iframe>
</div>
 
 
<!-- mascara para cobrir o site -->  
<div id="mascara"></div>

<footer id="copyright" class="copyright">© Copyright <?php print date('Y'); ?> | Desenvolvido por <a href="mailto:bruno@vidasi.com.br" >Bruno Vieira</a> </footer>

