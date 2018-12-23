<?php
error_reporting(-1);
use vendor\core\Route;

$query = rtrim($_SERVER['QUERY_STRING'], '/');


$dir = str_replace('\\', '/', __DIR__);
define('LAYOUT', 'default');
define('WWW', $dir);
define('CORE', dirname($dir));
define('ROOT', dirname($dir));
define('APP', dirname($dir) . '/app');


require_once '../vendor/libs/function.php';


spl_autoload_register(function ($class){
    $file = ROOT . '/' . str_replace('\\', '/', $class) . '.php';
    if(is_file($file)){
        require_once $file;
    }
});

//$obj = new Create();

Route::add('^page/(?P<alias>[a-z-]+)$', ['controller' => 'Page', 'action' => 'View']);
//Rules for URL
Route::add('^$', ['controller' => 'Main', 'action' => 'index']);
Route::add('^(?P<controller>[a-z-]+)/?(?P<action>[a-z-]+)?$');

//Route::add('<controller:[a-z-]+>/<action:[a-z-]+>');





Route::dispatch($query);
//debug(Route::getRoute());
//debug(Route::getRoute());
//debug(\vendor\core\Route::getRoute());

