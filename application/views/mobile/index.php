<?php $this->load->view('/mobile/partials/header') ?>

<body class="bg-slate-800 scrollbar-hide">

  <div id="myTabContent">

    <!-- Load Halaman -->
    <?php $this->load->view('/mobile/pages/home'); ?>
    <?php $this->load->view('/mobile/pages/category'); ?>
    <?php $this->load->view('/mobile/pages/explore'); ?>
    <?php $this->load->view('/mobile/pages/soon'); ?>

  </div>

  <!-- Bottom Navbar -->
  <div class="w-full">
    <?php $this->load->view('/mobile/partials/bottom-navbar.php'); ?>
  </div>

  <!-- Javascript Flowbite CDN JS -->
  <script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>

</body>

<?php $this->load->view('/mobile/partials/footer.php'); ?>