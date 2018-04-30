<?php

/* 
 * App Core Class
 * Ceates URL and Load core controller
 * URL FORMAT - /controller/method/params
 */
 
 Class Core {
     protected $currentController = 'Pages';
     protected $currentMethd = 'index';
     protected $params = [];


     public function __construct(){
         $this->getUrl();
     }
     public function getUrl(){
        echo $_GET['url']; 
     }
 }
