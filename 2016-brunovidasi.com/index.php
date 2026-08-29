<!DOCTYPE HTML>
<html>
	<head>

		<title>Bruno Vieira | @brunovidasi</title>

		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />

		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name="format-detection" content="telephone=no" />

		<meta name="keywords" content="Bruno Vieira, Bruno, Bruno Vieira da Silva, Bruno Vidasi, brunovidasi, vieira, vieira da silva, brunovidasi.com, brunovida.si, vidasi.com, vidasi, vida si, bruno adventista, bruno, bruno si, bvidasi, desenvolvedor web, programador, programador web, bruno programador, bruno desenvolvedor, programador rio de janeiro, desenvolvedor php, php, desenvolvedor html5, html5, criação de sites">
		<meta name="description" content="Brazilian, IT specialist, web developer, pianist, passionate, fake geek and a dreamer. I also love sports, of course.">

		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="author" content="Bruno Vieira">
		<meta name="p:domain_verify" content="4f62c75fdefc840a37d57f6937f9c1bf"/>

		<meta name="viewport" content="initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<meta name="google-site-verification" content="0n1i6yENIhCmFAn8gLPTdebr-a__Yv87JZLwsTPsAdQ" />
		<meta name="google-site-verification" content="4yZ1b2NMRtxMHCE4Z_wYrv0dqA6MPCBSpJlgfOoTv-M" />
		<meta name="google-site-verification" content="vpMsRBP4t7irjB4J6PPLm7m-CNkpJ3FMrCEnZ2x72j8" />

		<meta property="og:site_name" content="Bruno Vieira" />
		<meta property="og:type" content="website" />
		<meta property="og:title" content="Bruno Vieira" />
		<meta property="og:url" content="http://brunovida.si" />
		<meta property="og:image" content="http://brunovida.si/assets/css/images/bg.jpg" />
		<link rel="image_src" href="./assets/css/images/bg.jpg" />

		<link rel='shortcut icon' href='favicon.ico' type='image/x-icon'>

		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->

		<script src="assets/js/jquery.js"></script>

		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

			ga('create', 'UA-43397149-1', 'auto');
			ga('send', 'pageview');
		</script>

	</head>
	<body class="loading">
		<div id="wrapper">
			<div id="bg"></div>
			<div id="overlay"></div>
			<div id="main">

				<header id="header">
					<h1>Bruno Vieira</h1>
					<p class="mobile-hide">Brazilian, IT specialist, web developer, pianist, passionate, fake geek and a dreamer. I also love sports, of course.</p>

					<?php

						$iphone = strpos($_SERVER['HTTP_USER_AGENT'],"iPhone");
						$ipad = strpos($_SERVER['HTTP_USER_AGENT'],"iPad");
						$android = strpos($_SERVER['HTTP_USER_AGENT'],"Android");
						$palmpre = strpos($_SERVER['HTTP_USER_AGENT'],"webOS");
						$berry = strpos($_SERVER['HTTP_USER_AGENT'],"BlackBerry");
						$ipod = strpos($_SERVER['HTTP_USER_AGENT'],"iPod");
						$symbian =  strpos($_SERVER['HTTP_USER_AGENT'],"Symbian");


						# INSTAGRAM ###############################################################################

						if($iphone || $ipad)
							$instagram_link = 'instagram://user?username=brunovidasi';
						else
							$instagram_link = 'https://www.instagram.com/brunovidasi';

						# TWITTER #################################################################################

						require_once('twitter/twitteroauth/twitteroauth.php');

						$consumerKEY        = getenv('TWITTER_CONSUMER_KEY') ?: '';
						$consumerSECRET     = getenv('TWITTER_CONSUMER_SECRET') ?: '';
						$accessTOKEN        = getenv('TWITTER_ACCESS_TOKEN') ?: '';
						$accessTOKENSECRET  = getenv('TWITTER_ACCESS_TOKEN_SECRET') ?: '';

						$qtdTWEET           = 1;
						$user               = 'brunovidasi';

						if (empty($consumerKEY) || empty($consumerSECRET) || empty($accessTOKEN) || empty($accessTOKENSECRET)) {
							$texto_twitter = 'Twitter updates unavailable';
							$link = 'https://twitter.com/' . $user;
						} else {
							$twitter = new TwitterOAuth($consumerKEY, $consumerSECRET, $accessTOKEN, $accessTOKENSECRET);
							$tweets = $twitter->get("https://api.twitter.com/1.1/statuses/user_timeline.json?screen_name=$user&count=$qtdTWEET&include_rts=false");
							if(isset($tweets->errors)) {
								$texto_twitter = 'No Twitter updates';
								$link = 'https://twitter.com/' . $user;
							} else {
								$texto_twitter = $tweets[0]->text;
								$link = 'https://twitter.com/' . $user;
							}
						}

						foreach($tweets as $tweet) {

							$texto = $tweet->text;

							if(isset($tweet->entities->user_mentions)) {
								foreach($tweet->entities->user_mentions as $user)
									$texto = str_replace('@'.$user->screen_name, '<a href="http://twitter.com/'.$user->screen_name.'" target="_blank">@'.$user->screen_name.'</a>', $texto);
							}

							if(isset($tweet->entities->urls)) {
								foreach($tweet->entities->urls as $url)
									$texto = str_replace($url->url, '<a href="'.$url->expanded_url.'" target="_blank">'.$url->display_url.'</a>', $texto);
							}

							if(isset($tweet->entities->media)) {
								foreach($tweet->entities->media as $media)
									$texto = str_replace($media->url, '<a href="'.$media->expanded_url.'" target="_blank">'.$media->url.'</a>', $texto);
							}

							if(isset($tweet->entities->hashtags)) {
								foreach($tweet->entities->hashtags as $hashtag)
									$texto = str_replace('#'.$hashtag->text.' ', '<a href="https://twitter.com/search?q=%23'.$hashtag->text.'%20from%3A'.$user.'&src=typd" target="_blank">#'.$hashtag->text.'</a> ', $texto);
							}
						}

					?>

					<p id="social">"<?php echo $texto; ?>"</p>

					<nav>
						<ul>

							<li>
								<a id="dev" href="https://www.youtube.com/Brunices?sub_confirmation=1" class="icon fa-youtube" target="_blank" title="My Videos!">
									<span class="label">YouTube</span>
								</a>
							</li>

							<li>
								<a id="linkedin" href="https://www.linkedin.com/in/brunovidasi" class="icon fa-linkedin" target="_blank" title="Want to see my resume?">
									<span class="label">LinkedIn</span>
								</a>
							</li>

							<li>
								<a id="twitter" href="https://twitter.com/brunovidasi" class="icon fa-twitter" target="_blank" title="Let me complain!">
									<span class="label">Twitter</span>
								</a>
							</li>

							<li>
								<a id="facebook" href="https://www.facebook.com/brunovidasi" class="icon fa-facebook" target="_blank" title="I'm not proud about this page.">
									<span class="label">Facebook</span>
								</a>
							</li>

							<li>
								<a id="instagram" href="<?php echo $instagram_link; ?>" class="icon fa-instagram" target="_blank" title="Don't follow me. I'm lost too.">
									<span class="label">Instagram</span>
								</a>
							</li>

							<li>
								<a id="flickr" href="https://www.flickr.com/photos/brunovidasi" class="icon fa-flickr" target="_blank" title="Some of my adventures.">
									<span class="label">Flickr</span>
								</a>
							</li>

							<li>
								<a id="snapchat" href="https://www.snapchat.com/add/brunovidasi" class="icon fa-snapchat-ghost" target="_blank" title="I refuse myself to put the dog's face here.">
									<span class="label">Snapchat</span>
								</a>
							</li>

							<li>
								<a id="googleplus" href="https://plus.google.com/u/0/+BrunoVieiraVidasi/posts" class="icon fa-google-plus" target="_blank" title="I don't use it. But I have it.">
									<span class="label">Google+</span>
								</a>
							</li>

							<!-- <li>
								<a id="foursquare" href="https://foursquare.com/brunovidasi" class="icon fa-foursquare" target="_blank" title="Where am I now? Hahahaha">
									<span class="label">Foursquare</span>
								</a>
							</li> -->

							<li>
								<a id="email" href="mailto:contact@brunovida.si" class="icon fa-envelope-o" target="_blank" title="Drop me a line :)">
									<span class="label">Email</span>
								</a>
							</li>

						</ul>
					</nav>

					<p></p>

				</header>

				<footer id="footer">
					<span class="copyright">&copy; brunovidasi - <a href="mailto:contact@brunovida.si">contact@brunovida.si</a></span>
				</footer>

			</div>
		</div>
		<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
		<script>
			window.onload = function() { document.body.className = ''; }
			window.ontouchmove = function() { return false; }
			window.onorientationchange = function() { document.body.scrollTop = 0; }

			// $("#dev").hover(function(){
			// 	$("#social").html("I'm a web developer from Rio de Janeiro. <a href='http://developer.brunovidasi.com' target='_blank'>Click here</a> to go to my professional page");
			// });

			// $("#linkedin").hover(function(){
			// 	$("#social").html('IT specialist with over 3 years of expertise in planning, designing, testing and implementing systems and processes');
			// });

			// $("#twitter").hover(function(){
			// 	$("#social").html('"<?php echo $texto; ?>" <a href="https://twitter.com/brunovidasi" target="_blank">Twitter</a> • <a href="https://vine.co/u/1365721765913239552" target="_blank">Vine</a>');
			// });

			// $("#facebook").hover(function(){
			// 	$("#social").html('My personal page? <a href="https://www.facebook.com/brunovidasi" target="_blank">It\'s here</a>!');
			// });

			// $("#instagram").hover(function(){
			// 	$("#social").html('I really love pictures. You should <a href="https://www.instagram.com/brunovidasi" target="_blank">click here</a> :)');
			// });

			// $("#flickr").hover(function(){
			// 	$("#social").html('More pictures in my <a href="https://www.flickr.com/photos/brunovidasi" target="_blank">Flickr</a> account');
			// });

			// $("#snapchat").hover(function(){
			// 	$("#social").html('This is a mistake. Don\'t <a href="https://www.snapchat.com/add/brunovidasi" target="_blank">click here</a> D:');
			// });

			// $("#googleplus").hover(function(){
			// 	$("#social").html('Google+');
			// });

			// $("#email").hover(function(){
			// 	$("#social").html('Drop me a line at <a href="mailto:contact@brunovida.si">contact@brunovida.si</a>');
			// });

		</script>
	</body>
</html>
