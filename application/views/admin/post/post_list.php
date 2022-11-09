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

        <!-- Tabel List Artikel -->
        <div class="flex flex-col">
          <div class="overflow-x-auto">
            <div class="align-middle inline-block min-w-full">
              <div class="shadow overflow-hidden text-gray-100">
                <?php $this->load->view('admin/post/post_table.php') ?>
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
          "searchPlaceholder": "  Cari Film",
          "search": "",
        },
        "processing": true,
        "pagingType": "simple_numbers",
        "paginate_button": {
          "class": "paginate_button",
          "active": "paginate_active",
          "disabled": "paginate_disabled"
        },
        dom: 'Bfrtip',
        buttons: [{
          text: 'Tulis Artikel',
          action: function(e, dt, node, config) {
            window.location.href = "<?= base_url('/admin/post/new') ?>";
          },
          className: 'btn btn-primary'
        }],
        searching: true,
        searching: [{
          "smart": true,
          className: 'form-control'
        }],
        "order": [
          [0, "asc"]
        ]
      });
    });
  </script>

  <script>
    function deleteConfirm(event) {
      Swal.fire({
        title: 'Konfirmasi Hapus!',
        text: 'Apakah kamu yakin menghapus item ini?',
        icon: 'warning',
        showCancelButton: true,
        cancelButtonText: 'Tidak',
        confirmButtonText: 'Ya Hapus',
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