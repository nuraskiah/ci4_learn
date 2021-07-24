<!-- Modal -->
<div class="modal fade" id="modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Tambah Data Faskes</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form method="post" action="<?= base_url('/admin/faskes'); ?>">
        <input type="hidden" name="id" id="id" />
        <div class="modal-body">
          <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" placeholder="Klinik Sehat" autofocus>
          </div>
          <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Jalan">
          </div>
          <div class="mb-3">
            <label for="provinsi" class="form-label">Provinsi</label>
            <select class="form-select" id="provinsi" name="provinsi" placeholder="DKI Jakarta">
              <option value="">Pilih provinsi</option>
              <?php foreach ($provinsi as $p) : ?>
                <option value="<?= $p->id; ?>"><?= $p->nama; ?></option>
              <?php endforeach; ?>
            </select>
          </div>
          <div class="mb-3">
            <label for="kota" class="form-label">Kota</label>
            <select class="form-select" id="kota" name="kota" placeholder="Jakarta">
              <option value="">Pilih kota</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="telepon" class="form-label">Nomor Telepon</label>
            <input type="text" maxlength="15" class="form-control" id="telepon" name="telepon" placeholder="021429452">
          </div>
          <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <select class="form-select" id="status" name="status" placeholder="Tersedia">
              <option value="">Pilih status</option>
              <option value="Tersedia">Tersedia</option>
              <option value="Habis">Habis</option>
            </select>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary" id="btn-submit">Tambah</button>
        </div>
      </form>
    </div>
  </div>
</div>