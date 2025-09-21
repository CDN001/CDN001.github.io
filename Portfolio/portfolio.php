<?php
  $active = 'portfolio';
  require_once __DIR__ . '/language.php';
?>
<!DOCTYPE html>
<html lang="<?= $lang ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= L('ผลงาน - รัชชานนท์ รัตนอุบล','Portfolio - Ratchanon Rattanubon'); ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
</head>
<body class="bg-gray-50 min-h-screen flex flex-col">

  <?php require __DIR__ . '/header.php'; ?>

  <section class="pt-24 pb-16 flex-grow">
    <div class="max-w-6xl mx-auto px-4">
      <div class="text-center mb-16">
        <h1 class="text-4xl font-bold text-gray-800 mb-4"><?= L('ประสบการณ์การทำงาน','Work Experience'); ?></h1>
        <p class="text-xl text-gray-600">
          <?= L('แยกตามบริษัท/องค์กรที่เคยทำงานด้วย • แตะหัวการ์ดเพื่อย่อ/ขยาย',
               'Grouped by company • Tap card header to expand/collapse'); ?>
        </p>
      </div>

<?php
$workExperience = [
    [
        'company' => 'Archem.inc',
        'position' => L('System Administrator','System Administrator'),
        'period' => L('ก.ค. 2024 - ปัจจุบัน','Jun 2024 - Present'),
        'duration' => L('1 ปี 2 เดือน','1 yr 2 mo'),
        'color' => 'blue',
        'icon' => 'fas fa-building',
        'projects' => [[
            'title' => L('ระบบจัดการสิทธิ์ผู้ใช้งาน (User Access Management)','User Access Management'),
            'description' => L('จัดการสิทธิ์การเข้าถึงในระบบต่างๆ รวมถึง Google Admin, Microsoft Admin และ SAP B1',
                               'Access control across Google Admin, Microsoft Admin, and SAP B1'),
            'responsibilities' => [
                L('สร้าง แก้ไข ลบ และเพิ่มสิทธิ์การเข้าถึงใน Google Admin','Provision and govern access in Google Admin'),
                L('สร้าง แก้ไข ลบ และดูแลการใช้งาน Microsoft Admin','Maintain Microsoft 365 tenant and access'),
                L('สร้าง แก้ไข ลบ และเพิ่มสิทธิ์การเข้าถึงใน SAP B1 สำหรับผู้ใช้งาน','Manage SAP B1 user roles and access'),
                L('ดูแลระบบเครือข่าย (Network) ให้มีประสิทธิภาพสูงและพร้อมใช้งานตลอดเวลา','Operate the network for high availability'),
                L('จัดทำข้อมูลพนักงานใหม่ รวมทั้งถ่ายรูปและรวบรวมข้อมูลเพื่อจัดทำบัตรพนักงานใหม่','New hire data and ID card preparation')
            ],
            'tech' => ['Google Admin Console','Microsoft 365','SAP Business One','Active Directory','Network Management']
        ]]
    ],
    [
        'company' => 'Control Data - CDG Group',
        'position' => L('IT Support Specialist','IT Support Specialist'),
        'period' => L('มิ.ย. 2021 - ก.ค. 2024','Jun 2021 - Jul 2024'),
        'duration' => L('3 ปี 1 เดือน','3 yrs 1 mo'),
        'color' => 'green',
        'icon' => 'fas fa-cogs',
        'projects' => [
            [
                'title' => L('ระบบบำรุงรักษาอุปกรณ์ IT (Preventive Maintenance)','IT Preventive Maintenance'),
                'description' => L('ดูแลและบำรุงรักษาอุปกรณ์คอมพิวเตอร์ เครื่องพิมพ์ และเครื่องอ่านลายนิ้วมือ',
                                   'PM for PCs, printers, and biometric devices'),
                'responsibilities' => [
                    L('ดูแลคอมพิวเตอร์ เครื่องพิมพ์ เครื่องอ่าน/เก็บลายนิ้วมือ และอุปกรณ์อื่นๆ ตามรอบการบำรุงรักษา',
                      'Cyclic PM for devices and peripherals'),
                    L('ติดตั้งระบบปฏิบัติการและลงโปรแกรมให้กับลูกค้า','OS deployment and app installation'),
                    L('ซ่อมและแก้ไขปัญหา Hardware และ Software ให้กับลูกค้า','HW/SW troubleshooting'),
                    L('จัดทำรายงานอุปกรณ์และเอกสาร PM ประจำเดือน','Monthly PM reports')
                ],
                'tech' => ['Hardware Maintenance','Software Updates','Biometric Systems','Printer Management']
            ],
            [
                'title' => L('ระบบ FTP และ File Transfer Protocol','FTP and File Transfer System'),
                'description' => L('จัดทำและดูแลระบบ FTP เพื่อการแชร์ไฟล์และข้อมูลภายในองค์กร',
                                   'Built and operated an internal FTP service'),
                'responsibilities' => [
                    L('จัดทำระบบ FTP (File Transfer Protocol) ให้กับองค์กร','Implemented FTP server'),
                    L('กำหนดสิทธิ์การเข้าถึงและความปลอดภัยของระบบ','Configured access and security'),
                    L('ดูแลและบำรุงรักษาเซิร์ฟเวอร์ FTP ให้ทำงานได้อย่างต่อเนื่อง','Operated and maintained FTP service')
                ],
                'tech' => ['FTP Server','Network Configuration','File Management','Security Protocol']
            ],
            [
                'title' => L('ระบบสนับสนุนการขายและ Demo','Sales Support and Demo'),
                'description' => L('เตรียมอุปกรณ์และระบบสำหรับการนำเสนอขายให้กับลูกค้า',
                                   'Prepared equipment and demo systems for sales'),
                'responsibilities' => [
                    L('สนับสนุนทีมขายในการ Demo ระบบงานต่างๆ สำหรับงานขายร่วมกับทีม Sale',
                      'Supported sales demos'),
                    L('ฝึกอบรมการใช้งานระบบให้กับลูกค้า','Customer training'),
                    L('ให้คำปรึกษาและแก้ไขปัญหาทางไกล (Remote) ให้กับลูกค้า','Remote support and consulting')
                ],
                'tech' => ['System Demo','Sales Support','Equipment Setup','Customer Training','Remote Support']
            ],
            [
                'title' => L('ระบบบริการประชาชนเคลื่อนที่','Mobile Public Service Unit'),
                'description' => L('จัดเตรียมอุปกรณ์และเครื่องผลิตบัตรสำหรับสำนักทะเบียน',
                                   'Prepared gear and card printers for registrars'),
                'responsibilities' => [
                    L('จัดเตรียมอุปกรณ์และเครื่องผลิตบัตรให้กับสำนักทะเบียน เพื่อออกหน่วยบริการประชาชนเคลื่อนที่',
                      'Provisioned mobile registrar kits'),
                    L('ติดตั้งระบบคอมพิวเตอร์และอุปกรณ์ต่างๆ ให้กับลูกค้า','Installed PCs and peripherals'),
                    L('ประสานงานกับหน่วยงานหรือผู้เกี่ยวข้อง (Vendor) เพื่อแจ้งและส่งซ่อมอุปกรณ์',
                      'Coordinated with vendors for RMA/repair')
                ],
                'tech' => ['Mobile Service Unit','Card Printing System','Government Service','Equipment Management']
            ]
        ]
    ],
    [
        'company' => L('ธุรกิจส่วนตัว','Self-employed'),
        'position' => L('เจ้าของกิจการ','Owner'),
        'period' => '2019  - 2021',
        'duration' => L('2 ปี','2 yrs'),
        'color' => 'purple',
        'icon' => 'fas fa-store',
        'projects' => [[
            'title' => L('ร้านซ่อมคอมพิวเตอร์','Computer Repair Shop'),
            'description' => L('เปิดร้านรับซ่อมคอมพิวเตอร์ ประกอบเครื่อง และติดตั้ง IP Camera',
                               'PC repair, custom builds, and IP camera installs'),
            'responsibilities' => [
                L('รับซ่อมคอมพิวเตอร์ทั้งด้าน Hardware และ Software','Repair HW/SW issues'),
                L('จัดสเป็คและประกอบคอมพิวเตอร์ตามความต้องการของลูกค้า','Specify and build PCs'),
                L('ติดตั้งระบบปฏิบัติการ (OS) และโปรแกรมต่างๆ','OS and app installation'),
                L('ติดตั้งระบบ IP Camera สำหรับบ้านและสำนักงาน','Install IP cameras for home/office'),
                L('ให้คำปรึกษาด้านเทคโนโลยีแก่ลูกค้า','Technology advisory')
            ],
            'tech' => ['Hardware Repair','PC Assembly','OS Installation','IP Camera Installation','Customer Service']
        ]]
    ]
];
?>

      <!-- Cards -->
      <div class="space-y-6">
