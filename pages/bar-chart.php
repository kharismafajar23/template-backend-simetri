<main data-halaman-aktif="barChart" x-data="{pageName: `Bar Chart`, breadcrumbs : ['Charts', 'Bar Chart']}">
    <div class="mx-auto max-w-(--breakpoint-2xl) p-4 md:p-6">
        <!-- Breadcrumb Start -->
        <div>
            <?php include './pages/partials/breadcrumb.php' ?>
        </div>
        <!-- Breadcrumb End -->

        <div class="space-y-6">
            <div
                class="rounded-2xl border border-gray-200 bg-white dark:border-gray-800 dark:bg-white/[0.03]">
                <div class="px-6 py-5">
                    <h3
                        class="text-base font-medium text-gray-800 dark:text-white/90">
                        Bar Chart 1
                    </h3>
                </div>
                <div
                    class="border-t border-gray-100 p-5 dark:border-gray-800 sm:p-6">
                    <!-- ====== Bar Chart One Start -->
                    <div class="custom-scrollbar max-w-full overflow-x-auto">
                        <div id="chartOne" class="min-w-[1000px]"></div>
                    </div>
                    <!-- ====== Bar Chart One End -->
                </div>
            </div>

            <div
                class="rounded-2xl border border-gray-200 bg-white dark:border-gray-800 dark:bg-white/[0.03]">
                <div class="px-6 py-5">
                    <h3
                        class="text-base font-medium text-gray-800 dark:text-white/90">
                        Bar Chart 2
                    </h3>
                </div>
                <div
                    class="border-t border-gray-100 p-5 dark:border-gray-800 sm:p-6">
                    <!-- ====== Bar Chart Two Start -->
                    <div class="custom-scrollbar max-w-full overflow-x-auto">
                        <div id="chartSix" class="min-w-[1000px]"></div>
                    </div>
                    <!-- ====== Bar Chart Two End -->
                </div>
            </div>
        </div>
    </div>
</main>