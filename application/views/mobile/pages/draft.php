<div class="flex flex-col mt-2">

  <!-- Fixed Mobile Top Navbar Tailwind CSS -->
  <div class="fixed top-0 left-0 z-50 w-full bg-slate-900 shadow-lg">
    <div class="flex items center justify-between w-full px-4 py-4 mx-auto text-white">
      <!-- Icon SVG Back Arrow -->
      <a href="<?= base_url('/mobile') ?>" class="flex items-center justify-center w-10 h-10 p-2 text-white transition duration-200 rounded-2xl hover:text-slate-400 focus:outline-none">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
          <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zM12.75 6a.75.75 0 00-1.5 0v6c0 .414.336.75.75.75h4.5a.75.75 0 000-1.5h-3.75V6z" clip-rule="evenodd" />
        </svg>
      </a>
      <!-- Tampilkan title di samping kanan Icon SVG -->
      <span class="text-lg font-bold mr-auto pl-4 pt-1.5">
        Film yang Akan Datang
      </span>

    </div>
  </div>

  <?php foreach ($draft as $article) : ?>
    <div class="flex flex-col mt-20">
      <a href="<?= site_url('article/read/' . $article->slug) ?>">
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
    </div>
  <?php endforeach; ?>
</div>