<?php foreach ($workExperience as $idx => $company): 
    $open = ($idx === 0);
?>
        <div class="bg-white rounded-2xl shadow-xl overflow-hidden" data-card="<?php echo $idx; ?>">
          <button type="button"
                  class="w-full text-left bg-gradient-to-r from-<?php echo $company['color']; ?>-500 to-<?php echo $company['color']; ?>-600 text-white p-6 md:p-8 flex items-center justify-between group"
                  data-toggle>
            <div class="flex items-center space-x-4">
              <div class="bg-white/20 p-4 rounded-full">
                <i class="<?php echo $company['icon']; ?> text-2xl"></i>
              </div>
              <div>
                <h2 class="text-2xl md:text-3xl font-bold"><?php echo $company['company']; ?></h2>
                <p class="text-lg md:text-xl opacity-90"><?php echo $company['position']; ?></p>
              </div>
            </div>
            <div class="flex items-center space-x-4">
              <div class="text-right hidden sm:block">
                <div class="bg-white/20 px-4 py-2 rounded-full">
                  <p class="font-semibold"><?php echo $company['duration']; ?></p>
                </div>
                <p class="opacity-90 mt-2"><?php echo $company['period']; ?></p>
              </div>
              <span class="shrink-0 inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/20">
                <i class="fa-solid fa-chevron-<?php echo $open ? 'up' : 'down'; ?> transition-transform" data-chevron></i>
              </span>
            </div>
          </button>

          <div class="<?php echo $open ? '' : 'hidden'; ?>" data-body>
            <div class="p-6 md:p-8">
