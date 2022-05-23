<div class="card border-success">
  <div class="card-header border-success">
    List Media
    <a href="<?= base_url('player/create'); ?>" type="button" class="btn btn-success btn-sm float-end">Add</a>
  </div>
  <div class="card-body">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Nama</th>
          <th scope="col">Type</th>
          <th scope="col">Lokasi</th>
          <th scope="col">Ukuran</th>
          <th scope="col">Aktif</th>
        </tr>
      </thead>
      <tbody>
        <?php $no = 1;
        foreach ($media as $value) : ?>
          <tr>
            <th scope="row"><?= $no++; ?></th>
            <td><?= $value['nama_file']; ?></td>
            <td><?= $value['ekstensi']; ?></td>
            <td><?= $value['direktori_file']; ?></td>
            <td><?= $value['ukuran_file']; ?></td>
            <td>
              <input type="checkbox" onchange="update(this.id)" data-active="<?= $value['is_active']; ?>" name="<?= $value['id']; ?>" id="<?= $value['id']; ?>" <?= ($value['is_active'] == 1) ? "Checked" : ""; ?>>
            </td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</div>