<?php
session_start();

//admin credentials + linked email
$adminUser = "admin";
$adminPass = "1234";
$adminEmail = "arkaskr24@gmail.com";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $user = $_POST["username"];
  $pass = $_POST["password"];

  if ($user === $adminUser && $pass === $adminPass) {
    // Generate OTP
    $otp = rand(100000, 999999);
    $_SESSION['otp'] = $otp;
    $_SESSION['email'] = $adminEmail;

    // Redirect to OTP page
    header("Location: otp.php");
    exit();
  } else {
    $error = "Invalid username or password";
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Login</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="flex items-center justify-center min-h-screen bg-gradient-to-br from-indigo-500 via-blue-500 to-sky-400">

  <!-- Login Card -->
  <div class="w-full max-w-sm bg-white/90 backdrop-blur-md rounded-2xl shadow-2xl p-8">
    <!-- Icon -->
    <div class="flex justify-center mb-4">
      <div class="w-14 h-14 bg-gradient-to-r from-indigo-500 to-blue-500 rounded-full flex items-center justify-center shadow-md">
        <span class="text-2xl">🔐</span>
      </div>
    </div>

    <!-- Title -->
    <h2 class="text-2xl font-bold text-center text-gray-800 mb-2">Admin Login</h2>
    <p class="text-center text-gray-500 mb-6 text-sm">Sign in to access your dashboard</p>

    <!-- Error Message -->
    <?php if (!empty($error)) : ?>
      <p class="text-red-500 text-center mb-4 font-medium"><?= $error ?></p>
    <?php endif; ?>

    <!-- Login Form -->
    <form method="post" class="space-y-4" id="loginForm">
      <div>
        <input type="text"
          name="username"
          placeholder="Username"
          required
          class="w-full px-4 py-3 border rounded-lg focus:ring-2 focus:ring-blue-400 focus:border-blue-400 outline-none placeholder-gray-400">
      </div>
      <div>
        <input type="password"
          name="password"
          placeholder="Password"
          required
          class="w-full px-4 py-3 border rounded-lg focus:ring-2 focus:ring-blue-400 focus:border-blue-400 outline-none placeholder-gray-400">
      </div>
      <button type="submit"
        id="loginBtn"
        class="w-full bg-gradient-to-r from-indigo-500 to-blue-500 text-white font-semibold py-3 rounded-lg shadow-lg hover:from-indigo-600 hover:to-blue-600 transition">
        Login
      </button>
    </form>
  </div>

  <script>
    const form = document.getElementById("loginForm");
    const loginBtn = document.getElementById("loginBtn");

    form.addEventListener("submit", function(e) {
      // Change button text immediately
      loginBtn.innerText = "Generating OTP...";
      loginBtn.disabled = true;

      // Allow the form to actually submit after short delay
      setTimeout(() => {
        form.submit();
      }, 1000); // 1 second delay
    });
  </script>

</body>

</html>