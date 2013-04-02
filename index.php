<?php 

error_reporting(-1);
require_once 'libraries/twig/lib/Twig/Autoloader.php';

Twig_Autoloader::register();

$loader = new Twig_Loader_Filesystem('views');


 $twig = new Twig_Environment($loader, array(
  //'cache' => 'cache',
));

$env_url = getenv('DOC_URL');
$path = (isset($env_url)) ? $env_url : 'http://api-doc.local/';
$template = str_replace($path, '', 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);

if (!$template) {
    $template = 'home';
}

echo $twig->render($template.'.twig', array(
	'template' => $template,
));


?>