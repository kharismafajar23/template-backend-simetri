<main
  data-halaman-aktif="list"
  x-data="{pageName: `List`, breadcrumbs : ['UI Elements', 'List']}">
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
            Unordered List
          </h3>
        </div>
        <div
          class="card-body">
          <?php include './pages/partials/list/list-01.php' ?>
        </div>
      </div>

      <div
        class="card sm:col-span-1">
        <div class="card-header">
          <h3
            class="card-title">
            Ordered List
          </h3>
        </div>
        <div
          class="card-body">
          <?php include './pages/partials/list/list-02.php' ?>
        </div>
      </div>

      <div
        class="card sm:col-span-1">
        <div class="card-header">
          <h3
            class="card-title">
            List with button
          </h3>
        </div>
        <div
          class="card-body">
          <?php include './pages/partials/list/list-03.php' ?>
        </div>
      </div>

      <div
        class="card sm:col-span-1">
        <div class="card-header">
          <h3
            class="card-title">
            List with Icon
          </h3>
        </div>
        <div
          class="card-body">
          <?php include './pages/partials/list/list-04.php' ?>
        </div>
      </div>

      <div
        class="card">
        <div class="card-header">
          <h3
            class="card-title">
            Horizontal list
          </h3>
        </div>
        <div
          class="card-body">
          <?php include './pages/partials/list/list-05.php' ?>
        </div>
      </div>

      <div
        class="card sm:col-span-1">
        <div class="card-header">
          <h3
            class="card-title">
            List with checkbox
          </h3>
        </div>
        <div
          class="card-body">
          <?php include './pages/partials/list/list-06.php' ?>
        </div>
      </div>

      <div
        class="card sm:col-span-1">
        <div class="card-header">
          <h3
            class="card-title">
            List with radio
          </h3>
        </div>
        <div
          class="card-body">
          <?php include './pages/partials/list/list-07.php' ?>
        </div>
      </div>
    </div>
  </div>
</main>