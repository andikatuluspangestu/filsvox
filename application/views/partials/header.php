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

	<script src="<?= base_url('/assets/js/redirection-mobile.js'); ?>"></script>
	<script>
		// Buat variabel untuk menyimpan link halaman mobile
		var mobile = "localhost/filsvox/mobile";

		SA.redirection_mobile({
			mobile_url: mobile,
			mobile_prefix: "https",
			keep_path: true,
			keep_query: true
		});
	</script>

</head>