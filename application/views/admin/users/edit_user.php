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
          <h1 class="text-2xl font-semibold text-gray-100">Edit Data Kontributor</h1>

          <div class="mt-4 sm:mt-0">
            <a href="<?php echo site_url('admin/user') ?>" class="bg-gray-800 hover:bg-gray-900 hover:border-gray-600 hover:text-gray-600 text-gray-300 font-semibold py-2 px-4 border border-gray-400 rounded shadow">
              Kembali
            </a>
          </div>

        </div>

        <div class="p-4 bg-gray-900 mt-4">
          <form action="<?= base_url('admin/user/update/' . $user->id) ?>" method="post">
            <div class="py-4 px-8">
              <div class="flex mb-4">
                <!-- Hidden ID -->
                <input type="hidden" name="id" value="<?= $user->id ?>">
                <div class="w-1/2 mr-1">
                  <label class="block text-white text-sm font-bold mb-2" for="first_name">Nama Lengkap</label>
                  <input class="ext-sm text-gray-200 px-4 py-3 rounded-lg w-full bg-gray-900 border border-gray-700 focus:outline-none focus:border-purple-400" id="first_name" type="text" placeholder="Masukan nama lengkap" name="name" value="<?= $user->name ?>">
                </div>
                <div class="w-1/2 ml-1">
                  <label class="block text-white text-sm font-bold mb-2" for="last_name">Username</label>
                  <input class="ext-sm text-gray-200 px-4 py-3 rounded-lg w-full bg-gray-900 border border-gray-700 focus:outline-none focus:border-purple-400" id="last_name" type="text" placeholder="Ketik username kamu" name="username" value="<?= $user->username ?>">
                </div>
              </div>
              <div class="mb-4">
                <label class="block text-white text-sm font-bold mb-2" for="role">Role</label>
                <!-- Membuat Role Dropdown -->
                <select class="ext-sm text-gray-200 px-4 py-3 rounded-lg w-full bg-gray-900 border border-gray-700 focus:outline-none focus:border-purple-400" id="role" name="role">
                  <option value="1">Admin</option>
                  <option value="0">Kontributor</option>
                </select>
              </div>
              <div class="mb-4">
                <label class="block text-white text-sm font-bold mb-2" for="email">Email</label>
                <input class="ext-sm text-gray-200 px-4 py-3 rounded-lg w-full bg-gray-900 border border-gray-700 focus:outline-none focus:border-purple-400" id="email" type="email" placeholder="namakamu@mail.com" name="email" value="<?= $user->email ?>">
              </div>
              <div class="mb-4">
                <label class="block text-white text-sm font-bold mb-2" for="password">Password</label>
                <input class="ext-sm text-gray-200 px-4 py-3 rounded-lg w-full bg-gray-900 border border-gray-700 focus:outline-none focus:border-purple-400" id="password1" type="password" placeholder="*******" name="password1">
              </div>
              <div class="mb-4">
                <label class="block text-white text-sm font-bold mb-2" for="password">Ulangi Password</label>
                <input class="ext-sm text-gray-200 px-4 py-3 rounded-lg w-full bg-gray-900 border border-gray-700 focus:outline-none focus:border-purple-400" id="password2" type="password" placeholder="*******" name="password2">
              </div>
              <div class="flex items-center justify-between pb-4 mt-4">
                <button class="bg-blue-600 hover:bg-blue-800 text-white font-bold py-2 px-4 rounded-lg" type="submit">
                  Submit
                </button>
              </div>
            </div>
          </form>
        </div>
      </main>
    </div>

  </main>
  <!-- Initialize Quill editor -->
  <?php $this->load->view('admin/_partials/footer'); ?>
</body>

</html>