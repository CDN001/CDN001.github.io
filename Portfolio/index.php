<?php
  // ระบุเมนูที่ใช้งานอยู่สำหรับไฮไลต์ใน header และทำ 2 version ไว้เพื่อส่งให้ บ.ที่เค้าสนใจ resume eng 
  $active = 'home';
  require_once __DIR__ . '/language.php';
?>
<!DOCTYPE html>
<html lang="<?= $lang ?>">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title><?= L('รัชชานนท์ รัตนอุบล - IT Support Specialist','Ratchanon Rattanubon - IT Support Specialist'); ?></title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
  <link href="style.css" rel="stylesheet">
</head>
<body class="bg-gray-50 min-h-screen flex flex-col">

  <?php require __DIR__ . '/header.php'; ?>

  <main class="flex-grow">
    <!-- Hero Section -->
    <section class="bg-gradient-to-r from-blue-600 to-purple-600 text-white pt-24 pb-16">
      <div class="max-w-6xl mx-auto px-4 grid md:grid-cols-2 gap-12 items-center">
        <div class="flex justify-center md:justify-start">
          <img src="dispic.jpg" alt="Cartoon profile"
               class="w-52 sm:w-64 md:w-72 h-auto rounded-2xl shadow-2xl ring-4 ring-white/20">
        </div>

        <div>
          <h1 class="text-4xl md:text-5xl font-extrabold mb-4 leading-tight"><?= L('สวัสดีครับ!','Hello!'); ?></h1>
          <h2 class="text-2xl md:text-3xl mb-4">
            <?= L('ผม','I am'); ?> <span class="text-yellow-300 font-bold"><?= L('รัชชานนท์ รัตนอุบล','Ratchanon Rattanubon'); ?></span>
          </h2>
          <p class="text-lg md:text-xl mb-6 opacity-90">IT Support Specialist & System Administrator</p>
          <p class="text-base md:text-lg mb-8 leading-relaxed">
            <?= L('มีประสบการณ์','Experienced for'); ?> <?= date('Y') - 2021; ?> <?= L('ปี ด้าน IT Support, การดูแลระบบคอมพิวเตอร์ และการจัดการระบบต่างๆ พร้อมให้บริการแก้ไขปัญหาทางเทคนิคแบบครบวงจร','years in IT support, system administration, and end-to-end technical troubleshooting.'); ?>
          </p>
          <div class="flex flex-wrap gap-3">
            <a href="portfolio.php"
               class="bg-yellow-400 text-gray-900 px-7 py-3 rounded-lg font-semibold hover:bg-yellow-300 transition">
              <?= L('ดูผลงาน','View Portfolio'); ?>
            </a>
            <a href="about.php"
               class="border-2 border-white px-7 py-3 rounded-lg font-semibold hover:bg-white hover:text-blue-600 transition">
              <?= L('ติดต่อ','Contact'); ?>
            </a>
          </div>
        </div>
      </div>

      <!-- Services Section -->
      <div class="max-w-4xl mx-auto px-4 mt-16 grid sm:grid-cols-2 md:grid-cols-3 gap-6">
        <div class="bg-white/10 backdrop-blur-lg rounded-xl p-6 flex items-start gap-4">
          <div class="bg-yellow-400 p-3 rounded-lg">
            <i class="fas fa-laptop text-gray-900 text-lg"></i>
          </div>
          <div>
            <h3 class="font-semibold">Hardware & Software</h3>
            <p class="opacity-80 text-sm">
              <?= L('ซ่อมบำรุงและดูแลระบบคอมพิวเตอร์ ฮาร์ดแวร์และซอฟต์แวร์ รวมถึงประสานงานผู้ให้บริการภายนอก เพื่อให้อุปกรณ์พร้อมใช้งานเสมอ',
                   'Maintain and troubleshoot hardware/software and coordinate with vendors to ensure availability.'); ?>
            </p>
          </div>
        </div>
        <div class="bg-white/10 backdrop-blur-lg rounded-xl p-6 flex items-start gap-4">
          <div class="bg-green-400 p-3 rounded-lg">
            <i class="fas fa-network-wired text-gray-900 text-lg"></i>
          </div>
          <div>
            <h3 class="font-semibold">Network Admin</h3>
            <p class="opacity-80 text-sm">
              <?= L('จัดการและดูแลระบบเครือข่ายทั้งภายในและภายนอกองค์กร พร้อมแก้ไขปัญหาเบื้องต้น เพื่อให้การเชื่อมต่อใช้งานได้ต่อเนื่อง',
                   'Manage internal and external networks with basic troubleshooting for stable connectivity.'); ?>
            </p>
          </div>
        </div>
        <div class="bg-white/10 backdrop-blur-lg rounded-xl p-6 flex items-start gap-4">
          <div class="bg-purple-400 p-3 rounded-lg">
            <i class="fas fa-users-cog text-gray-900 text-lg"></i>
          </div>
          <div>
            <h3 class="font-semibold">System Administrator</h3>
            <p class="opacity-80 text-sm">
              <?= L('ดูแลระบบ Google Admin, Microsoft Admin และ SAP พร้อมกำหนดสิทธิ์การเข้าถึงไฟล์และข้อมูลพนักงาน เพื่อความปลอดภัยและสอดคล้องกับนโยบาย IT',
                   'Administer Google Admin, Microsoft Admin, and SAP with secure access management aligned with IT policy.'); ?>
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- Experience -->
    <section class="py-16 bg-white">
      <div class="max-w-6xl mx-auto px-4">
        <div class="text-center mb-12">
          <h2 class="text-3xl font-bold text-gray-800 mb-4"><?= L('ประสบการณ์การทำงาน','Work Experience'); ?></h2>
          <p class="text-gray-600 text-lg"><?= L('มีประสบการณ์ในการดูแลระบบ IT แบบครบวงจร','Broad IT operations and support experience.'); ?></p>
        </div>

        <div class="grid md:grid-cols-2 gap-8">
          <div class="bg-gradient-to-br from-blue-50 to-blue-100 p-8 rounded-xl shadow-sm">
            <div class="flex items-center mb-4">
              <div class="bg-blue-500 p-3 rounded-lg mr-4">
                <i class="fas fa-building text-white"></i>
              </div>
              <div>
                <h3 class="text-xl font-semibold text-gray-800">Facility System Development</h3>
                <p class="text-blue-600"><?= L('มิ.ย. 2024 - ปัจจุบัน','Jun 2024 - Present'); ?></p>
              </div>
            </div>
            <ul class="space-y-2 text-gray-700">
              <li class="flex items-start"><i class="fas fa-check-circle text-green-500 mt-1 mr-2"></i><?= L('จัดการสิทธิ์ Google Admin & Microsoft Admin','Managed Google Admin & Microsoft Admin access'); ?></li>
              <li class="flex items-start"><i class="fas fa-check-circle text-green-500 mt-1 mr-2"></i><?= L('ดูแลระบบ SAP B1','Administered SAP B1'); ?></li>
              <li class="flex items-start"><i class="fas fa-check-circle text-green-500 mt-1 mr-2"></i><?= L('จัดการข้อมูลพนักงานใหม่','Handled new employee onboarding data'); ?></li>
            </ul>
          </div>

          <div class="bg-gradient-to-br from-purple-50 to-purple-100 p-8 rounded-xl shadow-sm">
            <div class="flex items-center mb-4">
              <div class="bg-purple-500 p-3 rounded-lg mr-4">
                <i class="fas fa-cog text-white"></i>
              </div>
              <div>
                <h3 class="text-xl font-semibold text-gray-800">IT Support</h3>
                <p class="text-purple-600"><?= L('มิ.ย. 2021 - มิ.ย. 2024','Jun 2021 - Jun 2024'); ?></p>
              </div>
            </div>
            <ul class="space-y-2 text-gray-700">
              <li class="flex items-start"><i class="fas fa-check-circle text-green-500 mt-1 mr-2"></i><?= L('IT Support และ Hardware/Software','Provided IT support and hardware/software maintenance'); ?></li>
              <li class="flex items-start"><i class="fas fa-check-circle text-green-500 mt-1 mr-2"></i><?= L('ระบบ FTP และ Remote Support','Maintained FTP and remote support systems'); ?></li>
              <li class="flex items-start"><i class="fas fa-check-circle text-green-500 mt-1 mr-2"></i><?= L('สนับสนุนทีมขายและฝึกอบรม','Supported sales team and conducted training'); ?></li>
            </ul>
          </div>
        </div>
      </div>
    </section>
  </main>

  <?php require __DIR__ . '/footer.php'; ?>

<script>
(function(){
  function setLang(code){
    const u = new URL(window.location.href);
    u.searchParams.set('lang', code);
    window.location.href = u.toString();
  }
  function bind(btnId, menuId){
    const btn = document.getElementById(btnId);
    const menu = document.getElementById(menuId);
    if(!btn || !menu) return;

    const open = ()=>menu.classList.remove('invisible','opacity-0','pointer-events-none');
    const close = ()=>menu.classList.add('invisible','opacity-0','pointer-events-none');

    btn.addEventListener('click', (e)=>{
      e.stopPropagation();
      if(menu.classList.contains('invisible')) open(); else close();
    });
    menu.querySelectorAll('[data-lang]').forEach(a=>{
      a.addEventListener('click', (e)=>{ e.preventDefault(); setLang(a.dataset.lang); });
    });
    document.addEventListener('click', close);
    window.addEventListener('keydown', e=>{ if(e.key==='Escape') close(); });
  }
  bind('langBtn','langMenu');   // desktop
  bind('langBtnM','langMenuM'); // mobile
})();
</script>


</body>
</html>
