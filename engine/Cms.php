<?php

namespace Engine;

use Engine\Helper\Common;

class Cms
{
  /**
   *  @var DI
   */
  private $di;

  /**
   * Cms constructor
   * @param $di
   */
  
  public $db;

  public $router;
  
  public function __construct($di)
  {
    $this->di = $di;

    $this->router = $this->di->get('router');// получаем доступ к объекту Router, с помощью ключа 'router'
  }

  /**
   * Run cms
   */
  public function run()
  {
    // $router = $this->di->get('router');
    // d($router);

    $this->router->add('home', '/', 'HomeController:index');
    $this->router->add('product', '/user/12', 'ProductController:index');


    $routerDispatch = $this->router->dispatch(Common::getMethod(), Common::getPathUrl());

    d($routerDispatch);

  }
}
