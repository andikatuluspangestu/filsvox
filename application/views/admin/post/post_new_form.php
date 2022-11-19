<!DOCTYPE html>
<html lang="en">

<head>
  <?php $this->load->view('admin/_partials/head.php') ?>
</head>


<body>

  <?php $this->load->view('admin/_partials/navbar.php') ?>

  <main class="main flex overflow-hidden bg-gray-900 pt-16">

    <?php $this->load->view('admin/_partials/side_nav.php') ?>

    <div id="main-content" class="h-full w-full bg-gray-900 relative overflow-y-auto lg:ml-64">
      <main>

        <div class="p-4 ml-4 bg-gray-900 block sm:flex items-center justify-between border-b border-gray-200 lg:mt-1.5">
          <h1 class="text-2xl font-semibold text-gray-100">Tulis Artikel Film</h1>
          <div class="mt-4 sm:mt-0">
            <a href="<?php echo site_url('admin/post') ?>" class="bg-gray-800 hover:bg-gray-300 text-gray-300 font-semibold py-2 px-4 border border-gray-400 rounded shadow">
              Kembali
            </a>
          </div>
        </div>

        <div class="p-4 bg-gray-900">
          <div class="mb-4 border-gray-700">
            <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="myTab" data-tabs-toggle="#myTabContent" role="tablist">
              <li class="mr-2" role="presentation">
                <a href="#" class="inline-flex p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 group" id="profile-tab" data-tabs-target="#profile" role="tab" aria-controls="profile" aria-selected="false">
                  <svg aria-hidden="true" class="w-5 h-5 text-blue-600 dark:text-blue-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path>
                  </svg>General
                </a>
              </li>
              <li class="mr-2" role="presentation">
                <a href="#" class="inline-flex p-4 text-gray-100 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 group" id="dashboard-tab" data-tabs-target="#dashboard" role="tab" aria-controls="dashboard" aria-selected="false">
                  <svg aria-hidden="true" class="w-5 h-5 text-gray-100 group-hover:text-gray-700 dark:text-gray-700 dark:group-hover:text-gray-700" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"></path>
                    <path fill-rule="evenodd" d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3zm-3 4a1 1 0 100 2h.01a1 1 0 100-2H7zm3 0a1 1 0 100 2h3a1 1 0 100-2h-3z" clip-rule="evenodd"></path>
                  </svg>Detail
                </a>
              </li>
            </ul>
          </div>

          <div id="myTabContent">
            <div class="hidden p-4 bg-gray-800 rounded-lg text-gray-100" id="profile" role="tabpanel" aria-labelledby="profile-tab">
              <div class="tabsku">
                <form action="" method="post" enctype="multipart/form-data">

                  <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full px-3">
                      <label class="block uppercase tracking-wide text-gray-100 text-xs font-bold mb-2" for="grid-title">
                        Judul
                      </label>
                      <input name="title" class="bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:ring-blue-500 focus:border-blue-500 block w-full rounded" id="grid-title" type="text" placeholder="Title" required title="Judul Artikel Wajib di isi">
                    </div>
                  </div>

                  <div class="mb-4">
                    <label class="block uppercase tracking-wide text-gray-100 text-xs font-bold mb-2" for="contributor">
                      Kontributor
                    </label>
                    <input class="bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:ring-blue-500 focus:border-blue-500 block w-full rounded disable" type="text" name="contributor" value="<?php echo $current_user->name; ?>" readonly>
                  </div>

                  <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full px-3">
                      <label class="block uppercase tracking-wide text-gray-100 text-xs font-bold mb-2" for="grid-cover">
                        Link Cover Film
                      </label>
                      <input name="cover" class="bg-gray-700 dark:border-gray-600 placeholder-gray-400 text-white focus:ring-blue-500 focus:border-blue-500 block w-full  rounded" id="grid-cover" type="text" placeholder="Masukan link atau cover film" required title="Cover Wajib di isi">
                    </div>
                  </div>

                  <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full px-3">
                      <label class="block uppercase tracking-wide text-gray-100 text-xs font-bold mb-2" for="grid-cover">
                        Video Trailer ( Opsional )
                      </label>
                      <input name="trailer" class="bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:ring-blue-500 focus:border-blue-500 block w-full rounded" id="grid-cover" type="text" placeholder="Masukan link video trailer film" title="Tautan video jika ada">
                    </div>
                  </div>

                  <div class="-mx-3 mb-6">
                    <div class="w-full px-3">
                      <label class="block uppercase tracking-wide text-gray-100 text-xs font-bold mb-2" for="grid-content">
                        Sinopsis
                      </label>
                      <textarea name="content" class="bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:ring-blue-500 focus:border-blue-500 block w-full" id="editor" type="text" required title="Sinopsis Wajib di isi"></textarea>
                    </div>
                  </div>

                  <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full px-3">
                      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-category">
                        Kategori
                      </label>
                      <div class="relative">
                        <select name="kategori" class="block w-full p-2.5 bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:ring-blue-500 focus:border-blue-500 rounded" id="grid-category">
                          <option value="">Pilih Kategori</option>
                          <?php foreach ($categories as $category) : ?>
                            <option value="<?php echo $category->id ?>"><?php echo $category->name ?></option>
                          <?php endforeach; ?>
                        </select>
                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                          <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path d="M10 12a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 2a4 4 0 1 0 0-8 4 4 0 0 0 0 8z" />
                          </svg>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full px-3">
                      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-headline">
                        Headline
                      </label>
                      <div class="relative">
                        <select name="headline" class="disable block w-full p-2.5 bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:ring-blue-500 focus:border-blue-500 rounded" id="grid-headline">
                          <option value="false">False</option>
                          <option value="true">True</option>
                        </select>
                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                        </div>
                      </div>
                    </div>
                  </div>
              </div>
            </div>
            <div class="hidden p-4 bg-gray-800 rounded-lg" id="dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
              <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full px-3">
                  <label class="block uppercase tracking-wide text-gray-100 text-xs font-bold mb-2" for="grid-title">
                    Directors
                  </label>
                  <input name="directors" class="bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:ring-blue-500 focus:border-blue-500 block w-full rounded mt-1" id="grid-title" type="text" placeholder="Directors" required title="Judul Artikel Wajib di isi">
                </div>
              </div>
              <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full px-3">
                  <label class="block uppercase tracking-wide text-gray-100 text-xs font-bold mb-2" for="grid-title">
                    Writers
                  </label>
                  <input name="writers" class="bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:ring-blue-500 focus:border-blue-500 block w-full rounded mt-1" id="grid-title" type="text" placeholder="Writers" required title="Judul Artikel Wajib di isi">
                </div>
              </div>
              <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full px-3">
                  <label class="block uppercase tracking-wide text-gray-100 text-xs font-bold mb-2" for="grid-title">
                    Actors
                  </label>
                  <input name="actors" class="bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:ring-blue-500 focus:border-blue-500 block w-full rounded mt-1" id="grid-title" type="text" placeholder="Actors" required title="Judul Artikel Wajib di isi">
                </div>
              </div>
              <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full px-3">
                  <label class="block uppercase tracking-wide text-gray-100 text-xs font-bold mb-2" for="grid-title">
                    Tahun Rilis
                  </label>
                  <input name="release_date" class="bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:ring-blue-500 focus:border-blue-500 block w-full rounded mt-1" id="grid-title" type="date" placeholder="Rilis" required title="Judul Artikel Wajib di isi">
                </div>
              </div>
            </div>
          </div>
          <div class="flex flex-wrap -mx-3 mb-6 mt-5">
            <div class="w-full px-3 text-right">
              <button type="submit" name="draft" class="text-white bg-gray-900 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700" value="true">Save to Draft</button>
              <button type="submit" name="draft" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800" value="false">Publish</button>
            </div>
          </div>
          </form>
        </div>
    </div>
  </main>
  </div>
  </main>
  <!-- Initialize Quill editor -->
  <script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>
  <script src="https://unpkg.com/flowbite@1.5.3/dist/datepicker.js"></script>

  <?php $this->load->view('admin/_partials/footer'); ?>
  <script>
    var quill = new Quill('#editor', {
      theme: 'snow'
    });
  </script>
</body>

</html>