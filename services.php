<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Our Services | Eternal Moments</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-white text-gray-900">
  <!-- Navbar -->
  <header class="fixed w-full bg-white shadow-md z-50">
    <div class="container mx-auto flex justify-between items-center py-4 px-6">
      <div class="flex items-centered space-x-2">
        <span class="text-2xl">📷</span>
        <a href="index.php" class="text-lg font-bold text-amber-400">Eternal Moments</a>
        <p class="text-sm text-gray-500">Wedding Photography</p>
      </div>
      <nav class="hidden md:flex space-x-8 ml-auto">
        <a href="about.php">About</a>
        <a href="gallery.php">Gallery</a>
        <a href="services.php" class="text-pink-400 font-medium">Services</a>
        <a href="contact.php">Contact</a>
      </nav>
      <a href="contact.php" class="ml-4 bg-gradient-to-r from-pink-200 to-amber-200 px-4 py-2 rounded-lg font-semibold">Book Session</a>
    </div>
  </header>

  <!-- Hero -->
  <section class="relative bg-[url('https://source.unsplash.com/1600x600/?wedding,flowers')] bg-cover bg-center h-[50vh] flex items-center justify-center">
    <div class="bg-black/50 absolute inset-0"></div>
    <h2 class="relative text-white text-5xl font-bold z-10">Our Services</h2>
  </section>

  <!-- Packages -->
  <section class="py-16 px-6 max-w-7xl mx-auto">
    <h3 class="text-3xl font-bold text-center mb-10">Wedding Packages</h3>
    <div class="grid md:grid-cols-3 gap-8">
      <!-- Package 1 -->
      <div class="p-8 bg-white rounded-2xl shadow-lg border hover:shadow-2xl transition">
        <h4 class="text-2xl font-semibold mb-4">Classic Package</h4>
        <p class="mb-4 text-gray-600">Perfect for intimate weddings, includes 4 hours of coverage and 100 edited photos.</p>
        <p class="text-rose-600 font-bold text-xl">$799</p>
      </div>

      <!-- Package 2 -->
      <div class="p-8 bg-rose-50 rounded-2xl shadow-lg border border-rose-200 hover:shadow-2xl transition">
        <h4 class="text-2xl font-semibold mb-4">Premium Package</h4>
        <p class="mb-4 text-gray-600">Most popular! Includes 8 hours of coverage, engagement session, and 250 edited photos.</p>
        <p class="text-rose-600 font-bold text-xl">$1499</p>
      </div>

      <!-- Package 3 -->
      <div class="p-8 bg-white rounded-2xl shadow-lg border hover:shadow-2xl transition">
        <h4 class="text-2xl font-semibold mb-4">Luxury Package</h4>
        <p class="mb-4 text-gray-600">Full-day coverage, two photographers, engagement & bridal session, 500+ edited photos, album.</p>
        <p class="text-rose-600 font-bold text-xl">$2499</p>
      </div>
    </div>
  </section>

  <!-- Additional Services -->
  <section class="py-16 bg-gray-50 px-6">
    <div class="max-w-7xl mx-auto">
      <h3 class="text-3xl font-bold text-center mb-10">Additional Services</h3>
      <div class="grid md:grid-cols-3 gap-8">
        <div class="bg-white shadow-md rounded-xl p-6">
          <h4 class="font-semibold text-lg mb-2">Engagement Session</h4>
          <p class="text-gray-600">Capture your love story before the big day.</p>
        </div>
        <div class="bg-white shadow-md rounded-xl p-6">
          <h4 class="font-semibold text-lg mb-2">Drone Coverage</h4>
          <p class="text-gray-600">Stunning aerial views of your venue and ceremony.</p>
        </div>
        <div class="bg-white shadow-md rounded-xl p-6">
          <h4 class="font-semibold text-lg mb-2">Photo Albums</h4>
          <p class="text-gray-600">Beautifully designed albums to treasure forever.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Process -->
  <section class="py-16 px-6 max-w-7xl mx-auto">
    <h3 class="text-3xl font-bold text-center mb-10">Our Process</h3>
    <div class="grid md:grid-cols-4 gap-8 text-center">
      <div class="p-6 bg-white rounded-xl shadow-md">
        <div class="text-rose-600 text-3xl font-bold mb-2">1</div>
        <p class="font-semibold">Consultation</p>
      </div>
      <div class="p-6 bg-white rounded-xl shadow-md">
        <div class="text-rose-600 text-3xl font-bold mb-2">2</div>
        <p class="font-semibold">Booking</p>
      </div>
      <div class="p-6 bg-white rounded-xl shadow-md">
        <div class="text-rose-600 text-3xl font-bold mb-2">3</div>
        <p class="font-semibold">The Big Day</p>
      </div>
      <div class="p-6 bg-white rounded-xl shadow-md">
        <div class="text-rose-600 text-3xl font-bold mb-2">4</div>
        <p class="font-semibold">Delivery</p>
      </div>
    </div>
  </section>

  <!--CTA-->
  <section class="py-20 bg-gradient-to-r from-pink-50 to-amber-50">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
      <h2 class="text-4xl md:text-5xl font-bold mb-6">
        Ready to Capture Your
        <span
          class="block bg-gradient-to-r from-pink-400 to-amber-400 text-transparent bg-clip-text">Love Story?</span>
      </h2>
      <p class="text-xl text-gray-600 mb-8 leading-relaxed">
        Let's create beautiful memories that will last a lifetime. Book your
        consultation today and let's discuss your special day.
      </p>
      <a
        href="contact.html"
        class="bg-gradient-to-r from-pink-200 to-amber-200 px-8 py-4 rounded-lg font-semibold shadow hover:shadow-lg transition inline-flex items-center">
        Book Your Consultation
        <span class="ml-2">→</span>
      </a>
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