<?php if (count($company['projects']) > 1): ?>
              <h3 class="text-2xl font-bold text-gray-800 mb-6"><?= L('โปรเจกต์และผลงาน','Projects and Deliverables'); ?></h3>
<?php endif; ?>
              <div class="space-y-8">
<?php foreach ($company['projects'] as $i => $project): ?>
                <div class="border-l-4 border-<?php echo $company['color']; ?>-500 pl-6">
                  <h4 class="text-xl font-bold text-gray-800 mb-3"><?php echo $project['title']; ?></h4>
                  <p class="text-gray-600 mb-4 leading-relaxed"><?php echo $project['description']; ?></p>
                  <div class="grid md:grid-cols-2 gap-6">
                    <div>
                      <h5 class="font-semibold text-gray-800 mb-3"><?= L('หน้าที่รับผิดชอบ:','Responsibilities:'); ?></h5>
                      <ul class="space-y-2">
<?php foreach ($project['responsibilities'] as $resp): ?>
                        <li class="flex items-start space-x-2">
                          <i class="fas fa-check-circle text-<?php echo $company['color']; ?>-500 mt-1"></i>
                          <span class="text-gray-700"><?php echo $resp; ?></span>
                        </li>
<?php endforeach; ?>
                      </ul>
                    </div>
                    <div>
                      <h5 class="font-semibold text-gray-800 mb-3"><?= L('เทคโนโลยีที่ใช้:','Tech stack:'); ?></h5>
                      <div class="flex flex-wrap gap-2">
<?php foreach ($project['tech'] as $tech): ?>
                        <span class="bg-<?php echo $company['color']; ?>-100 text-<?php echo $company['color']; ?>-800 text-sm px-3 py-1 rounded-full font-medium">
                          <?php echo $tech; ?>
                        </span>
<?php endforeach; ?>
                      </div>
                    </div>
                  </div>
                </div>
<?php if (count($company['projects']) > 1 && $i < count($company['projects']) - 1): ?>
                <div class="border-t border-gray-200 pt-6"></div>
<?php endif; ?>
<?php endforeach; ?>
              </div>
            </div>
          </div>
        </div>
<?php endforeach; ?>
      </div>

      <!-- Skills Percentage -->
      <div class="mt-16 bg-white rounded-xl shadow-lg p-8">
        <h2 class="text-2xl font-bold text-gray-800 text-center mb-8"><?= L('ระดับความเชี่ยวชาญ','Skill Levels'); ?></h2>
