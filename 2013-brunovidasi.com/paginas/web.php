<!DOCTYPE HTML>
<html lang="pt-BR">

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
$sql = "SELECT * FROM softwares WHERE tipo='web' ORDER BY data_desenvolvimento DESC";

# Pega os resultados e conecta no banco
$result = mysql_query($sql, $conecta);
$registros = mysql_num_rows($result);

?>

<head>
	<!-- META -->
	<meta charset="UTF-8">
	
	<!-- TÍTULO -->
	<title>Portfólio Sistemas Web</title>
	
	<!-- ESTILO -->
	<link href="../portfolio/style.css" rel="stylesheet">
	<link href="../portfolio/style2.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,800' rel='stylesheet' type='text/css'>	
	
	<!-- FAVICON -->
	<link rel='shortcut icon' href='http://bruno.comunidadeadventista.com/favicon.ico' type='image/x-icon'>
	<link href='http://bruno.comunidadeadventista.com/favicon.ico' rel='icon'/>
	
</head>

<body ondragstart='return false' oncontextmenu='return false' onselectstart="return false">

<!-- HEADER -->
<header role="banner">
  <div class="wrapper">
    <h1>Bruno Vieira</h1>
    <h2>Portfólio de Sistemas para WEB</h2>

    <div class="contacts">
      <p>Rio de Janeiro, RJ</p>
      <p><a href="mailto:bruno@brunovidasi.com">bruno@brunovidasi.com</a></p>
      <p><a href="http://www.brunovidasi.com/">www.brunovidasi.com</a></p>
    </div>
  </div>
</header>

<section role="main">
    <div class="wrapper">
	
		<?php
			$id == 1;
			while($consulta = mysql_fetch_array($result)) {
			   
			   $nome = $consulta['nome'];
			   $tipo = $consulta['tipo'];
			   $descricao = $consulta['descricao'];
			   $link = $consulta['link'];
			   $icone = $consulta['icone'];
			   $imagem = $consulta['imagem'];
			   $versao = $consulta['versao'];
			   $classe = $consulta['classe'];
			   $data = $consulta['data_desenvolvimento'];
			   
			   $data_formata = explode("-", $data);
			   $dia = $data_formata[2];
			   $mes = $data_formata[1];
			   $ano = $data_formata[0];
			   
			   if($registros % 2 == 0){
					if($id % 2 ==0){
						$float = 'left';
					}else{
						$float = 'right';
					}
				}
				
				else{
					if($id % 2 ==0){
						$float = 'right';
					}else{
						$float = 'left';
					}
				}
			
		?>
		<div class="container" aria-haspopup="true" style="float:<?php echo $float; ?>">
			
			<div class="lower">
				<h1><?php echo $nome; ?></h1>
				<time datetime="<?php echo $data; ?>" class="highlight" title="Desenvolvido em <?php echo $mes . '/' . $ano; ?>"><?php echo $ano; ?></time> <span class="<?php echo $icone; ?>"></span>
				<?php echo $descricao; ?>
				
				<p>Versão <strong class="highlight"><?php echo $versao; ?></strong>.</p>
				
				<?php if(empty($link)){ ?>
					<p><img src="http://www.brunovidasi.com/images/download.gif" /> <strong class="highlight">Acesso Não Disponível</strong></p>
				<?php }else{ ?>
					<p><img src="http://www.brunovidasi.com/images/download.gif" /><a href="<?php echo $link; ?>" target="_blank"> <strong class="highlight">Acesse Aqui</strong></a></p>
				<?php } ?>
				
			</div>
			
			<div class="upper">
				<img src="<?php echo $imagem; ?>" alt="<?php echo $nome; ?>" />
			</div>
			
		</div>
		
		<?php 
		$id++;
		}?>
	</div>
<section>

</body>

</html>