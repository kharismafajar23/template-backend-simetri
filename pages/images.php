<main
  data-halaman-aktif="images"
  x-data="{pageName: `Images`, breadcrumbs : ['UI Elements', 'Images']}">
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
          <h3 class="card-title">
            Responsive image
          </h3>
        </div>
        <div class="card-body">
          <?php include './pages/partials/grid-image/image-01.php' ?>
        </div>
      </div>

      <div
        class="card">
        <div class="card-header">
          <h3 class="card-title">
            Image in 2 Grid
          </h3>
        </div>
        <div class="card-body">
          <?php include './pages/partials/grid-image/image-02.php' ?>
        </div>
      </div>

      <div
        class="card">
        <div class="card-header">
          <h3 class="card-title">
            Image in 3 Grid
          </h3>
        </div>
        <div class="card-body">
          <?php include './pages/partials/grid-image/image-03.php' ?>
        </div>
      </div>
    </div>
  </div>
</main>