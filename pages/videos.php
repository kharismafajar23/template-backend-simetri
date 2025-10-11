<main
  data-halaman-aktif="videos"
  x-data="{pageName: `Videos`, breadcrumbs : ['UI Elements', 'Videos']}">
  <div class="p-4 mx-auto max-w-(--breakpoint-2xl) md:p-6">
    <!-- Breadcrumb Start -->
    <div>
      <?php include './pages/partials/breadcrumb.php' ?>
    </div>
    <!-- Breadcrumb End -->
    <div class="grid grid-cols-1 gap-5 sm:gap-6 xl:grid-cols-2">
      <div class="space-y-5 sm:space-y-6">
        <div
          class="card">
          <div
            class="card-header">
            <h3
              class="card-title">
              Video Ratio 16:9
            </h3>
          </div>
          <div class="card-body">
            <?php include './pages/partials/video/video-01.php' ?>
          </div>
        </div>
        <div
          class="card">
          <div
            class="card-header">
            <h3
              class="card-title">
              Video Ratio 4:3
            </h3>
          </div>
          <div class="card-body">
            <?php include './pages/partials/video/video-02.php' ?>
          </div>
        </div>
      </div>
      <div class="space-y-5 sm:space-y-6">
        <div
          class="card">
          <div
            class="card-header">
            <h3
              class="card-title">
              Video Ratio 4:3
            </h3>
          </div>
          <div class="card-body">
            <?php include './pages/partials/video/video-03.php' ?>
          </div>
        </div>
        <div
          class="card">
          <div
            class="card-header">
            <h3
              class="card-title">
              Video Ratio 1:1
            </h3>
          </div>
          <div class="card-body">
            <?php include './pages/partials/video/video-04.php' ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>