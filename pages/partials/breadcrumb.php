<div class="mb-6 flex flex-wrap items-center justify-between gap-3">
  <h2
    class="text-xl font-semibold text-gray-800 dark:text-white/90"
    x-text="pageName"></h2>

  <nav>
    <ol class="flex items-center gap-1.5">
      <template x-for="(breadcrumb, index) in breadcrumbs">
        <li class="inline-flex items-center gap-2">
          <a
            class="inline-flex items-center gap-1.5 text-sm"
            :class="(index == breadcrumbs.length - 1) ? 'text-gray-500 dark:text-gray-400' : 'text-gray-800 dark:text-white/90'"
            href="#"
            x-text="breadcrumb">
            -
          </a>
          <template x-if="index != breadcrumbs.length - 1">
            <svg
              class="stroke-current"
              width="17"
              height="16"
              viewBox="0 0 17 16"
              fill="none"
              xmlns="http://www.w3.org/2000/svg">
              <path
                d="M6.0765 12.667L10.2432 8.50033L6.0765 4.33366"
                stroke=""
                stroke-width="1.2"
                stroke-linecap="round"
                stroke-linejoin="round" />
            </svg>
          </template>
        </li>
      </template>
    </ol>
  </nav>
</div>