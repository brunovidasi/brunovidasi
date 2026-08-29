<?php

session_start();
require_once('twitteroauth/twitteroauth.php');

$consumerKEY		= getenv('TWITTER_CONSUMER_KEY') ?: '';
$consumerSECRET		= getenv('TWITTER_CONSUMER_SECRET') ?: '';
$accessTOKEN		= getenv('TWITTER_ACCESS_TOKEN') ?: '';
$accessTOKENSECRET	= getenv('TWITTER_ACCESS_TOKEN_SECRET') ?: '';
$qtdTWEET			= 4;
$user				= 'parkshoppingbsb';

if (empty($consumerKEY) || empty($consumerSECRET) || empty($accessTOKEN) || empty($accessTOKENSECRET)) {
    header('Content-type: text/xml; charset=utf-8');
    echo '<?xml version="1.0" encoding="utf-8" ?><tweets total="0"></tweets>';
    exit;
}

$twitter = new TwitterOAuth($consumerKEY,$consumerSECRET,$accessTOKEN,$accessTOKENSECRET);

$tweets = $twitter->get("https://api.twitter.com/1.1/statuses/user_timeline.json?screen_name=$user&count=$qtdTWEET");


$xml_retorno  = '<?xml version="1.0" encoding="utf-8" ?>';
$xml_retorno  .= '<tweets total="'.count($tweets).'">';


foreach($tweets as $tw){

$xml_retorno .= '<tweet>';
$xml_retorno .= '<screen_name><![CDATA['.$tw->user->screen_name.']]></screen_name>';
$xml_retorno .= '<text><![CDATA['.htmlspecialchars_decode($tw->text).']]></text>';
$xml_retorno .= '</tweet>';

}
$xml_retorno .= '</tweets>';

//echo '<pre>'.print_r($tweets,true).'</pre>';
header('Content-type: text/xml; charset=utf-8');
echo $xml_retorno;