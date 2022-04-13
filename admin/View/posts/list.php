<?php $this->theme->header(); ?>

<main class="my-3">
  <div class="container">
    <h3>Posts</h3>
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
      <a href="/admin/posts/create/" class="btn btn-success me-md-2">Create post</a>
    </div>

    <table class="table mt-3">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Title</th>
          <th scope="col">Content</th>
          <th scope="col">Date</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($posts as $post) : ?>
          <tr>
            <th scope="row"><?= $post->id ?></th>
            <td><?= $post->title ?></td>
            <td><?= $post->content ?></td>
            <td><?= $post->date ?></td>
            <td>
              <a href="/admin/post/edit/<?= $post->id?>" class="btn btn-info">Edit</a>
            </td>
          </tr>
        <?php endforeach ?>
      </tbody>
    </table>
  </div>
</main>

<?php $this->theme->footer(); ?>