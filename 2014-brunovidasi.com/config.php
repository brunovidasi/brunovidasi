<?php
# ARQUIVO DE CONFIGURAÇÃO #

// Template - livedemo00.template-help.com/wt_52137/

# ERROR CONFIGURATION #####################################################################################################
error_reporting(0);
ini_set("display_errors", 0);

# DATE AND TIME ###########################################################################################################
date_default_timezone_set('America/Sao_Paulo');

# DATABASE ################################################################################################################
# Database credentials have been removed from this public repo.
# Configure database access in the environment or hosting settings instead.
$conecta = false;

# URL CONFIGURATION #######################################################################################################
// if($_SERVER['HTTP_HOST'] != 'brunovidasi.com')
// 	header('Location: http://brunovidasi.com'.$_SERVER["REQUEST_URI"]);

// if($_SERVER['HTTP_HOST'] == 'en.brunovidasi.com')
	// header('Location: http://brunovidasi.com?lang=en');

# WEBSITE VISITS ##########################################################################################################
# Visitor tracking has been disabled in the public repo version.
$useragent = $_SERVER['HTTP_USER_AGENT'] ?? '';

$visitante = new stdClass();
$visitante->ip = 'redacted';
$visitante->hostname = 'redacted';
$visitante->data = date("Y-m-d H:i:s");
$visitante->pagina = $_SERVER["SERVER_NAME"] ?? 'public-repo';
$visitante->sigla = 'xx';
$visitante->versao = 0;
$visitante->browser = 'Hidden';

# WEBSITE LANGUAGE ########################################################################################################
// if($visitante->sigla == 'br' OR $visitante->sigla == 'pt' OR $visitante->sigla == 'ao' OR $visitante->sigla == 'en') 
// 	$idioma = 'pt';
// else 
// 	$idioma = 'en';

$idioma = 'en';

if(isset($_COOKIE['bvidasi_language'])) $idioma = $_COOKIE['bvidasi_language'];

if(isset($_GET['lang'])){
	$idioma = $_GET['lang'];
	setcookie('bvidasi_language', $idioma, time()+(3600*24*30*12*5), '/', '.brunovidasi.com');
}

if($_SERVER['HTTP_HOST'] == 'en.brunovidasi.com') $idioma = 'en';

$idioma = substr($idioma, 0, 2);
$idioma_reverso = ($idioma == 'pt') ? 'en' : 'pt';

# TITLE, DESCRIPTION AND TAGS #############################################################################################
$titulo = ($idioma=='pt') ? 'Bruno Vieira | Desenvolvimento Inteligente' : 'Bruno Vieira | Smart Development';
$descricao = ($idioma=='pt') ? 'Desenvolvedor de Sistemas Web, Sites e Aplicativos.' : 'Hi, I\'m a Web Developer. I have the best idea for your website or information system!';
$tags = 'Bruno Vieira, Bruno, Bruno Vieira da Silva, Bruno Vidasi, brunovidasi, vieira, vieira da silva, brunovidasi.com, vidasi.com, vidasi, vida si, bruno adventista, bruno, bruno si, bvidasi, desenvolvedor web, programador, programador web, bruno programador, bruno desenvolvedor, programador rio de janeiro, desenvolvedor php, php, desenvolvedor html5, html5, criação de sites';


# COOKIES #################################################################################################################
$md5 = md5('brunovidasi2vidasi');

setcookie('bvidasi2', $md5, time()+(3600*24*30*12*5), '/', '.brunovidasi.com');

if(isset($_COOKIE['bvidasi2']) && $_COOKIE['bvidasi2'] == md5('brunovidasi2vidasi')){
	$visitante->novo = true;
	setcookie('bvidasi_language', $idioma, time()+(3600*24*30*12*5), '/', '.brunovidasi.com');
}else $visitante->novo = false;

# GRAVA DADOS DO VISITANTE ################################################################################################

$sql = "INSERT INTO bv_visitantes (ip, hostname, browser, versao, data, pagina, pais, md5, idioma, novo) 

VALUES ('{$visitante->ip}',
		'{$visitante->hostname}',
		'{$visitante->browser}',
		'{$visitante->versao}',
		'{$visitante->data}',
		'{$visitante->pagina}',
		'{$visitante->sigla}',
		'{$md5}',
		'{$idioma}',
		'{$visitante->novo}')";

