<?php

namespace Admin\Controller;

class DashboardController extends AdminController
{ 
  public function index()
  {
    $userModel = $this->load->model('User');

    // d($userModel->repository->getUsers());

    // $userModel->repository->test();

    $userModel->repository->testNewUser();


    $this->view->render('dashboard');
  }
}