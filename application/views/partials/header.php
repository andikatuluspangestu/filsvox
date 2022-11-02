<!DOCTYPE html>
<html lang="en" data-theme="cupcake">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Page SEO -->
	<title>Filsvox | Get Movies Review</title>

	<!-- App Vendors -->
	<link href="https://cdn.jsdelivr.net/npm/daisyui@2.31.0/dist/full.css" rel="stylesheet" type="text/css" />
	<script src="https://cdn.tailwindcss.com"></script>
	<script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

	<!-- Custom CSS -->
	<link rel="stylesheet" href="<?= base_url(); ?>/assets/css/style.css">

	<!-- Favicon -->
	<link rel="shortcut icon" href="https://cdn-icons-png.flaticon.com/512/3163/3163508.png" type="image/x-icon">

	// composer autoload
	require __DIR__ . '/vendor/autoload.php';

	// if you are not using composer
	// require_once 'path/to/algoliasearch.php';

	$client = \Algolia\AlgoliaSearch\SearchClient::create(
	'YourApplicationID',
	'YourWriteAPIKey'
	);

	$index = $client->initIndex('your_index_name');

</head>