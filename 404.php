<?php
// Set HTTP status code to 404
header("HTTP/1.0 404 Not Found");
?>

<!DOCTYPE html>
<html lang="en">
<?php include 'header.php'; ?>

<style>
    .error-section {
        padding: 80px 0;
        background: linear-gradient(135deg, #386796 0%, #3cc698 100%);
        min-height: 100vh;
        position: relative;
        overflow: hidden;
        color: #fff;
    }
    .error-section h1 {
        font-size: 120px;
        font-weight: bold;
        color: #fff;
        animation: pulse 2s infinite;
    }
    @keyframes pulse {
        0% { transform: scale(1); }
        50% { transform: scale(1.05); }
        100% { transform: scale(1); }
    }
    .error-section h2 {
        font-size: 48px;
        margin-bottom: 20px;
        color: #fff;
    }
    .error-section p {
        font-size: 18px;
        margin-bottom: 30px;
        color: #e0e0e0;
    }
    .theme-btn {
        background-color: #386796;
        border: none;
        padding: 12px 30px;
        color: #fff;
        text-transform: uppercase;
        transition: all 0.3s ease;
    }
    .theme-btn:hover {
        background-color: #3cc698;
        color: #fff;
    }
    .social-links a {
        color: #fff;
        margin: 0 10px;
        font-size: 24px;
        transition: transform 0.3s ease;
    }
    .social-links a:hover {
        transform: scale(1.2);
        color: #3cc698;
    }
    /* Animated Background Particles */
    .particle {
        position: absolute;
        width: 10px;
        height: 10px;
        background: rgba(255, 255, 255, 0.5);
        border-radius: 50%;
        animation: float 15s infinite;
    }
    @keyframes float {
        0% { transform: translateY(0) translateX(0); }
        25% { transform: translateY(-50px) translateX(30px); }
        50% { transform: translateY(0) translateX(60px); }
        75% { transform: translateY(50px) translateX(30px); }
        100% { transform: translateY(0) translateX(0); }
    }
    .particle:nth-child(1) { top: 10%; left: 10%; animation-delay: 0s; }
    .particle:nth-child(2) { top: 30%; left: 40%; animation-delay: 2s; }
    .particle:nth-child(3) { top: 50%; left: 70%; animation-delay: 4s; }
    .particle:nth-child(4) { top: 70%; left: 20%; animation-delay: 6s; }
</style>

<section class="error-section">
    <div class="auto-container">
        <div class="row justify-content-center">
            <div class="col-md-8 text-center" style="position: relative; z-index: 1;">
                <h1 class="display-1">404</h1>
                <h2>Oops! Page Not Found</h2>
                <p>The page you're looking for has wandered off into the digital wilderness. Let's get you back!</p>
                
                <!-- Buttons -->
                <a href="/" class="theme-btn btn-style-one mb-3"><span class="btn-title">Back to Home</span></a>
                <a href="contact" class="theme-btn btn-style-one mb-3 ms-2"><span class="btn-title">Contact Support</span></a>
                
                <!-- Social Links -->
                <div class="social-links mt-4">
                    <p>Stay Connected:</p>
                    <ul class="social-icon-two d-inline-flex">
                        <li><a href="https://www.facebook.com/digitechflux/" target="_blank"><i class="fab fa-facebook"></i></a></li>
                        <li><a href="https://www.linkedin.com/company/digitechflux/" target="_blank"><i class="fab fa-linkedin"></i></a></li>
                        <li><a href="https://www.instagram.com/digitechflux_/?igsh=MTR2bTZrNjdmdXJoYQ%3D%3D" target="_blank"><i class="fab fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Animated Particles -->
    <div class="particle"></div>
    <div class="particle"></div>
    <div class="particle"></div>
    <div class="particle"></div>
</section>

<?php include 'footer.php'; ?>