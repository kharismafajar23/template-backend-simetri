    <main data-halaman-aktif="inboxDetails" x-data="{pageName: `Inbox`, breadcrumbs : ['Email', 'Details']}">
        <div class="mx-auto max-w-(--breakpoint-2xl) p-4 md:p-6">
            <!-- Breadcrumb Start -->
            <div>
                <?php include './pages/partials/breadcrumb.php' ?>
            </div>
            <!-- Breadcrumb End -->

            <div
                class="sm:h -[calc(100vh-174px)] overflow-hidden xl:h-[calc(100vh-186px)]">
                <div class="flex h-full flex-col gap-6 sm:gap-5 xl:flex-row">
                    <!-- Inbox Sidebar Start -->
                    <?php include './pages/partials/inbox/inbox-sidebar.php' ?>
                    <!-- Inbox Sidebar End -->

                    <!-- Inbox Mailbox Start -->
                    <?php include './pages/partials/inbox/inbox-detailsbox.php' ?>
                    <!-- Inbox Mailbox End -->
                </div>
            </div>
        </div>
    </main>