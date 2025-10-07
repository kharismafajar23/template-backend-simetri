<main data-halaman-aktif="fileManager" x-data="{pageName: `File Manager`, breadcrumbs : ['Pages', 'File Manager']}">
    <div class="p-4 mx-auto max-w-(--breakpoint-2xl) md:p-6">
        <!-- Breadcrumb Start -->
        <div>
            <?php include './pages/partials/breadcrumb.php' ?>
        </div>
        <!-- Breadcrumb End -->

        <div class="grid grid-cols-12 gap-6">
            <div class="col-span-12">
                <!-- Media Card -->
                <?php include './pages/partials/media-card.php' ?>
                <!-- Media Card -->
            </div>

            <div class="col-span-12 xl:col-span-8">
                <!-- Folders Card -->
                <?php include './pages/partials/folders-card.php' ?>
                <!-- Folders Card -->
            </div>

            <div class="col-span-12 xl:col-span-4">
                <!-- ====== Chart Sixteen Start -->
                <?php include './pages/partials/chart/chart-16.php' ?>
                <!-- ====== Chart Sixteen End -->
            </div>

            <div class="col-span-12">
                <!-- ====== Table Seven Start -->
                <?php include './pages/partials/table/table-07.php' ?>
                <!-- ====== Table Seven End -->
            </div>
        </div>
    </div>
</main>