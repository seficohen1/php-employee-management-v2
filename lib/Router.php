<?php 


interface RouterMethods {
  public function setUri();
  public function setController();
  public function setMethod();
  public function setParam();
  public function getUri();
  public function getMethod();
  public function getParam();
}

class Router implements RouterMethods {
  public $uri;
  public $controller;
  public $method;
  public $param; // id



}