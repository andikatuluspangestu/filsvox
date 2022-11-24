<!-- Tab Pertama -->
<div class="w-full md:w-1/2 lg:w-1/4 pl-5 mt-5 pr-5 mb-20 lg:pl-2 lg:pr-2" id="profile" role="tabpanel" aria-labelledby="profile-tab">

  <div id="animation-carousel" class="relative" data-carousel="static">
    <!-- Carousel wrapper -->
    <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
      <?php foreach ($articles as $article) : ?>
        <!-- load view -->
        <?php $this->load->view('/mobile/partials/headline', ['article' => $article, 'categories' => $categories]); ?>
      <?php endforeach; ?>
    </div>

    <!-- Slider controls -->
    <button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev="">
      <span class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
        <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
        </svg>
        <span class="sr-only">Previous</span>
      </span>
    </button>
    <button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next="">
      <span class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
        <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
        </svg>
        <span class="sr-only">Next</span>
      </span>
    </button>

  </div>

  <div class="flex items-center justify-between mb-3">
    <span class="font-semibold text-white">Recommended</span>
    <div class="flex items-center space-x-2 fill-gray-500">
      <a href="<?= base_url('/search/allmovies') ?>"><span class="text-white hover:text-red-600 bg-red-800 px-2 rounded-2xl">See All</span></a>
      <!-- <svg class="h-7 w-7 hover:border-red-600 hover:fill-red-600 dark:fill-white dark:hover:fill-red-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
        <path d="M10.7 17.707l5.7-5.71 -5.71-5.707L9.27 7.7l4.29 4.293 -4.3 4.29Z"></path>
      </svg> -->
    </div>
  </div>

  <div class="flex flex-col mt-2">
    <?php foreach ($articles as $article) : ?>

      <div class="bg-slate-900 shadow-md  rounded-2xl p-4 mb-3">
        <div class="flex-none lg:flex">
          <div class=" h-full w-full lg:h-48 lg:w-48   lg:mb-0 mb-3">
            <img src="<?= $article->cover; ?>" alt="Just a flower" class="w-full object-cover h-48 rounded-2xl">
          </div>

          <div class="flex-auto ml-3 justify-evenly py-2">
            <div class="flex flex-wrap ">

              <?php foreach ($categories as $category) : ?>
                <?php if ($category->id == $article->kategori) : ?>
                  <div class="text-bold w-full flex-none text-xs text-red-700 font-medium ">
                    <?= $category->name; ?>
                  </div>
                <?php endif; ?>
              <?php endforeach; ?>

              <h2 class="flex-auto text-lg font-medium text-white"><?= $article->title; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h2>

              <div class="flex items-center mt-2.5 mb-5">

                <!-- Jika visitor lebih dari 5 tampilkan "Bad", dan jika visitor lebih dari 10 tampilkan "Not Bad", dan jika visitor lebih dari 20 tampilkan "Recommended" -->
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

            </div>
            <p class="mt-3"></p>
            <div class="flex space-x-3 text-sm font-medium">
              <div class="flex-auto flex space-x-3">
              </div>
              <a href="<?= site_url('article/mobilevisitor/' . $article->slug) ?>">
                <button class="mb-2 md:mb-0 bg-red-700 px-5 py-2 shadow-sm tracking-wider text-white rounded hover:bg-red-800" type="button" aria-label="like">Review</button>
              </a>
            </div>
          </div>
        </div>
      </div>

    <?php endforeach; ?>
  </div>
</div>