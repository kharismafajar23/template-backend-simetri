<main data-halaman-aktif="alerts" x-data="{pageName: `Alerts`, breadcrumbs : ['UI Elements', 'Alerts']}">
  <div class=" mx-auto max-w-(--breakpoint-2xl) p-4 md:p-6">
    <!-- Breadcrumb Start -->
    <div>
      <?php include './pages/partials/breadcrumb.php' ?>
    </div>
    <!-- Breadcrumb End -->

    <div class="space-y-5 sm:space-y-6">
      <div
        class="rounded-2xl border border-gray-200 bg-white dark:border-gray-800 dark:bg-white/[0.03]">
        <div class="px-6 py-5">
          <h3
            class="text-base font-medium text-gray-800 dark:text-white/90">
            Success Alert
          </h3>
        </div>
        <div
          class="border-t border-gray-100 p-4 dark:border-gray-800 sm:p-6">
          <div class="space-y-6">
            <?php include './pages/partials/alert/alert-success.php' ?>
          </div>
        </div>
      </div>

      <div
        class="rounded-2xl border border-gray-200 bg-white dark:border-gray-800 dark:bg-white/[0.03]">
        <div class="px-6 py-5">
          <h3
            class="text-base font-medium text-gray-800 dark:text-white/90">
            Warning Alert
          </h3>
        </div>
        <div
          class="border-t border-gray-100 p-4 dark:border-gray-800 sm:p-6">
          <div class="space-y-6">
            <?php include './pages/partials/alert/alert-warning.php' ?>
          </div>
        </div>
      </div>

      <div
        class="rounded-2xl border border-gray-200 bg-white dark:border-gray-800 dark:bg-white/[0.03]">
        <div class="px-6 py-5">
          <h3
            class="text-base font-medium text-gray-800 dark:text-white/90">
            Error Alert
          </h3>
        </div>
        <div
          class="border-t border-gray-100 p-4 dark:border-gray-800 sm:p-6">
          <div class="space-y-6">
            <?php include './pages/partials/alert/alert-error.php' ?>
          </div>
        </div>
      </div>

      <div
        class="rounded-2xl border border-gray-200 bg-white dark:border-gray-800 dark:bg-white/[0.03]">
        <div class="px-6 py-5">
          <h3
            class="text-base font-medium text-gray-800 dark:text-white/90">
            Info Alert
          </h3>
        </div>
        <div
          class="border-t border-gray-100 p-4 dark:border-gray-800 sm:p-6">
          <div class="space-y-6">
            <?php include './pages/partials/alert/alert-info.php' ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>