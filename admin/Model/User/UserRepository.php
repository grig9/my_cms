<?php

namespace Admin\Model\User;

use Engine\Model;

class UserRepository extends Model
{
  public function getUsers()
  {
    $sql = $this->queryBuilder->select()
        ->from('user')
        ->orderBy('id', 'DESC')
        ->sql();

    return $this->db->query($sql);
  }

  public function test()
  {
    $user = new User(1);
    $user->setEmail('admin@example.com');
    $user->save();
  }

  public function testNewUser()
  {
    $user = new User;
    $user->setEmail('user@test.com');
    $user->setPassword(md5(1));
    $user->setRole('user');
    $user->setHash('new');
    $user->save();
  }
}