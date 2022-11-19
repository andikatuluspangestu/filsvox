<!-- Chart Perbulan -->
<script>
  var dataBar = {
    labels: ["Jan", "Feb", "Mar", "Apr", "Mei", "Jun", "Jul", "Agu", "Sep", "Okt", "Nov", "Des"],
    datasets: [{
      borderColor: 'rgba(153, 102, 255, 1)',
      tension: 0.1,
      label: 'Artikel',
      data: [
        // Tampilkan jumlah artikel pada tabel article yang memiliki contributor == $current_user->name per bulan\
        <?php echo $this->db->query("SELECT * FROM article WHERE contributor = '$current_user->name' AND MONTH(created_at) = '1'")->num_rows(); ?>,
        <?php echo $this->db->query("SELECT * FROM article WHERE contributor = '$current_user->name' AND MONTH(created_at) = '2'")->num_rows(); ?>,
        <?php echo $this->db->query("SELECT * FROM article WHERE contributor = '$current_user->name' AND MONTH(created_at) = '3'")->num_rows(); ?>,
        <?php echo $this->db->query("SELECT * FROM article WHERE contributor = '$current_user->name' AND MONTH(created_at) = '4'")->num_rows(); ?>,
        <?php echo $this->db->query("SELECT * FROM article WHERE contributor = '$current_user->name' AND MONTH(created_at) = '5'")->num_rows(); ?>,
        <?php echo $this->db->query("SELECT * FROM article WHERE contributor = '$current_user->name' AND MONTH(created_at) = '6'")->num_rows(); ?>,
        <?php echo $this->db->query("SELECT * FROM article WHERE contributor = '$current_user->name' AND MONTH(created_at) = '7'")->num_rows(); ?>,
        <?php echo $this->db->query("SELECT * FROM article WHERE contributor = '$current_user->name' AND MONTH(created_at) = '8'")->num_rows(); ?>,
        <?php echo $this->db->query("SELECT * FROM article WHERE contributor = '$current_user->name' AND MONTH(created_at) = '9'")->num_rows(); ?>,
        <?php echo $this->db->query("SELECT * FROM article WHERE contributor = '$current_user->name' AND MONTH(created_at) = '10'")->num_rows(); ?>,
        <?php echo $this->db->query("SELECT * FROM article WHERE contributor = '$current_user->name' AND MONTH(created_at) = '11'")->num_rows(); ?>,
        <?php echo $this->db->query("SELECT * FROM article WHERE contributor = '$current_user->name' AND MONTH(created_at) = '12'")->num_rows(); ?>
      ]
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
      data: [<?php echo $this->db->query("SELECT COUNT(*) as jml FROM article WHERE kategori = 1 AND contributor = '$current_user->name'")->row()->jml; ?>,
        <?php echo $this->db->query("SELECT COUNT(*) as jml FROM article WHERE kategori = 2 AND contributor = '$current_user->name'")->row()->jml; ?>,
        <?php echo $this->db->query("SELECT COUNT(*) as jml FROM article WHERE kategori = 3 AND contributor = '$current_user->name'")->row()->jml; ?>,
        <?php echo $this->db->query("SELECT COUNT(*) as jml FROM article WHERE kategori = 4 AND contributor = '$current_user->name'")->row()->jml; ?>,
        <?php echo $this->db->query("SELECT COUNT(*) as jml FROM article WHERE kategori = 5 AND contributor = '$current_user->name'")->row()->jml; ?>,
        <?php echo $this->db->query("SELECT COUNT(*) as jml FROM article WHERE kategori = 6 AND contributor = '$current_user->name'")->row()->jml; ?>,
        <?php echo $this->db->query("SELECT COUNT(*) as jml FROM article WHERE kategori = 7 AND contributor = '$current_user->name'")->row()->jml; ?>,
        <?php echo $this->db->query("SELECT COUNT(*) as jml FROM article WHERE kategori = 8 AND contributor = '$current_user->name'")->row()->jml; ?>,
        <?php echo $this->db->query("SELECT COUNT(*) as jml FROM article WHERE kategori = 9 AND contributor = '$current_user->name'")->row()->jml; ?>,
        <?php echo $this->db->query("SELECT COUNT(*) as jml FROM article WHERE kategori = 10 AND contributor = '$current_user->name'")->row()->jml; ?>,
        <?php echo $this->db->query("SELECT COUNT(*) as jml FROM article WHERE kategori = 11 AND contributor = '$current_user->name'")->row()->jml; ?>,
        <?php echo $this->db->query("SELECT COUNT(*) as jml FROM article WHERE kategori = 12 AND contributor = '$current_user->name'")->row()->jml; ?>,
        <?php echo $this->db->query("SELECT COUNT(*) as jml FROM article WHERE kategori = 13 AND contributor = '$current_user->name'")->row()->jml; ?>,
        <?php echo $this->db->query("SELECT COUNT(*) as jml FROM article WHERE kategori = 14 AND contributor = '$current_user->name'")->row()->jml; ?>,
        <?php echo $this->db->query("SELECT COUNT(*) as jml FROM article WHERE kategori = 15 AND contributor = '$current_user->name'")->row()->jml; ?>,
        <?php echo $this->db->query("SELECT COUNT(*) as jml FROM article WHERE kategori = 16 AND contributor = '$current_user->name'")->row()->jml; ?>,
        <?php echo $this->db->query("SELECT COUNT(*) as jml FROM article WHERE kategori = 17 AND contributor = '$current_user->name'")->row()->jml; ?>
      ],
    }]
  };

  var ctx = document.getElementById("bymonthuser").getContext("2d");
  var BarChart = new Chart(ctx, {
    type: 'line',
    data: dataBar,
  });

  var ctx2 = document.getElementById("bycategoryuser");
  var LineChart = new Chart(ctx2, {
    type: 'bar',
    data: dataCategory,
  });
</script>