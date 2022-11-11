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
      <div class="p-4 bg-gray-900 block sm:flex items-center justify-between border-b border-gray-200 lg:mt-1.5">
        <h1 class="text-2xl font-semibold text-gray-100">Akun Saya</h1>

        <div class="mt-4 sm:mt-0">
          <a href="<?php echo site_url('admin/user') ?>" class="bg-gray-800 hover:bg-gray-900 hover:border-gray-600 hover:text-gray-600 text-gray-300 font-semibold py-2 px-4 border border-gray-400 rounded shadow">
            Kembali
          </a>
        </div>

      </div>

      <div class="p-4 h-full bg-gray-900 mt-4">
        <div class="flex flex-col sticky top-0 z-10">
          <div class="bg-gray-800 border border-gray-800 shadow-lg  rounded-2xl p-4">
            <div class="flex-none sm:flex">
              <div class=" relative h-32 w-32   sm:mb-0 mb-3">
                <?php
                $avatar = $current_user->avatar ?
                  base_url('upload/avatar/' . $current_user->avatar)
                  : get_gravatar($current_user->email)
                ?>
                <!-- Jika avatar tidak ada tampilkan gambar default -->
                <?php if ($current_user->avatar == null) : ?>
                  <?php if ($current_user->role == 1) : ?>
                    <img class="w-32 h-32 rounded-2xl" src="<?= base_url('assets/images/admin.png') ?>" alt="Admin">
                  <?php else : ?>
                    <!-- Jika current user role 2 maka tampilkan avatar user -->
                    <img class="w-32 h-32 rounded-2xl" src="<?= base_url('assets/images/contributor.png') ?>" alt="Kontributor">
                  <?php endif; ?>
                <?php else : ?>
                  <img src="<?= $avatar ?>" alt="<?= htmlentities($current_user->name, TRUE) ?>" class="w-32 h-32 rounded-2xl">
                <?php endif; ?>
                <a href="#" class="absolute -right-2 bottom-2   -ml-3  text-white p-1 text-xs bg-green-400 hover:bg-green-500 font-medium tracking-wider rounded-full transition ease-in duration-300">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="h-4 w-4">
                    <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z">
                    </path>
                  </svg>
                </a>
              </div>
              <div class="flex-auto sm:ml-5 justify-evenly">
                <div class="flex items-center justify-between sm:mt-2">
                  <div class="flex items-center">
                    <div class="flex flex-col">
                      <div class="w-full flex-none text-lg text-gray-200 font-bold leading-none">
                        <?= $current_user->name ?>
                      </div>
                      <div class="flex-auto text-gray-400 my-1">
                        <?php if ($current_user->role == 1) : ?>
                          <div class="text-sm text-gray-400">Administrator</div>
                        <?php else : ?>
                          <div class="text-sm font-medium text-gray-400">Kontributor</div>
                        <?php endif; ?>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="flex flex-row items-center">
                  <div class="flex-1 inline-flex items-center">

                    <p class="ml-2 mb-8">

                    </p>
                  </div>
                </div>
                <div class="flex pt-2  text-sm text-gray-400">
                  <div class="flex-1 inline-flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                    </svg>
                    <p class="ml-1">
                      <?= $current_user->email ?>
                    </p>
                  </div>

                  <!-- <a href="https://www.behance.net/ajeeshmon" target="_blank" class="flex-no-shrink bg-blue-800 hover:bg-blue-500 px-5 ml-4 py-2 text-xs shadow-sm hover:shadow-lg font-medium tracking-wider hover:border-green-500 text-white rounded-full transition ease-in duration-300">Edit Profile</a> -->
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Edit Akun -->
        <div class="bg-gray-800 mt-2 border border-gray-800 shadow-lg rounded-2xl p-4">
          <form action="<?= base_url('admin/user/update/' . $current_user->id) ?>" method="post">
            <div class="py-4 px-8">
              <div class="flex mb-4">
                <!-- Hidden ID -->
                <input type="hidden" name="id" value="<?= $current_user->id ?>">
                <div class="w-1/2 mr-1">
                  <label class="block text-white text-sm font-bold mb-2" for="first_name">Nama Lengkap</label>
                  <input class="ext-sm text-gray-200 px-4 py-3 rounded-lg w-full bg-gray-900 border border-gray-700 focus:outline-none focus:border-purple-400" id="first_name" type="text" placeholder="Masukan nama lengkap" name="name" value="<?= $current_user->name ?>">
                </div>
                <div class="w-1/2 ml-1">
                  <label class="block text-white text-sm font-bold mb-2" for="last_name">Username</label>
                  <input class="ext-sm text-gray-200 px-4 py-3 rounded-lg w-full bg-gray-900 border border-gray-700 focus:outline-none focus:border-purple-400" id="last_name" type="text" placeholder="Ketik username kamu" name="username" value="<?= $current_user->username ?>">
                </div>
              </div>
              <!-- Jika current user role 1 maka tampilkan input role -->
              <?php if ($current_user->role == 1) : ?>
                <div class="flex mb-4">
                  <div class="w-1/2 mr-1">
                    <label class="block text-white text-sm font-bold mb-2" for="role">Role</label>
                    <select name="role" id="role" class="ext-sm text-gray-200 px-4 py-3 rounded-lg w-full bg-gray-900 border border-gray-700 focus:outline-none focus:border-purple-400">
                      <option value="1" <?= $current_user->role == 1 ? 'selected' : '' ?>>Administrator</option>
                      <option value="2" <?= $current_user->role == 2 ? 'selected' : '' ?>>Kontributor</option>
                    </select>
                  </div>
                </div>
              <?php endif; ?>
              <div class="mb-4">
                <label class="block text-white text-sm font-bold mb-2" for="email">Email</label>
                <input class="ext-sm text-gray-200 px-4 py-3 rounded-lg w-full bg-gray-900 border border-gray-700 focus:outline-none focus:border-purple-400" id="email" type="email" placeholder="namakamu@mail.com" name="email" value="<?= $current_user->email ?>">
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
                  Update
                </button>
              </div>
            </div>
          </form>
        </div>
        </div>
      </div>

  </main>
  <script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>
  <!-- Initialize Quill editor -->
  <?php $this->load->view('admin/_partials/footer'); ?>
</body>

</html>