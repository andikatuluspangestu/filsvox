<!DOCTYPE html>
<html lang="en">

<head>
  <?php $this->load->view('admin/_partials/head.php') ?>
</head>


<body class="bg-gray-900">

  <?php $this->load->view('admin/_partials/navbar.php') ?>

  <main class="main flex overflow-hidden bg-white pt-16">
    <?php $this->load->view('admin/_partials/side_nav.php') ?>

    <div id="main-content" class="h-full w-full bg-gray-900 relative overflow-y-auto lg:ml-64">

      <!-- Main Content -->
      <div>
        <div class="pt-6 px-4">
          <div class="mt-4 w-full grid grid-cols-1 md:grid-cols-4 xl:grid-cols-3 gap-4">

            <div class="bg-cyan-600 border-1 shadow rounded-lg p-4 sm:p-6 xl:p-8">
              <div class="flex items-center">
                <div class="flex-shrink-0">
                  <span class="text-2xl sm:text-3xl text-white leading-none font-bold"><?= $article_count ?></span>
                  <a href="<?= site_url('admin/post') ?>">
                    <h3 class="text-base font-normal text-white">
                      Artikel Terpublikasi
                    </h3>
                  </a>

                </div>
              </div>
            </div>

            <div class="bg-cyan-700 shadow rounded-lg p-4 sm:p-6 xl:p-8">
              <div class="flex items-center">
                <div class="flex-shrink-0">
                  <span class="text-2xl sm:text-3xl leading-none font-bold text-white"><?= $draft_count ?></span>
                  <h3 class="text-base font-normal text-white">
                    Artikel dalam Draft
                  </h3>
                </div>
              </div>
            </div>

            <!-- <div class="bg-pink-600 shadow rounded-lg p-4 sm:p-6 xl:p-8">
              <div class="flex items-center">
                <div class="flex-shrink-0">
                  <span class="text-2xl sm:text-3xl leading-none font-bold text-white"><?= $user_count ?></span>
                  <h3 class="text-base font-normal text-white">
                    Pengguna Terdaftar
                  </h3>
                </div>
              </div>
            </div> -->

            <div class="bg-indigo-400 shadow rounded-lg p-4 sm:p-6 xl:p-8">
              <div class="flex items-center">
                <div class="flex-shrink-0">
                  <span class="text-2xl sm:text-3xl leading-none font-bold text-white"><?= $category_count; ?></span>
                  <h3 class="text-base font-normal text-white">
                    Kategori
                  </h3>
                </div>
              </div>
            </div>
          </div>

          <div class="mt-4 w-full grid grid-cols-1 md:grid-cols-4 xl:grid-cols-2 gap-2">

            <div class="bg-gray-800 shadow rounded-lg mb-4 p-4 sm:p-6 h-full">
              <span class="leading-none text-center mb-5 block text-gray-300">Artikel per-bulan</span>
              <div>
                <canvas class="text-light" id="bymonth"></canvas>
              </div>
            </div>

            <div class="bg-gray-800 shadow rounded-lg mb-4 p-4 sm:p-6 h-full">
              <div>
                <span class="leading-none text-center mb-5 block text-gray-300">Artikel per-kategori</span>
                <canvas class="text-light" id="bycategory"></canvas>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>

  <!-- Required chart.js -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.2.1/Chart.min.js"></script>

  <!-- Load view chart.php di folder admin -->
  <?php $this->load->view('admin/statistics/chart.php'); ?>

</body>

</html>