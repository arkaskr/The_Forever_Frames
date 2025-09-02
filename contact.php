<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Book a Session - Eternal Moments</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-50 font-sans">

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
        <a href="gallery.php">Gallery</a>
        <a href="services.php">Services</a>
        <a href="contact.php" class="text-pink-400 font-medium">Contact</a>
      </nav>
      <a href="contact.php" class="ml-4 bg-gradient-to-r from-pink-200 to-amber-200 px-4 py-2 rounded-lg font-semibold">Book Session</a>
    </div>
  </header>

  <div class="min-h-screen">
    <!-- Hero Section -->
    <section class="relative pt-40 pb-20 bg-gradient-to-br from-gray-50 to-gray-100">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="text-4xl md:text-6xl font-bold mb-6 bg-gradient-to-r from-pink-400 to-amber-400 bg-clip-text text-transparent">
          Let's Create Magic Together
        </h1>
        <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
          Ready to capture your love story? We'd love to hear from you and discuss your special day
        </p>
      </div>
    </section>

    <!-- Contact Section -->
    <section class="py-20">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">

          <!-- Contact Info -->
          <div class="space-y-8">
            <div>
              <h2 class="text-3xl font-bold mb-6">Get in Touch</h2>
              <p class="text-gray-600 text-lg leading-relaxed mb-8">
                We're here to answer any questions you might have about our services.
                Reach out to us and we'll respond as soon as we can.
              </p>
            </div>

            <div class="space-y-6">
              <div class="flex items-start space-x-4">
                <div class="p-3 rounded-full bg-pink-100">
                  <!-- Mail Icon -->
                  <svg class="h-6 w-6 text-pink-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M16 12l-4-4-4 4m8 0H4" />
                  </svg>
                </div>
                <div>
                  <h3 class="font-semibold mb-1">Email</h3>
                  <p class="text-gray-600">info@eternalmoments.com</p>
                  <p class="text-gray-600">hello@eternalmoments.com</p>
                </div>
              </div>

              <div class="flex items-start space-x-4">
                <div class="p-3 rounded-full bg-pink-100">
                  <!-- Phone Icon -->
                  <svg class="h-6 w-6 text-pink-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 5h2l3.6 7.59a1 1 0 00.9.59H17v2H9.5a1 1 0 01-.9-.59L5 7H3V5z" />
                  </svg>
                </div>
                <div>
                  <h3 class="font-semibold mb-1">Phone</h3>
                  <p class="text-gray-600">+1 (555) 123-4567</p>
                  <p class="text-gray-600">Available Mon-Fri, 9AM-6PM EST</p>
                </div>
              </div>

              <div class="flex items-start space-x-4">
                <div class="p-3 rounded-full bg-pink-100">
                  <!-- Location Icon -->
                  <svg class="h-6 w-6 text-pink-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 11c.552 0 1-.448 1-1s-.448-1-1-1-1 .448-1 1 .448 1 1 1zm0-9a9 9 0 00-9 9c0 7 9 13 9 13s9-6 9-13a9 9 0 00-9-9z" />
                  </svg>
                </div>
                <div>
                  <h3 class="font-semibold mb-1">Location</h3>
                  <p class="text-gray-600">New York City Metro Area</p>
                  <p class="text-gray-600">Available for destination weddings</p>
                </div>
              </div>

              <div class="flex items-start space-x-4">
                <div class="p-3 rounded-full bg-pink-100">
                  <!-- Clock Icon -->
                  <svg class="h-6 w-6 text-pink-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6l4 2m6-2a10 10 0 11-20 0 10 10 0 0120 0z" />
                  </svg>
                </div>
                <div>
                  <h3 class="font-semibold mb-1">Response Time</h3>
                  <p class="text-gray-600">Within 24 hours</p>
                  <p class="text-gray-600">Usually much faster!</p>
                </div>
              </div>
            </div>

            <div class="p-6 bg-pink-50 rounded-lg">
              <div class="flex items-center space-x-3 mb-3">
                <svg class="h-6 w-6 text-pink-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                </svg>
                <h3 class="font-semibold">Free Consultation</h3>
              </div>
              <p class="text-gray-600">
                We offer complimentary consultations to discuss your vision,
                answer questions, and ensure we're the perfect fit for your special day.
              </p>
            </div>
          </div>

          <!-- Contact Form -->
          <div class="p-8 bg-white rounded-lg shadow">
            <h3 class="text-2xl font-bold mb-6">Send us a Message</h3>

            <form action="#" method="POST" class="space-y-6">
              <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                  <label for="name" class="block text-sm font-medium mb-2">Your Name *</label>
                  <input type="text" id="name" name="name" required placeholder="Enter your full name"
                    class="w-full px-4 py-3 rounded-lg border border-gray-300 bg-white focus:ring-2 focus:ring-pink-400 focus:border-transparent transition-colors">
                </div>
                <div>
                  <label for="email" class="block text-sm font-medium mb-2">Email Address *</label>
                  <input type="email" id="email" name="email" required placeholder="your.email@example.com"
                    class="w-full px-4 py-3 rounded-lg border border-gray-300 bg-white focus:ring-2 focus:ring-pink-400 focus:border-transparent transition-colors">
                </div>
              </div>

              <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                  <label for="phone" class="block text-sm font-medium mb-2">Phone Number</label>
                  <input type="tel" id="phone" name="phone" placeholder="(555) 123-4567"
                    class="w-full px-4 py-3 rounded-lg border border-gray-300 bg-white focus:ring-2 focus:ring-pink-400 focus:border-transparent transition-colors">
                </div>
                <div>
                  <label for="date" class="block text-sm font-medium mb-2">Wedding Date</label>
                  <input type="date" id="date" name="date"
                    class="w-full px-4 py-3 rounded-lg border border-gray-300 bg-white focus:ring-2 focus:ring-pink-400 focus:border-transparent transition-colors">
                </div>
              </div>

              <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                  <label for="venue" class="block text-sm font-medium mb-2">Wedding Venue</label>
                  <input type="text" id="venue" name="venue" placeholder="Venue name or location"
                    class="w-full px-4 py-3 rounded-lg border border-gray-300 bg-white focus:ring-2 focus:ring-pink-400 focus:border-transparent transition-colors">
                </div>
                <div>
                  <label for="package" class="block text-sm font-medium mb-2">Package Interest</label>
                  <select id="package" name="package"
                    class="w-full px-4 py-3 rounded-lg border border-gray-300 bg-white focus:ring-2 focus:ring-pink-400 focus:border-transparent transition-colors">
                    <option value="">Select a package</option>
                    <option value="essential">Essential Package</option>
                    <option value="premium">Premium Package</option>
                    <option value="luxury">Luxury Package</option>
                    <option value="custom">Custom Package</option>
                  </select>
                </div>
              </div>

              <div>
                <label for="message" class="block text-sm font-medium mb-2">Tell us about your wedding</label>
                <textarea id="message" name="message" rows="5" placeholder="Share details about your wedding day..."
                  class="w-full px-4 py-3 rounded-lg border border-gray-300 bg-white focus:ring-2 focus:ring-pink-400 focus:border-transparent transition-colors resize-none"></textarea>
              </div>

              <!-- Centered Button -->
              <div class="flex justify-center">
                <button type="submit"
                  class="bg-gradient-to-r from-pink-200 to-amber-200 text-gray-800 font-semibold px-8 py-4 rounded-lg shadow-md hover:shadow-xl transition">
                  <span>Send Message</span>
                </button>
              </div>

              <p class="text-sm text-gray-600 text-center">
                We'll respond within 24 hours to schedule your consultation
              </p>
            </form>
          </div>
        </div>
      </div>
    </section>
  </div>

  <!-- Footer -->
  <footer class="bg-gradient-to-r from-gray-100 to-gray-200 border-t border-gray-300 py-12 mt-10">
    <div class="max-w-6xl mx-auto px-6 grid md:grid-cols-3 gap-6">
      <div>
        <h5 class="font-bold text-amber-400 text-lg">Eternal Moments</h5>
        <p class="text-sm mt-2 text-gray-600">
          Capturing the most precious moments of your special day with artistry, passion,
          and an eye for detail that will preserve your love story forever.
        </p>
      </div>
      <div>
        <h5 class="font-semibold mb-2">Quick Links</h5>
        <ul class="space-y-2 text-gray-600">
          <li><a href="about.php" class="hover:text-pink-500">About</a></li>
          <li><a href="gallery.php" class="hover:text-pink-500">Gallery</a></li>
          <li><a href="services.php" class="hover:text-pink-500">Services</a></li>
          <li><a href="contact.php" class="hover:text-pink-500">Contact</a></li>
        </ul>
      </div>
      <div>
        <h5 class="font-semibold mb-2">Contact</h5>
        <p class="text-gray-600">Email: info@eternalmoments.com</p>
        <p class="text-gray-600">Phone: +1 (555) 123-4567</p>
        <p class="text-gray-600">New York, NY</p>
      </div>
    </div>
    <div class="text-center mt-10 text-gray-500 text-sm">
      © 2024 Eternal Moments. All rights reserved. Made with ❤️ for love stories
    </div>
  </footer>


</body>

</html>