<?php $this->theme->header(); ?>

<main class="my-3">
  <div class="container">
    <h3>Pages</h3>
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
      <a href="/admin/pages/create/" class="btn btn-success me-md-2">Create page</a>
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
        <?php foreach ($vars['pages'] as $page) : ?>
          <tr>
            <th scope="row"><?= $page['id'] ?></th>
            <td><?= $page['title'] ?></td>
            <td><?= $page['content'] ?></td>
            <td><?= $page['date'] ?></td>
          </tr>
        <?php endforeach ?>
      </tbody>
    </table>
  </div>
</main>

<?php $this->theme->footer(); ?>