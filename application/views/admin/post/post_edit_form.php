<!DOCTYPE html>
<html lang="en">

<head>
  <?php $this->load->view('admin/_partials/head.php') ?>
</head>


<body>

  <?php $this->load->view('admin/_partials/navbar.php') ?>

  <main class="main flex overflow-hidden bg-white pt-16">
    <?php $this->load->view('admin/_partials/side_nav.php') ?>

    <div id="main-content" class="h-full w-full bg-gray-900 relative overflow-y-auto lg:ml-64">
      <main>

        <div class="p-4 bg-gray-900 block sm:flex items-center justify-between border-b border-gray-200 lg:mt-1.5">
          <h1 class="text-2xl font-semibold text-gray-100">Edit Artikel</h1>

          <div class="mt-4 sm:mt-0">
            <a href="<?php echo site_url('admin/post') ?>" class="bg-gray-800 hover:bg-gray-900 hover:border-gray-600 hover:text-gray-600 text-gray-300 font-semibold py-2 px-4 border border-gray-400 rounded shadow">
              Kembali
            </a>
          </div>

        </div>

        <div class="p-4 bg-gray-900 mt-4">
          <form action="" method="post" enctype="multipart/form-data">

            <div class="-mx-3 mb-6">
              <div class="w-full px-3">
                <label class="block uppercase tracking-wide text-gray-100 text-xs font-bold mb-2" for="grid-title">
                  Title
                </label>
                <input name="title" class="bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:ring-blue-500 focus:border-blue-500 block w-full rounded mt-1" type="text" value="<?= $article->title ?>" required title=" Judul Artikel Wajib di isi">
              </div>
            </div>

            <div class="flex flex-wrap -mx-3 mb-6">
              <div class="w-full px-3">
                <label class="block uppercase tracking-wide text-gray-100 text-xs font-bold mb-2" for="grid-cover">
                  Link Cover Film
                </label>
                <input name="cover" class="bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:ring-blue-500 focus:border-blue-500 block w-full rounded mt-1" id="grid-cover" type="text" value="<?= $article->cover ?>" required title="Sinopsis Wajib di isi">
              </div>
            </div>

            <div class="flex flex-wrap -mx-3 mb-6">
              <div class="w-full px-3">
                <label class="block uppercase tracking-wide text-gray-100 text-xs font-bold mb-2" for="grid-trailer">
                  Link Trailer Film
                </label>
                <input name="trailer" class="bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:ring-blue-500 focus:border-blue-500 block w-full rounded mt-1" id="grid-trailer" type="text" value="<?= $article->trailer ?>" required title=" Trailer Wajib di isi">
              </div>
            </div>

            <!-- textarea Konten -->
            <div class="-mx-3 mb-6">
              <div class="w-full px-3">
                <label class="block uppercase tracking-wide text-gray-100 text-xs font-bold mb-2" for="grid-content">
                  Sinopsis
                </label>
                <?php $content = form_error('content') ? set_value('content') : $article->content ?>
                <input type="hidden" name="content" value="<?= html_escape($content) ?>">
                <div class="form-input block w-full" id="editor" type="text" required title="Konten Wajib di isi"><?= $content ?></textarea>
                </div>
              </div>
            </div>

            <div class="flex flex-wrap -mx-3 mb-6">
              <div class="w-full px-3">
                <label class="block uppercase tracking-wide text-gray-100 text-xs font-bold mb-2" for="grid-category">
                  Kategori
                </label>
                <div class="relative">
                  <select name="kategori" class="block block w-full p-2.5 bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:ring-blue-500 focus:border-blue-500 rounded" id="grid-category">
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
                <label class="block uppercase tracking-wide text-gray-100 text-xs font-bold mb-2" for="grid-headline">
                  Headline
                </label>
                <div class="relative">
                  <select disabled name="headline" class="disable block w-full p-2.5 bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:ring-blue-500 focus:border-blue-500 rounded" id="grid-headline">
                    <option value="false">False</option>
                    <option value="true">True</option>
                  </select>
                  <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                  </div>
                </div>
              </div>
            </div>

            <!-- Detail Content -->
            <input type="text" hidden name="contributor" value="<?= $current_user->name ?>">
            <input type="text" hidden name="directors" value"<?= $article->directors ?>">
            <input type="text" hidden name="writers" value"<?= $article->writers ?>">
            <input type="text" hidden name="actors" value"<?= $article->actors ?>">
            <input type="text" hidden name="release_date" value"<?= $article->release_date ?>">

            <div class="flex flex-wrap -mx-3 mb-6">
              <div class="w-full px-3 text-right">
                <button type="submit" name="draft" class="text-white bg-gray-900 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700" value="true">Save to Draft</button>
                <button type="submit" name="draft" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800" value="false">Publish</button>
              </div>
            </div>
          </form>
        </div>
      </main>
    </div>

  </main>
  <!-- Initialize Quill editor -->
  <?php $this->load->view('admin/_partials/footer'); ?>
  <script>
    var quill = new Quill('#editor', {
      theme: 'snow',
      modules: {
        toolbar: [
          [{
            header: [1, 2, 3, 4, 5, 6, false]
          }],
          [{
            font: []
          }],
          ["bold", "italic"],
          ["link", "blockquote", "code-block", "image"],
          [{
            list: "ordered"
          }, {
            list: "bullet"
          }],
          [{
            script: "sub"
          }, {
            script: "super"
          }],
          [{
            color: []
          }, {
            background: []
          }],
        ]
      },
    });
    quill.on('text-change', function(delta, oldDelta, source) {
      document.querySelector("input[name='content']").value = quill.root.innerHTML;
    });
  </script>
</body>

</html>