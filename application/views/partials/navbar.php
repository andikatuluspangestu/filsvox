<div class="navbar bg-slate-700 fixed top-0 left-0 right-0 z-50 pl-4">
  <div class="navbar-start">
    <a href="<?= base_url(); ?>">
      <label tabindex="0" class="btn btn-ghost btn-circle">
        <svg class="h-5 w-5 fill-white " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
          <path d="M5 22h14v0c1.1 0 2-.9 2-2v-9 0c0-.27-.11-.53-.29-.71l-8-8v0c-.4-.39-1.02-.39-1.41 0l-8 8h0c-.2.18-.3.44-.3.71v9 0c0 1.1.89 2 2 2Zm5-2v-5h4v5Zm-5-8.59l7-7 7 7V20h-3v-5 0c0-1.11-.9-2-2-2h-4v0c-1.11 0-2 .89-2 2v5H5Z"></path>
        </svg>
      </label></a>
  </div>
  <div class="navbar-center">
    <a href="<?= base_url(); ?>" class="btn btn-ghost normal-case text-xl text-white">FILSVOX</a>
  </div>
  <div class="navbar-end">

    <!-- Tampilkan Mobile Button Toggle pada layar smartphone -->
    <div class="dropdown dropdown-bottom dropdown-end">
      <label tabindex="0" id="btn-toggle" class="pr-10 text-white bg-transparent border-bg-transparent hover:text-gray-400 m-1">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
          <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 5.25h16.5m-16.5 4.5h16.5m-16.5 4.5h16.5m-16.5 4.5h16.5" />
        </svg>
      </label>
      <ul tabindex="0" class="dropdown-content menu p-2 rounded shadow bg-slate-800 w-52">
        <li class="bg-gray-800 rounded"><a class="bg-gray-900 hover:bg-gray-700 text-white mb-1 rounded">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
              <path fill-rule="evenodd" d="M5.25 2.25a3 3 0 00-3 3v4.318a3 3 0 00.879 2.121l9.58 9.581c.92.92 2.39 1.186 3.548.428a18.849 18.849 0 005.441-5.44c.758-1.16.492-2.629-.428-3.548l-9.58-9.581a3 3 0 00-2.122-.879H5.25zM6.375 7.5a1.125 1.125 0 100-2.25 1.125 1.125 0 000 2.25z" clip-rule="evenodd" />
            </svg>
            Kategori
          </a></li>
        <li class="bg-gray-800">
          <a class="bg-gray-900 hover:bg-gray-700 text-white mb-1 rounded-lg">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
              <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zM12.75 6a.75.75 0 00-1.5 0v6c0 .414.336.75.75.75h4.5a.75.75 0 000-1.5h-3.75V6z" clip-rule="evenodd" />
            </svg>

            Akan Datang
          </a></li>
      </ul>
    </div>

    <form action="<?= base_url('/search') ?>" method="get">
      <div class="relative items-center content-center flex hidden lg:block mr-5">
        <input type="text" name="keyword" class="text-xs ring-1 bg-transparent ring-zinc-600 focus:ring-red-300 pl-5 pr-5 text-white py-3 rounded w-full outline-none focus:ring-3" placeholder="Cari Film ...">
      </div>
    </form>

  </div>
</div>