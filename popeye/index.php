<?php
$files = array_filter(scandir(__DIR__), static function ($name) {
    return is_file(__DIR__ . DIRECTORY_SEPARATOR . $name)
        && preg_match('/\.html?$/i', $name);
});
natcasesort($files);
?>
<!doctype html>
<html lang="he" dir="rtl">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>OpenVid — סרטוני Popeye</title>
<style>
*{box-sizing:border-box}body{font-family:Arial,sans-serif;margin:0;padding:clamp(1rem,4vw,3rem);background:#fcf9f2;color:#222}
header{display:flex;align-items:center;justify-content:space-between;gap:1rem;flex-wrap:wrap;margin-bottom:1.5rem}
h1{margin:0;font-size:clamp(1.5rem,4vw,2rem)}.files{display:flex;flex-wrap:wrap;gap:.75rem}
.button{display:inline-block;padding:.8rem 1rem;background:#1769aa;color:#fff;text-decoration:none;border-radius:8px;overflow-wrap:anywhere}
.button:hover{background:#0f4f85}.home{color:#1769aa;text-decoration:none;font-weight:bold}.empty{color:#555}
</style>
</head>
<body>
<header><h1>סרטוני Popeye</h1><a class="home" href="../index.html">→ חזרה לעמוד הראשי</a></header>
<div class="files">
<?php foreach ($files as $file): $url = rawurlencode($file); ?>
<a class="button" href="<?= htmlspecialchars($url, ENT_QUOTES, 'UTF-8') ?>"><?= htmlspecialchars(pathinfo($file, PATHINFO_FILENAME), ENT_QUOTES, 'UTF-8') ?></a>
<?php endforeach; ?>
</div>
<?php if (!$files): ?><p class="empty">לא נמצאו קובצי וידאו בתיקייה.</p><?php endif; ?>
</body>
</html>
