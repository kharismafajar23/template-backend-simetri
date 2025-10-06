<main data-halaman-aktif="stocks">
    <div class="mx-auto max-w-(--breakpoint-2xl) p-4 md:p-6">
        <div class="grid grid-cols-12 gap-4 md:gap-6">
            <div class="col-span-12">
                <!-- Metric Group Five -->
                <?php include './pages/partials/metric-group/metric-group-05.php' ?>
                <!-- Metric Group Five -->
            </div>

            <div class="col-span-12 space-y-6 xl:col-span-8">
                <!-- ====== Chart Fourteen Start -->
                <?php include './pages/partials/chart/chart-14.php' ?>
                <!-- ====== Chart Fourteen End -->

                <!-- ====== Trending Stocks Start -->
                <?php include './pages/partials/trending-stocks.php' ?>
                <!-- ====== Trending Stocks End -->
            </div>

            <div class="col-span-12 space-y-6 xl:col-span-4">
                <!-- ====== Chart Fifteen Start -->
                <?php include './pages/partials/chart/chart-15.php' ?>
                <!-- ====== Chart Fifteen End -->

                <!-- ====== Chart Fifteen Start -->
                <?php include './pages/partials/watchlist.php' ?>
                <!-- ====== Chart Fifteen End -->
            </div>

            <div class="col-span-12">
                <!-- Table Five -->
                <?php include './pages/partials/table/table-05.php' ?>
                <!-- Table Five -->
            </div>
        </div>
    </div>
</main>