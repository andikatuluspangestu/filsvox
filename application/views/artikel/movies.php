<body class="font-montserrat text-sm bg-slate-900 dark:bg-slate-900 ">
  <div class="flex min-h-screen  2xl:max-w-screen-2xl 2xl:mx-auto 2xl:border-x-2 2xl:border-gray-200 dark:2xl:border-zinc-700 ">

    <!-- Left Sidebar -->
    <?php
    $this->load->view('partials/sidebar-kiri');
    ?>

    <main class=" flex-1 py-10  px-5 sm:px-10 mt-8">

      <!-- Responsive Header -->
      <?php
      $this->load->view('partials/responsive.php');
      ?>

      <!-- Rekomendasi -->
      <section class="mt-5">
        <div class="flex items-center justify-between">
          <span class="font-semibold text-white dark:text-white">Daftar Review Terbaru</span>
        </div>

        <div class="container my-5 mx-auto">
          <div class="flex flex-wrap -mx-1 lg:-mx-4">

            <?php foreach ($articles as $article) : ?>

              <!-- Row -->
              <div class="my-1 w-full md:w-1/2 lg:my-2 lg:px-5 lg:w-1/3">

                <!-- Items Film -->
                <div class="w-full max-w-sm rounded-lg shadow-md bg-slate-800  dark:border-gray-700">
                  <a href="#">
                    <img class="object-cover h-48 w-96 rounded-t-lg justify-between border-b-2 border-b-white-600" src="<?= $article->cover; ?>" alt="<?= $article->title; ?>">
                  </a>

                  <div class="px-5 pb-5">
                    <a href="#">
                      <h5 class="pt-5 font-semibold tracking-tight text-white dark:text-white"><?= $article->title; ?></h5>
                    </a>
                    <div class="flex items-center mt-2.5 mb-5">

                      <?php if ($article->visitor <= 20) : ?>
                        <!-- Loop -->
                        <?php for ($i = 0; $i < 1; $i++) : ?>
                          <!-- Load view bintang -->
                          <?php
                          $this->load->view('bintang.php');
                          ?>
                        <?php endfor; ?>

                      <?php elseif ($article->visitor <= 40) : ?>
                        <!-- Loop -->
                        <?php for ($i = 0; $i < 2; $i++) : ?>
                          <!-- Load view bintang -->
                          <?php
                          $this->load->view('bintang.php');
                          ?>
                        <?php endfor; ?>
                      <?php elseif ($article->visitor <= 60) : ?>
                        <!-- Loop -->
                        <?php for ($i = 0; $i < 3; $i++) : ?>
                          <!-- Load view bintang -->
                          <?php
                          $this->load->view('bintang.php');
                          ?>
                        <?php endfor; ?>
                      <?php elseif ($article->visitor <= 80) : ?>
                        <!-- Loop -->
                        <?php for ($i = 0; $i < 4; $i++) : ?>
                          <!-- Load view bintang -->
                          <?php
                          $this->load->view('bintang.php');
                          ?>
                        <?php endfor; ?>
                      <?php elseif ($article->visitor <= 500) : ?>
                        <!-- Loop -->
                        <?php for ($i = 0; $i < 5; $i++) : ?>
                          <!-- Load view bintang -->
                          <?php
                          $this->load->view('bintang.php');
                          ?>
                        <?php endfor; ?>
                      <?php endif; ?>

                      <span class="bg-blue-100 text-blue-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800 ml-3">
                        <?= $article->visitor; ?> Views
                      </span>
                    </div>
                    <div class="flex justify-between items-center ">
                      <!-- Ketika tombol di klik maka akan bertambah satu angka pada database -->
                      <a id="click" href="<?= site_url('article/visitor/' . $article->slug) ?>" class="text-white bg-red-700 hover:bg-red-800 font-medium rounded-sm text-sm px-2 py-1 text-center">Review</a>
                    </div>
                  </div>
                </div>
              </div>
            <?php endforeach ?>

          </div>
        </div>

      </section>
    </main>

    <!-- Sidebar Kanan -->
    <?php
    $this->load->view('partials/sidebar-kanan');
    ?>

  </div>
</body>