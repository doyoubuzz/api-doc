<?php 

require_once 'libraries/twig/lib/Twig/Autoloader.php';
Twig_Autoloader::register();

$loader = new Twig_Loader_Filesystem('views');
$twig = new Twig_Environment($loader, array(
  //'cache' => 'cache',
));


$path = trim($_SERVER['REQUEST_URI'],'/');

if(!$path )
{
	$path = 'home';
}

echo $twig->render($path.'.twig', array(
	'template' => $path,
));

?>