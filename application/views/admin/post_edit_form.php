<!DOCTYPE html>
<html lang="en">

<head>
  <?php $this->load->view('admin/_partials/head.php') ?>
</head>


<body>

  <?php $this->load->view('admin/_partials/navbar.php') ?>

  <main class="main flex overflow-hidden bg-white pt-16">
    <?php $this->load->view('admin/_partials/side_nav.php') ?>

    <div id="main-content" class="h-full w-full bg-gray-50 relative overflow-y-auto lg:ml-64">
      <main>

        <div class="p-4 bg-white block sm:flex items-center justify-between border-b border-gray-200 lg:mt-1.5">
          <h1 class="text-2xl font-semibold text-gray-800">Edit Artikel</h1>

          <div class="mt-4 sm:mt-0">
            <a href="<?php echo site_url('admin/post') ?>" class="bg-gray-200 hover:bg-gray-300 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow">
              Kembali
            </a>
          </div>

        </div>

        <div class="p-4 bg-white mt-4">
          <form action="" method="post" enctype="multipart/form-data">

            <div class="-mx-3 mb-6">
              <div class="w-full px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-title">
                  Title
                </label>
                <input name="title" class="form-input block w-full" type="text" value="<?= $article->title ?>" required title=" Judul Artikel Wajib di isi">
              </div>
            </div>

            <div class="flex flex-wrap -mx-3 mb-6">
              <div class="w-full px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-cover">
                  Link Cover Film
                </label>
                <input name="cover" class="form-input block w-full mt-1" id="grid-cover" type="text" value="<?= $article->cover ?>" required title=" Cover Wajib di isi">
              </div>
            </div>

            <div class="flex flex-wrap -mx-3 mb-6">
              <div class="w-full px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-trailer">
                  Link Trailer Film
                </label>
                <input name="trailer" class="form-input block w-full mt-1" id="grid-trailer" type="text" value="<?= $article->trailer ?>" required title=" Trailer Wajib di isi">
              </div>
            </div>

            <!-- textarea Konten -->
            <div class="-mx-3 mb-6">
              <div class="w-full px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-content">
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
                  <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-category">
                    Kategori
                  </label>
                  <div class="relative">
                    <select name="kategori" class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline" id="grid-category">
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
                    <select disabled name="headline" class="disable block appearance-none w-full bg-gray-100 border border-gray-300 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline" id="grid-headline">
                      <option value="false">False</option>
                      <option value="true">True</option>
                    </select>
                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                    </div>
                  </div>
                </div>
              </div>

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