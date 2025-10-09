<main data-halaman-aktif="avatars" x-data="{pageName: `Avatars`, breadcrumbs : ['UI Elements', 'Avatars']}">
  <div class="p-4 mx-auto max-w-(--breakpoint-2xl) md:p-6">
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
            Default Avatar
          </h3>
        </div>
        <div class="p-8 border-t border-gray-100 dark:border-gray-800">
          <?php include './pages/partials/avatar/avatar-01.php' ?>
        </div>
      </div>

      <div
        class="rounded-2xl border border-gray-200 bg-white dark:border-gray-800 dark:bg-white/[0.03]">
        <div class="px-6 py-5">
          <h3
            class="text-base font-medium text-gray-800 dark:text-white/90">
            Avatar with online indicator
          </h3>
        </div>
        <div class="p-8 border-t border-gray-100 dark:border-gray-800">
          <?php include './pages/partials/avatar/avatar-02.php' ?>
        </div>
      </div>

      <div
        class="rounded-2xl border border-gray-200 bg-white dark:border-gray-800 dark:bg-white/[0.03]">
        <div class="px-6 py-5">
          <h3
            class="text-base font-medium text-gray-800 dark:text-white/90">
            Avatar with Offline indicator
          </h3>
        </div>
        <div class="p-8 border-t border-gray-100 dark:border-gray-800">
          <?php include './pages/partials/avatar/avatar-03.php' ?>
        </div>
      </div>

      <div
        class="rounded-2xl border border-gray-200 bg-white dark:border-gray-800 dark:bg-white/[0.03]">
        <div class="px-6 py-5">
          <h3
            class="text-base font-medium text-gray-800 dark:text-white/90">
            Avatar with busy indicator
          </h3>
        </div>
        <div class="p-8 border-t border-gray-100 dark:border-gray-800">
          <?php include './pages/partials/avatar/avatar-04.php' ?>
        </div>
      </div>
    </div>
  </div>
</main>