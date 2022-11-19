<!-- Chart Perbulan -->
<script>
  var dataBar = {
    labels: ["Jan", "Feb", "Mar", "Apr", "Mei", "Jun", "Jul", "Agu", "Sep", "Okt", "Nov", "Des"],
    datasets: [{
      borderColor: 'rgba(153, 102, 255, 1)',
      tension: 0.1,
      label: 'Artikel',
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

  var dataCategory = {
    labels: ["Horror", "Romance", "Action", "Korea", "Documentary", "Commedy", "Advanture", "Animated", "Family", "Fantasy", "Sci-fi", "Thriller", "Musical", "Drama"],
    datasets: [{
      backgroundColor: [
        'rgba(255, 99, 132, 1)',
        'rgba(54, 162, 235, 1)',
        'rgba(255, 206, 86, 1)',
        'rgba(75, 192, 192, 1)',
        'rgba(153, 102, 255, 1)',
        'rgba(255, 159, 64, 1)',
        'rgba(255, 99, 132, 1)',
        'rgba(54, 162, 235, 1)',
        'rgba(255, 206, 86, 1)',
        'rgba(75, 192, 192, 1)',
        'rgba(153, 102, 255, 1)',
        'rgba(255, 159, 64, 1)',
        'rgba(54, 162, 235, 1)',
        'rgba(255, 206, 86, 1)',
        'rgba(75, 192, 192, 1)',
        'rgba(153, 102, 255, 1)',
        'rgba(255, 159, 64, 1)',
      ],
      borderColor: [
        'rgba(255, 99, 132, 1)',
        'rgba(54, 162, 235, 1)',
        'rgba(255, 206, 86, 1)',
        'rgba(75, 192, 192, 1)',
        'rgba(153, 102, 255, 1)',
        'rgba(255, 159, 64, 1)',
        'rgba(255, 99, 132, 1)',
        'rgba(54, 162, 235, 1)',
        'rgba(255, 206, 86, 1)',
        'rgba(75, 192, 192, 1)',
        'rgba(153, 102, 255, 1)',
        'rgba(255, 159, 64, 1)',
        'rgba(54, 162, 235, 1)',
        'rgba(255, 206, 86, 1)',
        'rgba(75, 192, 192, 1)',
        'rgba(153, 102, 255, 1)',
        'rgba(255, 159, 64, 1)',
      ],
      borderWidth: 2,
      label: 'Artikel',
      hoverOffset: 4,
      // jumlah artikel per kategori pada tabel article yang ditulis oleh contributor current user
      data: [<?php echo $this->db->query("SELECT COUNT(*) as jml FROM article WHERE kategori = 1")->row()->jml; ?>,
        <?php echo $this->db->query("SELECT COUNT(*) as jml FROM article WHERE kategori = 2")->row()->jml; ?>,
        <?php echo $this->db->query("SELECT COUNT(*) as jml FROM article WHERE kategori = 3")->row()->jml; ?>,
        <?php echo $this->db->query("SELECT COUNT(*) as jml FROM article WHERE kategori = 4")->row()->jml; ?>,
        <?php echo $this->db->query("SELECT COUNT(*) as jml FROM article WHERE kategori = 5")->row()->jml; ?>,
        <?php echo $this->db->query("SELECT COUNT(*) as jml FROM article WHERE kategori = 6")->row()->jml; ?>,
        <?php echo $this->db->query("SELECT COUNT(*) as jml FROM article WHERE kategori = 7")->row()->jml; ?>,
        <?php echo $this->db->query("SELECT COUNT(*) as jml FROM article WHERE kategori = 8")->row()->jml; ?>,
        <?php echo $this->db->query("SELECT COUNT(*) as jml FROM article WHERE kategori = 9")->row()->jml; ?>,
        <?php echo $this->db->query("SELECT COUNT(*) as jml FROM article WHERE kategori = 10")->row()->jml; ?>,
        <?php echo $this->db->query("SELECT COUNT(*) as jml FROM article WHERE kategori = 11")->row()->jml; ?>,
        <?php echo $this->db->query("SELECT COUNT(*) as jml FROM article WHERE kategori = 12")->row()->jml; ?>,
        <?php echo $this->db->query("SELECT COUNT(*) as jml FROM article WHERE kategori = 13")->row()->jml; ?>,
        <?php echo $this->db->query("SELECT COUNT(*) as jml FROM article WHERE kategori = 14")->row()->jml; ?>,
        <?php echo $this->db->query("SELECT COUNT(*) as jml FROM article WHERE kategori = 15")->row()->jml; ?>,
        <?php echo $this->db->query("SELECT COUNT(*) as jml FROM article WHERE kategori = 16")->row()->jml; ?>,
        <?php echo $this->db->query("SELECT COUNT(*) as jml FROM article WHERE kategori = 17")->row()->jml; ?>
      ],
    }]
  };

  var ctx = document.getElementById("bymonth").getContext("2d");
  var BarChart = new Chart(ctx, {
    type: 'line',
    data: dataBar,
  });

  var ctx2 = document.getElementById("bycategory");
  var LineChart = new Chart(ctx2, {
    type: 'bar',
    data: dataCategory,
  });
</script>