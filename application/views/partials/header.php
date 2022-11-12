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

	<!-- Meta Name for SEO -->
	<meta name="description" content="Tempat untuk melihat berbagai ulasan film menarik dan terbaru">
	<meta name="robots" content="noindex,nofollow">
	<meta name="googlebot" content="noindex,nofollow">
	<meta name"keyword" content="film, movie, review, ulasanfilm, imdb, serialtv, rakor, drama">

	<style>
		/* Sembunyikan btn-toggle di layar laptop */

		@media (min-width: 1024px) {
			#btn-toggle {
				display: none;
			}
		}
	</style>

	<script>
		// Jika pada media query smartphone arahkan ke google.com
		if (window.matchMedia("(max-width: 768px)").matches) {
			var mobile = "<?= base_url('/mobile'); ?>"
			window.location.replace(mobile);
		}
	</script>

</head>