<main data-halaman-aktif="faq" x-data="{pageName: `Faq’s`, breadcrumbs : ['Pages', 'Faq’s']}">
    <div class="mx-auto max-w-(--breakpoint-2xl) p-4 md:p-6">
        <!-- Breadcrumb Start -->
        <div>
            <?php include './pages/partials/breadcrumb.php' ?>
        </div>
        <!-- Breadcrumb End -->

        <div class="space-y-5 sm:space-y-6">
            <div
                class="rounded-2xl border border-gray-200 bg-white dark:border-gray-800 dark:bg-white/[0.03]">
                <div class="card-header">
                    <h3
                        class="text-base font-medium text-gray-800 dark:text-white/90">
                        Faq’s 1
                    </h3>
                </div>
                <div
                    class="card-body">
                    <!-- ====== FAQ One Start -->
                    <?php include './pages/partials/faq/faq-item-01.php' ?>
                    <!-- ====== FAQ One End -->
                </div>
            </div>

            <div
                class="rounded-2xl border border-gray-200 bg-white dark:border-gray-800 dark:bg-white/[0.03]">
                <div class="card-header">
                    <h3
                        class="text-base font-medium text-gray-800 dark:text-white/90">
                        Faq’s 2
                    </h3>
                </div>
                <div
                    class="card-body">
                    <!-- FAQ Two -->
                    <?php include './pages/partials/faq/faq-item-02.php' ?>
                    <!-- FAQ Two -->
                </div>
            </div>

            <div
                class="rounded-2xl border border-gray-200 bg-white dark:border-gray-800 dark:bg-white/[0.03]">
                <div class="card-header">
                    <h3
                        class="text-base font-medium text-gray-800 dark:text-white/90">
                        Faq’s 3
                    </h3>
                </div>
                <div
                    class="border-t border-gray-100 p-5 dark:border-gray-800 sm:p-6 xl:p-10">
                    <!-- FAQ Three -->
                    <?php include './pages/partials/faq/faq-item-03.php' ?>
                    <!-- FAQ Three -->
                </div>
            </div>
        </div>
    </div>
</main>