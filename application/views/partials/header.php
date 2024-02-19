<!DOCTYPE html>
<html lang="id_ID" data-theme="cupcake">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">

	<!-- Title -->
	<title>Filsvox | Get Movies Review</title>

	<!-- App Vendors -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/daisyui/4.7.2/full.css" integrity="sha512-6pMIDmaC2CxSDPgfz/tly3PJ5uZ1zqxuFzlOmATyxpPcgfvLkSyh6EUZuUyTLjPwF/T2+dFVqq82M4ub1AWh0w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.css" integrity="sha512-ttaKI7P6G+denBpzGujwqjguFDsmxcxfVY+KovsyIpQ3vWbVdilbohqij8ewk16HN3vLghlCAXUWsl0KYQo6pA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.11.3/font/bootstrap-icons.min.css" integrity="sha512-dPXYcDub/aeb08c63jRq/k6GaKccl256JQy/AnOq7CAnEZ9FzSL9wSbcZkMp4R26vBsMLFYH4kQ67/bbV8XaCQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	<!-- Tailwind CSS -->
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
	<meta property="og:locale:alternate" content="id_ID" />
	<meta name="description" content="Tempat untuk melihat berbagai ulasan film menarik dan terbaru">
	<meta name"keyword" content="Filsvox - Get Movies Review, filsvox, film, movie, review, ulasanfilm, imdb, serialtv, rakor, drama">

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
	<script>
		navigator.serviceWorker.register("service-worker.js")
	</script>

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