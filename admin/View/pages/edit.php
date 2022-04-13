<?php $this->theme->header(); ?>

    <main>
        <div class="container">
            <div class="row">
                <div class="col page-title">
                    <h3><?= $page->title ?></h3>
                </div>
            </div>
            <div class="row">
                <div class="col-9">
                    <form id="formPage" method="POST">
                        <input type="hidden" id="form_page_id" name="page_id" value="<?= $page->id ?>" />
                        
                        <div class="form-group">
                            <label for="formTitle">Title</label>
                            <input type="text" name="title" class="form-control" id="title" value="<?= $page->title ?>" placeholder="Title page...">
                        </div>
                        <div class="form-group">
                            <label for="formContent">Content</label>
                            <textarea id="redactor" name="content" class="form-control" id="content">
                                <?= $page->content ?>
                            </textarea>
                        </div>
                    </form>
                </div>
                <div class="col-3">
                    <div>
                        <p>Update this page</p>
                        <button type="submit" class="btn btn-primary" onclick="page.update()">
                            Update
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </main>

<?php $this->theme->footer(); ?>