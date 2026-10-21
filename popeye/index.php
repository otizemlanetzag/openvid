<?php
$files = glob(__DIR__ . '/*.html');
sort($files, SORT_NATURAL | SORT_FLAG_CASE);
?>
<!doctype html>
<html lang="he" dir="rtl">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>קובצי HTML</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 2rem;
    }

    .files {
      display: flex;
      flex-wrap: wrap;
      gap: 0.75rem;
    }

    .button {
      display: inline-block;
      padding: 0.7rem 1rem;
      background: #1769aa;
      color: white;
      text-decoration: none;
      border-radius: 6px;
    }

    .button:hover {
      background: #0f4f85;
    }
  </style>
</head>
<body>
  <h1>קבצים בתיקייה</h1>

  <div class="files">
    <?php foreach ($files as $file):
      $name = basename($file);
      $url = rawurlencode($name);
    ?>
      <a class="button" href="<?= htmlspecialchars($url, ENT_QUOTES, 'UTF-8') ?>">
        <?= htmlspecialchars($name, ENT_QUOTES, 'UTF-8') ?>
      </a>
    <?php endforeach; ?>
  </div>
</body>
</html>
