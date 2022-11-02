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
  </style>
</head>

<body>

  <!-- Navbar -->
  <?php $this->load->view('admin/_partials/navbar.php') ?>

  <!-- Main Section -->
  <main class="main flex overflow-hidden bg-white pt-16">

    <!-- Sidebar -->
    <?php $this->load->view('admin/_partials/side_nav.php') ?>

    <!-- Article Section -->
    <div id="main-content" class="h-full w-full bg-gray-50 relative overflow-y-auto lg:ml-64 pb-5">
      <div>

        <!-- Top Bar Artikel -->
        <div class="p-4 bg-white block sm:flex items-center justify-between border-b border-gray-200 lg:mt-1.5">
          <div class="mb-1 w-full">

            <div class="sm:flex">
              <div class="hidden sm:flex items-center sm:divide-x sm:divide-gray-100 mb-3 sm:mb-0">
                <h1 class="text-xl sm:text-2xl font-semibold text-gray-900">Daftar Artikel</h1>
              </div>
              <div class="flex items-center space-x-2 sm:space-x-3 ml-auto mr-12">

                <!-- Tombol Buat Artikel -->
                <a href="<?= base_url('/admin/post/new') ?>">
                  <button type="button" data-modal-toggle="add-user-modal" class="w-1/2 text-white bg-blue-600 hover:bg-cyan-700 focus:ring-4 focus:ring-cyan-200 font-medium inline-flex items-center justify-center rounded-lg text-sm px-5 py-2 text-center sm:w-auto">
                    <svg class="-ml-1 mr-2 h-6 w-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path>
                    </svg>
                    Tulis Artikel
                  </button>
                </a>

              </div>
            </div>
          </div>
        </div>

        <!-- Tabel List Artikel -->
        <div class="flex flex-col">
          <div class="overflow-x-auto">
            <div class="align-middle inline-block min-w-full">
              <div class="shadow overflow-hidden">
                <?php $this->load->view('admin/post_table.php') ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>

  <!-- All Javascripts Article Plugins - For Delete Alert -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>

  <script>
    // Create Datatable function without show entries
    $(document).ready(function() {
      $('#myTable').DataTable({
        "lengthChange": false,
        "searching": true,
        "info": false,
        "paging": true,
        "ordering": true,
        "lenghtMenu": [5, 10, 25, 50, 75, 100],
        "pageLength": 5,
        "language": {
          "paginate": {
            "previous": "Sebelumnya",
            "next": "Selanjutnya"
          }
        },
        "processing": true,
        "pagingType": "simple_numbers",
        "paginate_button": {
          "class": "paginate_button"
        },
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