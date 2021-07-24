<?= $this->extend('layouts/default'); ?>

<?= $this->section('content'); ?>

<?php

$target = 208265720;
$persentase = $vaksinasi->total->jumlah_vaksinasi_1 * 100 / $target;

?>

<div class="row">
  <div class="col">
    <div class="p-5 mb-2 bg-primary bg-gradient text-white">
      <div class="row mb-5">
        <h1>Vaksinasi COVID-19 Nasional</h1>
        <h5>Data per tanggal <?= date('d F Y', strtotime($vaksinasi->penambahan->tanggal)); ?></h5>
      </div>

      <div class="row">
        <div class="col">
          <div class="p-2 data bg-white bg-gradient rounded-3 text-dark text-center d-flex justify-content-center align-items-center">
            <div class="">
              <h3><?= number_format($persentase); ?> dari 100</h3>
              <small>penduduk sudah dapat 1 dosis vaksin</small>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="p-2 data bg-white bg-gradient rounded-3 text-dark text-center">
            <p class="bg-light py-2 rounded">Sasaran Vaksinasi</p>
            <h3><?= number_format($target); ?></h3>
            <p class="small caption px-3">(Tenaga Kesehatan, Lanjut Usia, Petugas Publik, Masyarakat Rentan dan Masyarakat Umum, Usia 12-17 Tahun)</p>
          </div>
        </div>
        <div class="col">
          <div class="p-2 data bg-white bg-gradient rounded-3 text-dark text-center">
            <p class="bg-light py-2 rounded">Total Vaksinasi Dosis 1</p>
            <h3><?= number_format($vaksinasi->total->jumlah_vaksinasi_1); ?></h3>
            <p>(+<?= number_format($vaksinasi->penambahan->jumlah_vaksinasi_1); ?>)</p>
          </div>
        </div>
        <div class="col">
          <div class="p-2 data bg-white bg-gradient rounded-3 text-dark text-center">
            <p class="bg-light py-2 rounded">Total Vaksinasi Dosis 2</p>
            <h3><?= number_format($vaksinasi->total->jumlah_vaksinasi_2); ?></h3>
            <p>(+<?= number_format($vaksinasi->penambahan->jumlah_vaksinasi_2); ?>)</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?= $this->endSection(); ?>