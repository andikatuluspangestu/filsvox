<!DOCTYPE html>
<html lang="en" data-theme="cupcake">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Title -->
	<title>Filsvox | Get Movies Review</title>

	<!-- App Vendors -->
	<link href="https://cdn.jsdelivr.net/npm/daisyui@2.31.0/dist/full.css" rel="stylesheet" type="text/css" />
	<script src="https://cdn.tailwindcss.com"></script>
	<script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
	<link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.3/dist/flowbite.min.css" />

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
	<meta name="description" content="Tempat untuk melihat berbagai ulasan film menarik dan terbaru">
	<meta name"keyword" content="film, movie, review, ulasanfilm, imdb, serialtv, rakor, drama">

	<!-- PWA Initialize -->
	<link rel="manifest" href="web.webmanifest">
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
		/* Sembunyikan btn-toggle di layar laptop */

		@media (min-width: 1024px) {
			#btn-toggle {
				display: none;
			}
		}
	</style>

	<script>
		// Jika pada media query smartphone arahkan halaman web
		if (window.matchMedia("(max-width: 768px)").matches) {
			var mobile = "<?= base_url('/mobile'); ?>"
			window.location.replace(mobile);
		}
	</script>

</head>