<?= $this->extend('layouts/admin'); ?>


<?= $this->section('content'); ?>

<div class="row justify-content-between mb-5">
  <div class="col">
    <h1>Daftar Fasilitas Kesehatan</h1>
  </div>
  <div class="col-auto">
    <button type="button" class="btn btn-primary btn-tambah" data-bs-toggle="modal" data-bs-target="#modal">Tambah Data</button>
  </div>
</div>

<div class="row mb-3">
  <div class="col-7">
    <form action="<?= base_url('/admin/faskes'); ?>" method="get">
      <div class="row g-2">
        <div class="col">
          <select class="form-select" name="provinsi" id="provinsi_search">
            <option value="">Pilih provinsi</option>
            <?php foreach ($provinsi as $p) : ?>
              <option value="<?= $p->id; ?>"><?= $p->nama; ?></option>
            <?php endforeach; ?>
          </select>
        </div>
        <div class="col">
          <select class="form-select" name="kota" id="kota_search">
            <option value="">Pilih kota</option>

          </select>
        </div>
        <div class="col">
          <button class="btn btn-primary" type="submit">Cari</button>
        </div>
      </div>
    </form>
  </div>
  <?php if (!empty($filter)) : ?>
    <div class="col">
      <p class="text-end">Di <b><?= $filter['kota']; ?></b> <b><?= $filter['provinsi']; ?></b> ditemukan <b><?= count($faskes); ?></b> fasilitas kesehatan.</p>
    </div>
  <?php endif; ?>
</div>

<div class="row">
  <div class="col">
    <table class="table table-hover align-middle">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nama</th>
          <th scope="col">Alamat</th>
          <th scope="col">Nomor Telepon</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php $i = 1; ?>
        <?php foreach ($faskes as $f) : ?>
          <tr>
            <th scope="row"><?= $i++; ?></th>
            <td><?= $f['nama']; ?></td>
            <td><?= $f['alamat']; ?></td>
            <td><?= $f['telepon']; ?></td>
            <td>
              <button type="button" class="btn btn-warning btn-sm btn-ubah" data-bs-toggle="modal" data-bs-target="#modal" data-id="<?= $f['id']; ?>"><i class="bi bi-pencil-fill" style="font-size: 0.7rem;"></i></button>
              <form method="post" action="<?= base_url('/admin/faskes/' . $f['id']); ?>" class="d-inline">
                <input type="hidden" name="_method" value="DELETE" />
                <button type="submit" onclick="return confirm('delete?')" class="btn btn-danger btn-sm"><i class="bi bi-trash-fill" style="font-size: 0.7rem;"></i></button>
              </form>
            </td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</div>

<?= $this->include('pages/admin/modal'); ?>

<?= $this->endsection(); ?>