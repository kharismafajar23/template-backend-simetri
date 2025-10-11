<main
  data-halaman-aktif="popovers"
  x-data="{pageName: `Popovers`, breadcrumbs : ['UI Elements', 'Popovers']}">
  <div class="p-4 mx-auto max-w-(--breakpoint-2xl) md:p-6">
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
            Default Popover
          </h3>
        </div>
        <div class="card-body">
          <?php include './pages/partials/popover/popover-01.php' ?>
        </div>
      </div>

      <div
        class="card">
        <div class="card-header">
          <h3 class="card-title">
            Popover with Button
          </h3>
        </div>
        <div class="card-body">
          <?php include './pages/partials/popover/popover-02.php' ?>
        </div>
      </div>

      <div
        class="card">
        <div class="card-header">
          <h3 class="card-title">
            Popover with Link
          </h3>
        </div>
        <div class="card-body">
          <?php include './pages/partials/popover/popover-03.php' ?>
        </div>
      </div>
    </div>
  </div>
</main>