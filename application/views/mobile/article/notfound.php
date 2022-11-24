<body class="bg-slate-800 scrollbar-hide">
  <!-- Tab Pertama -->
  <div class="w-full md:w-1/2 lg:w-1/4 pl-5 mt-5 pr-5 mb-5 lg:pl-2 lg:pr-2" id="profile" role="tabpanel" aria-labelledby="profile-tab">

    <div class="flex flex-col mt-2">
      <!-- Fixed Mobile Top Navbar Tailwind CSS -->
      <div class="fixed top-0 left-0 z-50 w-full bg-slate-900 shadow-lg">
        <div class="flex items center justify-between w-full px-4 py-4 mx-auto text-white">
          <!-- Icon SVG Back Arrow -->
          <a href="<?= base_url('/mobile') ?>" class="flex items-center justify-center w-10 h-10 p-2 text-white transition duration-200 rounded-2xl hover:text-slate-400 focus:outline-none">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
            </svg>
          </a>
          <span class="text-lg font-bold mr-auto pl-4 pt-1.5">
            Kembali
          </span>
        </div>
      </div>
      <div class="mt-20" style="height: 400px; color: white;">
        <h1>Tidak ada yang ditemukan</h1>
        <p>Kategori yang anda cari belum memiliki ulasan film apapun, silahkan pilih kategori lain.</p>
      </div>
    </div>
  </div>
</body>