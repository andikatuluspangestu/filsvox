<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login | FILSVOX</title>

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
    <div class="flex-col flex  self-center sm:py-5 sm:max-w-5xl xl:max-w-lg  z-10">
      <div class="self-start hidden lg:flex flex-col text-white">
        <div class="flex items-center mb-5"><img src="<?= base_url('/assets/images/icon.png'); ?>" class="w-10">
          <h3 class="text-3xl font-bold ml-3 border-b-2"> FILSVOX</h3>
        </div>
        <h1 class="my-3 font-semibold text-4xl text-yellow-200">Get Our Movies Review</h1>
        <p class="pr-3 text-sm opacity-75">Tempat terbaik untuk melihat berbagai ulasan film menarik dan terbaru dalam Bahasa Indonesia</p>
      </div>
    </div>
    <div class="flex justify-center self-center  z-10">
      <div class="p-12 bg-gray-800 mx-auto rounded-3xl w-96 ">
        <div class="mb-7">
          <h3 class="font-semibold text-2xl text-gray-100">Login</h3>
          <!-- <p class="text-gray-500">Don'thave an account? <a href="#" class="text-sm text-purple-700 hover:text-purple-600">Sign Up</a></p> -->
        </div>
        <form action="" method="post">
          <div class="space-y-6">

            <div class="">
              <input class=" w-full text-sm  px-4 py-3 bg-gray-900 border  border-gray-700 rounded-lg focus:outline-none focus:border-purple-400" name="username" type="text" placeholder="Username">
            </div>

            <div class="relative" x-data="{ show: true }">
              <input placeholder="Password" :type="show ? 'password' : 'text'" class="text-sm text-gray-200 px-4 py-3 rounded-lg w-full bg-gray-900 border border-gray-700 focus:outline-none focus:border-purple-400" name="password">
              <div class="flex items-center absolute inset-y-0 right-0 mr-3  text-sm leading-5">

                <svg @click="show = !show" :class="{'hidden': !show, 'block':show }" class="h-4 text-purple-500" fill="none" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 576 512">
                  <path fill="currentColor" d="M572.52 241.4C518.29 135.59 410.93 64 288 64S57.68 135.64 3.48 241.41a32.35 32.35 0 0 0 0 29.19C57.71 376.41 165.07 448 288 448s230.32-71.64 284.52-177.41a32.35 32.35 0 0 0 0-29.19zM288 400a144 144 0 1 1 144-144 143.93 143.93 0 0 1-144 144zm0-240a95.31 95.31 0 0 0-25.31 3.79 47.85 47.85 0 0 1-66.9 66.9A95.78 95.78 0 1 0 288 160z">
                  </path>
                </svg>

                <svg @click="show = !show" :class="{'block': !show, 'hidden':show }" class="h-4 text-purple-500" fill="none" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 640 512">
                  <path fill="currentColor" d="M320 400c-75.85 0-137.25-58.71-142.9-133.11L72.2 185.82c-13.79 17.3-26.48 35.59-36.72 55.59a32.35 32.35 0 0 0 0 29.19C89.71 376.41 197.07 448 320 448c26.91 0 52.87-4 77.89-10.46L346 397.39a144.13 144.13 0 0 1-26 2.61zm313.82 58.1l-110.55-85.44a331.25 331.25 0 0 0 81.25-102.07 32.35 32.35 0 0 0 0-29.19C550.29 135.59 442.93 64 320 64a308.15 308.15 0 0 0-147.32 37.7L45.46 3.37A16 16 0 0 0 23 6.18L3.37 31.45A16 16 0 0 0 6.18 53.9l588.36 454.73a16 16 0 0 0 22.46-2.81l19.64-25.27a16 16 0 0 0-2.82-22.45zm-183.72-142l-39.3-30.38A94.75 94.75 0 0 0 416 256a94.76 94.76 0 0 0-121.31-92.21A47.65 47.65 0 0 1 304 192a46.64 46.64 0 0 1-1.54 10l-73.61-56.89A142.31 142.31 0 0 1 320 112a143.92 143.92 0 0 1 144 144c0 21.63-5.29 41.79-13.9 60.11z">
                  </path>
                </svg>

              </div>
            </div>


            <div class="flex items-center justify-between">

              <div class="text-sm ml-auto">
                <!-- <a href="#" class="text-purple-700 hover:text-purple-600">
                  Forgot your password?
                </a> -->
              </div>
            </div>
            <div>
              <button type="submit" class="w-full flex justify-center bg-purple-800  hover:bg-purple-700 text-gray-100 p-3  rounded-lg tracking-wide font-semibold  cursor-pointer transition ease-in duration-500">
                Sign in
              </button>
            </div>
            <div class="flex items-center justify-center my-5">
              <span class="h-px w-16 bg-gray-700"></span>
              <span class="h-px w-16 bg-gray-700"></span>
            </div>
          </div>
        </form>
        <div class="mt-7 text-center text-gray-400 text-xs">
          <span>
            FILSVOX Entertainment Co.Ltd
          </span>
        </div>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js"></script>
</body>

</html>