if ($conecta && !empty($sql)) {
	@mysql_query($sql, $conecta);
}

# CONSTANTS ###############################################################################################################
@define(DIR, 		$_SERVER[DOCUMENT_ROOT]);
@define(TITULO, 	$titulo);
@define(DESCRICAO, 	$descricao);
@define(TAGS, 		$tags);
@define(AUTOR, 		'Bruno Vieira');
@define(BASE_URL, 	'http://localhost53.br/brunovidasi.com/2014');
@define(BASE_URL_EN,'http://en.brunovidasi.com');
@define(DOMINIO, 	'brunovidasi.com');
@define(PATH, 		'');

@define(FACEBOOK,	'http://www.facebook.com/brunovidasi');
@define(INSTAGRAM,	'http://www.instagram.com/brunovidasi');
@define(TWITTER,	'http://www.twitter.com/brunovidasi');
@define(LINKEDIN,	'http://www.linkedin.com/in/brunovidasi');
@define(FLICKR,		'https://www.flickr.com/photos/brunovidasi/albums');
@define(GOOGLEPLUS, 'https://plus.google.com/u/0/+BrunoVieiraVidasi/posts');

@define(ID,			'brunovidasi');
@define(TWITTERID,	'brunovidasi');
@define(FACEBOOKID,	'brunovidasi');
@define(INSTAGRAMID,'brunovidasi');
@define(LINKEDINID,	'brunovidasi');

@define(CURRICULO,  'http://brunovidasi.com/curriculo.pdf');
@define(CV_EN, 		'http://brunovidasi.com/resume.pdf');

@define(EMAIL, 		'hello@example.com');
@define(EMAIL_EN, 	'hello@example.com');

# EMAIL ###################################################################################################################

