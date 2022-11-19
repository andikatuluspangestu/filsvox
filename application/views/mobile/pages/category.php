<div class="hidden p-4 bg-gray-800" id="dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
  <div class="p-3">
    <div class="w-full h-44 rounded-md bg-center bg-cover flex flex-col justify-center px-4 shadow" style="background-image: url('https://images.unsplash.com/photo-1568111561564-08726a1563e1?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=508&q=80'); opacity: 0.8;">
      <h2 class="font-bold text-3xl max-w-sm text-white">
        Find the category you like here
      </h2>
      <button class="py-2 bg-slate-900 hover:bg-slate-800 text-gray-100 rounded-md w-44 mt-3 shadow">
        Explore Now
      </button>
    </div>
  </div>

  <!-- Max width container, center aligned, with some padding -->
  <div class="max-w-5xl mx-auto px-3 sm:px-6">
    <div class="font-medium leading-7 text-center space-y-2 sm:grid sm:grid-cols-2 lg:grid-cols-3 sm:gap-4 sm:space-y-0 mb-20">
      <?php foreach ($categories as $category) : ?>
        <a href="<?= base_url('/search/findbykategori/') . $category->id; ?>">
          <div class="text-white bg-slate-700 hover:bg-slate-900 mb-1 py-3 px-6 rounded">
            <p><?= $category->name; ?></p>
          </div>
        </a>
      <?php endforeach; ?>
    </div>
  </div>
</div>
</div>

