<main data-halaman-aktif="ecommerce" x-data="{breadcrumbs: ['Dashboard'] }">
    <div class="p-4 mx-auto max-w-(--breakpoint-2xl) md:p-6">
        <!-- Accordion -->
        <!-- <div class="card mb-3">
            <h3 class="card-title">Daftar Pertanyaan</h3>
            <p class="card-subtitle mb-3">Ini coba subtitle card</p>
            <div x-data="{ openItem: 0 }" class="space-y-4">
                <div x-data="{ isOpen: true }" x-init="$watch('openItem', value =&gt; isOpen = value === 0)" class="overflow-hidden rounded-2xl border border-gray-200 bg-white dark:border-gray-800 dark:bg-white/[0.03]">
                    <div @click="openItem = openItem === 0 ? null : 0" class="flex items-center justify-between py-3 pl-6 pr-3 cursor-pointer" :class="isOpen ? 'bg-gray-50 dark:bg-white/[0.03]' : ''">
                        <h4 class="text-lg font-medium text-gray-800 dark:text-white/90">
                            Do I get free updates?
                        </h4>

                        <button :class="isOpen ? 'text-gray-800 dark:text-white/90 rotate-180' : 'text-gray-500 dark:text-gray-400'" class="flex h-12 w-full max-w-12 items-center justify-center rounded-full bg-gray-100 duration-200 ease-linear dark:bg-white/[0.03] text-gray-500 dark:text-gray-400">
                            <svg class="stroke-current" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M5.75 8.875L12 15.125L18.25 8.875" stroke="" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                        </button>
                    </div>

                    <div x-show="isOpen" x-collapse="" class="px-6 py-7" style="display: none;">
                        <p class="text-base text-gray-500 dark:text-gray-400">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec quis
                            magna ac nibh malesuada consectetur at vitae ipsum orem ipsum dolor sit
                            amet, consectetur adipiscing elit nam fermentum, leo et lacinia
                            accumsan.
                        </p>
                    </div>
                </div>

                <div x-data="{ isOpen: false }" x-init="$watch('openItem', value =&gt; isOpen = value === 1)" class="overflow-hidden rounded-2xl border border-gray-200 bg-white dark:border-gray-800 dark:bg-white/[0.03]">
                    <div @click="openItem = openItem === 1 ? null : 1" class="flex items-center justify-between py-3 pl-6 pr-3 cursor-pointer" :class="isOpen ? 'bg-gray-50 dark:bg-white/[0.03]' : ''">
                        <h4 class="text-lg font-medium text-gray-800 dark:text-white/90">
                            Can I Customize TailAdmin to suit my needs?
                        </h4>

                        <button :class="isOpen ? 'text-gray-800 dark:text-white/90 rotate-180' : 'text-gray-500 dark:text-gray-400'" class="flex h-12 w-full max-w-12 items-center justify-center rounded-full bg-gray-100 duration-200 ease-linear dark:bg-white/[0.03] text-gray-500 dark:text-gray-400">
                            <svg class="stroke-current" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M5.75 8.875L12 15.125L18.25 8.875" stroke="" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                        </button>
                    </div>

                    <div x-show="isOpen" x-collapse="" class="px-6 py-7" style="display: none;">
                        <p class="text-base text-gray-500 dark:text-gray-400">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec quis
                            magna ac nibh malesuada consectetur at vitae ipsum orem ipsum dolor sit
                            amet, consectetur adipiscing elit nam fermentum, leo et lacinia
                            accumsan.
                        </p>
                    </div>
                </div>

                <div x-data="{ isOpen: false }" x-init="$watch('openItem', value =&gt; isOpen = value === 2)" class="overflow-hidden rounded-2xl border border-gray-200 bg-white dark:border-gray-800 dark:bg-white/[0.03]">
                    <div @click="openItem = openItem === 2 ? null : 2" class="flex items-center justify-between py-3 pl-6 pr-3 cursor-pointer" :class="isOpen ? 'bg-gray-50 dark:bg-white/[0.03]' : ''">
                        <h4 class="text-lg font-medium text-gray-800 dark:text-white/90">
                            What does "Unlimited Projects" mean?
                        </h4>

                        <button :class="isOpen ? 'text-gray-800 dark:text-white/90 rotate-180' : 'text-gray-500 dark:text-gray-400'" class="flex h-12 w-full max-w-12 items-center justify-center rounded-full bg-gray-100 duration-200 ease-linear dark:bg-white/[0.03] text-gray-500 dark:text-gray-400">
                            <svg class="stroke-current" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M5.75 8.875L12 15.125L18.25 8.875" stroke="" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                        </button>
                    </div>

                    <div x-show="isOpen" x-collapse="" class="px-6 py-7" style="display: none;">
                        <p class="text-base text-gray-500 dark:text-gray-400">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec quis
                            magna ac nibh malesuada consectetur at vitae ipsum orem ipsum dolor sit
                            amet, consectetur adipiscing elit nam fermentum, leo et lacinia
                            accumsan.
                        </p>
                    </div>
                </div>
            </div>
        </div> -->

        <!-- Pagination -->
        <!-- <div class="card mb-3">
            <h3 class="card-title mb-2">Pagination</h3>
            <div class="flex items-center justify-between gap-2 px-6 py-4 sm:justify-normal">
                <button class="flex items-center gap-2 rounded-lg border border-gray-300 bg-white px-2 py-2 text-sm font-medium text-gray-700 shadow-theme-xs hover:bg-gray-50 hover:text-gray-800 dark:border-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-white/[0.03] dark:hover:text-gray-200 sm:px-3.5 sm:py-2.5">
                    <span class="inline sm:hidden">
                        <svg class="fill-current" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M2.58203 9.99868C2.58174 10.1909 2.6549 10.3833 2.80152 10.53L7.79818 15.5301C8.09097 15.8231 8.56584 15.8233 8.85883 15.5305C9.15183 15.2377 9.152 14.7629 8.85921 14.4699L5.13911 10.7472L16.6665 10.7472C17.0807 10.7472 17.4165 10.4114 17.4165 9.99715C17.4165 9.58294 17.0807 9.24715 16.6665 9.24715L5.14456 9.24715L8.85919 5.53016C9.15199 5.23717 9.15184 4.7623 8.85885 4.4695C8.56587 4.1767 8.09099 4.17685 7.79819 4.46984L2.84069 9.43049C2.68224 9.568 2.58203 9.77087 2.58203 9.99715C2.58203 9.99766 2.58203 9.99817 2.58203 9.99868Z" fill=""></path>
                        </svg>
                    </span>

                    <span class="hidden sm:inline"> Previous </span>
                </button>

                <span class="block text-sm font-medium text-gray-700 dark:text-gray-400 sm:hidden">
                    Page 1 of 10
                </span>

                <ul class="hidden items-center gap-0.5 sm:flex">
                    <li>
                        <a href="#" class="flex h-10 w-10 items-center justify-center rounded-lg bg-brand-500 text-sm font-medium text-white hover:bg-brand-500 hover:text-white">
                            1
                        </a>
                    </li>

                    <li>
                        <a href="#" class="flex h-10 w-10 items-center justify-center rounded-lg text-sm font-medium text-gray-700 hover:bg-brand-500 hover:text-white dark:text-gray-400 dark:hover:text-white">
                            2
                        </a>
                    </li>

                    <li>
                        <a href="#" class="flex h-10 w-10 items-center justify-center rounded-lg text-sm font-medium text-gray-700 hover:bg-brand-500 hover:text-white dark:text-gray-400 dark:hover:text-white">
                            3
                        </a>
                    </li>

                    <li>
                        <a href="#" class="flex h-10 w-10 items-center justify-center rounded-lg text-sm font-medium text-gray-700 hover:bg-brand-500 hover:text-white dark:text-gray-400 dark:hover:text-white">
                            ...
                        </a>
                    </li>

                    <li>
                        <a href="#" class="flex h-10 w-10 items-center justify-center rounded-lg text-sm font-medium text-gray-700 hover:bg-brand-500 hover:text-white dark:text-gray-400 dark:hover:text-white">
                            8
                        </a>
                    </li>

                    <li>
                        <a href="#" class="flex h-10 w-10 items-center justify-center rounded-lg text-sm font-medium text-gray-700 hover:bg-brand-500 hover:text-white dark:text-gray-400 dark:hover:text-white">
                            9
                        </a>
                    </li>

                    <li>
                        <a href="#" class="flex h-10 w-10 items-center justify-center rounded-lg text-sm font-medium text-gray-700 hover:bg-brand-500 hover:text-white dark:text-gray-400 dark:hover:text-white">
                            10
                        </a>
                    </li>
                </ul>

                <button class="flex items-center gap-2 rounded-lg border border-gray-300 bg-white px-2 py-2 text-sm font-medium text-gray-700 shadow-theme-xs hover:bg-gray-50 hover:text-gray-800 dark:border-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-white/[0.03] dark:hover:text-gray-200 sm:px-3.5 sm:py-2.5">
                    <span class="hidden sm:inline"> Next </span>

                    <span class="inline sm:hidden">
                        <svg class="fill-current" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M17.4165 9.9986C17.4168 10.1909 17.3437 10.3832 17.197 10.53L12.2004 15.5301C11.9076 15.8231 11.4327 15.8233 11.1397 15.5305C10.8467 15.2377 10.8465 14.7629 11.1393 14.4699L14.8594 10.7472L3.33203 10.7472C2.91782 10.7472 2.58203 10.4114 2.58203 9.99715C2.58203 9.58294 2.91782 9.24715 3.33203 9.24715L14.854 9.24715L11.1393 5.53016C10.8465 5.23717 10.8467 4.7623 11.1397 4.4695C11.4327 4.1767 11.9075 4.17685 12.2003 4.46984L17.1578 9.43049C17.3163 9.568 17.4165 9.77087 17.4165 9.99715C17.4165 9.99763 17.4165 9.99812 17.4165 9.9986Z" fill=""></path>
                        </svg>
                    </span>
                </button>
            </div>
        </div> -->


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