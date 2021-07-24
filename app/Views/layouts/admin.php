<?= $this->include('layouts/header'); ?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="<?= base_url(); ?>">
      <img src="/img/white.svg" alt="" width="30" height="24" class="d-inline-block align-text-top">
      LAWAN COVID-19
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-between" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link" aria-current="page" href="<?= base_url('/admin'); ?>">Home</a>
      </div>
      <div class="navbar-nav">
        <a class="nav-link" href="<?= base_url('/auth/logout'); ?>">Logout</a>
      </div>
    </div>
  </div>
</nav>

<div class="container mt-4">
  <?= $this->renderSection('content'); ?>
</div>

<?= $this->include('layouts/footer'); ?>