if($_POST){

	if($_POST['envio'] == '28953'){ // Formulário de contato

		$email    = $_POST['email'];
		$nome     = $_POST['nome'];
		$assunto  = "Formulário de Contato do Site (".$idioma.")";
		$mensagem = $_POST['msg'];

		if(!$_POST['nome'] || !$_POST['email'] || !$_POST['msg']){
			$aviso = ($idioma=="pt") ? "Preencha o nome, o e-mail e a mensagem" : "please, fill in all fields";
			echo '<script type="text/javascript">alert("'.$aviso.'");history.back(-1);</script>';
			unset($aviso);
		}else{  
			if(PHP_OS == "Linux") $ql = "\n";
			elseif(PHP_OS == "WINNT") $ql = "\r\n";
			else die("Este script nao esta preparado para funcionar com o sistema operacional de seu servidor");
			
			$headers  = "MIME-Version: 1.1".$ql;
			$headers .= "Content-type: text/html; charset=utf-8 ".$ql;
			$headers .= "From: ".EMAIL.$ql;
			$headers .= "Return-Path: ".EMAIL.$ql;
			$headers .= "Reply-To: ".$nome." <".$email.">".$ql;


			$msg  = '<p><b>Mensagem enviada do site brunovidasi.com</b></p><br />';
			$msg .= '<p><b>Nome: </b>'.$nome.'</p>';
			$msg .= '<p><b>Email: </b>'.$email.'</p>';
			$msg .= '<br /><b>Mensagem:</b><br /><p>'.$mensagem.'</p><br />';
			$msg .= '<p><b>IP:</b> [redacted]</p>';
			$msg .= '<p><b>Idioma:</b> '.$idioma.'</p>';
			$msg .= '<p><b>País:</b> '.$visitante->sigla.'</p>';
			$msg .= '<p><b>Página:</b> '.$visitante->pagina.'</p>';
			$msg .= '<p><b>Host:</b> [redacted]</p>';
			
			if(mail(EMAIL, $assunto,  $msg, $headers))
				$mensagem = ($idioma=='pt') ? 'Mensagem enviada, em breve te responderei' : 'Message sent successfully';
			else
				$mensagem = ($idioma=='pt') ? 'Não foi possível enviar sua mensagem, talvez seja melhor enviar um e-mail para '.EMAIL : 'Could not send your message, maybe you should send an email to '.EMAIL;
			
			echo '<script type="text/javascript">alert("'.$mensagem.'")</script>';
		}

	}

	elseif($_POST['envio'] == '396485'){ // Formulário de orçamento

		// print_r($_POST);
		// die();

		$email    = $_POST['email'];
		$nome     = $_POST['nome'];
		$telefone = $_POST['phone'];
		$celular  = $_POST['cellphone'];
		$type     = $_POST['tipo'];

		if($idioma == 'pt'){
			if($type == '1') $tipo = 'Site';
			elseif($type == '2') $tipo = 'Sistema Web';
			elseif($type == '3') $tipo = 'Aplicativo';
			else $tipo = 'Não Especificado';
		}else{
			if($type == '1') $tipo = 'Web Site';
			elseif($type == '2') $tipo = 'Web System';
			elseif($type == '3') $tipo = 'Application';
			else $tipo = 'Not Specified';
		}

		$assunto  = "Orçamento - ".$nome." (".$tipo.")";
		$mensagem = $_POST['msg'];

		if(!$_POST['nome'] || !$_POST['email'] || !$_POST['msg']){
			$aviso = ($idioma=="pt") ? "Preencha pelo menos o nome, o e-mail e os detalhes sobre o seu projeto" : "Please, fill in all fields";
			echo '<script type="text/javascript">alert("'.$aviso.'");</script>';
			unset($aviso);
		}else{


			if(PHP_OS == "Linux") $ql = "\n";
			elseif(PHP_OS == "WINNT") $ql = "\r\n";
			else die("Este script nao esta preparado para funcionar com o sistema operacional de seu servidor");
			
			$headers  = "MIME-Version: 1.1".$ql;
			$headers .= "Content-type: text/html; charset=utf-8 ".$ql;
			$headers .= "From: ".EMAIL.$ql;
			$headers .= "Return-Path: ".EMAIL.$ql;
			$headers .= "Reply-To: ".$nome." <".$email.">".$ql;


			$msg  = '<p><b>Pedido de orçamento enviado do site brunovidasi.com</b></p><br />';
			$msg .= '<p><b>Nome: </b>'.$nome.'</p>';
			$msg .= '<p><b>Email: </b>'.$email.'</p>';
			$msg .= '<p><b>Telefone: </b>'.$telefone.'</p>';
			$msg .= '<p><b>Celular: </b>'.$celular.'</p>';
			$msg .= '<p><b>Projeto: </b>'.$tipo.'</p>';
			$msg .= '<br /><b>Detalhes:</b><br /><p>'.$mensagem.'</p><br />';
			$msg .= '<p><b>IP:</b> [redacted]</p>';
			$msg .= '<p><b>Idioma:</b> '.$idioma.'</p>';
			$msg .= '<p><b>País:</b> '.$visitante->sigla.'</p>';
			$msg .= '<p><b>Página:</b> '.$visitante->pagina.'</p>';
			$msg .= '<p><b>Host:</b> [redacted]</p>';
			
			if(mail(EMAIL, $assunto,  $msg, $headers))
				$mensagem = ($idioma=='pt') ? 'Pedido de orçamento enviado, vou avaliar a melhor maneira de cuidar do seu novo projeto. Aguarde meu contato.' : 'Budget sent successfully. I\'ll email you.';
			else
				$mensagem = ($idioma=='pt') ? 'Não foi possível enviar o pedido do seu orçamento, talvez seja melhor enviar um e-mail para '.EMAIL : 'Could not send your message, maybe you should send an email to '.EMAIL;
			
			echo '<script type="text/javascript">
				alert("'.$mensagem.'");
				window.location = "http://www.brunovidasi.com";
			</script>';
		}
	}
}

# UNSET VARIABLES #########################################################################################################

unset($md5); 
unset($hostname); 
unset($useragent); 
unset($url_base); 
unset($sql); 
unset($titulo); 
unset($email); 
unset($tags); 
unset($nome); 
unset($telefone); 
unset($celular); 
unset($assunto); 
unset($mensagem); 
unset($ql); 
unset($tipo); 
unset($type); 
unset($headers); 
unset($msg);  
unset($descricao); 

###########################################################################################################################