<?php

namespace vendor\core;

class Route
{


    protected static $route = [];
    protected static $routes = [];

    public static function add($regexp, $route = []){
        self::$routes[$regexp] = $route;
    }

    public static function getRoutes(){
        return self::$routes;
    }

    public static function getRoute(){
        return self::$route;
    }

    public static function matchRoute($url){
        foreach(self::$routes as $pattern => $route){
            if(preg_match("#$pattern#i", $url, $matches)){
                foreach($matches as $k => $v){
                    if(is_string($k)){
                        $route[$k] = $v;
                    }
                    if(!isset($route['action'])){
                        $route['action'] = 'index';
                    }
                }
                debug($route);
                self::$route = $route;
                //self::$route['controller'] = self::upperCamelCase($route['controller']);
                return true;
            }
        }
        return false;
    }

    public static function dispatch($url){
        $url = self::removeQueryString($url);
        if(self::matchRoute($url)){
            $controller = 'app\controllers\\' . self::$route['controller'];
            if(class_exists($controller)){
                $cObj = new $controller(self::$route);
                $action = 'action' . self::upperCamelCase(self::$route['action']);
                if (method_exists($cObj, $action)){
                    $cObj->$action();
                    $cObj->getView();
                }else{
                    echo "Method $action not exists";
                }
            }else{
                echo "<br>Not exists class $controller 'Route.php ~62'";
            }
        }else{
            http_response_code(404);
            include '404.php';
        }
    }

    public static function upperCamelCase($name){
        return str_replace(' ', '', ucwords(str_replace('-', ' ', $name)));
    }

    public static function lowerCamelCase($name){
        return lcfirst(self::upperCamelCase($name));
    }

    protected static function removeQueryString($url){
       if($url){
           $param = explode('&', $url, 2);
           if(false === strpos($param[0], '=')){
               return rtrim($param[0], '/');
           }else{
               return '';
           }
       }
    }

}