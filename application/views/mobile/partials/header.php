<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FILSVOX | Get Movies Review</title>
  <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.3/dist/flowbite.min.css" />

  <script src="https://cdn.tailwindcss.com"></script>

  <!-- Favicon -->
  <link rel="shortcut icon" href="<?= base_url('/assets/images/icon.png'); ?>" type="image/x-icon">

  <!-- Meta Property -->
  <meta property="og:site_name" content="FILSVOX - Get Movies Review">
  <meta property="og:title" content="FILSVOX - Get Movies Review" />
  <meta property="og:description" content="Tempat untuk melihat berbagai ulasan film menarik dan terbaru" />
  <meta property="og:image" itemprop="image" content="<?= base_url('/assets/images/thumbnail.png'); ?>">
  <meta property="og:type" content="website" />
  <meta property="og:url" content="https://filsvox.my.id/" />
  <meta property="og:locale" content="id_ID" />
  <meta property="og:locale:alternate" content="en_US" />

  <!-- Meta Name for SEO -->
  <meta name="description" content="Tempat untuk melihat berbagai ulasan film menarik dan terbaru">
  <meta name="robots" content="noindex,nofollow">
  <meta name="googlebot" content="noindex,nofollow">
  <meta name"keyword" content="film, movie, review, ulasanfilm, imdb, serialtv, rakor, drama">

  <style>
    /* For Webkit-based browsers (Chrome, Safari and Opera) */
    .scrollbar-hide::-webkit-scrollbar {
      display: none;
    }

    /* For IE, Edge and Firefox */
    .scrollbar-hide {
      -ms-overflow-style: none;
      /* IE and Edge */
      scrollbar-width: none;
      /* Firefox */
    }

    /* Jika aria-selected bernilai true jadikan text warna merah */
    [aria-selected="true"] {
      color: #e53e3e !important;
    }
  </style>
</head>