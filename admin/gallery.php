<?php
require "config.php";
$stmt = $pdo->query("SELECT * FROM gallery ORDER BY uploaded_at DESC");
$gallery = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html>
<head>
  <title>Gallery - Eternal Moments</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
  <h2 class="text-4xl font-bold text-amber-400 text-center my-6">Our Gallery</h2>
  <div class="grid md:grid-cols-3 gap-6 max-w-6xl mx-auto">
    <?php foreach ($gallery as $item): ?>
      <?php if ($item["type"] === "photo"): ?>
        <img src="<?= $item["path"] ?>" class="rounded-xl shadow-md object-cover w-full h-64">
      <?php else: ?>
        <video controls class="rounded-xl shadow-md w-full h-64">
          <source src="<?= $item["path"] ?>" type="video/mp4">
        </video>
      <?php endif; ?>
    <?php endforeach; ?>
  </div>
</body>
</html>
