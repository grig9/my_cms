<?php

namespace Engine\Helper;

class Common
{
  /**
   * @return bool
   */
  public static function isPost()
  {
    if($_SERVER['REQUEST_METHOD'] === 'POST')
    {
      return true;
    }

    return false;
  }

  /**
   * @return mixed
   */
  public static function getMethod()
  {
    return $_SERVER['REQUEST_METHOD'];
  }
  
  /**
   * @return bool
   */
  public static function isGet()
  {
    if($_SERVER['REQUEST_METHOD'] === 'GET')
    {
      return true;
    }

    return false;
  }

  public static function getPathUrl()
  {
    $pathUrl = $_SERVER['REQUEST_URI'];

    
    if($position = strpos($pathUrl, '?'))
    {
      $pathUrl = substr($pathUrl, 0, $position); // если есть гет параметр, то удаляем ее из строки URL
    }

    return $pathUrl;
  }
}