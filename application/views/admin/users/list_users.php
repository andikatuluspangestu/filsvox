<!DOCTYPE html>
<html lang="en">

<head>
  <?php $this->load->view('admin/_partials/head.php') ?>

  <!-- All Table Vendors -->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">
  <!-- End All Table Vendors -->

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

    <?php

    // Required for the sidebar
    $this->load->view('/admin/_partials/side_nav.php');

    ?>

    <!-- Article Section -->
    <div id="main-content" class="h-full w-full bg-gray-0 relative overflow-y-auto lg:ml-64 pb-5">
      <div>

        <!-- Top Bar Artikel -->
        <div class="p-4 bg-gray-900 block sm:flex items-center justify-between border-gray-200 mt-5">
          <div class="mb-1 w-full">

          </div>
        </div>

        <!-- Tabel List Artikel -->
        <div class="flex flex-col">
          <div class="overflow-x-auto">
            <div class="align-middle inline-block min-w-full">
              <div class="shadow overflow-hidden text-gray-100">
                <?php $this->load->view('admin/users/user_table.php') ?>
              </div>
            </div>
          </div>

          <!-- Main modal -->
          <div id="defaultModal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
            <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">
              <!-- Modal content -->
              <div class="relative rounded-lg shadow bg-gray-700">
                <!-- Modal header -->
                <div class="flex justify-between items-start p-4 rounded-t border-b border-gray-600">
                  <h3 class="text-xl font-semibold text-white">
                    Tambah Data
                  </h3>
                  <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="defaultModal">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                    <span class="sr-only">Close modal</span>
                  </button>
                </div>
                <!-- Modal body -->
                <div class="p-6 space-y-6">

                  <form action="<?= base_url('admin/user/register'); ?>" method="post">
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

                    <div class="mb-6">
                      <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Email</label>
                      <input type="email" id="email" name="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="masukan email" required="">
                    </div>

                    <div class="flex mb-4">
                      <div class="w-1/2 mr-1">
                        <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Password</label>
                        <input type="password" id="password" name="password1" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="" placeholder="*****">
                      </div>
                      <div class="w-1/2 ml-1">
                        <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Ulangi Password</label>
                        <input type="password" id="password" name="password2" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="" placeholder="*****">
                      </div>
                    </div>

                    <div class="mb-4">
                      <label class="block text-white text-sm font-bold mb-2" for="role">Role</label>
                      <select class="ext-sm text-gray-200 px-4 py-3 rounded-lg w-full bg-gray-900 border border-gray-700 focus:outline-none focus:border-purple-400" id="role" name="role">
                        <option value="1">Admin</option>
                        <option value="2">Kontributor</option>
                      </select>
                    </div>
                </div>
                <!-- Modal footer -->
                <div class="flex items-center p-6 space-x-2 rounded-b border-t border-gray-200 dark:border-gray-600">
                  <button data-modal-toggle="defaultModal" type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                  <button data-modal-toggle="defaultModal" type="button" class="focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 bg-gray-700 text-gray-300 border-gray-500 hover:text-white hover:bg-gray-600 focus:ring-gray-600">Batal</button>
                </div>
                </form>
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