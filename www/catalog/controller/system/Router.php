<?php
namespace Controller\System;


class Router {
    public $request;
    public $method;
    public $language;


    public function __construct($request, $method, $language) {
        $this->method = $method;

        if($this->method  == "GET") {
            if($request == "/") {
                /// home page
            } else {
                $this->request = array_reverse(explode('/', $request))[0];
                $this->language = explode(',', $language)[0];

               $router = new \Model\System\Router();
               $data = $router->Router($this->method, $this->request, $this->language);
               if(!$data) {
                   // 404
                   header("HTTP/1.0 404 Not Found");
                   require './catalog/view/404.html';
               } else {
                   if($data['type'] == "static") {
                       $body = 'static';
                   }
                   require './catalog/view/template/index.php';
               }
            }
        }
    }
}