<?php
$skills = [
    ['name'=>L('Hardware Support','Hardware Support'),'level'=>95,'color'=>'blue'],
    ['name'=>L('Software Installation','Software Installation'),'level'=>90,'color'=>'green'],
    ['name'=>L('Network Administration','Network Administration'),'level'=>85,'color'=>'purple'],
    ['name'=>L('System Training','System Training'),'level'=>88,'color'=>'yellow'],
    ['name'=>L('Remote Support','Remote Support'),'level'=>92,'color'=>'red'],
    ['name'=>L('User Management','User Management'),'level'=>87,'color'=>'indigo']
];
?>
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
<?php foreach ($skills as $skill): ?>
          <div class="bg-gray-50 p-4 rounded-lg">
            <div class="flex justify-between items-center mb-2">
              <span class="font-medium text-gray-700 text-sm"><?php echo $skill['name']; ?></span>
              <span class="text-<?php echo $skill['color']; ?>-600 font-bold text-sm"><?php echo $skill['level']; ?>%</span>
            </div>
            <div class="w-full bg-gray-200 rounded-full h-2">
              <div class="bg-<?php echo $skill['color']; ?>-500 h-2 rounded-full transition-all duration-1000" style="width: <?php echo $skill['level']; ?>%"></div>
            </div>
          </div>
<?php endforeach; ?>
        </div>
      </div>

      <!-- Skills Summary -->
<div class="mt-20 bg-gradient-to-r from-gray-900 to-gray-800 text-white rounded-2xl p-8">
  <h2 class="text-3xl font-bold text-center mb-12"><?= L('สรุปความเชี่ยวชาญ','Summary'); ?></h2>
  <div class="grid md:grid-cols-3 gap-8">
    <div class="text-center">
      <div class="bg-blue-500 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
        <i class="fas fa-laptop text-2xl"></i>
      </div>
      <h3 class="text-xl font-bold mb-2">Hardware & Software</h3>
      <p class="text-gray-300"><?= L('ประสบการณ์','Experience'); ?> <?= date('Y') - 2021; ?>+ <?= L('ปี','yrs'); ?></p>
    </div>

    <!-- เปลี่ยนเป็น Network Administration -->
    <div class="text-center">
      <div class="bg-green-500 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
        <i class="fas fa-network-wired text-2xl"></i>
      </div>
      <h3 class="text-xl font-bold mb-2">Network Administration</h3>
      <p class="text-gray-300">
        <?= L('กำหนดค่า ตรวจสอบ และแก้ปัญหาเครือข่ายให้เสถียรและปลอดภัย',
               'Configure, monitor, and troubleshoot networks for stability and security'); ?>
      </p>
    </div>

    <!-- เปลี่ยนเป็น Remote Support -->
    <div class="text-center">
      <div class="bg-purple-500 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
        <i class="fas fa-headset text-2xl"></i>
      </div>
      <h3 class="text-xl font-bold mb-2">Remote Support</h3>
      <p class="text-gray-300">
        <?= L('สนับสนุนผู้ใช้จากระยะไกล แก้ปัญหา ติดตั้งซอฟต์แวร์ และให้คำปรึกษาผ่านเครื่องมือ Remote',
               'Provide remote user support for troubleshooting, software installs, and guidance via remote tools'); ?>
      </p>
    </div>
  </div>

  <div class="mt-12 pt-8 border-t border-gray-700">
    <h3 class="text-2xl font-bold text-center mb-8"><?= L('Timeline ประสบการณ์การทำงาน','Experience Timeline'); ?></h3>
    <div class="flex justify-center">
      <div class="bg-gray-700 rounded-full px-8 py-4">
        <span class="text-3xl font-bold text-blue-400"><?= date('Y') - 2021; ?>+</span>
        <span class="text-lg ml-2"><?= L('ปีประสบการณ์','years'); ?></span>
      </div>
    </div>
  </div>
</div>


    </div>
  </section>

  <?php require __DIR__ . '/footer.php'; ?>

  <!-- Page-specific: toggle cards -->
  <script>
    document.querySelectorAll('[data-card]').forEach(function(card){
      var btn = card.querySelector('[data-toggle]');
      var body = card.querySelector('[data-body]');
      var chev = card.querySelector('[data-chevron]');
      btn.addEventListener('click', function(){
        if(body.classList.contains('hidden')){
          body.classList.remove('hidden');
          chev.classList.replace('fa-chevron-down','fa-chevron-up');
        }else{
          body.classList.add('hidden');
          chev.classList.replace('fa-chevron-up','fa-chevron-down');
        }
      });
    });
  </script>
  
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
