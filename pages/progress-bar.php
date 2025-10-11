<main
  data-halaman-aktif="progress"
  x-data="{pageName: `Progress`, breadcrumbs : ['UI Elements', 'Progress']}">
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
            Default Progress Bar
          </h3>
        </div>
        <div class="card-body">
          <?php include './pages/partials/progress-bar/progress-bar-01.php' ?>
        </div>
      </div>

      <div
        class="card">
        <div class="card-header">
          <h3
            class="card-title">
            Progress Bar In Multiple Sizes
          </h3>
        </div>
        <div class="card-body">
          <?php include './pages/partials/progress-bar/progress-bar-02.php' ?>
        </div>
      </div>

      <div
        class="card">
        <div class="card-header">
          <h3
            class="card-title">
            Progress Bar with Outside Label
          </h3>
        </div>
        <div class="card-body">
          <?php include './pages/partials/progress-bar/progress-bar-03.php' ?>
        </div>
      </div>

      <div
        class="card">
        <div class="card-header">
          <h3
            class="card-title">
            Progress Bar with Inside Label
          </h3>
        </div>
        <div class="card-body">
          <?php include './pages/partials/progress-bar/progress-bar-04.php' ?>
        </div>
      </div>
    </div>
  </div>
</main>