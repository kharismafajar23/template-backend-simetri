<main data-halaman-aktif="invoice" x-data="{pageName: `Invoice`, breadcrumbs : ['Support', 'Invoice']}">
    <div class="mx-auto max-w-(--breakpoint-2xl) p-4 md:p-6">
        <!-- Breadcrumb Start -->
        <div>
            <?php include './pages/partials/breadcrumb.php' ?>
        </div>
        <!-- Breadcrumb End -->

        <div class="flex h-full flex-col gap-6 sm:gap-5 xl:flex-row">
            <!-- Invoice Sidebar Start -->
            <?php include './pages/partials/invoice/invoice-sidebar.php' ?>
            <!-- Invoice Sidebar End -->

            <!-- Invoice Mainbox Start -->
            <?php include './pages/partials/invoice/invoice-mainbox.php' ?>
            <!-- Invoice Mainbox End -->
        </div>
    </div>
</main>