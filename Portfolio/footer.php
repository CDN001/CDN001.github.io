<footer class="bg-gray-800 text-white py-8">
  <div class="max-w-6xl mx-auto px-4 flex flex-col md:flex-row justify-between items-center gap-4">
    <p>&copy; <?= date('Y'); ?> R.Rattanaubol . <?= L('All rights reserved์','All rights reserved.'); ?></p>
    <div class="flex space-x-6">
      <a href="mailto:Ratchanon93g@gmail.com" class="hover:text-blue-400 transition" aria-label="email">
        <i class="fas fa-envelope text-xl"></i>
      </a>
      <a href="tel:0961891670" class="hover:text-blue-400 transition" aria-label="phone">
        <i class="fas fa-phone text-xl"></i>
      </a>
    </div>
  </div>
</footer>

<!-- Language switch script -->
<script>
(function(){
  const setLang = (code) => {
    const u = new URL(window.location.href);
    u.searchParams.set('lang', code);
    window.location.href = u.toString();
  };
  document.querySelectorAll('.lang-toggle [data-lang]').forEach(el=>{
    el.addEventListener('click', e=>{
      e.preventDefault();
      setLang(el.dataset.lang);
    });
  });
})();
</script>
