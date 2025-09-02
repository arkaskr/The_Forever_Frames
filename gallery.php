<?php
// require "config.php";

// Fetch photos
// $stmtPhotos = $pdo->prepare("SELECT * FROM gallery WHERE type = 'photo' ORDER BY uploaded_at DESC");
// $stmtPhotos->execute();
// $photos = $stmtPhotos->fetchAll(PDO::FETCH_ASSOC);

// Fetch videos
// $stmtVideos = $pdo->prepare("SELECT * FROM gallery WHERE type = 'video' ORDER BY uploaded_at DESC");
// $stmtVideos->execute();
// $videos = $stmtVideos->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gallery - Eternal Moments</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="font-sans bg-white text-gray-800">

  <!-- Navbar -->
  <header class="fixed w-full bg-white shadow-md z-50">
    <div class="container mx-auto flex justify-between items-center py-4 px-6">
      <div class="flex items-center space-x-2">
        <span class="text-2xl">📷</span>
        <a href="index.php" class="text-lg font-bold text-amber-400">Eternal Moments</a>
        <p class="text-sm text-gray-500">Wedding Photography</p>
      </div>
      <nav class="hidden md:flex space-x-8 ml-auto">
        <a href="about.php">About</a>
        <a href="gallery.php" class="text-pink-400 font-medium">Gallery</a>
        <a href="services.php">Services</a>
        <a href="contact.php">Contact</a>
      </nav>
      <a href="contact.php" class="ml-4 bg-gradient-to-r from-pink-200 to-amber-200 px-4 py-2 rounded-lg font-semibold">Book Session</a>
    </div>
  </header>

  <!-- Hero Section -->
  <section class="pt-32 pb-16 bg-gray-50 text-center">
    <h2 class="text-4xl font-bold text-amber-400">Our Gallery</h2>
    <p class="mt-4 text-gray-600">Browse albums and beautiful moments we've captured</p>
  </section>

  <!-- Albums Section (Static) -->
  <section class="py-16 px-6 max-w-6xl mx-auto">
    <h3 class="text-3xl font-bold mb-10 text-center">Albums</h3>
    <div class="grid md:grid-cols-3 gap-8">
      <div class="bg-white p-6 rounded-xl shadow-md text-center">
        <img src="https://source.unsplash.com/400x250/?wedding" class="rounded-lg mb-4 w-full h-48 object-cover">
        <h4 class="font-bold">Classic Weddings</h4>
      </div>
      <div class="bg-white p-6 rounded-xl shadow-md text-center">
        <img src="https://source.unsplash.com/400x250/?couple,love" class="rounded-lg mb-4 w-full h-48 object-cover">
        <h4 class="font-bold">Engagements</h4>
      </div>
      <div class="bg-white p-6 rounded-xl shadow-md text-center">
        <img src="https://source.unsplash.com/400x250/?bride,groom" class="rounded-lg mb-4 w-full h-48 object-cover">
        <h4 class="font-bold">Bridal Portraits</h4>
      </div>
    </div>
  </section>

  <!-- Featured Photos (Dynamic) -->
  <section class="py-16 bg-gray-50 px-6">
    <h3 class="text-3xl font-bold mb-10 text-center">Featured Photos</h3>
    <div class="grid md:grid-cols-3 gap-6 max-w-6xl mx-auto">
      <?php if (!empty($photos)): ?>
        <?php foreach ($photos as $photo): ?>
          <img src="<?= htmlspecialchars($photo['path']) ?>" 
               class="rounded-xl shadow-md object-cover w-full h-64">
        <?php endforeach; ?>
      <?php else: ?>
        <p class="col-span-3 text-center text-gray-500">No photos available yet.</p>
      <?php endif; ?>
    </div>
  </section>

  <!-- Featured Videos (Dynamic) -->
  <section class="py-16 px-6 max-w-6xl mx-auto">
    <h3 class="text-3xl font-bold mb-10 text-center">Featured Videos</h3>
    <div class="grid md:grid-cols-2 gap-6">
      <?php if (!empty($videos)): ?>
        <?php foreach ($videos as $video): ?>
          <video controls class="rounded-xl shadow-md w-full h-72">
            <source src="<?= htmlspecialchars($video['path']) ?>" type="video/mp4">
          </video>
        <?php endforeach; ?>
      <?php else: ?>
        <p class="col-span-2 text-center text-gray-500">No videos available yet.</p>
      <?php endif; ?>
    </div>
  </section>

  <!-- Footer -->
<footer class="bg-gray-50 py-10 mt-20 border-t border-gray-200">
  <div class="max-w-6xl mx-auto px-6 grid md:grid-cols-3 gap-6">
    <div>
      <h5 class="font-bold text-amber-400 text-lg">Eternal Moments</h5>
      <p class="text-sm mt-2 text-gray-600">
        Capturing the most precious moments of your special day with
        artistry, passion, and an eye for detail that will preserve your
        love story forever.
      </p>
    </div>
    <div>
      <h5 class="font-semibold mb-2">Quick Links</h5>
      <ul class="space-y-2 text-gray-600">
        <li><a href="about.php">About</a></li>
          <li><a href="gallery.php">Gallery</a></li>
          <li><a href="services.php">Services</a></li>
          <li><a href="contact.php">Contact</a></li>
      </ul>
    </div>
    <div>
      <h5 class="font-semibold mb-2">Contact</h5>
      <p>Email: info@eternalmoments.com</p>
      <p>Phone: +1 (555) 123-4567</p>
      <p>New York, NY</p>

      <!-- Admin Button -->
      <div class="mt-4">
        <a href="admin/login.php" 
           class="inline-block px-4 py-2 bg-amber-400 text-white font-medium rounded-lg shadow hover:bg-amber-500 transition">
          Admin Panel
        </a>
      </div>
    </div>
  </div>

  <div class="text-center mt-8 text-gray-500 text-sm">
    © 2024 Eternal Moments. All rights reserved. Made with ❤️ for love
    stories
  </div>
</footer>

</body>
</html>
