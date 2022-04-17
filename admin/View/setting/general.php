<?php $this->theme->header(); ?>

<main>
  <div class="container">
    <div class="row">
      <div class="col page-title">
        <h3>Settings</h3>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <form method="POST" id="settingForm">

          <?php foreach ($settings as $setting) : ?>
            <?php if ($setting->key_field == 'language') : ?>
              <div class="form-group row">
                <label for="formLanguageSite" class="col-2 col-form-label">
                  Language
                </label>
                <div class="col-10">
                  <select name="language" class="form-control" id="formLanguageSite">
                    <option selected>Engish</option>
                  </select>
                </div>
              </div>
            <?php else : ?>
              <div class="form-group row">
                <label for="formNameSite" class="col-2 col-form-label">
                  <?= $setting->name ?>
                </label>
                <div class="col-10">
                  <input class="form-control" type="text" name="<?= $setting->key_field ?>" value="<?= $setting->value ?>" id="formNameSite">
                </div>
              </div>
            <?php endif; ?>
          <?php endforeach; ?>
          <button type="submit" class="btn btn-primary" onclick="setting.update(); return false;">
            Save changes
          </button>
        </form>
      </div>
    </div>
  </div>
</main>

<?php $this->theme->footer(); ?>