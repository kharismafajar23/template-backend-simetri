<main
  data-halaman-aktif="dropdowns"
  x-data="{pageName: `Dropdowns`, breadcrumbs : ['UI Elements', 'Dropdowns']}">
  <div class="mx-auto max-w-(--breakpoint-2xl) p-4 md:p-6">
    <!-- Breadcrumb Start -->
    <div>
      <?php include './pages/partials/breadcrumb.php' ?>
    </div>
    <!-- Breadcrumb End -->

    <div class="grid grid-cols-1 gap-5 xl:grid-cols-2 xl:gap-6">
      <div
        class="card">
        <div class="card-header">
          <h3 class="card-title">
            Default Dropdown
          </h3>
        </div>
        <div class="card-body">
          <div class="pb-[300px]">
            <?php include './pages/partials/dropdown/dropdown-01.php' ?>
          </div>
        </div>
      </div>

      <div
        class="card">
        <div class="card-header">
          <h3 class="card-title">
            Dropdown with Divider
          </h3>
        </div>
        <div class="card-body">
          <div class="pb-[300px]">
            <?php include './pages/partials/dropdown/dropdown-02.php' ?>
          </div>
        </div>
      </div>

      <div
        class="card">
        <div class="card-header">
          <h3 class="card-title">
            Dropdown with Icon
          </h3>
        </div>
        <div class="card-body">
          <div class="pb-[350px]">
            <?php include './pages/partials/dropdown/dropdown-03.php' ?>
          </div>
        </div>
      </div>

      <div
        class="card">
        <div class="card-header">
          <h3 class="card-title">
            Dropdown with Icon & Divider
          </h3>
        </div>
        <div class="card-body">
          <div class="pb-[350px]">
            <?php include './pages/partials/dropdown/dropdown-04.php' ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>