<!DOCTYPE html>
<html lang="en">

<head>
  <?php $this->load->view('admin/_partials/head.php') ?>
</head>


<body class="bg-gray-900">

  <?php $this->load->view('admin/_partials/navbar.php') ?>

  <main class="main flex overflow-hidden bg-white pt-16">
    <?php $this->load->view('admin/_partials/side_nav.php') ?>

    <div id="main-content" class="h-full w-full bg-gray-900 relative overflow-y-auto lg:ml-64">

      <!-- Main Content -->
      <div>
        <div class="pt-6 px-4">
          <div class="mt-4 w-full grid grid-cols-1 md:grid-cols-4 xl:grid-cols-3 gap-4">

            <div class="bg-cyan-600 border-1 shadow rounded-lg p-4 sm:p-6 xl:p-8">
              <div class="flex items-center">
                <div class="flex-shrink-0">
                  <span class="text-2xl sm:text-3xl text-white leading-none font-bold"><?= $article_count ?></span>
                  <a href="<?= site_url('admin/post') ?>">
                    <h3 class="text-base font-normal text-white">
                      Artikel Terpublikasi
                    </h3>
                  </a>

                </div>
              </div>
            </div>

            <div class="bg-gray-600 shadow rounded-lg p-4 sm:p-6 xl:p-8">
              <div class="flex items-center">
                <div class="flex-shrink-0">
                  <span class="text-2xl sm:text-3xl leading-none font-bold text-white"><?= $draft_count ?></span>
                  <h3 class="text-base font-normal text-white">
                    Artikel dalam Draft
                  </h3>
                </div>
              </div>
            </div>

            <!-- <div class="bg-pink-600 shadow rounded-lg p-4 sm:p-6 xl:p-8">
              <div class="flex items-center">
                <div class="flex-shrink-0">
                  <span class="text-2xl sm:text-3xl leading-none font-bold text-white"><?= $user_count ?></span>
                  <h3 class="text-base font-normal text-white">
                    Pengguna Terdaftar
                  </h3>
                </div>
              </div>
            </div> -->

            <div class="bg-indigo-600 shadow rounded-lg p-4 sm:p-6 xl:p-8">
              <div class="flex items-center">
                <div class="flex-shrink-0">
                  <span class="text-2xl sm:text-3xl leading-none font-bold text-white"><?= $category_count; ?></span>
                  <h3 class="text-base font-normal text-white">
                    Kategori
                  </h3>
                </div>
              </div>
            </div>
          </div>

          <div class="grid grid-cols-1 2xl:grid-cols-2 xl:gap-4 my-4">
            <!-- Top Sales Card -->
            <div class="bg-gray-800 shadow rounded-lg mb-4 p-4 sm:p-6 h-full">
              <div>
                <canvas class="p-5 text-light" id="chartLine"></canvas>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>

  <!-- Required chart.js -->
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

  <!-- Chart line -->
  <script>
    const labels = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
    const data = {
      labels: labels,
      datasets: [{
        label: "Artikel",
        backgroundColor: "hsl(252, 82.9%, 67.8%)",
        borderColor: "hsl(252, 82.9%, 67.8%)",
        color: "#fff",

        // Ambil data artikel berdasarkan bulan di tabel article
        data: [<?php echo $this->db->query("SELECT COUNT(*) as jml FROM article WHERE MONTH(created_at) = 1")->row()->jml; ?>,
          <?php echo $this->db->query("SELECT COUNT(*) as jml FROM article WHERE MONTH(created_at) = 2")->row()->jml; ?>,
          <?php echo $this->db->query("SELECT COUNT(*) as jml FROM article WHERE MONTH(created_at) = 3")->row()->jml; ?>,
          <?php echo $this->db->query("SELECT COUNT(*) as jml FROM article WHERE MONTH(created_at) = 4")->row()->jml; ?>,
          <?php echo $this->db->query("SELECT COUNT(*) as jml FROM article WHERE MONTH(created_at) = 5")->row()->jml; ?>,
          <?php echo $this->db->query("SELECT COUNT(*) as jml FROM article WHERE MONTH(created_at) = 6")->row()->jml; ?>,
          <?php echo $this->db->query("SELECT COUNT(*) as jml FROM article WHERE MONTH(created_at) = 7")->row()->jml; ?>,
          <?php echo $this->db->query("SELECT COUNT(*) as jml FROM article WHERE MONTH(created_at) = 8")->row()->jml; ?>,
          <?php echo $this->db->query("SELECT COUNT(*) as jml FROM article WHERE MONTH(created_at) = 9")->row()->jml; ?>,
          <?php echo $this->db->query("SELECT COUNT(*) as jml FROM article WHERE MONTH(created_at) = 10")->row()->jml; ?>,
          <?php echo $this->db->query("SELECT COUNT(*) as jml FROM article WHERE MONTH(created_at) = 11")->row()->jml; ?>,
          <?php echo $this->db->query("SELECT COUNT(*) as jml FROM article WHERE MONTH(created_at) = 12")->row()->jml; ?>
        ],
      }]
    };

    const configLineChart = {
      type: "bar",
      data,
      options: {
        animation: true
      },
    };

    var chartLine = new Chart(
      document.getElementById("chartLine"),
      configLineChart
    );
  </script>
</body>

</html>