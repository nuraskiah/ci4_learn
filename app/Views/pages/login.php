<?= $this->extend('layouts/default'); ?>

<?= $this->section('content'); ?>

<div class="row justify-content-center">
  <h2 class="text-center">Login</h2>
  <div class="p-4 border col-4 mt-4">
    <form method="post" action="<?= BASEURL; ?>/auth/login">
      <div class="mb-3">
        <label for="email" class="form-label">Email address</label>
        <input type="email" class="form-control" id="email" name="email">
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" name="password">
      </div>
      <div class="d-grid">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
  </div>
</div>

<?= $this->endSection(); ?>