<main
  data-halaman-aktif="pagination"
  x-data="{pageName: `Pagination`, breadcrumbs : ['UI Elements', 'Pagination']}">
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
            Pagination with Text
          </h3>
        </div>
        <div
          class="card-body">
          <?php include './pages/partials/pagination/pagination-01.php' ?>
        </div>
      </div>

      <div
        class="card">
        <div class="card-header">
          <h3
            class="card-title">
            Pagination with Text and Icon
          </h3>
        </div>
        <div
          class="card-body">
          <?php include './pages/partials/pagination/pagination-02.php' ?>
        </div>
      </div>

      <div
        class="card">
        <div class="card-header">
          <h3
            class="card-title">
            Pagination with Icon
          </h3>
        </div>
        <div
          class="card-body">
          <?php include './pages/partials/pagination/pagination-03.php' ?>
        </div>
      </div>
    </div>
  </div>
</main>