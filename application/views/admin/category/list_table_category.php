<body>
  <div class="container pt-2 px-2">
    <div class="table-responsive px-3 pt-2">
      <table class="bg-gray-800 p-2 mt-5 rounded text-white text-light" id="myTable">
        <button class="block text-white focus:ring-4 focus:outline-none font-medium rounded-lg text-sm mb-3 px-5 py-2.5 text-center bg-blue-600 hover:bg-blue-700 focus:ring-blue-800" type="button" data-modal-toggle="authentication-modal">
          Tambah Kategori
        </button>
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Kategori</th>
            <th scope="col">Jumlah</th>
            <th scope="col">Draft</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody class="table-group-divider text-white text-light">
          <?php $i = 1; ?>
          <?php foreach ($categories as $category) : ?>
            <tr>
              <th scope="row"><?= $i++ ?></th>
              <td><?= $category->name ?></td>

              <td>
                <?= $this->category_model->get_article_count($category->id) ?>
              </td>

              <!-- Tampilkan jumlah artikel draft pada setiap kategori -->
              <td>
                <?= $this->category_model->get_article_draft_count($category->id) ?>
              </td>

              <td>
                <?php if ($current_user->role == 1) : ?>
                <a href="#" class="btn btn-danger btn-sm p-2" data-delete-url="<?= site_url('admin/category/delete/' . $category->id) ?>" role="button" onclick="deleteConfirm(this)"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                    <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                  </svg> </a>
                <?php endif; ?>
                <a href="<?= base_url('/search/kategori/') . $category->id; ?>" class="btn btn-secondary btn-sm" target="_blank"> Lihat Films</a>
              </td>
            </tr>
          <?php endforeach ?>
        </tbody>
      </table>
    </div>
  </div>
</body>