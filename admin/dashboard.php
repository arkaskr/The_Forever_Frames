<?php
session_start();

// login check
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
  header("Location: login.php");
  exit();
}

// ---------------- DEMO DATA ---------------- //
$bookings = [
  [
    "id" => 1,
    "name" => "Arka Sarkar",
    "phone" => "9876543210",
    "event" => "Wedding",
    "date" => "2025-08-25",
    "email" => "john@example.com",
    "venue" => "The Grand Palace",
    "message" => "Looking for full wedding coverage with photography + videography."
  ],
  [
    "id" => 2,
    "name" => "Akash Roy",
    "phone" => "9123456780",
    "event" => "Birthday",
    "date" => "2025-08-26",
    "email" => "jane@example.com",
    "venue" => "City Banquet Hall",
    "message" => "Need candid shots for the event and a highlight video."
  ],
];

$clients = [
  ["id" => 3, "name" => "Subhajit Roy", "event" => "Corporate Event", "date" => "2025-08-20", "status" => "Confirmed"],
  ["id" => 4, "name" => "Rohit Sharma", "event" => "Anniversary", "date" => "2025-08-15", "status" => "Completed"],
];

$gallery = [
  ["type" => "photo", "path" => "uploads/photo1.jpg"],
  ["type" => "video", "path" => "uploads/video1.mp4"],
];

$banners = [
  ["path" => "uploads/banner1.jpg"],
  ["path" => "uploads/banner2.jpg"],
];

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Dashboard</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    function toggleDetails(id) {
      const details = document.getElementById("details-" + id);
      details.classList.toggle("hidden");
    }
  </script>
</head>

