<body class="bg-slate-800 scrollbar-hide">
  <!-- Tab Pertama -->
  <div class="w-full md:w-1/2 lg:w-1/4 pl-5 mt-5 pr-5 mb-5 lg:pl-2 lg:pr-2" id="profile" role="tabpanel" aria-labelledby="profile-tab">

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
                Explore
              </span>

            </div>
          </div>
          <div class="mt-20" style="height: 400px; color: white;">
            <h1>Tidak ada yang ditemukan</h1>
            <p>Coba dengan kata kunci yang lain</p>
          </div>
        <?php endif ?>
      <?php endif ?>
    </div>
  </div>
</body>