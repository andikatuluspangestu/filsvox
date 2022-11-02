<body>
  <div class="container pt-2 px-2">
    <div class="table-responsive px-3 pt-2">
      <table class="" id="myTable">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Judul</th>
            <th scope="col">Kategori</th>
            <th scope="col">Publish</th>
            <th scope="col">Status</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody class="table-group-divider">
          <?php $i = 1; ?>
          <?php foreach ($articles as $article) : ?>
            <tr>
              <th scope="row"><?= $i++ ?></th>
              <td><?= $article->title ?></td>
              <?php foreach ($categories as $category) : ?>
                <?php if ($category->id == $article->kategori) : ?>
                  <td>
                    <?= $category->name ?>
                  </td>
                <?php endif; ?>
              <?php endforeach; ?>
              <td><?= $article->created_at ?></td>
              <td>
                <?php if ($article->draft === 'true') : ?>
                  <span>Draft</span>
                <?php else : ?>
                  <span>Published</span>
                <?php endif ?>
              </td>
              <td>
                <a href="<?= base_url('admin/post/edit/') . $article->id ?>" class="btn btn-primary btn-sm">Edit</a>
                <a href="#" class="btn btn-danger btn-sm" data-delete-url="<?= site_url('admin/post/delete/' . $article->id) ?>" role="button" onclick="deleteConfirm(this)">Delete</a>
              </td>
            </tr>
          <?php endforeach ?>
        </tbody>
      </table>
    </div>
  </div>
</body>