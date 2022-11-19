<body class="font-montserrat text-sm bg-slate-900 dark:bg-slate-900 ">
  <div class="flex min-h-screen  2xl:max-w-screen-2xl 2xl:mx-auto 2xl:border-x-2 2xl:border-gray-200 dark:2xl:border-zinc-700 ">

    <!-- Sidebar Kiri -->
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
        <div class="max-w-lg mx-auto rounded-xl shadow-md overflow-hidden md:max-w-3xl mt-20 mb-5 bg-slate-800">
          <div class="md:flex">
            <div class="md:flex-shrink-0">

              <!-- Jika tidak ada video maka tampilkan gambar -->
              <img class="w-full object-cover md:h-full md:w-48" src="<?php echo $article->cover ?>" alt="" style="height: 235px !important;">

            </div>
            <div class="p-8">
              <h1 class="uppercase tracking-wide text-gray-300 dark:text-gray-300 font-semibold">
                <?= $article->title ? html_escape($article->title) : "No Title" ?>
                </h3>

                <div class="mt-2 text-gray-300 text-1xl">
                  <table>
                    <tr>
                      <td>Directors</td>
                      <td> &nbsp; : &nbsp; </td>
                      <td><?= $article->directors ?></td>
                    </tr>
                    <tr>
                      <td>Writers</td>
                      <td> &nbsp; : &nbsp; </td>
                      <td><?= $article->writers ?></td>
                    </tr>
                    <tr>
                      <td>Actors</td>
                      <td> &nbsp; : &nbsp; </td>
                      <td><?= $article->actors ?></td>
                    </tr>
                    <tr>
                      <td>Rilis</td>
                      <td> &nbsp; : &nbsp; </td>
                      <td><?= $article->release_date ?></td>
                    </tr>
                    <!-- Hitung jumlah visitor -->
                    <!-- <tr>
                      <td>Views</td>
                      <td> &nbsp; : &nbsp; </td>
                      <td>
                        <?php
                        echo $article->visitor;
                        ?>
                      </td>
                    </tr> -->
                  </table>
                  <br>

                  <?php foreach ($categories as $category) : ?>
                    <?php if ($category->id == $article->kategori) : ?>
                      <label class="btn btn-sm"><?= $category->name ?></label>
                    <?php endif; ?>
                  <?php endforeach; ?>

                  <label for="my-modal-5" class="btn btn-sm bg-red-700 text-gray-100 hover:bg-red-800">Watch Trailer</label>
                </div>
            </div>
          </div>
        </div>

        <!-- Alur Cerita Film -->
        <h2 class="border-l-4 border-slate-400 text-2xl text-gray-400 pl-2 mt-8">Alur Cerita</h2>
        <p class="mb-3 text-gray-100 first-line:uppercase first-line:tracking-widest first-letter:text-7xl first-letter:font-bold first-letter:text-gray-100 first-letter:text-gray-100 first-letter:mr-3 first-letter:float-left pb-5 pt-3">
          <?= htmlentities($article->content) ?>
        </p>

      </section>

      <!-- List Ulasan -->
      <section id="ulasan">

        <!-- Ulasan Pengguna -->
        <!-- <h2 class="border-l-4 border-slate-400 text-2xl text-gray-400 pl-2 mt-8">Ulasan Pengguna</h2> -->

        <!-- List Ulasan -->
        <!-- <div class="testimonial-1 md:py-12">
          <div class="container mx-auto px-4">
            <div class="md:flex md:flex-wrap md:-mx-4">

              <div class="md:w-1/2 md:px-4 mt-6 md:mt-0">
                <div class="comments-list p-6 border-1 border-solid flex hover:border-indigo-400 hover:bg-slate-700 transition-colors duration-300 bg-slate-800 rounded" id="comments-list">
                  <div>
                    <p class="text-gray-400">"FWR Bootstrap Blocks is exactly what our business has been lacking. FWR Bootstrap Blocks is both attractive and highly adaptable. Man, this thing is getting better and better as I learn more about it."</p>
                    <div class="text-gray-400 font-bold uppercase mt-6">- Candace H.</div>
                    <div class="text-gray-400">Google</div>
                  </div>
                </div>
              </div>

              <div class="md:w-1/2 md:px-4 mt-6 md:mt-0">
                <div class="comments-list p-6 border-1 border-solid flex hover:border-indigo-400 hover:bg-slate-700 transition-colors duration-300 bg-slate-800 rounded" id="comments-list">
                  <div>
                    <p class="text-gray-400">"FWR Bootstrap Blocks is exactly what our business has been lacking. FWR Bootstrap Blocks is both attractive and highly adaptable. Man, this thing is getting better and better as I learn more about it."</p>
                    <div class="text-gray-400 font-bold uppercase mt-6">- Candace H.</div>
                    <div class="text-gray-400">Google</div>
                  </div>
                </div>
              </div>

              <a href="#" class="btn btn-sm bg-slate-800 mt-5 ml-5 hover:bg-slate-700">Ulasan lainnya</a>
            </div>
          </div>
        </div> -->

      </section>

      <!-- Tambah Ulasan -->
      <section id="tambah-ulasan">
        <h2 class="border-l-4 border-slate-400 text-2xl text-gray-400 pl-2 mt-5">Ulasan Pengguna</h2>
        <div class="m-3" id="disqus_thread">
        </div>
      </section>

      <!-- Trailer Modal -->
      <input type="checkbox" id="my-modal-5" class="modal-toggle" />
      <div class="modal">
        <div class="modal-box w-11/12 max-w-5xl bg-slate-800">
          <?php if ($article->trailer == null) : ?>
            <div class="modal-body">
              <p class="text-gray-100">Trailer tidak tersedia untuk saat ini</p>
            </div>
            <div class="modal-action">
              <label for="my-modal-5" class="btn btn-sm">Close</label>
            </div>
          <?php else : ?>
            <iframe class="rounded-2xl" width="100%" height="412px" src="https://www.youtube.com/embed/<?= $article->trailer ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <div class="modal-action">
              <label for="my-modal-5" class="btn btn-sm">Close</label>
            </div>
          <?php endif; ?>
        </div>
      </div>

    </main>

    <!-- Sidebar Kanan -->
    <?php
    $this->load->view('partials/sidebar-kanan');
    ?>

  </div>

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