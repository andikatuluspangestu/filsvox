<body class="font-montserrat text-sm bg-slate-900 dark:bg-slate-900 ">
    <div class="flex min-h-screen  2xl:max-w-screen-2xl 2xl:mx-auto 2xl:border-x-2 2xl:border-gray-200 dark:2xl:border-zinc-700 ">

        <!-- Sidebar Kiri -->
        <?php
        $this->load->view('partials/sidebar-kiri');
        ?>

        <main class=" flex-1 py-10  px-5 sm:px-10 mt-12">

            <!-- Responsive Header -->
            <?php
            $this->load->view('partials/responsive.php');
            ?>


            <!-- Headline -->
            <section>
                <nav class="flex space-x-6 text-gray-400 font-medium">
                    <a href="#" class="hover:text-white dark:hover:text-white">Indonesia</a>
                    <a href="#" class="text-gray-400 hover:text-white dark:text-white">Korea</a>
                    <a href="#" class="hover:text-white dark:hover:text-white ">Japan</a>
                </nav>

                <input type="checkbox" id="my-modal" class="modal-toggle" />
                <div class="modal">
                    <div class="modal-box bg-gray-900">
                        <h3 class="font-bold text-gray-100 text-lg mb-4">Get your APIs</h3>

                        <div class="form-control">
                            <input type="text" name="name" id="category" class="border text-sm rounded-lg block w-full p-2.5 bg-gray-600 border-gray-500 placeholder-gray-400 text-white" value="<?= base_url('/api'); ?>" disabled>
                        </div>

                        <div class="modal-action">
                            <label for="my-modal" class="btn btn-sm rounded-2xl btn-primary">Close</label>
                        </div>
                    </div>
                </div>

                <!-- Tampilkan headline jika artikel dengan headline true -->
                <?php foreach ($articles as $article) : ?>
                    <?php if ($article->headline == "true") : ?>
                        <div class="flex flex-col justify-between mt-4 bg-black/10 bg-blend-multiply rounded-3xl h-80 overflow-hidden bg-cover bg-center px-7 pt-4 pb-6 text-white border-none shadows" style="background-image: url('<?= $article->cover; ?>');">

                            <div class="flex -space-x-1 items-center ">
                                <img class="rounded-full w-7 h-7 shadow-lg border border-white" src="https://api.lorem.space/image/face?w=32&amp;h=32&amp;hash=zsrj8csk" alt="" srcset="">
                                <img class="rounded-full w-7 h-7 shadow-lg border border-white" src="https://api.lorem.space/image/face?w=32&amp;h=32&amp;hash=zsrj8cck" alt="" srcset="">
                                <img class="rounded-full w-7 h-7 shadow-lg border border-white" src="https://api.lorem.space/image/face?w=32&amp;h=32&amp;hash=zsfj8cck" alt="" srcset="">
                                <span class="pl-4 text-xs drop-shadow-lg">+27 Orang telah mengulas</span>
                            </div>

                            <div class="bg-gradient-to-r from-black/30 to-transparent -mx-7 -mb-6 px-7 pb-6 pt-2">
                                <span class="uppercase text-3xl font-semibold drop-shadow-lg "><?= $article->title ?></span>

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
                    <?php endif; ?>
                <?php endforeach; ?>


            </section>

            <!-- Rekomendasi -->
            <section class="mt-9">
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
                                        <img class="object-cover h-48 w-96 rounded-t-lg justify-between border-b-2 border-b-white-600" src="<?= $article->cover; ?>" alt="product image">
                                    </a>

                                    <div class="px-5 pb-5">
                                        <a href="#">
                                            <h5 class="pt-5 font-semibold tracking-tight text-white dark:text-white"><?= $article->title; ?></h5>
                                        </a>
                                        <div class="flex items-center mt-2.5 mb-5">


                                            <svg aria-hidden="true" class="w-5 h-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <title>First star</title>
                                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                            </svg>
                                            <svg aria-hidden="true" class="w-5 h-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <title>Second star</title>
                                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                            </svg>
                                            <svg aria-hidden="true" class="w-5 h-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <title>Third star</title>
                                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                            </svg>
                                            <svg aria-hidden="true" class="w-5 h-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <title>Fourth star</title>
                                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                            </svg>
                                            <svg aria-hidden="true" class="w-5 h-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <title>Fifth star</title>
                                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                            </svg>


                                            <span class="bg-blue-100 text-blue-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800 ml-3">5.0</span>
                                        </div>
                                        <div class="flex justify-between items-center ">

                                            <a href="<?= site_url('article/' . $article->slug) ?>" class="text-white bg-red-700 hover:bg-red-800 font-medium rounded-sm text-sm px-2 py-1 text-center">Review</a>
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

    <script src="https://cdn.tailwindcss.com"></script>
</body>