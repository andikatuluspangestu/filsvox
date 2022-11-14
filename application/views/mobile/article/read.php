<?php $this->load->view('/mobile/partials/header') ?>

<body class="bg-slate-800 scrollbar-hide">

  <div id="myTabContent">

    <div class="fixed top-0 left-0 z-50 w-full bg-slate-900 shadow-lg">
      <div class="flex items center justify-between w-full px-4 py-4 mx-auto text-white">
        <!-- Icon SVG Back Arrow -->
        <a href="<?= base_url('/mobile') ?>" class="flex items-center justify-center w-10 h-10 p-2 text-white transition duration-200 rounded-2xl hover:text-slate-400 focus:outline-none">
          <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
          </svg>
        </a>
        <!-- Tampilkan title di samping kanan Icon SVG -->
        <span class="text-lg font-bold mr-auto pl-4 pt-1.5">
          Kembali
        </span>

      </div>
    </div>

    <div class="block mt-20 p-6 max-w-sm rounded-lg shadow-md bg-gray-800">
      <div class="md:flex-shrink-0">

        <?php if ($article->trailer == null) : ?>
          <div class="modal-body">
            <p class="text-gray-100">Trailer tidak tersedia untuk saat ini</p>
          </div>
        <?php else : ?>
          <iframe class="rounded-2xl mb-5" width="100%" height="100%" src="https://www.youtube.com/embed/<?= $article->trailer ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <?php endif; ?>

      </div>
      <h5 class="mb-2 text-2xl font-bold tracking-tight text-white">
        <?= $article->title ? html_escape($article->title) : "No Title" ?>
      </h5>

      <?php foreach ($categories as $category) : ?>
        <?php if ($category->id == $article->kategori) : ?>
          <span class="text-xs font-semibold mr-2 px-2.5 py-0.5 rounded bg-gray-700 text-gray-300"><?php echo $category->name ?> </span>
        <?php endif; ?>
      <?php endforeach; ?>

      <h2 class="border-l-4 border-slate-400 text-2xl text-gray-400 pl-2 mt-8 mb-3">Alur Cerita</h2>
      <p class="mb-3 font-light text-left text-gray-400">
        <?= $article->content ? html_escape($article->content) : "No Content" ?>
      </p>
    </div>

    <!-- Ulasan -->
    <div class="block m-2 p-6 max-w-sm rounded-lg border shadow-md bg-gray-800 border-gray-700">
      <section id="tambah-ulasan">
        <div class="m-3" id="disqus_thread">
        </div>
      </section>
    </div>

  </div>

  <!-- Javascript Flowbite CDN JS -->
  <script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>
  <!-- Disqus Plugin Comments -->
  <script>
    (function() {
      var d = document,
        s = d.createElement('script');
      s.src = 'https://filsvox.disqus.com/embed.js';
      s.setAttribute('data-timestamp', +new Date());
      (d.head || d.body).appendChild(s);
    })();
  </script>
  <script id="dsq-count-scr" src="//filsvox.disqus.com/count.js" async></script>

</body>

<?php $this->load->view('/mobile/partials/footer.php'); ?>