<body class="bg-slate-800 scrollbar-hide">
  <!-- Tab Pertama -->
  <div class="w-full md:w-1/2 lg:w-1/4 pl-5 mt-5 pr-5 mb-5 lg:pl-2 lg:pr-2" id="profile" role="tabpanel" aria-labelledby="profile-tab">

    <!-- Search -->
    <form class="flex items-center my-3" id="search">
      <label for="voice-search" class="sr-only"></label>
      <div class="relative w-full">
        <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
          <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
          </svg>
        </div>
        <input type="text" id="voice-search" class="text-sm rounded-lg block w-full pl-10 p-2.5 bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:ring-red-500 focus:border-red-500" placeholder="Cari Film lainnya..." required="">
        <button type="button" class="flex absolute inset-y-0 right-0 items-center pr-3">
          <svg aria-hidden="true" class="w-4 h-4 text-gray-500 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M7 4a3 3 0 016 0v4a3 3 0 11-6 0V4zm4 10.93A7.001 7.001 0 0017 8a1 1 0 10-2 0A5 5 0 015 8a1 1 0 00-2 0 7.001 7.001 0 006 6.93V17H6a1 1 0 100 2h8a1 1 0 100-2h-3v-2.07z" clip-rule="evenodd"></path>
          </svg>
        </button>
      </div>
      <button type="submit" class="inline-flex items-center py-2.5 px-3 ml-2 text-sm font-medium text-white bg-red-700 rounded-lg border border-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">
        <svg aria-hidden="true" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
        </svg>
      </button>
    </form>

    <!-- Badge Kategori -->

    <!-- <span class="text-sm font-medium mr-2 px-2.5 py-0.5 mb-5 rounded-2xl bg-red-700 text-gray-300">
      Semua
    </span>

    <span class="text-sm font-medium mr-2 px-2.5 py-0.5 mb-5 rounded-2xl bg-gray-700 text-gray-100">
      Horror
    </span>

    <span class="text-sm font-medium mr-2 px-2.5 py-0.5 mb-5 rounded-2xl bg-gray-700 text-gray-300">
      Drama
    </span>

    <span class="text-sm font-medium mr-2 px-2.5 py-0.5 mb-5 rounded-2xl bg-gray-700 text-gray-300">
      Action
    </span> -->

    <div class="flex flex-col mt-2">
      <?php if ($search_result) : ?>
        <?php foreach ($search_result as $article) : ?>

          <a href="<?= site_url('article/mobilevisitor/' . $article->slug) ?>">
            <ul class="mb-1 space-y-3">
              <li class="bg-slate-900 rounded-md p-2 flex shadow-lg">
                <img src="<?= $article->cover; ?>" class="w-12 h-12 rounded-md" alt="Cover" />
                <div class="ml-3">
                  <h3 class="font-semibold text-gray-100"><?= $article->title; ?></h3>
                  <div class="flex items-center mt-1">
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
                  </div>
                </div>
              </li>
            </ul>
          </a>
        <?php endforeach ?>
      <?php else : ?>
        <?php if ($keyword) : ?>
          <!-- Fixed Mobile Top Navbar Tailwind CSS -->
          <div class="fixed top-0 left-0 z-50 w-full bg-slate-900 shadow-lg">
            <div class="flex items center justify-between w-full px-4 py-4 mx-auto text-white">
              <!-- Icon SVG Back Arrow -->
              <a href="<?= base_url('/mobile') ?>" class="flex items-center justify-center w-10 h-10 p-2 text-white transition duration-200 rounded-2xl hover:text-slate-400 focus:outline-none">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                </svg>
              </a>
              <!-- Tampilkan title di samping kanan Icon SVG -->
              <span class="text-lg font-bold mr-auto pl-4 pt-1.5">
                Search Result
              </span>

            </div>
          </div>
          <div class="mt-8" style="height: 400px; color: white;">
            <h1>Tidak ada yang ditemukan</h1>
            <p>Coba dengan kata kunci yang lain</p>
          </div>
        <?php endif ?>
      <?php endif ?>
    </div>
  </div>
</body>