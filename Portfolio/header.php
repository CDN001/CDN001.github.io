<?php if (session_status()===PHP_SESSION_NONE) { session_start(); } ?>
<?php require_once __DIR__ . '/language.php'; ?>
<nav class="bg-white shadow-lg fixed w-full top-0 z-50">
  <div class="max-w-6xl mx-auto px-4">
    <div class="flex justify-between items-center py-4">
      <!-- Logo -->
      <a href="index.php" class="text-2xl font-bold text-blue-600">Golf Portfolio</a>

      <!-- Right area -->
      <div class="hidden md:flex items-center">
        <!-- Primary nav -->
        <div class="flex items-center gap-8">
          <a href="index.php"
             class="<?= ($active??'')==='home' ? 'text-blue-600 font-semibold' : 'text-gray-700 hover:text-blue-600' ?>">
             <?= L('หน้าแรก','Home'); ?></a>
          <a href="portfolio.php"
             class="<?= ($active??'')==='portfolio' ? 'text-blue-600 font-semibold' : 'text-gray-700 hover:text-blue-600' ?>">
             <?= L('ผลงาน','Portfolio'); ?></a>
          <a href="about.php"
             class="<?= ($active??'')==='about' ? 'text-blue-600 font-semibold' : 'text-gray-700 hover:text-blue-600' ?>">
             <?= L('เกี่ยวกับ','About'); ?></a>
        </div>

        <!-- Divider -->
        <div class="h-6 w-px bg-gray-200 mx-6"></div>

        <!-- Language dropdown -->
        <div class="relative">
          <button id="langBtn" type="button"
                  class="inline-flex items-center gap-2 px-3 py-2 rounded-lg border border-gray-200 hover:bg-gray-50"
                  aria-haspopup="true" aria-expanded="false">
            <?php if ($lang==='th'): ?>
              <!-- TH flag -->
              <span class="inline-block w-5 h-3.5 overflow-hidden rounded-sm">
                <svg viewBox="0 0 30 20" class="w-full h-full">
                  <rect width="30" height="20" fill="#A51931"/>
                  <rect y="4" width="30" height="12" fill="#F4F5F8"/>
                  <rect y="6" width="30" height="8" fill="#2D2A4A"/>
                </svg>
              </span>
              <span class="text-sm font-medium">TH</span>
            <?php else: ?>
              <!-- EN flag (UK) -->
              <span class="inline-block w-5 h-3.5 overflow-hidden rounded-sm">
                <svg viewBox="0 0 60 30" class="w-full h-full">
                  <rect width="60" height="30" fill="#012169"/>
                  <path d="M0,0 60,30 M60,0 0,30" stroke="#fff" stroke-width="6"/>
                  <path d="M0,0 60,30 M60,0 0,30" stroke="#C8102E" stroke-width="4"
                        clip-path="url(#t)"/>
                  <clipPath id="t">
                    <path d="M30,15 h30 v15 z v-30 z h-30 z h-30 v30 z v-30 z"/>
                  </clipPath>
                  <path d="M30,0 v30 M0,15 h60" stroke="#fff" stroke-width="10"/>
                  <path d="M30,0 v30 M0,15 h60" stroke="#C8102E" stroke-width="6"/>
                </svg>
              </span>
              <span class="text-sm font-medium">EN</span>
            <?php endif; ?>
            <i class="fa-solid fa-chevron-down text-xs text-gray-500"></i>
          </button>

          <div id="langMenu"
               class="invisible opacity-0 pointer-events-none absolute right-0 mt-2 w-36 bg-white border border-gray-200 rounded-lg shadow-lg transition-opacity">
            <a href="#" data-lang="en" class="flex items-center gap-2 px-3 py-2 hover:bg-gray-50">
              <span class="inline-block w-5 h-3.5 overflow-hidden rounded-sm">
                <svg viewBox="0 0 60 30" class="w-full h-full">
                  <rect width="60" height="30" fill="#012169"/>
                  <path d="M0,0 60,30 M60,0 0,30" stroke="#fff" stroke-width="6"/>
                  <path d="M0,0 60,30 M60,0 0,30" stroke="#C8102E" stroke-width="4"
                        clip-path="url(#t2)"/>
                  <clipPath id="t2">
                    <path d="M30,15 h30 v15 z v-30 z h-30 z h-30 v30 z v-30 z"/>
                  </clipPath>
                  <path d="M30,0 v30 M0,15 h60" stroke="#fff" stroke-width="10"/>
                  <path d="M30,0 v30 M0,15 h60" stroke="#C8102E" stroke-width="6"/>
                </svg>
              </span>
              <span class="text-sm">EN</span>
            </a>
            <a href="#" data-lang="th" class="flex items-center gap-2 px-3 py-2 hover:bg-gray-50">
              <span class="inline-block w-5 h-3.5 overflow-hidden rounded-sm">
                <svg viewBox="0 0 30 20" class="w-full h-full">
                  <rect width="30" height="20" fill="#A51931"/>
                  <rect y="4" width="30" height="12" fill="#F4F5F8"/>
                  <rect y="6" width="30" height="8" fill="#2D2A4A"/>
                </svg>
              </span>
              <span class="text-sm">TH</span>
            </a>
          </div>
        </div>
      </div>

      <!-- Mobile: dropdown ภาษาอย่างย่อ -->
      <div class="md:hidden">
        <div class="relative">
          <button id="langBtnM" type="button"
                  class="inline-flex items-center gap-2 px-2 py-1.5 rounded-lg border border-gray-200">
            <span class="text-sm font-medium"><?= strtoupper($lang) ?></span>
            <i class="fa-solid fa-chevron-down text-xs text-gray-500"></i>
          </button>
          <div id="langMenuM"
               class="invisible opacity-0 pointer-events-none absolute right-0 mt-2 w-28 bg-white border border-gray-200 rounded-lg shadow-lg transition-opacity">
            <a href="#" data-lang="en" class="block px-3 py-2 hover:bg-gray-50 text-sm">EN</a>
            <a href="#" data-lang="th" class="block px-3 py-2 hover:bg-gray-50 text-sm">TH</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</nav>