<body class="flex min-h-screen bg-gray-100 text-gray-800">

  <!-- Sidebar -->
  <aside class="w-64 bg-gradient-to-b from-blue-700 to-blue-500 text-white flex flex-col shadow-lg">
    <!-- Logo / Title -->
    <div class="p-6 text-2xl font-bold border-b border-blue-400 tracking-wide">
      Admin Panel
    </div>

    <!-- Navigation -->
    <nav class="flex-1 p-4 space-y-2">
      <button onclick="showSection('bookings')"
        class="flex items-center w-full px-4 py-2 rounded-lg hover:bg-blue-400 transition group">
        <span class="text-lg mr-3">📑</span>
        <span class="group-hover:translate-x-1 transition">Bookings</span>
      </button>

      <button onclick="showSection('clients')"
        class="flex items-center w-full px-4 py-2 rounded-lg hover:bg-blue-400 transition group">
        <span class="text-lg mr-3">👥</span>
        <span class="group-hover:translate-x-1 transition">Clients</span>
      </button>

      <button onclick="showSection('gallery')"
        class="flex items-center w-full px-4 py-2 rounded-lg hover:bg-blue-400 transition group">
        <span class="text-lg mr-3">🖼️</span>
        <span class="group-hover:translate-x-1 transition">Gallery</span>
      </button>

      <button onclick="showSection('banners')"
        class="flex items-center w-full px-4 py-2 rounded-lg hover:bg-blue-400 transition group">
        <span class="text-lg mr-3">🏞️</span>
        <span class="group-hover:translate-x-1 transition">Banner Images</span>
      </button>
    </nav>

    <!-- Logout -->
    <div class="p-4 border-t border-blue-400">
      <a href="logout.php"
        class="block text-center bg-white text-blue-700 py-2 rounded-lg font-medium shadow hover:bg-gray-100 transition">
        Logout
      </a>
    </div>
  </aside>



  <!-- Main Content -->
  <main class="flex-1 p-8 overflow-y-auto">

    <!-- Bookings Section -->
    <section id="bookings" class="content-section">
      <h2 class="text-2xl font-bold mb-6">Latest Bookings</h2>

      <!-- Header Row -->
      <div class="grid grid-cols-3 bg-blue-600 text-white font-semibold rounded-lg shadow mb-4 px-6 py-3">
        <div>Name / Phone</div>
        <div class="text-center">Event</div>
        <div class="text-right mr-[2rem]">Date</div>
      </div>

      <!-- Booking Cards -->
      <div class="space-y-4">
        <?php foreach ($bookings as $b): ?>
          <div class="bg-white shadow rounded-lg overflow-hidden">
            <!-- Header (click to expand) -->
            <div onclick="toggleDetails(<?= $b['id'] ?>)"
              class="grid grid-cols-3 items-center px-6 py-4 cursor-pointer hover:bg-gray-50">

              <!-- Left (ID, Name, Phone) -->
              <div>
                <p class="font-bold text-gray-800">#<?= $b["id"] ?> - <?= htmlspecialchars($b["name"]) ?></p>
                <p class="text-sm text-gray-600">📞 <?= htmlspecialchars($b["phone"]) ?></p>
              </div>

              <!-- Middle (Event) -->
              <div class="text-center font-medium text-gray-700">
                <?= htmlspecialchars($b["event"]) ?>
              </div>

              <!-- Right (Date) -->
              <div class="text-right text-md text-gray-600">
                <?= $b["date"] ?>
              </div>
            </div>

            <!-- Hidden Details -->
            <div id="details-<?= $b['id'] ?>" class="hidden border-t px-6 py-4 bg-gray-50">
              <p><span class="font-semibold">Email:</span> <?= htmlspecialchars($b["email"]) ?></p>
              <p><span class="font-semibold">Venue:</span> <?= htmlspecialchars($b["venue"]) ?></p>
              <p><span class="font-semibold">Message:</span> <?= htmlspecialchars($b["message"]) ?></p>
              <div class="mt-4 flex justify-end">
                <button class="px-3 py-1 bg-green-500 text-white rounded hover:bg-green-600">Accept</button>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </section>

    <!-- Clients Section -->
    <section id="clients" class="content-section hidden">
      <h2 class="text-2xl font-bold mb-6">Clients</h2>

      <?php if ($clients): ?>
        <!-- Header Row -->
        <div class="grid grid-cols-4 bg-green-600 text-white font-semibold rounded-lg shadow mb-4 px-6 py-3">
          <div>Name</div>
          <div class="text-center">Event</div>
          <div class="text-right">Date</div>
          <div class="text-center">Status</div>
        </div>

        <!-- Clients List -->
        <div class="space-y-4">
          <?php foreach ($clients as $c): ?>
            <div class="bg-white shadow rounded-lg overflow-hidden">
              <div class="grid grid-cols-4 items-center px-6 py-4 hover:bg-gray-50">

                <!-- Name -->
                <div>
                  <p class="font-semibold text-gray-800"><?= htmlspecialchars($c["name"]) ?></p>
                </div>

                <!-- Event -->
                <div class="text-center font-medium text-gray-700">
                  <?= htmlspecialchars($c["event"]) ?>
                </div>

                <!-- Date -->
                <div class="text-right text-sm text-gray-500">
                  <?= $c["date"] ?>
                </div>

                <!-- Status Dropdown -->
                <div class="text-center">
                  <select class="px-3 py-1 border rounded-lg focus:ring focus:ring-green-300">
                    <option <?= $c["status"] == "Confirmed" ? "selected" : "" ?>>Confirmed</option>
                    <option <?= $c["status"] == "Completed" ? "selected" : "" ?>>Completed</option>
                  </select>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      <?php else: ?>
        <p class="text-gray-500">No confirmed clients yet.</p>
      <?php endif; ?>
    </section>

    <!-- Gallery Section -->
    <section id="gallery" class="content-section hidden">
      <h2 class="text-2xl font-bold mb-6">Gallery</h2>

      <!-- Upload Card -->
      <div class="bg-white shadow rounded-xl p-8 mb-8 border border-gray-100">
        <h3 class="text-lg font-semibold mb-4 text-gray-700">Upload Media</h3>
        <form action="upload.php" method="post" enctype="multipart/form-data" class="space-y-5">

          <!-- File Input -->
          <label class="flex flex-col items-center justify-center w-full h-40 border-2 border-dashed border-gray-300 rounded-xl cursor-pointer hover:border-blue-400 transition">
            <div class="flex flex-col items-center justify-center text-gray-500">
              <svg class="w-10 h-10 mb-2 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M7 16V4a1 1 0 011-1h8a1 1 0 011 1v12m-4-4l-4 4m0 0l-4-4m4 4V4" />
              </svg>
              <p class="text-sm"><span class="font-semibold">Click to upload</span> or drag and drop</p>
              <p class="text-xs text-gray-400 mt-1">PNG, JPG, MP4 (max 20MB)</p>
            </div>
            <input type="file" name="media" class="hidden" required />
          </label>

          <!-- Select Type -->
          <select name="type" class="w-full px-4 py-3 border rounded-lg focus:ring-2 focus:ring-blue-500">
            <option value="photo">Photo</option>
            <option value="video">Video</option>
          </select>

          <!-- Submit Button -->
          <button type="submit" class="w-full bg-blue-600 text-white py-3 rounded-lg font-medium shadow hover:bg-blue-700 transition">
            Upload Media
          </button>
        </form>
      </div>

      <!-- Uploaded Media -->
      <div class="bg-white shadow rounded-xl p-8 border border-gray-100">
        <h3 class="text-lg font-semibold mb-6 text-gray-700">Uploaded Media</h3>
        <?php if (!empty($gallery)): ?>
          <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            <?php foreach ($gallery as $index => $item): ?>
              <div class="relative group bg-gray-50 rounded-xl overflow-hidden shadow hover:shadow-lg transition">

                <!-- Media Preview -->
                <?php if ($item["type"] == "photo"): ?>
                  <img src="<?= htmlspecialchars($item["path"]) ?>" class="w-full h-48 object-cover">
                <?php else: ?>
                  <video controls class="w-full h-48 object-cover">
                    <source src="<?= htmlspecialchars($item["path"]) ?>" type="video/mp4">
                  </video>
                <?php endif; ?>

                <!-- Overlay on hover -->
                <div class="absolute inset-0 bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 flex items-center justify-center transition">
                  <a href="delete.php?id=<?= $index ?>"
                    class="px-4 py-2 bg-red-500 text-white rounded-lg shadow hover:bg-red-600 transition">
                    Delete
                  </a>
                </div>
              </div>
            <?php endforeach; ?>
          </div>
        <?php else: ?>
          <p class="text-gray-500">No media uploaded yet.</p>
        <?php endif; ?>
      </div>
    </section>

    <!-- Banner Images Section -->
    <section id="banners" class="content-section hidden">
      <h2 class="text-2xl font-bold mb-6">Banner Images</h2>

      <!-- Upload Card -->
      <div class="bg-white shadow rounded-xl p-8 mb-8 border border-gray-100">
        <h3 class="text-lg font-semibold mb-4 text-gray-700">Upload Banner</h3>
        <form action="upload_banner.php" method="post" enctype="multipart/form-data" class="space-y-5">

          <!-- File Input (Only Images) -->
          <label class="flex flex-col items-center justify-center w-full h-40 border-2 border-dashed border-gray-300 rounded-xl cursor-pointer hover:border-blue-400 transition">
            <div class="flex flex-col items-center justify-center text-gray-500">
              <svg class="w-10 h-10 mb-2 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M7 16V4a1 1 0 011-1h8a1 1 0 011 1v12m-4-4l-4 4m0 0l-4-4m4 4V4" />
              </svg>
              <p class="text-sm"><span class="font-semibold">Click to upload</span> or drag & drop</p>
              <p class="text-xs text-gray-400 mt-1">PNG, JPG (max 10MB)</p>
            </div>
            <input type="file" name="banner" accept="image/*" class="hidden" required />
          </label>

          <!-- Submit -->
          <button type="submit" class="w-full bg-purple-600 text-white py-3 rounded-lg font-medium shadow hover:bg-purple-700 transition">
            Upload Banner
          </button>
        </form>
      </div>

      <!-- Uploaded Banners -->
      <div class="bg-white shadow rounded-xl p-8 border border-gray-100">
        <h3 class="text-lg font-semibold mb-6 text-gray-700">Current Banners</h3>
        <?php if (!empty($banners)): ?>
          <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
            <?php foreach ($banners as $index => $b): ?>
              <div class="relative group bg-gray-50 rounded-xl overflow-hidden shadow hover:shadow-lg transition">
                <img src="<?= htmlspecialchars($b["path"]) ?>" class="w-full h-40 object-cover">

                <!-- Overlay delete -->
                <div class="absolute inset-0 bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 flex items-center justify-center transition">
                  <a href="delete_banner.php?id=<?= $index ?>"
                    class="px-4 py-2 bg-red-500 text-white rounded-lg shadow hover:bg-red-600 transition">
                    Delete
                  </a>
                </div>
              </div>
            <?php endforeach; ?>
          </div>
        <?php else: ?>
          <p class="text-gray-500">No banners uploaded yet.</p>
        <?php endif; ?>
      </div>
    </section>



  </main>

  <script>
    function showSection(sectionId) {
      document.querySelectorAll(".content-section").forEach(sec => sec.classList.add("hidden"));
      document.getElementById(sectionId).classList.remove("hidden");
    }
  </script>
</body>

</html>