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

  <link rel="apple-touch-icon" sizes="57x57" href="<?= base_url('/assets/apple-icon-57x57.png'); ?>">
  <link rel="apple-touch-icon" sizes="60x60" href="<?= base_url('/assets/apple-icon-60x60.png'); ?>">
  <link rel="apple-touch-icon" sizes="72x72" href="<?= base_url('/assets/apple-icon-72x72.png'); ?>">
  <link rel="apple-touch-icon" sizes="76x76" href="<?= base_url('/assets/apple-icon-76x76.png'); ?>">
  <link rel="apple-touch-icon" sizes="114x114" href="<?= base_url('/assets/apple-icon-114x114.png'); ?>">
  <link rel="apple-touch-icon" sizes="120x120" href="<?= base_url('/assets/apple-icon-120x120.png'); ?>">
  <link rel="apple-touch-icon" sizes="144x144" href="<?= base_url('/assets/apple-icon-144x144.png'); ?>">
  <link rel="apple-touch-icon" sizes="152x152" href="<?= base_url('/assets/apple-icon-152x152.png'); ?>">
  <link rel="apple-touch-icon" sizes="180x180" href="<?= base_url('/assets/apple-icon-180x180.png'); ?>">
  <link rel="icon" type="image/png" sizes="192x192" href="<?= base_url('/assets/android-icon-192x192.png'); ?>">
  <link rel="icon" type="image/png" sizes="32x32" href="<?= base_url('/assets/favicon-32x32.png'); ?>">
  <link rel="icon" type="image/png" sizes="96x96" href="<?= base_url('/assets/favicon-96x96.png'); ?>">
  <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url('/assets/favicon-16x16.png'); ?>">
  <link rel="manifest" href="/manifest.json">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="<?= base_url('/assets/ms-icon-144x144.png'); ?>">
  <meta name="theme-color" content="#ffffff">

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