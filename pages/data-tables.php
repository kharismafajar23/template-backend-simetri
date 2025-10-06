<main data-halaman-aktif="dataTables" x-data="{ pageName: `Data Table`, breadcrumbs: ['Table', 'Data Table']}">
    <div class="mx-auto max-w-(--breakpoint-2xl) p-4 md:p-6">
        <!-- Breadcrumb Start -->
        <div>
            <?php include './pages/partials/breadcrumb.php' ?>
        </div>
        <!-- Breadcrumb End -->

        <div class="space-y-5 sm:space-y-6">
            <div
                class="rounded-2xl border border-gray-200 bg-white dark:border-gray-800 dark:bg-white/[0.03]">
                <div class="px-5 py-4 sm:px-6 sm:py-5">
                    <h3
                        class="text-base font-medium text-gray-800 dark:text-white/90">
                        Datatable 1
                    </h3>
                </div>
                <div
                    class="border-t border-gray-100 p-5 dark:border-gray-800 sm:p-6">
                    <!-- ====== DataTable One Start -->
                    <?php include './pages/partials/data-table/data-table-01.php' ?>
                    <!-- ====== DataTable One End -->
                </div>
            </div>

            <div
                class="rounded-2xl border border-gray-200 bg-white dark:border-gray-800 dark:bg-white/[0.03]">
                <div class="px-5 py-4 sm:px-6 sm:py-5">
                    <h3
                        class="text-base font-medium text-gray-800 dark:text-white/90">
                        Datatable 2
                    </h3>
                </div>
                <div
                    class="border-t border-gray-100 p-5 dark:border-gray-800 sm:p-6">
                    <!-- DataTable Two -->
                    <?php include './pages/partials/data-table/data-table-02.php' ?>
                    <!-- DataTable Two -->
                </div>
            </div>

            <div
                class="rounded-2xl border border-gray-200 bg-white dark:border-gray-800 dark:bg-white/[0.03]">
                <div class="px-5 py-4 sm:px-6 sm:py-5">
                    <h3
                        class="text-base font-medium text-gray-800 dark:text-white/90">
                        Datatable 3
                    </h3>
                </div>
                <div
                    class="border-t border-gray-100 p-5 dark:border-gray-800 sm:p-6">
                    <!-- DataTable Three -->
                    <?php include './pages/partials/data-table/data-table-03.php' ?>
                    <!-- DataTable Three -->
                </div>
            </div>
        </div>
    </div>
</main>