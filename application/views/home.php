<body class="font-montserrat text-sm bg-slate-900 dark:bg-slate-900 mt-5">
    <div class="flex min-h-screen  2xl:max-w-screen-2xl 2xl:mx-auto 2xl:border-x-2 2xl:border-gray-200 dark:2xl:border-zinc-700 ">

        <!-- Sidebar Kiri -->
        <?php
        $this->load->view('partials/sidebar-kiri');
        ?>

        <main class=" flex-1 py-10  px-5 sm:px-10 mt-8">

            <!-- Responsive Header -->
            <?php
            $this->load->view('partials/responsive.php');
            ?>

            <!-- Headline -->
            <section>

                <!-- Headline -->
                <div id="animation-carousel" class="relative" data-carousel="static">
                    <!-- Carousel wrapper -->
                    <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                        <?php foreach ($articles as $article) : ?>
                            <?php foreach ($headline as $article) : ?>
                                <div class="hidden duration-200 ease-linear" data-carousel-item>
                                    <div class="flex flex-col justify-between mt-4 bg-black/10 bg-blend-multiply rounded-3xl h-80 overflow-hidden bg-cover bg-center px-7 pt-4 pb-6 text-white border-none shadows" style="background-image: url('<?= $article->cover; ?>');">

                                        <div class="flex -space-x-1 items-center ">
                                            <img class="rounded-full w-7 h-7 shadow-lg border border-white" src="https://api.lorem.space/image/face?w=32&amp;h=32&amp;hash=zsrj8csk" alt="" srcset="">
                                            <img class="rounded-full w-7 h-7 shadow-lg border border-white" src="https://api.lorem.space/image/face?w=32&amp;h=32&amp;hash=zsrj8cck" alt="" srcset="">
                                            <img class="rounded-full w-7 h-7 shadow-lg border border-white" src="https://api.lorem.space/image/face?w=32&amp;h=32&amp;hash=zsfj8cck" alt="" srcset="">
                                            <span class="pl-4 text-xs drop-shadow-lg">+27 Orang telah mengulas</span>
                                        </div>

                                        <div class="bg-gradient-to-r from-black/30 to-transparent -mx-7 -mb-6 px-7 pb-6 pt-2">
                                            <h1 class="uppercase text-3xl font-semibold drop-shadow-lg "><?= $article->title ?></h1>

                                            <div class="inline">

                                            </div>

                                            <!-- Menampilkan Kategori Data dari Tabel Category yang berelasi dengan Tabel Article-->
                                            <?php foreach ($categories as $category) : ?>
                                                <?php if ($category->id == $article->kategori) : ?>
                                                    <div class="text-xs text-gray-200 mt-2">
                                                        <a href="#" class=""> <?= $category->name ?> </a>
                                                    </div>
                                                <?php endif; ?>
                                            <?php endforeach; ?>

                                            <div class="mt-4 flex space-x-3 items-center">
                                                <a href="<?= site_url('article/' . $article->slug) ?>" class="px-5 py-2.5 bg-red-600 hover:bg-red-700 rounded-lg text-xs inline-block dark:bg-slate-900 hover:dark:bg-slate-800">Lihat Review</a>
                                                <a href="#" class="p-2.5 bg-gray-800/80 rounded-lg hover:bg-red-600 hover:dark:bg-slate-800">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                                                        <path fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd" />
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        <?php endforeach; ?>
                    </div>

                    <!-- Slider controls -->
                    <button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev="">
                        <span class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                            <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                            </svg>
                            <span class="sr-only">Previous</span>
                        </span>
                    </button>
                    <button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next="">
                        <span class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                            <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                            <span class="sr-only">Next</span>
                        </span>
                    </button>
                </div>

            </section>

            <!-- Rekomendasi -->
            <section class="">
                <div class="flex items-center justify-between">
                    <span class="font-semibold text-white dark:text-white">Mungkin anda suka</span>
                    <div class="flex items-center space-x-2 fill-gray-500">
                        <a href="<?= base_url('/article') ?>"><span class="text-white hover:text-red-600">Lebih banyak</span></a>
                        <svg class="h-7 w-7 hover:border-red-600 hover:fill-red-600 dark:fill-white dark:hover:fill-red-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path d="M10.7 17.707l5.7-5.71 -5.71-5.707L9.27 7.7l4.29 4.293 -4.3 4.29Z"></path>
                        </svg>
                    </div>
                </div>

                <div class="container mt-3 mx-auto">
                    <div class="flex flex-wrap -mx-1 lg:-mx-4">

                        <?php foreach ($articles as $article) : ?>

                            <!-- Row -->
                            <div class="my-1 w-full md:w-1/2 lg:my-2 lg:px-5 lg:w-1/3">

                                <!-- Items Film -->
                                <div class="w-full max-w-sm rounded-lg shadow-md bg-slate-800  dark:border-gray-700">
                                    <a href="#">
                                        <img class="object-cover h-48 w-96 rounded-t-lg justify-between border-b-2 border-b-white-600" src="<?= $article->cover; ?>" alt="<?= $article->title; ?>">
                                    </a>

                                    <div class="px-5 pb-5">
                                        <a href="#">
                                            <h2 class="pt-5 font-semibold tracking-tight text-white dark:text-white"><?= $article->title; ?></h2>
                                        </a>
                                        <div class="flex items-center mt-2.5 mb-5">

                                            <!-- Jika visitor lebih dari 5 tampilkan "Bad", dan jika visitor lebih dari 10 tampilkan "Not Bad", dan jika visitor lebih dari 20 tampilkan "Recommended" -->
                                            <?php if ($article->visitor <= 20) : ?>
                                                <!-- Loop -->
                                                <?php for ($i = 0; $i < 1; $i++) : ?>
                                                    <!-- Load view bintang -->
                                                    <?php
                                                    $this->load->view('bintang.php');
                                                    ?>
                                                <?php endfor; ?>

                                            <?php elseif ($article->visitor <= 40) : ?>
                                                <!-- Loop -->
                                                <?php for ($i = 0; $i < 2; $i++) : ?>
                                                    <!-- Load view bintang -->
                                                    <?php
                                                    $this->load->view('bintang.php');
                                                    ?>
                                                <?php endfor; ?>
                                            <?php elseif ($article->visitor <= 60) : ?>
                                                <!-- Loop -->
                                                <?php for ($i = 0; $i < 3; $i++) : ?>
                                                    <!-- Load view bintang -->
                                                    <?php
                                                    $this->load->view('bintang.php');
                                                    ?>
                                                <?php endfor; ?>
                                            <?php elseif ($article->visitor <= 80) : ?>
                                                <!-- Loop -->
                                                <?php for ($i = 0; $i < 4; $i++) : ?>
                                                    <!-- Load view bintang -->
                                                    <?php
                                                    $this->load->view('bintang.php');
                                                    ?>
                                                <?php endfor; ?>
                                            <?php elseif ($article->visitor <= 500) : ?>
                                                <!-- Loop -->
                                                <?php for ($i = 0; $i < 5; $i++) : ?>
                                                    <!-- Load view bintang -->
                                                    <?php
                                                    $this->load->view('bintang.php');
                                                    ?>
                                                <?php endfor; ?>
                                            <?php endif; ?>

                                            <span class="bg-blue-100 text-blue-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800 ml-3">
                                                <?= $article->visitor; ?> Views
                                            </span>
                                        </div>

                                        <div class="flex justify-between items-center ">
                                            <!-- Ketika tombol di klik maka akan bertambah satu angka pada database -->
                                            <a id="click" href="<?= site_url('article/visitor/' . $article->slug) ?>" class="text-white bg-red-700 hover:bg-red-800 font-medium rounded-sm text-sm px-2 py-1 text-center">Review</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach ?>

                    </div>
                </div>
            </section>

        </main>

        <!-- Sidebar Kanan -->
        <?php
        $this->load->view('partials/sidebar-kanan');
        ?>

    </div>

    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>
    <script src="register.js"></script>
</body>