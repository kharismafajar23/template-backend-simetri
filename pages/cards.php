<main
  data-halaman-aktif="cards"
  x-data="{pageName: `Cards`, breadcrumbs : ['UI Elements', 'Cards']}">
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
            Card with Image
          </h3>
        </div>
        <div class="card-body">
          <?php include './pages/partials/cards/card-01.php' ?>
        </div>
      </div>

      <div
        class="card">
        <div class="card-header">
          <h3 class="card-title">
            Horizontal Card with Image
          </h3>
        </div>
        <div class="card-body">
          <?php include './pages/partials/cards/card-02.php' ?>
        </div>
      </div>

      <div
        class="card">
        <div class="card-header">
          <h3 class="card-title">
            Card with link
          </h3>
        </div>
        <div class="card-body">
          <?php include './pages/partials/cards/card-03.php' ?>
        </div>
      </div>

      <div
        class="card">
        <div class="card-header">
          <h3 class="card-title">
            Card with Icon
          </h3>
        </div>
        <div class="card-body">
          <?php include './pages/partials/cards/card-04.php' ?>
        </div>
      </div>
    </div>
  </div>
</main>