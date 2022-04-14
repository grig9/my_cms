<?php

namespace Admin\Controller;

class DashboardController extends AdminController
{ 
  public function index()
  {
    // Load models
    $userModel = $this->load->model('User');

    // Load language
    $this->view->render('dashboard/main');

    // Render this template
    $this->view->render('dashboard');
  }
}