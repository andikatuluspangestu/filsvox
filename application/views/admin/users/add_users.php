<!DOCTYPE html>
<html lang="en">

<head>
  <?php $this->load->view('admin/_partials/head.php') ?>
  <link rel="stylesheet" href="<?= base_url('assets/css/datatables/jquery.dataTables.min.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap/bootstrap.min.css') ?>" />
  <link rel="stylesheet" href="<?= base_url('assets/css/datatables/dataTables.bootstrap5.min.css') ?>" />
  <style>
    .paginate_button {
      padding: 1px !important;
      border: blue !important;
    }

    .form-control {
      margin-bottom: 40px !important;
      color: white !important;
    }

    .search {
      color: white !important;
    }
  </style>
</head>

<body class="bg-gray-900">

  <!-- Navbar -->
  <?php $this->load->view('admin/_partials/navbar.php') ?>

  <!-- Main Section -->
  <main class="main flex overflow-hidden bg-gray-900">

    <!-- Sidebar -->
    <?php $this->load->view('admin/_partials/side_nav.php') ?>

    <!-- Article Section -->
    <div id="main-content" class="h-full w-full bg-gray-0 relative overflow-y-auto lg:ml-64 pb-5">
      <div>

        <!-- Top Bar Artikel -->
        <div class="p-4 bg-gray-900 block sm:flex items-center justify-between border-gray-200 mt-5">
          <div class="mb-1 w-full">

          </div>
        </div>

        <!-- Tabel List Kontributor -->
        <div class="flex flex-col">
          <div class="overflow-x-auto">
            <div class="align-middle inline-block min-w-full">
              <div class="shadow overflow-hidden text-gray-100">
                <?php $this->load->view('admin/users/user_table.php') ?>
              </div>
            </div>
          </div>

          <!-- Main modal -->
          <div id="authentication-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full justify-center items-center">
            <div class="relative p-4 w-full max-w-md h-full md:h-auto">
              <!-- Modal content -->
              <div class="relative rounded-lg shadow bg-gray-700">
                <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-toggle="authentication-modal">
                  <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                  </svg>
                  <span class="sr-only">Close modal</span>
                </button>
                <div class="py-6 px-6 lg:px-8">
                  <h3 class="mb-4 text-xl font-medium text-gray-100 dark:text-white">Tambah Kontributor</h3>
                  <form action="<?= base_url('auth/register'); ?>" method="post">
                    <div class="py-4 px-8">
                      <div class="flex mb-4">
                        <div class="w-1/2 mr-1">
                          <label class="block text-white text-sm font-bold mb-2" for="first_name">Nama Lengkap</label>
                          <input class="ext-sm text-gray-200 px-4 py-3 rounded-lg w-full bg-gray-900 border border-gray-700 focus:outline-none focus:border-purple-400" id="first_name" type="text" placeholder="Masukan nama lengkap" name="name">
                        </div>
                        <div class="w-1/2 ml-1">
                          <label class="block text-white text-sm font-bold mb-2" for="last_name">Username</label>
                          <input class="ext-sm text-gray-200 px-4 py-3 rounded-lg w-full bg-gray-900 border border-gray-700 focus:outline-none focus:border-purple-400" id="last_name" type="text" placeholder="Ketik username kamu" name="username">
                        </div>
                      </div>
                      <div class="mb-4">
                        <label class="block text-white text-sm font-bold mb-2" for="email">Email</label>
                        <input class="ext-sm text-gray-200 px-4 py-3 rounded-lg w-full bg-gray-900 border border-gray-700 focus:outline-none focus:border-purple-400" id="email" type="email" placeholder="namakamu@mail.com" name="email">
                      </div>
                      <!-- Hidden Role -->
                      <input type="hidden" name="role" value="2">
                      <div class="mb-4">
                        <label class="block text-white text-sm font-bold mb-2" for="password">Password</label>
                        <input class="ext-sm text-gray-200 px-4 py-3 rounded-lg w-full bg-gray-900 border border-gray-700 focus:outline-none focus:border-purple-400" id="password1" type="password" placeholder="*******" name="password1">
                      </div>
                      <div class="mb-4">
                        <label class="block text-white text-sm font-bold mb-2" for="password">Ulangi Password</label>
                        <input class="ext-sm text-gray-200 px-4 py-3 rounded-lg w-full bg-gray-900 border border-gray-700 focus:outline-none focus:border-purple-400" id="password2" type="password" placeholder="*******" name="password2">
                      </div>
                      <!-- Input Role -->
                      <div class="mb-4">
                        <label class="block text-white text-sm font-bold mb-2" for="role">Role</label>
                        <select class="ext-sm text-gray-200 px-4 py-3 rounded-lg w-full bg-gray-900 border border-gray-700 focus:outline-none focus:border-purple-400" id="role" name="role">
                          <option value="1">Admin</option>
                          <option value="2">Kontributor</option>
                        </select>
                      </div>
                      <div class="flex items-center justify-between pb-4 mt-4">
                        <button class="bg-blue-600 hover:bg-blue-800 text-white font-bold py-2 px-4 rounded-lg" type="submit">
                          Submit
                        </button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>


        </div>
      </div>
    </div>
  </main>

  <!-- All Javascripts Article Plugins - For Delete Alert -->
  <script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>

  <script>
    // Create Datatable function without show entries
    $(document).ready(function() {
      $('#myTable').DataTable({
        "lengthChange": false,
        "info": false,
        "paging": true,
        "ordering": true,
        "lenghtMenu": [5, 10, 25, 50, 75, 100],
        "pageLength": 5,
        "language": {
          "paginate": {
            "previous": "Sebelumnya",
            "next": "Selanjutnya"
          },
          "zeroRecords": "Data tidak ditemukan",
          "info": "Menampilkan halaman _PAGE_ dari _PAGES_",
          "infoEmpty": "Tidak ada data yang tersedia",
        },
        "processing": true,
        "pagingType": "simple_numbers",
        "paginate_button": {
          "class": "paginate_button",
          "active": "paginate_active",
          "disabled": "paginate_disabled"
        },
        dom: 'Bfrtip',
        // buttons: [{
        //   text: 'Tambah Kategori',
        //   action: function(e, dt, node, config) {
        //     window.location.href = "<?= base_url('/admin/post/new') ?>";
        //   },
        //   className: 'btn btn-primary'
        // }],
        searching: false,
        "order": [
          [0, "asc"]
        ]
      });
    });
  </script>

  <script>
    function deleteConfirm(event) {
      Swal.fire({
        title: 'Delete Confirmation!',
        text: 'Are you sure to delete the item?',
        icon: 'warning',
        showCancelButton: true,
        cancelButtonText: 'No',
        confirmButtonText: 'Yes Delete',
        confirmButtonColor: 'red'
      }).then(dialog => {
        if (dialog.isConfirmed) {
          window.location.assign(event.dataset.deleteUrl);
        }
      });
    }
  </script>

  <?php if ($this->session->flashdata('message')) : ?>
    <script>
      const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000,
        timerProgressBar: true,
        didOpen: (toast) => {
          toast.addEventListener('mouseenter', Swal.stopTimer)
          toast.addEventListener('mouseleave', Swal.resumeTimer)
        }
      })

      Toast.fire({
        icon: 'success',
        title: '<?= $this->session->flashdata('message') ?>'
      })
    </script>
  <?php endif ?>

</body>

</html>