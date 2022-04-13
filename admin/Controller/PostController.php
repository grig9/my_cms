<?php

namespace Admin\Controller;

class PostController extends AdminController
{ 
  public function listing()
  {
    
    $this->load->model('Post');

    $this->data['posts'] = $this->model->post->getPosts();

    $this->view->render('posts/list', $this->data);
  }

  public function create()
  {
    $this->view->render('posts/create');
  }

  public function edit($id)
  {
    $this->load->model('Post');

    $this->data['post'] = $this->model->post->getPostData($id);

    $this->view->render('posts/edit', $this->data);
  }

  // public function add()
  // {
  //   $this->load->model('Page');

  //   $params = $this->request->post;

  //   if (isset($params['title'])) {
  //     $pageId = $this->model->page->createPage($params);

  //     echo $pageId;
  //   }
  // }

  // public function update()
  // {
  //   $this->load->model('Page');

  //   $params = $this->request->post;
    
  //   if (isset($params['title'])) {
  //     $pageId = $this->model->page->updatePage($params);

  //     echo $pageId;
  //   }
  // }
}