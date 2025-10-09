<main data-halaman-aktif="breadcrumb" x-data="{pageName: `Badge`, breadcrumb : ['UI Elements', 'Breadcrumb']}">
  <div class="mx-auto max-w-(--breakpoint-2xl) p-4 md:p-6">
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
            Default Breadcrumb
          </h3>
        </div>
        <div class="border-t border-gray-100 p-6 dark:border-gray-800">
          <?php include './pages/partials/breadcrumb/breadcrumb-01.php' ?>
        </div>
      </div>

      <div
        class="rounded-2xl border border-gray-200 bg-white dark:border-gray-800 dark:bg-white/[0.03]">
        <div class="px-6 py-5">
          <h3
            class="text-base font-medium text-gray-800 dark:text-white/90">
            With Icons Breadcrumb
          </h3>
        </div>
        <div class="border-t border-gray-100 p-6 dark:border-gray-800">
          <?php include './pages/partials/breadcrumb/breadcrumb-02.php' ?>
        </div>
      </div>

      <div
        class="rounded-2xl border border-gray-200 bg-white dark:border-gray-800 dark:bg-white/[0.03]">
        <div class="px-6 py-5">
          <h3
            class="text-base font-medium text-gray-800 dark:text-white/90">
            Divider Breadcrumb
          </h3>
        </div>
        <div class="border-t border-gray-100 p-6 dark:border-gray-800">
          <?php include './pages/partials/breadcrumb/breadcrumb-03.php' ?>
        </div>
      </div>

      <div
        class="rounded-2xl border border-gray-200 bg-white dark:border-gray-800 dark:bg-white/[0.03]">
        <div class="px-6 py-5">
          <h3
            class="text-base font-medium text-gray-800 dark:text-white/90">
            Dotted Divider Breadcrumb
          </h3>
        </div>
        <div class="border-t border-gray-100 p-6 dark:border-gray-800">
          <?php include './pages/partials/breadcrumb/breadcrumb-04.php' ?>
        </div>
      </div>
    </div>
  </div>
</main>