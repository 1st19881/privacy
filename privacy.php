<?php
// ===== แก้ 3 บรรทัดนี้ได้ตามต้องการ =====
$appName  = "Reel Bot";
$owner    = "ป้ายยาของดี รีวิวของเด็ด";
$email    = "drowwy19881@gmail.com";
// =========================================
$updated = "12 พฤศจิกายน 2026";
?><!DOCTYPE html>
<html lang="th">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>นโยบายความเป็นส่วนตัว – <?= htmlspecialchars($appName) ?></title>
<style>
  :root { --bg:#ffffff; --fg:#1d2329; --muted:#5b6670; --line:#dde3e8; --link:#0b63c5; color-scheme: light; }
  @media (prefers-color-scheme: dark) {
    :root { --bg:#14181c; --fg:#e7ecf0; --muted:#9aa6b1; --line:#2a3239; --link:#6fb0ff; color-scheme: dark; }
  }
  body { margin:0; background:var(--bg); color:var(--fg);
         font:16px/1.75 "Sarabun","Noto Sans Thai",system-ui,sans-serif; }
  main { max-width:44rem; margin:0 auto; padding:3rem 1.25rem 4rem; }
  h1 { font-size:1.75rem; line-height:1.3; margin:0 0 .25rem; }
  h2 { font-size:1.15rem; margin:2.25rem 0 .5rem; padding-top:1rem; border-top:1px solid var(--line); }
  p, li { color:var(--fg); }
  .meta, .en { color:var(--muted); font-size:.92rem; }
  a { color:var(--link); }
</style>
</head>
<body>
<main>
  <h1>นโยบายความเป็นส่วนตัว</h1>
  <p class="meta"><?= htmlspecialchars($appName) ?> · ปรับปรุงล่าสุด <?= $updated ?></p>

  <p><?= htmlspecialchars($appName) ?> เป็นเครื่องมือภายในที่เจ้าของเพจ “<?= htmlspecialchars($owner) ?>” ใช้โพสต์วิดีโอ Reels ลงเพจ Facebook ของตนเองโดยอัตโนมัติ แอปนี้ไม่ได้เปิดให้บุคคลทั่วไปเข้าสู่ระบบหรือใช้งาน</p>

  <h2>ข้อมูลที่เราใช้</h2>
  <ul>
    <li>Page Access Token ของเพจที่เจ้าของเพจอนุญาต ใช้เพื่ออัปโหลดวิดีโอ โพสต์ และคอมเมนต์ลิงก์สินค้าบนเพจนั้นเท่านั้น</li>
    <li>ข้อมูลของวิดีโอที่โพสต์ เช่น ID ของวิดีโอ สถานะ และลิงก์โพสต์ เพื่อใช้ตรวจสอบว่าโพสต์สำเร็จ</li>
  </ul>
  <p>เราไม่เก็บ ไม่ขาย และไม่แชร์ข้อมูลส่วนบุคคลของผู้ใช้ Facebook หรือผู้ติดตามเพจ</p>

  <h2>การเก็บรักษาข้อมูล</h2>
  <p>Token และข้อมูลการโพสต์เก็บไว้บนเซิร์ฟเวอร์ของเจ้าของเพจเท่านั้น และใช้เพื่อการทำงานของแอปนี้เพียงอย่างเดียว</p>

  <h2 id="delete">การลบข้อมูล</h2>
  <p>หากต้องการให้ลบข้อมูลที่เกี่ยวข้องกับคุณ ส่งอีเมลมาที่ <a href="mailto:<?= htmlspecialchars($email) ?>"><?= htmlspecialchars($email) ?></a> ระบุหัวข้อว่า “ขอลบข้อมูล” เราจะลบให้ภายใน 30 วันและแจ้งกลับทางอีเมล คุณยังยกเลิกสิทธิ์ของแอปได้เองที่ Facebook → การตั้งค่า → แอพและเว็บไซต์</p>

  <h2>ติดต่อ</h2>
  <p><a href="mailto:<?= htmlspecialchars($email) ?>"><?= htmlspecialchars($email) ?></a></p>

  <h2>English summary</h2>
  <p class="en"><?= htmlspecialchars($appName) ?> is a private tool used by the owner of the Facebook Page “<?= htmlspecialchars($owner) ?>” to publish Reels to their own Page. It uses only the Page access token granted by the Page owner, to upload videos, publish posts and comment on that Page. No personal data of Facebook users is collected, sold or shared. To request data deletion, email <?= htmlspecialchars($email) ?> with the subject “Data deletion”; requests are completed within 30 days.</p>
</main>
</body>
</html>
