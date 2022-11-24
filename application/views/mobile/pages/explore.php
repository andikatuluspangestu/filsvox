<div class="hidden p-4 rounded-lg" id="explore" role="tabpanel" aria-labelledby="explore-tab">

  <div class="p-4 pt-10 w-full text-center sm:p-8 border-gray-700">
    <h5 class="mb-2 text-3xl font-bold text-white">Everything is here</h5>
    <p class="mb-5 text-base text-gray-500 sm:text-lg dark:text-gray-400">Search for movie reviews by title, author, or even actor you know</p>
    <div class="justify-center items-center space-y-4 sm:flex sm:space-y-0 sm:space-x-4">

      <form action="<?= base_url('/search/explore/') ?>">
        <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-gray-300">Search</label>
        <div class="relative">
          <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
            <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
            </svg>
          </div>
          <input name="keyword" type="search" id="default-search" class="block p-4 pl-10 w-full text-sm rounded-lg border bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:ring-red-500 focus:border-red-500" placeholder="Search movies title..." required="">
          <button type="submit" class="text-white absolute right-2.5 bottom-2.5 bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2">Search</button>
        </div>
      </form>
    </div>

    <!-- All menu -->
    <div class="container mx-auto mt-8">
      <div class="grid grid-cols-3 md:grid-cols-2 lg:grid-cols-4 gap-6 ml-3 mr-3">

        <a href="<?= base_url('/search/popular') ?>">
          <div class="flex flex-col items-center">
            <div class="inline-flex w-20 h-20 cursor-pointer transition ease-in duration-500 transform hover:scale-105">
              <img src="https://images.unsplash.com/photo-1517604931442-7e0c8ed2963c?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" alt="aji" class=" relative p-1 object-cover rounded-2xl">
              <span class="absolute w-20 h-20 inline-flex border-2 rounded-2xl border-red-400 opacity-75"></span>
            </div>
            <span class="text-xs text-gray-300 mt-2">Popular</span>
          </div>
        </a>

        <a href="<?= base_url('/search/latest') ?>">
          <div class="flex flex-col items-center">
            <div class="inline-flex w-20 h-20 cursor-pointer transition ease-in duration-500 transform hover:scale-105">
              <img src="https://img.freepik.com/free-photo/people-watching-streaming-service-together-indoors_23-2149007895.jpg" alt="aji" class=" relative p-1 object-cover rounded-2xl">
              <span class="absolute w-20 h-20 inline-flex border-2 rounded-2xl border-red-400 opacity-75"></span>
            </div>
            <span class="text-xs text-gray-300 mt-2">Latest</span>
          </div>
        </a>

        <a href="<?= base_url('/search/allmovies') ?>">
          <div class="flex flex-col items-center">
            <div class="inline-flex w-20 h-20 cursor-pointer transition ease-in duration-500 transform hover:scale-105">
              <img src="https://img.freepik.com/free-photo/man-watching-movie-streaming-service_23-2149026105.jpg" alt="aji" class=" relative p-1 object-cover rounded-2xl">
              <span class="absolute w-20 h-20 inline-flex border-2 rounded-2xl border-red-400 opacity-75"></span>
            </div>
            <span class="text-xs text-gray-300 mt-2">All Movies</span>
          </div>
        </a>

        <!-- Lakukan perulangan for menampilkan "Hello World" 9 kali -->
        <?php for ($i = 0; $i < 3; $i++) : ?>
          <!-- Tampilkan avatar dengan title dibawahnya -->
          <div class="flex flex-col items-center invisible">
            <div class="inline-flex w-20 h-20 cursor-pointer transition ease-in duration-500  transform hover:scale-105">
              <!-- SVG Menu Icon -->
              <svg class="w-20 h-20 text-gray-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
              </svg>
              <span class="absolute w-20 h-20 inline-flex border-2 rounded-2xl border-gray-600 opacity-75"></span>
            </div>
            <span class="text-xs text-gray-500 mt-2">Menu</span>
          </div>

        <?php endfor; ?>

      </div>
    </div>

    <!-- BETA Message -->
    <div class="mt-2">
      <span class="text-slate-400 text-xs bg-transparent p-2 rounded-full italic">Features in BETA stage</span>
    </div>

  </div>

</div>