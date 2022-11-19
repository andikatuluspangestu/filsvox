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

          <div class="grid grid-cols-12 gap-4">
            <div class="col-span-12 sm:col-span-4">
              <div class="p-4 relative  bg-gray-800 border border-gray-800 shadow-sm rounded-2xl">

                <svg xmlns="http://www.w3.org/2000/svg" class="h-20 w-20  absolute bottom-2 right-1 text-green-400" viewBox="0 0 27 27" fill="currentColor">
                  <path fill-rule="evenodd" d="M7.502 6h7.128A3.375 3.375 0 0118 9.375v9.375a3 3 0 003-3V6.108c0-1.505-1.125-2.811-2.664-2.94a48.972 48.972 0 00-.673-.05A3 3 0 0015 1.5h-1.5a3 3 0 00-2.663 1.618c-.225.015-.45.032-.673.05C8.662 3.295 7.554 4.542 7.502 6zM13.5 3A1.5 1.5 0 0012 4.5h4.5A1.5 1.5 0 0015 3h-1.5z" clip-rule="evenodd" />
                  <path fill-rule="evenodd" d="M3 9.375C3 8.339 3.84 7.5 4.875 7.5h9.75c1.036 0 1.875.84 1.875 1.875v11.25c0 1.035-.84 1.875-1.875 1.875h-9.75A1.875 1.875 0 013 20.625V9.375zm9.586 4.594a.75.75 0 00-1.172-.938l-2.476 3.096-.908-.907a.75.75 0 00-1.06 1.06l1.5 1.5a.75.75 0 001.116-.062l3-3.75z" clip-rule="evenodd" />
                </svg>

                <div class="flex justify-between text-gray-100 items-center ">
                  Publish
                </div>
                <div class="text-2xl text-gray-100 font-medium leading-8 mt-5">

                  <?php if ($current_user->role == 1) : ?>
                    <!-- Tampilkan jumlah semua artikel -->
                    <?= $article_count ?>
                  <?php else : ?>
                    <!-- Tampilkan jumlah artikel dengan kondisi contributor == $current_user->name -->
                    <?= $count_published_user ?>
                  <?php endif; ?>

                </div>
                <div class="text-sm text-gray-500">Artikel Terpublikasi</div>
              </div>
            </div>
            <div class="col-span-12 sm:col-span-4">
              <div class="p-4 relative  bg-gray-800 border border-gray-800 shadow-lg  rounded-2xl">

                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30" fill="currentColor" class="h-20 w-20 absolute bottom-0 right-0 text-blue-500">
                  <path fill-rule="evenodd" d="M6.32 2.577a49.255 49.255 0 0111.36 0c1.497.174 2.57 1.46 2.57 2.93V21a.75.75 0 01-1.085.67L12 18.089l-7.165 3.583A.75.75 0 013.75 21V5.507c0-1.47 1.073-2.756 2.57-2.93z" clip-rule="evenodd" />
                </svg>

                <div class="flex justify-between text-gray-100 items-center ">
                  Draft
                </div>
                <div class="flex justify-between items-center ">
                  <i class="fab fa-behance text-xl text-gray-400"></i>
                </div>
                <div class="text-2xl text-gray-100 font-medium leading-8 mt-5">
                  <?php if ($current_user->role == 1) : ?>
                    <!-- Tampilkan jumlah semua artikel -->
                    <?= $draft_count ?>
                  <?php else : ?>
                    <!-- Tampilkan jumlah artikel dengan kondisi contributor == $current_user->name -->
                    <?= $count_draft_user ?>
                  <?php endif; ?>
                </div>
                <div class="text-sm text-gray-500">Artikel dalam draft</div>
              </div>
            </div>
            <div class="col-span-12 sm:col-span-4">
              <div class="p-4 relative  bg-gray-800 border border-gray-800 shadow-lg  rounded-2xl">

                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-14 w-14  absolute bottom-4 right-3 text-yellow-300">
                  <path fill-rule="evenodd" d="M5.25 2.25a3 3 0 00-3 3v4.318a3 3 0 00.879 2.121l9.58 9.581c.92.92 2.39 1.186 3.548.428a18.849 18.849 0 005.441-5.44c.758-1.16.492-2.629-.428-3.548l-9.58-9.581a3 3 0 00-2.122-.879H5.25zM6.375 7.5a1.125 1.125 0 100-2.25 1.125 1.125 0 000 2.25z" clip-rule="evenodd" />
                </svg>


                <div class="flex justify-between text-gray-100 items-center ">
                  Kategori
                </div>
                <div class="flex justify-between items-center ">
                  <i class="fab fa-behance text-xl text-gray-400"></i>
                </div>
                <div class="text-2xl text-gray-100 font-medium leading-8 mt-5"><?= $category_count; ?></div>
                <div class="text-sm text-gray-500">Genre Film</div>
              </div>
            </div>
          </div>

          <div class="mt-4 w-full grid grid-cols-1 md:grid-cols-4 xl:grid-cols-2 gap-2">

            <!-- Tampilkan jika current_user-role adalah 1 -->
            <?php if ($current_user->role == 1) : ?>
              <div class="bg-gray-800 shadow rounded-2xl mb-4 p-4 sm:p-6 h-full">
                <span class="leading-none text-center mb-5 block text-gray-300">Artikel per-bulan <span class="bg-gray-100 text-gray-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-gray-300"><?= date('Y'); ?></span></span>
                <div>
                  <canvas class="text-light" id="bymonth"></canvas>
                </div>
              </div>

              <div class="bg-gray-800 shadow rounded-2xl mb-4 p-4 sm:p-6 h-full">
                <div>
                  <span class="leading-none text-center mb-5 block text-gray-300">Artikel per-kategori</span>
                  <canvas class="text-light" id="bycategory"></canvas>
                </div>
              </div>
            <?php else : ?>
              <div class="bg-gray-800 shadow rounded-2xl mb-4 p-4 sm:p-6 h-full">
                <span class="leading-none text-center mb-5 block text-gray-300">Artikel per-bulan <span class="bg-gray-100 text-gray-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-gray-300"><?= date('Y'); ?></span></span>
                <div>
                  <canvas class="text-light" id="bymonthuser"></canvas>
                </div>
              </div>

              <div class="bg-gray-800 shadow rounded-2xl mb-4 p-4 sm:p-6 h-full">
                <div>
                  <span class="leading-none text-center mb-5 block text-gray-300">Artikel per-kategori</span>
                  <canvas class="text-light" id="bycategoryuser"></canvas>
                </div>
              </div>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  </main>

  <!-- Required chart.js -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.2.1/Chart.min.js"></script>

  <!-- Load view chart.php di folder admin -->
  <?php $this->load->view('admin/statistics/admin_chart.php'); ?>
  <?php $this->load->view('admin/statistics/user_chart.php'); ?>

</body>

</html>