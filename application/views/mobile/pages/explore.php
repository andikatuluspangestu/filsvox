<div class="hidden p-4 bg-gray-50 rounded-lg dark:bg-gray-800" id="explore" role="tabpanel" aria-labelledby="explore-tab">

  <div class="p-4 w-full text-center bg-white rounded-lg border shadow-md sm:p-8 dark:bg-gray-800 dark:border-gray-700">
    <h5 class="mb-2 text-3xl font-bold text-gray-900 dark:text-white">Everything is here</h5>
    <p class="mb-5 text-base text-gray-500 sm:text-lg dark:text-gray-400">Search for movie reviews by title, author, or even actor you know</p>
    <div class="justify-center items-center space-y-4 sm:flex sm:space-y-0 sm:space-x-4">

      <form action="<?= base_url('/search/explore/') ?>">
        <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-gray-300">Search</label>
        <div class="relative">
          <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
            <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
            </svg>
          </div>
          <input name="keyword" type="search" id="default-search" class="block p-4 pl-10 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search Artist, Writer..." required="">
          <button type="submit" class="text-white absolute right-2.5 bottom-2.5 bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2">Search</button>
        </div>
      </form>
      <div class="mt-2">
        <span class="text-slate-600 text-xs bg-slate-900 p-2 rounded-full italic">Features in BETA stage</span>
      </div>
    </div>
  </div>

</div>