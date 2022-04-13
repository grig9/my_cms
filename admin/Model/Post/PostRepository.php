<?php

namespace Admin\Model\Post;

use Engine\Model;

class PostRepository extends Model
{
  public function getPosts()
  {
    $sql = $this->queryBuilder->select()
        ->from('post')
        ->orderBy('id', 'DESC')
        ->sql();

    return $this->db->query($sql);
  }

  public function getPostData($id)
  {
    $post = new Post($id);

    return $post->findOne();
  }

  public function createPost($data)
  {
    $post = new Post;
    $post->setTitle($data['title']);
    $post->setContent($data['content']);
    $postId = $post->save();

    return $postId;
  }

  public function updatePost($data)
  {
    if (isset($data['post_id'])) {
      $post = new Post($data['post_id']);
      $post->setTitle($data['title']);
      $post->setContent($data['content']);
      $post->save();
    }
  }

}