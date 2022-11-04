<div class="navbar bg-slate-700 fixed top-0 left-0 right-0 z-50 pl-5">
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

    <form action="<?= base_url('/search') ?>" method="get">
      <div class="relative items-center content-center flex hidden md:block mr-5">
        <input type="text" name="keyword" class="text-xs ring-1 bg-transparent ring-zinc-600 focus:ring-red-300 pl-5 pr-5 text-white py-3 rounded w-full outline-none focus:ring-3" placeholder="Cari Film ...">
      </div>
    </form>

  </div>
</div>