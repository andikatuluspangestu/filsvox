<aside id="sidebar" class="fixed hidden z-20 h-full top-0 left-0 pt-16 flex lg:flex flex-shrink-0 flex-col w-64 transition-width duration-75" aria-label="Sidebar">
  <div class="relative flex-1 flex flex-col min-h-0 border-gray-200 bg-gray-900">
    <div class="flex-1 flex flex-col pt-5 pb-4 overflow-y-auto">
      <div class="flex-1 px-3 bg-gray-900 divide-y space-y-1">
        <ul class="space-y-2 pb-2">

          <!-- User Current Profile Card -->
          <li class="relative px-3 py-2 flex items-center text-sm font-medium rounded-md bg-blue-800">
            <div class="flex-shrink-0 flex items-center">
              <!-- Jika current user role 1 maka tampilkan avatar admin -->
              <?php if ($current_user->role == 1) : ?>
                <img class="h-10 w-10 rounded-full" src="<?= base_url('assets/images/admin.png') ?>" alt="Admin">
              <?php else : ?>
                <!-- Jika current user role 2 maka tampilkan avatar user -->
                <img class="h-8 w-8 rounded-full" src="<?= base_url('assets/images/contributor.png') ?>" alt="Kontributor">
              <?php endif; ?>
            </div>
            <div class="ml-3">
              <div class="text-base font-medium text-white"><?= $current_user->username ?></div>
              <!-- Tampilkan role current user, jika role 1 tampilkan admin -->
              <?php if ($current_user->role == 1) : ?>
                <div class="text-sm font-medium text-gray-400">Admin</div>
              <?php else : ?>
                <div class="text-sm font-medium text-gray-400">User</div>
              <?php endif; ?>
            </div>
            <!-- <button class="ml-auto bg-gray-800 rounded-md p-1 text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-white">
              <span class="sr-only">View notifications</span>
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
              </svg>
            </button> -->
          </li>

          <!-- Sidebar -->
          <li>
            <a href="<?= site_url('admin') ?>" class="hover:text-gray-100 text-base bg-gray-800 text-gray-100 font-normal rounded-lg flex items-center p-2 hover:bg-gray-700 group">
              <svg class="w-6 h-6 text-gray-500 group-hover:text-gray-100 transition duration-75" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path>
                <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path>
              </svg>
              <span class="ml-3">Dashboard</span>
            </a>
          </li>
          <li>
            <a href="<?= site_url('admin/post') ?>" class="hover:text-gray-100 text-base bg-gray-800 text-gray-100 font-normal rounded-lg flex items-center p-2 hover:bg-gray-700 group">
              <svg class="w-6 h-6 text-gray-500 flex-shrink-0 group-hover:text-gray-100 transition duration-75" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z">
                </path>
              </svg>
              <span class="ml-3 flex-1 whitespace-nowrap">Artikel</span>
            </a>
          </li>

          <li>
            <a href="<?= site_url('admin/category') ?>" class="hover:text-gray-100 text-base bg-gray-800 text-gray-100 font-normal rounded-lg flex items-center p-2 hover:bg-gray-700 group">
              <svg class="w-6 h-6 text-gray-500 flex-shrink-0 group-hover:text-gray-100 transition duration-7" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 27 27" fill="currentColor" class="w-6 h-6">
                <path fill-rule="evenodd" d="M5.25 2.25a3 3 0 00-3 3v4.318a3 3 0 00.879 2.121l9.58 9.581c.92.92 2.39 1.186 3.548.428a18.849 18.849 0 005.441-5.44c.758-1.16.492-2.629-.428-3.548l-9.58-9.581a3 3 0 00-2.122-.879H5.25zM6.375 7.5a1.125 1.125 0 100-2.25 1.125 1.125 0 000 2.25z" clip-rule="evenodd" />
              </svg>
              <span class="ml-3 flex-1 whitespace-nowrap">Kategori</span>
            </a>
          </li>

          <!-- Tampilkan menu kategori jika user memuliki role 1 -->

          <?php if ($current_user->role == 1) : ?>
            <li>
              <a href="<?= site_url('admin/user') ?>" class="hover:text-gray-100 text-base bg-gray-800 text-gray-100 font-normal rounded-lg flex items-center p-2 hover:bg-gray-700 group">
                <svg class="w-6 h-6 text-gray-500 flex-shrink-0 group-hover:text-gray-100 transition duration-75" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path>
                </svg>
                <span class="ml-3 flex-1 whitespace-nowrap">Kontributor</span>
              </a>
            </li>
          <?php endif; ?>

          <li>
            <a href="<?= site_url('admin/setting') ?>" class="text-base bg-gray-800 text-gray-100 font-normal rounded-lg flex items-center p-2 hover:bg-gray-700 hover:text-gray-100 group">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 text-gray-500 flex-shrink-0 group-hover:text-gray-100 transition duration-75">
                <path fill-rule="evenodd" d="M11.828 2.25c-.916 0-1.699.663-1.85 1.567l-.091.549a.798.798 0 01-.517.608 7.45 7.45 0 00-.478.198.798.798 0 01-.796-.064l-.453-.324a1.875 1.875 0 00-2.416.2l-.243.243a1.875 1.875 0 00-.2 2.416l.324.453a.798.798 0 01.064.796 7.448 7.448 0 00-.198.478.798.798 0 01-.608.517l-.55.092a1.875 1.875 0 00-1.566 1.849v.344c0 .916.663 1.699 1.567 1.85l.549.091c.281.047.508.25.608.517.06.162.127.321.198.478a.798.798 0 01-.064.796l-.324.453a1.875 1.875 0 00.2 2.416l.243.243c.648.648 1.67.733 2.416.2l.453-.324a.798.798 0 01.796-.064c.157.071.316.137.478.198.267.1.47.327.517.608l.092.55c.15.903.932 1.566 1.849 1.566h.344c.916 0 1.699-.663 1.85-1.567l.091-.549a.798.798 0 01.517-.608 7.52 7.52 0 00.478-.198.798.798 0 01.796.064l.453.324a1.875 1.875 0 002.416-.2l.243-.243c.648-.648.733-1.67.2-2.416l-.324-.453a.798.798 0 01-.064-.796c.071-.157.137-.316.198-.478.1-.267.327-.47.608-.517l.55-.091a1.875 1.875 0 001.566-1.85v-.344c0-.916-.663-1.699-1.567-1.85l-.549-.091a.798.798 0 01-.608-.517 7.507 7.507 0 00-.198-.478.798.798 0 01.064-.796l.324-.453a1.875 1.875 0 00-.2-2.416l-.243-.243a1.875 1.875 0 00-2.416-.2l-.453.324a.798.798 0 01-.796.064 7.462 7.462 0 00-.478-.198.798.798 0 01-.517-.608l-.091-.55a1.875 1.875 0 00-1.85-1.566h-.344zM12 15.75a3.75 3.75 0 100-7.5 3.75 3.75 0 000 7.5z" clip-rule="evenodd" />
              </svg>

              <span class="ml-3 flex-1 whitespace-nowrap">Akun</span>
            </a>
          </li>

        </ul>

        <!-- Extended Menu -->
        <div class="space-y-2 pt-2">
          <a href="<?= site_url('auth/logout') ?>" class="text-base bg-gray-800 text-gray-100 font-normal rounded-lg flex items-center hover:bg-gray-700 group mt-1 transition duration-75 flex items-center p-2">
            <svg class="w-6 h-6 text-gray-500 flex-shrink-0 group-hover:text-gray-100 transition duration-75" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M3 3a1 1 0 00-1 1v12a1 1 0 102 0V4a1 1 0 00-1-1zm10.293 9.293a1 1 0 001.414 1.414l3-3a1 1 0 000-1.414l-3-3a1 1 0 10-1.414 1.414L14.586 9H7a1 1 0 100 2h7.586l-1.293 1.293z" clip-rule="evenodd"></path>
            </svg>
            <span class="ml-3">Logout</span>

          </a>
        </div>
      </div>
    </div>
  </div>
</aside>

<div class="bg-gray-900 opacity-50 hidden fixed inset-0 z-10" id="sidebarBackdrop"></div>