<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign Up | FILSVOX</title>

  <!-- Meta Property -->
  <meta property="og:site_name" content="FILSVOX - Get Movies Review">
  <meta property="og:title" content="FILSVOX - Get Movies Review" />
  <meta property="og:description" content="Tempat untuk melihat berbagai ulasan film menarik dan terbaru" />
  <meta property="og:image" itemprop="image" content="<?= base_url('/assets/images/thumbnail.png'); ?>">
  <meta property="og:type" content="website" />
  <meta property="og:url" content="https://filsvox.my.id/" />
  <meta property="og:locale" content="id_ID" />
  <meta property="og:locale:alternate" content="en_US" />
  <link rel="shortcut icon" href="<?= base_url('/assets/images/icon.png'); ?>" type="image/x-icon">

  <!-- CSS Vendor -->
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
  <div class="min-h-screen sm:flex sm:flex-row justify-center bg-gray-900">
    <div class="w-full bg-gray-900" style="padding-top: 2rem;">
      <div class="container mx-auto py-8">
        <div class="w-5/6 lg:w-1/2 mx-auto bg-gray-800 rounded-lg shadow-lg">
          <div class="py-4 pt-5 px-8 text-white font-bold text-2xl">Daftar Akun</div>
          <form action="<?= base_url('auth/register'); ?>" method="post">
            <div class="py-4 px-8">
              <div class="flex mb-4">
                <div class="w-1/2 mr-1">
                  <label class="block text-white text-sm font-bold mb-2" for="first_name">Nama Lengkap</label>
                  <input class="ext-sm text-gray-200 px-4 py-3 rounded-lg w-full bg-gray-900 border border-gray-700 focus:outline-none focus:border-purple-400" id="first_name" type="text" placeholder="Masukan nama lengkap" name="name">
                </div>
                <div class="w-1/2 ml-1">
                  <label class="block text-white text-sm font-bold mb-2" for="last_name">Username</label>
                  <input class="ext-sm text-gray-200 px-4 py-3 rounded-lg w-full bg-gray-900 border border-gray-700 focus:outline-none focus:border-purple-400" id="last_name" type="text" placeholder="Ketik username kamu" name="username">
                </div>
              </div>
              <div class="mb-4">
                <label class="block text-white text-sm font-bold mb-2" for="email">Email</label>
                <input class="ext-sm text-gray-200 px-4 py-3 rounded-lg w-full bg-gray-900 border border-gray-700 focus:outline-none focus:border-purple-400" id="email" type="email" placeholder="namakamu@mail.com" name="email">
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
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js"></script>
</body>

</html>