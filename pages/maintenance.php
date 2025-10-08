<main data-halaman-aktif="termsCondition"
    class="relative z-1 flex min-h-screen flex-col items-center justify-center overflow-hidden p-6">
    <!-- ===== Common Grid Shape Start ===== -->
    <?php include './pages/partials/common-grid-shape.php' ?>
    <!-- ===== Common Grid Shape End ===== -->

    <div>
        <div class="mx-auto w-full max-w-[274px] text-center sm:max-w-[555px]">
            <div
                class="mx-auto mb-10 w-full max-w-[155px] text-center sm:max-w-[204px]">
                <img
                    src="./assets/images/error/maintenance.svg"
                    alt="maintenance"
                    class="dark:hidden" />
                <img
                    src="./assets/images/error/maintenance-dark.svg"
                    alt="maintenance"
                    class="hidden dark:block" />
            </div>

            <h1
                class="text-title-md xl:text-title-2xl mb-2 font-bold text-gray-800 dark:text-white/90">
                MAINTENANCE
            </h1>

            <p
                class="mt-6 mb-6 text-base text-gray-700 sm:text-lg dark:text-gray-400">
                Our Site is Currently under maintenance We will be back Shortly
                Thank You For Patience
            </p>

            <a
                href="?page=dashboard"
                class="shadow-theme-xs inline-flex items-center justify-center rounded-lg border border-gray-300 bg-white px-5 py-3.5 text-sm font-medium text-gray-700 hover:bg-gray-50 hover:text-gray-800 dark:border-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-white/[0.03] dark:hover:text-gray-200">
                Back to Home Page
            </a>
        </div>
        <!-- Footer -->
        <p
            class="absolute bottom-6 left-1/2 -translate-x-1/2 text-center text-sm text-gray-500 dark:text-gray-400">
            &copy; <span id="year"></span> - TailAdmin
        </p>
    </div>
</main>