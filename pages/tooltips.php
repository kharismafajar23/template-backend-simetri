<main
  data-halaman-aktif="tooltips"
  x-data="{pageName: `Tooltips`, breadcrumbs : ['UI Elements', 'Tooltips']}">
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
            Default Tooltip
          </h3>
        </div>
        <div class="card-body">
          <?php include './pages/partials/tooltip/tooltip-01.php' ?>
        </div>
      </div>

      <div
        class="card">
        <div class="card-header">
          <h3
            class="card-title">
            White and Dark Tooltip
          </h3>
        </div>
        <div class="card-body">
          <?php include './pages/partials/tooltip/tooltip-02.php' ?>
        </div>
      </div>

      <div
        class="card">
        <div class="card-header">
          <h3
            class="card-title">
            Tooltip Placement
          </h3>
        </div>
        <div class="card-body">
          <?php include './pages/partials/tooltip/tooltip-03.php' ?>
        </div>
      </div>
    </div>
  </div>
</main>