<?php

namespace Admin\Controller;

class SettingController extends AdminController
{ 
  public function general() 
  {
    // Load model
    $this->load->model('Setting');

    $this->data['settings'] = $this->model->setting->getSettings();
    $this->data['languages'] = languages();

    // Render this template
    $this->view->render('setting/general', $this->data);
  }

  public function updateSetting() 
  {
    // Load model
    $this->load->model('Setting');

    $params    = $this->request->post;

    $settingID = $this->model->setting->update($params);

    echo $settingID;
  }
}