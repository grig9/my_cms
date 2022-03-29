<?php

namespace Engine;

abstract class controller
{
  private $di;

  public function __construct($di)
  {
    $this->di = $di;  
  }
}