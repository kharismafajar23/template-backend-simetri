<main data-halaman-aktif="pieChart" x-data="{pageName: `Pie Chart`, breadcrumbs : ['Charts', 'Pie Chart']}">
    <div class="mx-auto max-w-(--breakpoint-2xl) p-4 md:p-6">
        <!-- Breadcrumb Start -->
        <div>
            <?php include './pages/partials/breadcrumb.php' ?>
        </div>
        <!-- Breadcrumb End -->

        <div class="grid grid-cols-1 gap-6 xl:grid-cols-2">
            <div
                class="rounded-2xl border border-gray-200 bg-white dark:border-gray-800 dark:bg-white/[0.03]">
                <div class="px-6 py-5">
                    <h3
                        class="text-base font-medium text-gray-800 dark:text-white/90">
                        Donut Pie Chart
                    </h3>
                </div>
                <div class="p-6 border-t border-gray-100 dark:border-gray-800">
                    <!-- ====== Pie Chart One Start -->
                    <div class="flex justify-center">
                        <div id="chartSeven" class="chartDarkStyle"></div>
                    </div>
                    <!-- ====== Pie Chart One End -->
                </div>
            </div>

            <div
                class="rounded-2xl border border-gray-200 bg-white dark:border-gray-800 dark:bg-white/[0.03]">
                <div class="px-6 py-5">
                    <h3
                        class="text-base font-medium text-gray-800 dark:text-white/90">
                        Donut Pie Chart
                    </h3>
                </div>
                <div class="p-6 border-t border-gray-100 dark:border-gray-800">
                    <!-- ====== Pie Chart Two Start -->
                    <div class="flex justify-center">
                        <div id="chartSixteen" class="chartDarkStyle"></div>
                    </div>
                    <!-- ====== Pie Chart Two End -->
                </div>
            </div>
        </div>
    </div>
</main>