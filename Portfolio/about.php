<?php
  $active = 'about';
  require_once __DIR__ . '/language.php';
?>
<!DOCTYPE html>
<html lang="<?= $lang ?>">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= L('เกี่ยวกับ - รัชชานนท์ รัตนอุบล','About - Ratchanon Rattanubon'); ?></title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
  <link href="style.css" rel="stylesheet">
</head>
<body class="bg-gray-50 min-h-screen flex flex-col">

  <?php require __DIR__ . '/header.php'; ?>

  <main class="flex-grow">
    <section class="pt-24 pb-16">
      <div class="max-w-6xl mx-auto px-4">
        <div class="text-center mb-16">
          <h1 class="text-4xl font-bold text-gray-800 mb-4"><?= L('เกี่ยวกับฉัน','About Me'); ?></h1>
          <p class="text-xl text-gray-600">
            <?= L('รัชชานนท์ รัตนอุบล (กอล์ฟ) - IT Support Specialist','Ratchanon Rattanubon (Golf) - IT Support Specialist'); ?>
          </p>
        </div>

        <div class="grid md:grid-cols-2 gap-12 mb-20">
          <div class="space-y-6">
            <div class="bg-white p-8 rounded-xl shadow-lg">
              <h2 class="text-2xl font-bold text-gray-800 mb-6 flex items-center">
                <i class="fas fa-user text-blue-600 mr-3"></i>
                <?= L('ข้อมูลส่วนตัว','Profile'); ?>
              </h2>

              <div class="flex justify-center mb-6">
                <div class="relative">
                  <img src="1000009902.jpeg" alt="<?= L('รัชชานนท์ รัตนอุบล','Ratchanon Rattanubon'); ?>"
                       class="w-32 h-32 rounded-full object-cover border-4 border-blue-200 shadow-lg">
                  <div class="absolute bottom-0 right-0 bg-green-500 w-8 h-8 rounded-full border-4 border-white flex items-center justify-center">
                    <i class="fas fa-check text-white text-sm"></i>
                  </div>
                </div>
              </div>

              <div class="space-y-4">
                <div class="flex justify-between py-2 border-b border-gray-100">
                  <span class="font-medium text-gray-700"><?= L('ชื่อ-นามสกุล:','Full name:'); ?></span>
                  <span class="text-gray-600"><?= L('รัชชานนท์ รัตนอุบล','Ratchanon Rattanubon'); ?></span>
                </div>
                <div class="flex justify-between py-2 border-b border-gray-100">
                  <span class="font-medium text-gray-700"><?= L('ชื่อเล่น:','Nickname:'); ?></span>
                  <span class="text-gray-600"><?= L('กอล์ฟ','Golf'); ?></span>
                </div>
                <div class="flex justify-between py-2 border-b border-gray-100">
                  <span class="font-medium text-gray-700"><?= L('อายุ:','Age:'); ?></span>
                  <span class="text-gray-600"><?= L('31 ปี','31'); ?></span>
                </div>
                <div class="flex justify-between py-2 border-b border-gray-100">
                  <span class="font-medium text-gray-700"><?= L('ที่อยู่:','Location:'); ?></span>
                  <span class="text-gray-600"><?= L('ระยอง, ประเทศไทย','Rayong, Thailand'); ?></span>
                </div>
                <div class="flex justify-between py-2 border-b border-gray-100">
                  <span class="font-medium text-gray-700"><?= L('เงินเดือนที่คาดหวัง:','Expected salary:'); ?></span>
                  <span class="text-green-600 font-semibold"><?= L('35,000 บาท','35,000 THB'); ?></span>
                </div>
              </div>
            </div>

            <div class="bg-white p-8 rounded-xl shadow-lg">
              <h2 class="text-2xl font-bold text-gray-800 mb-6 flex items-center">
                <i class="fas fa-graduation-cap text-green-600 mr-3"></i>
                <?= L('การศึกษา','Education'); ?>
              </h2>
              <div class="space-y-4">
                <div class="border-l-4 border-blue-500 pl-4">
                  <h3 class="font-semibold text-gray-800"><?= L('ประกาศนียบัตรวิชาชีพชั้นสูง','Higher Vocational Certificate'); ?></h3>
                  <p class="text-blue-600"><?= L('วิทยาลัยเทคนิคนิคมอุตสาหกรรมระยอง','Rayong Industrial Estate Technical College'); ?></p>
                  <p class="text-gray-600"><?= L('สาขา เทคโนโลยีธุรกิจดิจิทัล (กำลังศึกษา)','Digital Business Technology (studying)'); ?></p>
                </div>
                <div class="border-l-4 border-green-500 pl-4">
                  <h3 class="font-semibold text-gray-800"><?= L('มัธยมศึกษาตอนปลาย','High School'); ?></h3>
                  <p class="text-green-600"><?= L('ศูนย์ส่งเสริมการเรียนรู้ อำเภอนิคมพัฒนา','Learning Promotion Center, Nikhom Phatthana'); ?></p>
                  <p class="text-gray-600"><?= L('ปี 2566','2023'); ?></p>
                </div>
              </div>
            </div>
          </div>

          <div class="space-y-6">
            <div class="bg-white p-8 rounded-xl shadow-lg">
              <h2 class="text-2xl font-bold text-gray-800 mb-6 flex items-center">
                <i class="fas fa-cogs text-purple-600 mr-3"></i>
                <?= L('ความสามารถ','Skills'); ?>
              </h2>
              <div class="space-y-4">
                <div class="flex items-start space-x-3">
                  <i class="fas fa-check-circle text-green-500 mt-1"></i>
                  <div>
                    <h3 class="font-semibold text-gray-800">Hardware & Software</h3>
                    <p class="text-gray-600"><?= L('ประกอบ, ซ่อมแซม, และอัพเกรดคอมพิวเตอร์','Build, repair, and upgrade PCs'); ?></p>
                  </div>
                </div>
                <div class="flex items-start space-x-3">
                  <i class="fas fa-check-circle text-green-500 mt-1"></i>
                  <div>
                    <h3 class="font-semibold text-gray-800">System Administration</h3>
                    <p class="text-gray-600"><?= L('ติดตั้งระบบปฏิบัติการและโปรแกรม','OS deployments and applications'); ?></p>
                  </div>
                </div>
                <div class="flex items-start space-x-3">
                  <i class="fas fa-check-circle text-green-500 mt-1"></i>
                  <div>
                    <h3 class="font-semibold text-gray-800">Microsoft Office</h3>
                    <p class="text-gray-600"><?= L('Word, PowerPoint ระดับดี','Good at Word and PowerPoint'); ?></p>
                  </div>
                </div>
                <div class="flex items-start space-x-3">
                  <i class="fas fa-check-circle text-green-500 mt-1"></i>
                  <div>
                    <h3 class="font-semibold text-gray-800">Adobe Photoshop</h3>
                    <p class="text-gray-600"><?= L('แก้ไขและออกแบบภาพ','Image editing and design'); ?></p>
                  </div>
                </div>
              </div>
            </div>

            <div class="bg-gradient-to-r from-blue-500 to-purple-600 text-white p-8 rounded-xl">
              <h2 class="text-2xl font-bold mb-4 flex items-center">
                <i class="fas fa-bullseye mr-3"></i>
                <?= L('วัตถุประสงค์การทำงาน (Career Objective)','Career Objective'); ?>
              </h2>
              <div class="space-y-4">
                <div class="flex items-start space-x-3">
                  <div class="bg-yellow-400 p-2 rounded-full mt-1">
                    <i class="fas fa-rocket text-blue-900 text-sm"></i>
                  </div>
                  <div>
                    <h3 class="font-semibold text-yellow-300 mb-1"><?= L('เป้าหมายระยะสั้น (1-2 ปี)','Short-term (1–2 yrs)'); ?></h3>
                    <p class="opacity-90"><?= L('พัฒนาความเชี่ยวชาญใน Cloud Computing และ Network Security เพื่อยกระดับการให้บริการ IT Support',
                                                  'Develop cloud and network security expertise to elevate IT support'); ?></p>
                  </div>
                </div>

                <div class="flex items-start space-x-3">
                  <div class="bg-green-400 p-2 rounded-full mt-1">
                    <i class="fas fa-users text-blue-900 text-sm"></i>
                  </div>
                  <div>
                    <h3 class="font-semibold text-yellow-300 mb-1"><?= L('เป้าหมายระยะกลาง (3-5 ปี)','Mid-term (3–5 yrs)'); ?></h3>
                    <p class="opacity-90"><?= L('ก้าวสู่ตำแหน่ง IT Manager หรือ System Administrator เพื่อนำทีมในการจัดการโครงสร้าง IT ขององค์กร',
                                                  'Advance to IT Manager or System Administrator and lead core IT operations'); ?></p>
                  </div>
                </div>

                <div class="flex items-start space-x-3">
                  <div class="bg-purple-400 p-2 rounded-full mt-1">
                    <i class="fas fa-trophy text-blue-900 text-sm"></i>
                  </div>
                  <div>
                    <h3 class="font-semibold text-yellow-300 mb-1"><?= L('วิสัยทัศน์','Vision'); ?></h3>
                    <p class="opacity-90"><?= L('มุ่งมั่นเป็น IT Professional ที่สามารถขับเคลื่อน Digital Transformation และสร้างนวัตกรรมเทคโนโลยีให้องค์กร',
                                                  'Become an IT professional who drives digital transformation and technology innovation'); ?></p>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>

        <!-- Contact Form -->
        <div class="bg-white rounded-xl shadow-lg p-8">
          <h2 class="text-3xl font-bold text-gray-800 text-center mb-8"><?= L('ติดต่อฉัน','Contact Me'); ?></h2>

          <div class="max-w-4xl mx-auto">
            <div class="grid md:grid-cols-2 gap-8">
              <div class="bg-gray-50 p-6 rounded-lg">
                <h3 class="text-xl font-semibold text-gray-800 mb-6 flex items-center">
                  <i class="fas fa-address-book text-blue-600 mr-3"></i>
                  <?= L('ช่องทางการติดต่อ','Channels'); ?>
                </h3>
                <div class="space-y-4">
                  <div class="flex items-center space-x-4">
                    <div class="bg-blue-100 p-3 rounded-lg">
                      <i class="fas fa-envelope text-blue-600"></i>
                    </div>
                    <div>
                      <p class="font-medium text-gray-800"><?= L('อีเมล','Email'); ?></p>
                      <p class="text-gray-600">Ratchanon93g@gmail.com</p>
                    </div>
                  </div>
                  <div class="flex items-center space-x-4">
                    <div class="bg-green-100 p-3 rounded-lg">
                      <i class="fas fa-phone text-green-600"></i>
                    </div>
                    <div>
                      <p class="font-medium text-gray-800"><?= L('โทรศัพท์','Phone'); ?></p>
                      <p class="text-gray-600">096-189-1670</p>
                    </div>
                  </div>
                  <div class="flex items-center space-x-4">
                    <div class="bg-purple-100 p-3 rounded-lg">
                      <i class="fas fa-map-marker-alt text-purple-600"></i>
                    </div>
                    <div>
                      <p class="font-medium text-gray-800"><?= L('ที่อยู่','Address'); ?></p>
                      <p class="text-gray-600">
                        <?= L('151/53 หมู่บ้านวโรรส 9 หมู่ 2<br>ต.นิคมพัฒนา อ.นิคมพัฒนา จ.ระยอง 21180',
                              '151/53 Vororos 9, Moo 2<br>Nikhom Phatthana, Rayong 21180'); ?>
                      </p>
                    </div>
                  </div>
                </div>

                <div class="mt-6 p-4 bg-blue-50 rounded-lg">
                  <h4 class="font-semibold text-gray-800 mb-2 flex items-center">
                    <i class="fas fa-clock text-blue-600 mr-2"></i>
                    <?= L('เวลาทำงาน','Working hours'); ?>
                  </h4>
                  <p class="text-gray-600 text-sm"><?= L('จันทร์ - ศุกร์: 08:00 - 17:30 น.','Mon–Fri: 08:00–17:30'); ?></p>
                  <p class="text-gray-600 text-sm"><?= L('เสาร์ - อาทิตย์: หยุด','Sat–Sun: Weekends'); ?></p>
                </div>
              </div>

              <!-- no-refresh form -->
              <div class="bg-gray-50 p-6 rounded-lg">
                <h3 class="text-xl font-semibold text-gray-800 mb-6 flex items-center">
                  <i class="fas fa-paper-plane text-green-600 mr-3"></i>
                  <?= L('ส่งข้อความหาฉัน','Send me a message'); ?>
                </h3>
                <form id="contactForm" class="space-y-4">
                  <div>
                    <label class="block text-gray-700 font-medium mb-2"><?= L('ชื่อ','Name'); ?></label>
                    <input type="text" name="name" required
                           class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent text-sm">
                  </div>
                  <div>
                    <label class="block text-gray-700 font-medium mb-2"><?= L('อีเมล','Email'); ?></label>
                    <input type="email" name="email" required
                           class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent text-sm">
                  </div>
                  <div>
                    <label class="block text-gray-700 font-medium mb-2"><?= L('เรื่อง','Subject'); ?></label>
                    <input type="text" name="subject" required
                           class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent text-sm">
                  </div>
                  <div>
                    <label class="block text-gray-700 font-medium mb-2"><?= L('ข้อความ','Message'); ?></label>
                    <textarea name="message" rows="4" required
                              class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent text-sm"></textarea>
                  </div>
                  <button type="submit"
                          class="w-full bg-gradient-to-r from-blue-500 to-purple-600 text-white font-semibold py-2.5 rounded-lg hover:from-blue-600 hover:to-purple-700 transition duration-300 text-sm">
                    <i class="fas fa-paper-plane mr-2"></i><?= L('ส่งข้อความ','Send'); ?>
                  </button>
                </form>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section>
  </main>

  <!-- Center Modal ตัวเตือนกลางจอ -->
  <div id="modalBackdrop" class="hidden fixed inset-0 z-[200] bg-black/50"></div>
  <div id="modal"
       class="hidden fixed inset-0 z-[201] flex items-center justify-center p-4">
    <div class="w-full max-w-md bg-white rounded-2xl shadow-2xl">
      <div class="p-6">
        <div class="flex items-start">
          <span class="inline-flex h-10 w-10 items-center justify-center rounded-full bg-green-100">
            <i class="fa-solid fa-check text-green-600"></i>
          </span>
          <div class="ml-3">
            <h3 class="text-xl font-bold text-gray-800">
              <?= L('ขอบคุณที่ติดต่อมา','Thank you for your message'); ?>
            </h3>
            <p class="text-gray-600 mt-1">
              <?= L('ฉันได้รับข้อความของคุณแล้ว และจะติดต่อกลับโดยเร็วที่สุด',
                    'I have received your message and will get back to you soon.'); ?>
            </p>
          </div>
          <button id="modalClose" class="ml-auto text-gray-400 hover:text-gray-600 p-2" aria-label="Close">
            <i class="fa-solid fa-xmark text-lg"></i>
          </button>
        </div>
        <div class="mt-5">
          <div class="h-1.5 bg-gray-100 rounded">
            <div id="modalBar" class="h-full bg-green-500 rounded" style="width:0%"></div>
          </div>
          <p class="text-xs text-gray-500 mt-2 text-right">
            <?= L('หน้าต่างจะปิดใน 5 วินาที','This window will close in 5 seconds'); ?>
          </p>
        </div>
      </div>
    </div>
  </div>

  <!-- เตือนกลางจอ + no-refresh script ไม่รีเฟรช สคิป-->
  <script>
  (function(){
    const form = document.getElementById('contactForm');
    const modal = document.getElementById('modal');
    const backdrop = document.getElementById('modalBackdrop');
    const closeBtn = document.getElementById('modalClose');
    const bar = document.getElementById('modalBar');
    let timer, raf, start, dur = 5000;

    function openModal(){
      backdrop.classList.remove('hidden');
      modal.classList.remove('hidden');
      start = performance.now();
      const step = (t)=>{
        const p = Math.min(1, (t - start)/dur);
        bar.style.width = (p*100)+'%';
        if(p < 1) raf = requestAnimationFrame(step);
      };
      raf = requestAnimationFrame(step);
      timer = setTimeout(closeModal, dur);
    }
    function closeModal(){
      clearTimeout(timer);
      cancelAnimationFrame(raf);
      backdrop.classList.add('hidden');
      modal.classList.add('hidden');
      bar.style.width = '0%';
    }

    form.addEventListener('submit', function(e){
      e.preventDefault();     // ไม่รีเฟรชหน้า
      form.reset();           // ล้างฟอร์ม
      openModal();            // เปิดโมดัล
    });

    closeBtn.addEventListener('click', closeModal);
    backdrop.addEventListener('click', closeModal);
    window.addEventListener('keydown', (e)=>{ if(e.key==='Escape') closeModal(); });
  })();
  </script>

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
