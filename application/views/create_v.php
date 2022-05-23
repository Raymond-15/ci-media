<div class="card border-primary">
  <div class="card-header border-primary">
    Add Media
    <a href="<?= base_url('player/show'); ?>" type="button" class="btn btn-primary btn-sm float-end">Back</a>
  </div>
  <div class="card-body">
    <?= form_open_multipart('player/do_upload'); ?>
    <div class="mb-3">
      <input type="file" class="form-control" name="userfile" id="file">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    <?= form_close(); ?>
  </div>
</div>