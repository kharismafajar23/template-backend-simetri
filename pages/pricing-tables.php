<main data-halaman-aktif="pricingTables" x-data="{pageName: `Pricing Tables`, breadcrumbs : ['Pages', 'Pricing Tables']}">
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
                        Pricing Table 1
                    </h3>
                </div>
                <div
                    class="card-body">
                    <!-- ====== Pricing Table One Start -->
                    <?php include './pages/partials/pricing-table/pricing-table-01.php' ?>
                    <!-- ====== Pricing Table One End -->
                </div>
            </div>

            <div
                class="rounded-2xl border border-gray-200 bg-white dark:border-gray-800 dark:bg-white/[0.03]">
                <div class="card-header">
                    <h3
                        class="text-base font-medium text-gray-800 dark:text-white/90">
                        Pricing Table 2
                    </h3>
                </div>
                <div
                    class="card-body">
                    <!-- Pricing Table Two -->
                    <?php include './pages/partials/pricing-table/pricing-table-02.php' ?>
                    <!-- Pricing Table Two -->
                </div>
            </div>

            <div
                class="rounded-2xl border border-gray-200 bg-white dark:border-gray-800 dark:bg-white/[0.03]">
                <div class="card-header">
                    <h3
                        class="text-base font-medium text-gray-800 dark:text-white/90">
                        Pricing Table 3
                    </h3>
                </div>
                <div
                    class="card-body">
                    <!-- Pricing Table Three -->
                    <?php include './pages/partials/pricing-table/pricing-table-03.php' ?>
                    <!-- Pricing Table Three -->
                </div>
            </div>
        </div>
    </div>
</main>