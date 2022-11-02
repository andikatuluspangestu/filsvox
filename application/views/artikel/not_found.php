<body class="font-montserrat text-sm bg-white dark:bg-slate-900 ">
  <div class="flex min-h-screen  2xl:max-w-screen-2xl 2xl:mx-auto 2xl:border-x-2 2xl:border-gray-200 dark:2xl:border-zinc-700 ">

    <!-- Left Sidebar -->
    <?php
    $this->load->view('partials/sidebar-kiri');
    ?>

    <main class=" flex-1 py-10  px-5 sm:px-10 ">

      <!-- Responsive Header -->
      <?php
      $this->load->view('partials/responsive.php');
      ?>

      <section id="deskripsi">

        <!-- Deskripsi Film -->
        <div class="max-w-lg mx-auto bg-white rounded-xl shadow-md overflow-hidden md:max-w-3xl mt-20 mb-5 dark:bg-slate-800">
          <div class="md:flex p-5">
            <h1 class="text-center text-white"> Artikel tidak tersedia </h1>
          </div>
        </div>

      </section>

    </main>

    <!-- Sidebar Kanan -->
    <?php
    $this->load->view('partials/sidebar-kanan');
    ?>

  </div>
</body>