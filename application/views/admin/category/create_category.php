<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <!-- Buat form buat category -->
  <form action="<?php echo base_url('admin/category/add') ?>" method="post">
    <input type="text" name="name" placeholder="Category">
    <button type="submit">Submit</button>
  </form>
</body>
</html>