<main
  data-halaman-aktif="notifications"
  x-data="{pageName: `Notifications`, breadcrumbs : ['UI Elements', 'Notifications']}">
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
            Announcement Bar
          </h3>
        </div>
        <div
          class="card-body">
          <?php include './pages/partials/notification/notification-01.php' ?>
        </div>
      </div>

      <div
        class="card">
        <div class="card-header">
          <h3
            class="card-title">
            Toast Notification
          </h3>
        </div>
        <div
          class="card-body">
          <?php include './pages/partials/notification/notification-02.php' ?>
        </div>
      </div>

      <div
        class="card">
        <div class="card-header">
          <h3
            class="card-title">
            Success Notification
          </h3>
        </div>
        <div
          class="card-body">
          <?php include './pages/partials/notification/notification-03.php' ?>
        </div>
      </div>

      <div
        class="card">
        <div class="card-header">
          <h3
            class="card-title">
            Info Notification
          </h3>
        </div>
        <div
          class="card-body">
          <?php include './pages/partials/notification/notification-04.php' ?>
        </div>
      </div>

      <div
        class="card">
        <div class="card-header">
          <h3
            class="card-title">
            Warning Notification
          </h3>
        </div>
        <div
          class="card-body">
          <?php include './pages/partials/notification/notification-05.php' ?>
        </div>
      </div>

      <div
        class="card">
        <div class="card-header">
          <h3
            class="card-title">
            Error Notification
          </h3>
        </div>
        <div
          class="card-body">
          <?php include './pages/partials/notification/notification-06.php' ?>
        </div>
      </div>
    </div>
  </div>
</main>