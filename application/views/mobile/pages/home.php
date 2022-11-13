<!-- Tab Pertama -->
<div class="w-full md:w-1/2 lg:w-1/4 pl-5 mt-5 pr-5 mb-20 lg:pl-2 lg:pr-2" id="profile" role="tabpanel" aria-labelledby="profile-tab">

  <div id="animation-carousel" class="relative" data-carousel="static">
    <!-- Carousel wrapper -->
    <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
      <?php foreach ($articles as $article) : ?>
        <!-- load view -->
        <?php $this->load->view('partials/headline', ['article' => $article, 'categories' => $categories]); ?>
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

  <!-- Search -->
  <form class="flex items-center mb-3" action="<?= base_url('/search/find') ?>" method="get">
    <label for="voice-search" class="sr-only"></label>
    <div class="relative w-full">
      <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
        <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
        </svg>
      </div>
      <input type="text" id="voice-search" name="keyword" class="text-sm rounded-lg block w-full pl-10 p-2.5 bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:ring-red-500 focus:border-red-500" placeholder="Search Films..." required="">

    </div>
    <button type="submit" class="inline-flex items-center py-2.5 px-3 ml-2 text-sm font-medium text-white bg-red-700 rounded-lg border border-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">
      <svg aria-hidden="true" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
      </svg>
    </button>
  </form>

  <!-- Badge Kategori -->

  <!-- <span class="text-sm font-medium mr-2 px-2.5 py-0.5 mb-5 rounded-2xl bg-red-700 text-gray-300">
    All Genre
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

              <h2 class="flex-auto text-lg font-medium text-white"><?= $article->title; ?></h2>
            </div>
            <p class="mt-3"></p>
            <div class="flex space-x-3 text-sm font-medium">
              <div class="flex-auto flex space-x-3">
              </div>
              <a href="<?= site_url('article/read/' . $article->slug) ?>">
                <button class="mb-2 md:mb-0 bg-red-700 px-5 py-2 shadow-sm tracking-wider text-white rounded hover:bg-red-800" type="button" aria-label="like">Review</button>
              </a>
            </div>
          </div>
        </div>
      </div>

    <?php endforeach; ?>
  </div>
</div>