<main data-halaman-aktif="success"
    class="relative z-1 flex min-h-screen flex-col items-center justify-center overflow-hidden p-6">
    <!-- ===== Common Grid Shape Start ===== -->
    <?php include './pages/partials/breadcrumb.php' ?>
    <!-- ===== Common Grid Shape End ===== -->

    <div>
        <div class="mx-auto w-full max-w-[274px] text-center sm:max-w-[555px]">
            <div
                class="mx-auto mb-10 w-full max-w-[100px] text-center sm:max-w-[160px]">
                <img
                    src="./assets/images/error/success.svg"
                    alt="success"
                    class="dark:hidden" />
                <img
                    src="./assets/images/error/success-dark.svg"
                    alt="success"
                    class="hidden dark:block" />
            </div>

            <h1
                class="mb-2 text-title-md font-bold text-gray-800 dark:text-white/90 xl:text-title-2xl">
                SUCCESS !
            </h1>

            <p
                class="mb-6 mt-6 text-base text-gray-700 dark:text-gray-400 sm:text-lg">
                Awesome! your message has been sent successfully, Our support team
                will get back to you as soon as possible.
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
    </div>
</main>