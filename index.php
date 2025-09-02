<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Eternal Moments - Wedding Photography</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="./css/styles.css" />
</head>

<body class="font-sans bg-white text-gray-800">
  <!-- Navbar -->
  </header>
  <header class="fixed w-full bg-white shadow-md z-50">
    <div class="container mx-auto flex justify-between items-center py-4 px-6">
      <div class="flex items-center space-x-2">
        <span class="text-2xl">📷</span>
        <a href="index.php" class="text-lg font-bold text-amber-400">Eternal Moments</a>
        <p class="text-sm text-gray-500">Wedding Photography</p>
      </div>

      <nav class="hidden md:flex space-x-8 ml-auto">
        <a href="about.php">About</a>
        <a href="gallery.php">Gallery</a>
        <a href="services.php">Services</a>
        <a href="contact.php">Contact</a>
      </nav>

      <a href="contact.php"
        class="ml-4 bg-gradient-to-r from-pink-200 to-amber-200 px-4 py-2 rounded-lg font-semibold">
        Book Session
      </a>
    </div>
  </header>


  <!-- Hero Section -->
  <section
    class="relative h-screen bg-cover bg-center flex items-center justify-center"
    style="background-image: url('./assets/images/hero1.jpg')">
    <div class="text-center text-white">
      <h2 class="text-5xl font-bold drop-shadow-lg">Eternal</h2>
      <p class="mt-4 text-lg">
        Capturing love stories with artistry and passion. Your wedding day
        deserves to be remembered beautifully.
      </p>
      <div class="mt-6 space-x-4">
        <a
          href="gallery.html"
          class="bg-gradient-to-r from-pink-200 to-amber-200 px-6 py-3 rounded-lg text-gray-800 font-semibold shadow-md">View Our Work</a>
        <a href="contact.html" class="border px-6 py-3 rounded-lg font-medium">Book Consultation</a>
      </div>
    </div>
  </section>

  <!-- Services Section -->
  <section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <!-- Heading -->
      <div class="text-center mb-16">
        <h2 class="text-4xl md:text-5xl font-bold mb-6">Our Services</h2>
        <p class="text-xl text-gray-600 max-w-3xl mx-auto">
          Comprehensive wedding photography services tailored to capture your
          unique love story
        </p>
      </div>

      <!-- Services Grid -->
      <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <div
          class="p-8 text-center bg-white rounded-xl shadow-lg transition-transform duration-300 hover:scale-105 hover:shadow-2xl">
          <div class="p-4 rounded-full bg-pink-100 w-fit mx-auto mb-6">
            <span class="text-pink-500 text-3xl">📷</span>
          </div>
          <h3 class="text-xl font-semibold mb-4">Wedding Photography</h3>
          <p class="text-gray-600 leading-relaxed">
            Complete wedding day coverage with artistic storytelling
          </p>
        </div>

        <div
          class="p-8 text-center bg-white rounded-xl shadow-lg transition-transform duration-300 hover:scale-105 hover:shadow-2xl">
          <div class="p-4 rounded-full bg-amber-100 w-fit mx-auto mb-6">
            <span class="text-amber-500 text-3xl">💍</span>
          </div>
          <h3 class="text-xl font-semibold mb-4">Engagement Sessions</h3>
          <p class="text-gray-600 leading-relaxed">
            Beautiful pre-wedding photos to celebrate your love
          </p>
        </div>

        <div
          class="p-8 text-center bg-white rounded-xl shadow-lg transition-transform duration-300 hover:scale-105 hover:shadow-2xl">
          <div class="p-4 rounded-full bg-rose-100 w-fit mx-auto mb-6">
            <span class="text-rose-500 text-3xl">👰</span>
          </div>
          <h3 class="text-xl font-semibold mb-4">Bridal Portraits</h3>
          <p class="text-gray-600 leading-relaxed">
            Stunning portraits in your wedding dress
          </p>
        </div>
      </div>

      <!-- Button -->
      <div class="text-center mt-12">
        <a
          href="services.html"
          class="bg-gradient-to-r from-pink-200 to-amber-200 text-gray-800 font-semibold px-8 py-4 rounded-lg shadow-md hover:shadow-xl transition">
          View All Services
        </a>
      </div>
    </div>
  </section>

  <!--Gallery-->
  <section class="py-20 bg-gray-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <!-- Heading -->
      <div class="text-center mb-16">
        <h2 class="text-4xl md:text-5xl font-bold mb-6">Recent Work</h2>
        <p class="text-xl text-gray-600 max-w-3xl mx-auto">
          A glimpse into some of our favorite moments captured
        </p>
      </div>

      <!-- Gallery Grid -->
      <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-12">
        <div
          class="relative overflow-hidden rounded-lg aspect-[4/5] group cursor-pointer">
          <img
            src="assets/images/p1.jpg"
            alt="Gallery preview 1"
            class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" />
          <div
            class="absolute inset-0 bg-black/0 group-hover:bg-black/20 transition-all duration-300"></div>
        </div>

        <div
          class="relative overflow-hidden rounded-lg aspect-[4/5] group cursor-pointer">
          <img
            src="assets/images/p2.jpg"
            alt="Gallery preview 2"
            class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" />
          <div
            class="absolute inset-0 bg-black/0 group-hover:bg-black/20 transition-all duration-300"></div>
        </div>

        <div
          class="relative overflow-hidden rounded-lg aspect-[4/5] group cursor-pointer">
          <img
            src="assets/images/p1.jpg"
            alt="Gallery preview 3"
            class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" />
          <div
            class="absolute inset-0 bg-black/0 group-hover:bg-black/20 transition-all duration-300"></div>
        </div>
      </div>

      <!-- Button -->
      <div class="text-center">
        <a
          href="gallery.html"
          class="bg-gradient-to-r from-pink-200 to-amber-200 text-gray-800 font-semibold px-8 py-4 rounded-lg shadow-md hover:shadow-xl transition">
          View Full Gallery
        </a>
      </div>
    </div>
  </section>

  <!-- Process -->
  <section class="py-16 px-6 max-w-7xl mx-auto">
    <h3 class="text-3xl font-bold text-center mb-10">Our Process</h3>
    <div class="grid md:grid-cols-4 gap-8 text-center">
      <div
        class="p-6 bg-white rounded-xl shadow-lg transform transition duration-300 ease-in-out hover:scale-105 hover:shadow-2xl">
        <div
          class="text-rose-600 text-3xl font-bold mb-2 counter"
          data-target="50"
          data-suffix="+">
          0+
        </div>
        <p class="font-semibold">Weddings Captured</p>
      </div>

      <div
        class="p-6 bg-white rounded-xl shadow-lg transform transition duration-300 ease-in-out hover:scale-105 hover:shadow-2xl">
        <div
          class="text-rose-600 text-3xl font-bold mb-2 counter"
          data-target="8"
          data-suffix="+">
          0+
        </div>
        <p class="font-semibold">Years of Experience</p>
      </div>

      <div
        class="p-6 bg-white rounded-xl shadow-lg transform transition duration-300 ease-in-out hover:scale-105 hover:shadow-2xl">
        <div
          class="text-rose-600 text-3xl font-bold mb-2 counter"
          data-target="100"
          data-suffix="%">
          0%
        </div>
        <p class="font-semibold">Happy Couples</p>
      </div>

      <div
        class="p-6 bg-white rounded-xl shadow-lg transform transition duration-300 ease-in-out hover:scale-105 hover:shadow-2xl">
        <div
          class="text-rose-600 text-3xl font-bold mb-2 counter"
          data-target="25"
          data-suffix="+">
          0+
        </div>
        <p class="font-semibold">Destinations Covered</p>
      </div>
    </div>
  </section>

  <!--Why Us-->
  <section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
        <!-- Left content -->
        <div>
          <h2 class="text-4xl md:text-5xl font-bold mb-6">
            Why Choose
            <span
              class="block bg-gradient-to-r from-pink-400 to-amber-400 text-transparent bg-clip-text">Eternal Moments?</span>
          </h2>
          <div class="space-y-6 text-gray-600 leading-relaxed text-lg">
            <p>
              With over a decade of experience capturing love stories, we
              bring artistic vision and technical excellence to every wedding
              we photograph.
            </p>
            <p>
              Our approach combines documentary storytelling with fine art
              photography, ensuring that every emotion and detail of your
              special day is beautifully preserved.
            </p>
          </div>
          <div class="mt-8 grid grid-cols-2 gap-8">
            <div class="text-center">
              <div
                class="text-3xl font-bold bg-gradient-to-r from-pink-400 to-amber-400 text-transparent bg-clip-text mb-2">
                500+
              </div>
              <p class="text-gray-600">Weddings Captured</p>
            </div>
            <div class="text-center">
              <div
                class="text-3xl font-bold bg-gradient-to-r from-pink-400 to-amber-400 text-transparent bg-clip-text mb-2">
                12+
              </div>
              <p class="text-gray-600">Years Experience</p>
            </div>
          </div>
          <div class="mt-8">
            <a
              href="about.html"
              class="bg-gradient-to-r from-pink-200 to-amber-200 px-8 py-4 rounded-lg font-semibold shadow hover:shadow-lg transition">
              Learn More About Us
            </a>
          </div>
        </div>

        <!-- Right card -->
        <div class="relative">
          <div class="p-8 bg-white rounded-xl shadow-lg">
            <div class="flex items-center space-x-4 mb-6">
              <div class="p-3 rounded-full bg-pink-100">
                <span class="text-pink-500 text-2xl">🏆</span>
              </div>
              <div>
                <h3 class="font-semibold">Award-Winning Photography</h3>
                <p class="text-gray-600">
                  Recognized for excellence in wedding photography
                </p>
              </div>
            </div>

            <div class="space-y-4">
              <div class="flex justify-between items-center">
                <span class="text-gray-600">Professional Excellence</span>
                <div class="flex space-x-1 text-yellow-400">★★★★★</div>
              </div>
              <div class="flex justify-between items-center">
                <span class="text-gray-600">Client Satisfaction</span>
                <div class="flex space-x-1 text-yellow-400">★★★★★</div>
              </div>
              <div class="flex justify-between items-center">
                <span class="text-gray-600">Artistic Vision</span>
                <div class="flex space-x-1 text-yellow-400">★★★★★</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!--Comments-->
  <section class="py-20 bg-gray-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center mb-16">
        <h2 class="text-4xl md:text-5xl font-bold mb-6">Happy Couples</h2>
        <p class="text-xl text-gray-600 max-w-3xl mx-auto">
          See what our couples have to say about their experience
        </p>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

        <!-- Card -->
        <div class="p-8 bg-white rounded-xl shadow-lg text-center transition duration-300 transform hover:-translate-y-2 hover:shadow-2xl hover:scale-105">
          <div class="flex justify-center space-x-1 mb-4 text-yellow-400">
            ★★★★★
          </div>
          <p class="text-gray-600 italic mb-6">
            "Eternal Moments made our day unforgettable. Every picture tells a
            story!"
          </p>
          <div class="font-semibold">Sophia & James</div>
        </div>

        <!-- Card -->
        <div class="p-8 bg-white rounded-xl shadow-lg text-center transition duration-300 transform hover:-translate-y-2 hover:shadow-2xl hover:scale-105">
          <div class="flex justify-center space-x-1 mb-4 text-yellow-400">
            ★★★★★
          </div>
          <p class="text-gray-600 italic mb-6">
            "The team was amazing, professional, and truly captured the
            essence of our wedding."
          </p>
          <div class="font-semibold">Emily & Daniel</div>
        </div>

        <!-- Card -->
        <div class="p-8 bg-white rounded-xl shadow-lg text-center transition duration-300 transform hover:-translate-y-2 hover:shadow-2xl hover:scale-105">
          <div class="flex justify-center space-x-1 mb-4 text-yellow-400">
            ★★★★★
          </div>
          <p class="text-gray-600 italic mb-6">
            "We couldn’t have asked for more. The photos are breathtaking!"
          </p>
          <div class="font-semibold">Olivia & Michael</div>
        </div>

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


  <!-- Script -->
  <script src="script.js"></script>
</body>

</html>