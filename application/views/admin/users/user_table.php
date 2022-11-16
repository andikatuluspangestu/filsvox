<body>
  <div class="container pt-2 px-2">
    <div class="table-responsive px-3 pt-2">
      <table class="bg-gray-800 p-2 mt-4 rounded text-white text-light" id="myTable">
        <button class="block text-white font-medium rounded-lg text-sm px-5 py-2.5 text-center bg-blue-600 hover:bg-blue-700 focus:ring-blue-800 mb-2" type="button" data-modal-toggle="defaultModal">
          Tambah Kontributor
        </button>
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">Username</th>
            <th scope="col">Email</th>
            <th scope="col">Role</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody class="table-group-divider text-white text-light">
          <?php $i = 1; ?>
          <?php foreach ($users as $user) : ?>
            <tr>
              <th scope="row"><?= $i++ ?></th>
              <td><?= $user->name ?></td>

              <td>
                <?= $user->username ?>
              </td>

              <!-- Tampilkan jumlah artikel draft pada setiap kategori -->
              <td>
                <?= $user->email ?>
              </td>

              <td>
                <!-- Jika role 1 tampilkan sebagai admin -->
                <?php if ($user->role == 1) : ?>
                  Admin
                <?php else : ?>
                  Kontributor
                <?php endif; ?>
              </td>

              <td>
                <a href="#" class="btn btn-danger btn-sm p-2" data-delete-url="<?= site_url('admin/user/delete/' . $user->id) ?>" role="button" onclick="deleteConfirm(this)"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                    <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                  </svg> </a>
                <a href="<?= site_url('admin/user/edit/' . $user->id) ?>" class="btn btn-warning btn-sm p-2" role="button"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                  </svg></a>
              </td>
            </tr>
          <?php endforeach ?>
        </tbody>
      </table>
    </div>
  </div>
</body>