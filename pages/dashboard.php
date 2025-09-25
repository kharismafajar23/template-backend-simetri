<main x-data="{page: 'ecommerce'}">
    <div class="p-4 mx-auto max-w-(--breakpoint-2xl) md:p-6">
        <div class="grid grid-cols-12 gap-4 md:gap-6">
            <div class="col-span-12 space-y-6 xl:col-span-7">
                <!-- Metric Group One -->
                <?php include "./pages/partials/metric-group/metric-group-01.php" ?>
                <!-- Metric Group One -->

                <!-- ====== Chart One Start -->
                <?php include  "./pages/partials/chart/chart-01.php" ?>
                <!-- ====== Chart One End -->
            </div>
            <div class="col-span-12 xl:col-span-5">
                <!-- ====== Chart Two Start -->
                <?php include  "./pages/partials/chart/chart-02.php" ?>
                <!-- ====== Chart Two End -->
            </div>

            <div class="col-span-12">
                <!-- ====== Chart Three Start -->
                <?php include  "./pages/partials/chart/chart-03.php" ?>
                <!-- ====== Chart Three End -->
            </div>

            <div class="col-span-12 xl:col-span-5">
                <!-- ====== Map One Start -->
                <?php include  "./pages/partials/map-01.php" ?>
                <!-- ====== Map One End -->
            </div>

            <div class="col-span-12 xl:col-span-7">
                <!-- ====== Table One Start -->
                <?php include  "./pages/partials/table/table-01.php" ?>
                <!-- ====== Table One End -->
            </div>
        </div>
    </div>
</main>