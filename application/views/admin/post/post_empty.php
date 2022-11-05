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
          <div class="mb-1 w-full">
            <div class="mb-4">

            </div>
            <div class="sm:flex">
              <div class="hidden sm:flex items-center sm:divide-x sm:divide-gray-100 mb-3 sm:mb-0">
                <h1 class="text-xl sm:text-2xl font-semibold text-gray-900">Daftar Artikel</h1>
              </div>
              <div class="flex items-center space-x-2 sm:space-x-3 ml-auto">

                <a href="<?= base_url('/admin/post/new') ?>">
                  <button type="button" data-modal-toggle="add-user-modal" class="w-1/2 text-white bg-black hover:bg-cyan-700 focus:ring-4 focus:ring-cyan-200 font-medium inline-flex items-center justify-center rounded-lg text-sm px-3 py-2 text-center sm:w-auto">
                    <svg class="-ml-1 mr-2 h-6 w-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path>
                    </svg>
                    Tulis Artikel
                  </button>
                </a>

              </div>
            </div>
          </div>
        </div>
        <div class="flex flex-col">
          <h2 class="text-center p-5">
            Artikel tidak tersedia
          </h2>
        </div>
      </main>
    </div>
  </main>
</body>

</html>