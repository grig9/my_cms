<?php

namespace Engine\Core\Database;

use \PDO;

class Connection
{
  private $link;

  /**
   * Connection constructor.
   */
  public function __construct()
  {
    $this->connect();
  }

  /**
   * @return $this
   */
  private function connect()
  {
    $config = [
      'host'     => '',
      'db_name'  => '',
      'username' => '',
      'password' => '',
      'charset'  => '',
    ];

    $dsn = 'mysql:host='.$config['host'].';dbname='.$config['db_name'].';charset='.$config['charset'];

    $this->link = new PDO($dsn, $config['username'], $config['password']);

    return $this;
  }

  /**
   * @param $sql
   * @return mixed
   */
  public function execute($sql)
  {
    $sth = $this->link->prepare($sql);
  }
}