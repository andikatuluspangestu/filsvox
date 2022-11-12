<!-- Tampilkan artikel yang memiliki headline = TRUE -->

<?php foreach ($headline as $article) : ?>
  <div class="hidden duration-200 ease-linear" data-carousel-item>
    <div class="flex flex-col justify-between mt-4 bg-black/10 bg-blend-multiply rounded-2xl overflow-hidden bg-cover bg-center px-7 pt-4 pb-6 text-white border-none shadows" style="background-image: url('<?= $article->cover; ?>');">

      <div class="flex -space-x-1 items-center ">
        <?php if ($article->visitor >= 3) : ?>
          <img class="rounded-full w-7 h-7 shadow-lg border border-white" src="https://api.lorem.space/image/face?w=32&amp;h=32&amp;hash=zsrj8csk" alt="" srcset="">
          <img class="rounded-full w-7 h-7 shadow-lg border border-white" src="https://api.lorem.space/image/face?w=32&amp;h=32&amp;hash=zsrj8cck" alt="" srcset="">
          <img class="rounded-full w-7 h-7 shadow-lg border border-white" src="https://api.lorem.space/image/face?w=32&amp;h=32&amp;hash=zsfj8cck" alt="" srcset="">
        <?php else : ?>
          <!-- <img class="rounded-full w-7 h-7 shadow-lg border border-white" src="https://api.lorem.space/image/face?w=32&amp;h=32&amp;hash=zsrj8csk" alt="" srcset=""> -->
        <?php endif; ?>
        <span class="pl-4 text-xs drop-shadow-lg"><?= $article->visitor ?>+ Orang telah mengulas</span>
      </div>

      <div class="bg-gradient-to-r from-black/30 to-transparent -mx-7 -mb-6 px-7 pb-6 pt-2">
        <span class="uppercase text-2xl font-semibold drop-shadow-lg "><?= $article->title ?></span>

        <!-- Menampilkan Kategori Data dari Tabel Category yang berelasi dengan Tabel Article-->
        <?php foreach ($categories as $category) : ?>
          <?php if ($category->id == $article->kategori) : ?>
            <div class="text-xs text-gray-200 mt-2">
              <a href="#" class=""> <?= $category->name ?> </a>
            </div>
          <?php endif; ?>
        <?php endforeach; ?>

        <div class="mt-4 flex space-x-3 items-center">
          <a href="<?= site_url('article/' . $article->slug) ?>" class="px-5 py-2.5 bg-red-600 hover:bg-red-700 rounded-lg text-xs inline-block dark:bg-slate-900 hover:dark:bg-slate-800">Lihat Review</a>
          <a href="#" class="p-2.5 bg-gray-800/80 rounded-lg hover:bg-red-600 hover:dark:bg-slate-800">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd" />
            </svg>
          </a>
        </div>
      </div>
    </div>
  </div>
<?php endforeach ?>