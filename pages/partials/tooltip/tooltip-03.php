<div class="flex flex-col items-center gap-10 sm:flex-row">
  <!-- Top -->
  <div class="relative inline-block group">
    <button
      class="inline-flex px-4 py-3 text-sm font-medium text-white rounded-lg bg-brand-500 shadow-theme-xs">
      Tooltip Top
    </button>
    <div
      class="invisible absolute bottom-full left-1/2 mb-2.5 -translate-x-1/2 opacity-0 transition-opacity duration-300 group-hover:visible group-hover:opacity-100">
      <div class="relative">
        <div
          class="whitespace-nowrap rounded-lg bg-white px-3 py-2 text-xs font-medium text-gray-700 drop-shadow-4xl dark:bg-[#1E2634] dark:text-white">
          This is a tooltip
        </div>
        <div
          class="absolute -bottom-1 left-1/2 h-3 w-4 -translate-x-1/2 rotate-45 bg-white dark:bg-[#1E2634]"></div>
      </div>
    </div>
  </div>

  <!-- Right -->
  <div class="relative inline-block group">
    <button
      class="inline-flex px-4 py-3 text-sm font-medium text-white rounded-lg bg-brand-500 shadow-theme-xs">
      Tooltip Right
    </button>
    <div
      class="invisible absolute left-full top-1/2 z-30 ml-2.5 -translate-y-1/2 opacity-0 transition-opacity duration-300 group-hover:visible group-hover:opacity-100">
      <div class="relative">
        <div
          class="whitespace-nowrap rounded-lg bg-white px-3 py-2 text-xs font-medium text-gray-700 drop-shadow-4xl dark:bg-[#1E2634] dark:text-white">
          This is a tooltip
        </div>
        <div
          class="absolute -left-1.5 top-1/2 h-3 w-4 -translate-y-1/2 rotate-45 bg-white dark:bg-[#1E2634]"></div>
      </div>
    </div>
  </div>

  <!-- Left -->
  <div class="relative inline-block group">
    <button
      class="inline-flex px-4 py-3 text-sm font-medium text-white rounded-lg bg-brand-500 shadow-theme-xs">
      Tooltip Left
    </button>
    <div
      class="invisible absolute right-full top-1/2 mr-2.5 -translate-y-1/2 opacity-0 transition-opacity duration-300 group-hover:visible group-hover:opacity-100">
      <div class="relative">
        <div
          class="whitespace-nowrap rounded-lg bg-white px-3 py-2 text-xs font-medium text-gray-700 drop-shadow-4xl dark:bg-[#1E2634] dark:text-white">
          This is a tooltip
        </div>
        <div
          class="absolute -right-1.5 top-1/2 h-3 w-4 -translate-y-1/2 rotate-45 bg-white dark:bg-[#1E2634]"></div>
      </div>
    </div>
  </div>

  <!-- Bottom -->
  <div class="relative inline-block group">
    <button
      class="inline-flex px-4 py-3 text-sm font-medium text-white rounded-lg bg-brand-500 shadow-theme-xs">
      Tooltip Bottom
    </button>
    <div
      class="invisible absolute left-1/2 top-full mt-2.5 -translate-x-1/2 opacity-0 transition-opacity duration-300 group-hover:visible group-hover:opacity-100">
      <div class="relative">
        <div
          class="whitespace-nowrap rounded-lg bg-white px-3 py-2 text-xs font-medium text-gray-700 drop-shadow-4xl dark:bg-[#1E2634] dark:text-white">
          This is a tooltip
        </div>
        <div
          class="absolute -top-1 left-1/2 h-3 w-4 -translate-x-1/2 rotate-45 bg-white dark:bg-[#1E2634]"></div>
      </div>
    </div>
  </div>
</div>