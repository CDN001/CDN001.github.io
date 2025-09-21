<?php
// language.php
if (session_status() === PHP_SESSION_NONE) { session_start(); }

$supported = ['th','en'];

// รับค่าจาก query เช่น ?lang=th | ?lang=en แล้วบันทึก
if (isset($_GET['lang']) && in_array($_GET['lang'], $supported, true)) {
    $_SESSION['lang'] = $_GET['lang'];
    setcookie('lang', $_GET['lang'], time() + 31536000, '/'); // 1 ปี
}

// ลำดับความสำคัญ: session > cookie > ค่าเริ่มต้น
$lang = $_SESSION['lang'] ?? ($_COOKIE['lang'] ?? 'th');

// ตัวช่วยแปลแบบสั้น
function L($th, $en) {
    global $lang;
    return $lang === 'th' ? $th : $en;
}
