<main
  data-halaman-aktif="spinners"
  x-data="{pageName: `Spinners`, breadcrumbs : ['UI Elements', 'Spinners']}">
  <div class="mx-auto max-w-(--breakpoint-2xl) p-4 md:p-6">
    <!-- Breadcrumb Start -->
    <div>
      <?php include './pages/partials/breadcrumb.php' ?>
    </div>
    <!-- Breadcrumb End -->

    <div class="space-y-5 sm:space-y-6">
      <div
        class="card">
        <div class="card-header">
          <h3
            class="card-title">
            Spinner 1
          </h3>
        </div>
        <div class="card-body">
          <?php include './pages/partials/spinner/spinner-01.php' ?>
        </div>
      </div>

      <div
        class="card">
        <div class="card-header">
          <h3
            class="card-title">
            Spinner 2
          </h3>
        </div>
        <div class="card-body">
          <?php include './pages/partials/spinner/spinner-02.php' ?>
        </div>
      </div>

      <div
        class="card">
        <div class="card-header">
          <h3
            class="card-title">
            Spinner 3
          </h3>
        </div>
        <div class="card-body">
          <?php include './pages/partials/spinner/spinner-03.php' ?>
        </div>
      </div>

      <div
        class="card">
        <div class="card-header">
          <h3
            class="card-title">
            Spinner with Button
          </h3>
        </div>
        <div class="card-body">
          <?php include './pages/partials/spinner/spinner-04.php' ?>
        </div>
      </div>
    </div>
  </div>
</main>