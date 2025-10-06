<main data-halaman-aktif="blank"
    class="relative z-1 flex min-h-screen flex-col items-center justify-center overflow-hidden p-6">
    <!-- ===== Common Grid Shape Start ===== -->
    <?php include './pages/partials/common-grid-shape.php' ?>
    <!-- ===== Common Grid Shape End ===== -->

    <!-- Centered Content -->
    <div class="mx-auto w-full max-w-[242px] text-center sm:max-w-[472px]" x-data="{ page: 'page404', 'loaded': true, 'darkMode': false, 'stickyMenu': false, 'sidebarToggle': false, 'scrollTop': false }">
        <h1
            class="mb-8 text-title-md font-bold text-gray-800 dark:text-white/90 xl:text-title-2xl">
            ERROR
        </h1>

        <img src="./assets/images/error/404.svg" alt="404" class="dark:hidden" />
        <img
            src="./assets/images/error/404-dark.svg"
            alt="404"
            class="hidden dark:block" />

        <p
            class="mb-6 mt-10 text-base text-gray-700 dark:text-gray-400 sm:text-lg">
            We can’t seem to find the page you are looking for!
        </p>

        <a
            href="?page=dashboard"
            class="inline-flex items-center justify-center rounded-lg border border-gray-300 bg-white px-5 py-3.5 text-sm font-medium text-gray-700 shadow-theme-xs hover:bg-gray-50 hover:text-gray-800 dark:border-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-white/[0.03] dark:hover:text-gray-200">
            Back to Home Page
        </a>
    </div>
    <!-- Footer -->
    <p
        class="absolute bottom-6 left-1/2 -translate-x-1/2 text-center text-sm text-gray-500 dark:text-gray-400">
        &copy; <span id="year"></span> - TailAdmin
    </p>
</main>