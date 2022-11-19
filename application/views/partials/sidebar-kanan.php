<!-- Sidebar Kanan -->
<aside class=" w-1/5 pt-12 pb-10 px-10  min-w-min  border-none border-gray-300 dark:border-zinc-700 hidden lg:block ">

  <!-- Film Popular -->
  <div class="mt-10 bg-slate-900 rounded-lg">
    <span class="font-semibold text-white">Film Popular</span>
    <ul class="mt-4 text-gray-400 text-xs space-y-3">

      <!-- Tampilkan Film terpopular -->
      <?php foreach ($popular as $pop) : ?>
        <li class="flex space-x-3 bg-slate-800 p-3 rounded-lg">
          <img src="<?= $pop->cover; ?>" class="object-cover w-1/3 h-14 rounded-md" alt="<?= $pop->title; ?>">
          <div class="flex flex-col justify-between  ">
            <div class="flex flex-col space-y-1">
              <span class="text-gray-400 dark:text-white font-semibold">
                <!-- Limit alphabet 15 -->
                <a href="<?= site_url('article/visitor/' . $pop->slug) ?>"><?= substr($pop->title, 0, 15) . ".."; ?></a>
              </span>
              <?php foreach ($categories as $category) : ?>
                <?php if ($category->id == $pop->kategori) : ?>
                  <div class="text-xs text-gray-200 mt-2">
                    <a href="#" class=""> <?= $category->name ?> </a>
                  </div>
                <?php endif; ?>
              <?php endforeach; ?>
            </div>

          </div>
        </li>
      <?php endforeach; ?>

      <!-- Akhir Item Film -->
      <!-- <li class="pt-1">
        <a href="#" class="px-5 py-2.5 bg-red-600  hover:bg-red-700 rounded-lg text-center font-medium block text-white">Selengkapnya</a>
      </li> -->
    </ul>
  </div>

  <hr class="my-4">

  <!-- Film Terfavorit -->
  <div class="mt-1 bg-slate-900 rounded-lg">
    <span class="font-semibold text-white">Akan Datang</span>
    <ul class="mt-4 text-gray-400 text-xs space-y-3">

      <?php foreach ($draft as $draft) : ?>
        <li class="flex space-x-3 bg-slate-800 p-3 rounded-lg">
          <img src="<?= $draft->cover; ?>" class="object-cover w-1/3 h-14 rounded-md" alt="<?= $draft->title; ?>">
          <div class="flex flex-col justify-between  ">
            <div class="flex flex-col space-y-1">
              <span class="text-gray-400 dark:text-white font-semibold">
                <?= $draft->title; ?>
              </span>
              <?php foreach ($categories as $category) : ?>
                <?php if ($category->id == $pop->kategori) : ?>
                  <div class="text-xs text-gray-200 mt-2">
                    <span class="text-xxs hidden xl:block"><?= $category->name ?></span>
                  </div>
                <?php endif; ?>
              <?php endforeach; ?>

            </div>

          </div>
        </li>
      <?php endforeach; ?>
    </ul>
  </div>
</aside>
<!-- Akhir Sidebar Kanan -->