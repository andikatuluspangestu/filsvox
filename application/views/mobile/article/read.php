<?php $this->load->view('/mobile/partials/header') ?>

<body class="bg-slate-800 scrollbar-hide">

  <div id="myTabContent">

    <div class="block m-2 p-6 max-w-sm rounded-lg border shadow-md bg-gray-800 border-gray-700">
      <div class="md:flex-shrink-0">

        <!-- Jika tidak ada video maka tampilkan gambar -->
        <?php if ($article->trailer == null) { ?>
          <img class="w-full object-cover md:h-full md:w-48 rounded mb-4" src="<?php echo $article->cover ?>" alt="" style="height: 220px !important;">
        <?php } else { ?>
          <iframe class="h-48 w-full object-cover md:h-full md:w-48" src="<?php echo $article->trailer ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <?php } ?>

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