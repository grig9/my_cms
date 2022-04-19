<?php

namespace Engine\Core\Template;

use Engine\Core\Config\Config;

class Theme
{
  const RULES_NAME_FILE = [
    'header'  => 'header-%s',
    'footer'  => 'footer-%s',
    'sidebar' => 'sidebar-%s',
  ];

  const URL_THEME_MASK = '/content/themes/default/%s'; // проблема не подставляется default



  /**
   * Url current theme
   * @type string
   */
  protected static $url = '';

  /**
   * @var array
   */
  protected static $data = [];

  /**
   * @var Asset
   */
  public $asset;

  /**
   * @var Theme
   */
  public $theme;

  public function __construct()
  {
    $this->theme = $this;
    $this->asset = new Asset();
  }

  public static function getUrl()
  {
    $currentTheme = Config::item('defaultTheme', 'main');

    return sprintf(self::URL_THEME_MASK, $currentTheme);
  }

  /**
   * @param null $name
   */
  public static function header($name = null)
  {
    $name = (string) $name;
    $file = self::detectNameFile($name, __FUNCTION__);

    Component::load($file);
  }

  /**
   * @param string $name
   */
  public static function footer($name = '')
  {
    $name = (string) $name;
    $file = self::detectNameFile($name, __FUNCTION__);

    Component::load($file);
  }

  /**
   * @param string $name
   */
  public static function sidebar($name = '')
  {
    $name = (string) $name;
    $file = self::detectNameFile($name, __FUNCTION__);

    Component::load($file);
  }

   /**
   * @param string $name
   * @param array $data
   */
  public function block($name = '', $data = [])
  {
    $name = (string) $name;
    
    if ($name !== '') {
      Component::load($name, $data);
    }
  }
  
  private static function detectNameFile($name, $function)
  {
    return empty( trim($name) ) ? $function : sprintf(self::RULES_NAME_FILE[$function], $name);
  }

  /**
   * @return array
   */
  public static function getData()
  {
    return static::$data;
  }

  /**
   * @param array $data
   */
  public static function setData($data)
  {
    static::$data = $data;
  }
}
