<?php
session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require __DIR__ . '/../vendor/autoload.php';

// If OTP is set in session, send it by email
if (isset($_SESSION['otp']) && isset($_SESSION['email'])) {
    $otp = $_SESSION['otp'];
    $email = $_SESSION['email'];

    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = '';   // your Gmail
        $mail->Password   = '';    // Gmail App Password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;

        // Recipients
        $mail->setFrom('arka103856@gmail.com', 'Wedding Admin');
        $mail->addAddress($email);

        // Content
        $mail->isHTML(true);
        $mail->Subject = 'Your Wedding Admin OTP Code';

        $mail->Body = "
            <div style='font-family: Arial, sans-serif; background:#f9f9f9; padding:20px;'>
                <div style='max-width:600px; margin:0 auto; background:#ffffff; border-radius:8px; box-shadow:0 2px 6px rgba(0,0,0,0.1); padding:20px;'>
                    <h2 style='color:#333; text-align:center;'>Wedding Admin Login</h2>
                    <p style='font-size:16px; color:#555; text-align:center;'>
                        Use the following One-Time Password (OTP) to complete your login:
                    </p>
                    <div style='text-align:center; margin:30px 0;'>
                        <span style='font-size:28px; font-weight:bold; color:#2c3e50; letter-spacing:4px;'>
                            $otp
                        </span>
                    </div>
                    <p style='font-size:14px; color:#777; text-align:center;'>
                        This OTP is valid for <b>5 minutes</b>. If you did not request it, please ignore this email.
                    </p>
                </div>
            </div>
        ";

        $mail->send();
        $msg = "OTP sent successfully to your email!";
    } catch (Exception $e) {
        $msg = "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}

// Handle OTP submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $enteredOtp = $_POST['otp'];
    if ($enteredOtp == $_SESSION['otp']) {
        // OTP check
        $_SESSION['loggedin'] = true;

        unset($_SESSION['otp']); // destroying otp to prevent reuse

        header("Location: dashboard.php");
        exit();
    } else {
        $error = "Invalid OTP!";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enter OTP</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="flex items-center justify-center min-h-screen bg-gradient-to-br from-indigo-500 via-blue-500 to-sky-400">

    <!-- OTP Card -->
    <div class="w-full max-w-sm bg-white/90 backdrop-blur-md rounded-2xl shadow-2xl p-8">
        <!-- Icon -->
        <div class="flex justify-center mb-4">
            <div class="w-14 h-14 bg-gradient-to-r from-indigo-500 to-blue-500 rounded-full flex items-center justify-center shadow-md">
                <span class="text-2xl">📩</span>
            </div>
        </div>

        <!-- Title -->
        <h2 class="text-2xl font-bold text-center text-gray-800 mb-2">Enter OTP</h2>
        <p class="text-center text-gray-500 mb-6 text-sm">We’ve sent a 6-digit OTP to your registered email</p>

        <!-- Error Message -->
        <?php if (!empty($error)) : ?>
            <p class="text-red-500 text-center mb-4 font-medium"><?= $error ?></p>
        <?php endif; ?>

        <!-- OTP Form -->
        <form method="post" class="space-y-4" id="otpForm">
            <div>
                <input type="text"
                    name="otp"
                    placeholder="Enter OTP"
                    required
                    maxlength="6"
                    class="w-full px-4 py-3 border rounded-lg focus:ring-2 focus:ring-blue-400 focus:border-blue-400 outline-none text-center tracking-widest placeholder-gray-400">
            </div>
            <button type="submit"
                id="verifyBtn"
                class="w-full bg-gradient-to-r from-indigo-500 to-blue-500 text-white font-semibold py-3 rounded-lg shadow-lg hover:from-indigo-600 hover:to-blue-600 transition">
                Enter OTP
            </button>
        </form>
    </div>

    <script>
        const otpForm = document.getElementById("otpForm");
        const verifyBtn = document.getElementById("verifyBtn");

        otpForm.addEventListener("submit", function(e) {
            // Change button text
            verifyBtn.innerText = "Verifying OTP...";
            verifyBtn.disabled = true;

            // Let form submit normally (no delay needed)
        });
    </script>

</body>

</html>