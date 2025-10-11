<main data-halaman-aktif="carousel"
  x-data="{pageName: `Carousel`, breadcrumbs : ['UI Elements', 'Carousel']}">
  <div class="p-4 mx-auto max-w-(--breakpoint-2xl) md:p-6">
    <!-- Breadcrumb Start -->
    <div>
      <?php include './pages/partials/breadcrumb.php' ?>
    </div>
    <!-- Breadcrumb End -->

    <div class="grid grid-cols-1 gap-5 xl:grid-cols-2 xl:gap-6">
      <div
        class="card">
        <div class="card-header">
          <h3
            class="card-title">
            Slides only
          </h3>
        </div>
        <div
          class="card-body">
          <?php include './pages/partials/carousel/carousel-01.php' ?>
        </div>
      </div>

      <div
        class="card">
        <div class="card-header">
          <h3
            class="card-title">
            With controls
          </h3>
        </div>
        <div
          class="card-body">
          <?php include './pages/partials/carousel/carousel-02.php' ?>
        </div>
      </div>

      <div
        class="card">
        <div class="card-header">
          <h3
            class="card-title">
            With indicators
          </h3>
        </div>
        <div
          class="card-body">
          <?php include './pages/partials/carousel/carousel-03.php' ?>
        </div>
      </div>

      <div
        class="card">
        <div class="card-header">
          <h3
            class="card-title">
            With controls and indicators
          </h3>
        </div>
        <div
          class="card-body">
          <?php include './pages/partials/carousel/carousel-04.php' ?>
        </div>
      </div>
    </div>
  </div>
</main>