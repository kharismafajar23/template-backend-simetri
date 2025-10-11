<main
  data-halaman-aktif="modals"
  x-data="{pageName: `Modals`, breadcrumbs : ['UI Elements', 'Modals']}">
  <div class="mx-auto max-w-(--breakpoint-2xl) p-4 md:p-6">
    <!-- Breadcrumb Start -->
    <div>
      <?php include './pages/partials/breadcrumb.php' ?>
    </div>
    <!-- Breadcrumb End -->

    <div class="grid grid-cols-1 gap-5 xl:grid-cols-2 xl:gap-6">
      <div
        class="card sm:col-span-1">
        <div class="card-header">
          <h3
            class="card-title">
            Default Modal
          </h3>
        </div>
        <div class="card-body">
          <?php include './pages/partials/modal/modal-01.php' ?>
        </div>
      </div>

      <div
        class="card sm:col-span-1">
        <div class="card-header">
          <h3
            class="card-title">
            Vertically Centered Modal
          </h3>
        </div>
        <div class="card-body">
          <?php include './pages/partials/modal/modal-02.php' ?>
        </div>
      </div>

      <div
        class="card sm:col-span-1">
        <div class="card-header">
          <h3
            class="card-title">
            Form in Modal
          </h3>
        </div>
        <div class="card-body">
          <?php include './pages/partials/modal/modal-03.php' ?>
        </div>
      </div>

      <div
        class="card sm:col-span-1">
        <div class="card-header">
          <h3
            class="card-title">
            Full Screen Modal
          </h3>
        </div>
        <div class="card-body">
          <?php include './pages/partials/modal/modal-04.php' ?>
        </div>
      </div>

      <div
        class="card">
        <div class="card-header">
          <h3
            class="card-title">
            Modal Based Alerts
          </h3>
        </div>
        <div class="card-body">
          <div class="flex flex-wrap items-center gap-3">
            <?php include './pages/partials/modal/modal-05.php' ?>
            <?php include './pages/partials/modal/modal-06.php' ?>
            <?php include './pages/partials/modal/modal-07.php' ?>
            <?php include './pages/partials/modal/modal-08.php' ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>