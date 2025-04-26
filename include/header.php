<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="assets/css/plugin.css" rel="stylesheet">
<link href="assets/css/style.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/16.0.0/css/intlTelInput.css">
<script src="https://unpkg.com/ityped@0.0.10"></script>
    <title>1Click Website Solutions</title>
</head>

<body>
    <!-- Header -->
    <header class="header py-2">
        <div class="container">
            <div class="header-main d-flex align-items-center justify-content-between py-3">
                <a href="index.html" class="header-main__logo">
                    <img src="assets/images/logo.png" alt="logo" class="imgFluid">
                </a>
                <ul class="header-main__nav flex-wrap d-flex align-items-center justify-content-center">
                    <li><a href="index.html" >Home</a></li>
                    <li>
                        <a href="javascript:void(0);" >Services</a>
                        <ul class="dropdown">
                            <li><a href="website-design.html">Website Design</a></li>
                            <li><a href="mobile-app.html">Mobile App</a></li>
                            <li><a href="ecommerce-design.html">E-commerce Design</a></li>
                            <li><a href="branding.html">Branding</a></li>
                            <li><a href="video-animation.html">Video Animation</a></li>
                            <li><a href="seo.html">Search Engine Optimization</a></li>
                            <li><a href="content-writing.html">content writing</a></li>
                            <li><a href="logo-design.html">logo design</a></li>
                            <li><a href="animated-logo.html">animated logo</a></li>
                        </ul>
                    </li>
                    <li><a href="packages.html" class="<?= (basename($_SERVER['PHP_SELF']) == 'packages.php') ? 'active' : '' ?>">Packages</a></li>
                    <li><a href="combo-package.html" class="<?= (basename($_SERVER['PHP_SELF']) == 'combo-package.php') ? 'active' : '' ?>">Combo Package</a></li>
                    <li><a href="portfolio.html" class="<?= (basename($_SERVER['PHP_SELF']) == 'portfolio.php') ? 'active' : '' ?>">Portfolio</a></li>
                    <li><a href="about-us.html" class="<?= (basename($_SERVER['PHP_SELF']) == 'about-us.php') ? 'active' : '' ?>">About us</a></li>
                    <li><a href="contact-us.html" class="<?= (basename($_SERVER['PHP_SELF']) == 'contact-us.php') ? 'active' : '' ?>">Contact Us</a></li>
                </ul>
            </div>
        </div>
    </header>
    <div class="headerWrapper">
        <div class="headerWrapper-main justify-content-between align-items-center">
            <a href="index.html" class="header-main__logo">
                <img src="assets/images/logo.png" alt="logo" class="imgFluid">
            </a>
            <div class="openBtn" onclick="openBtn()"><i class='bx bx-menu'></i></div>
        </div>
        <header class="header header--mobile" id="headerMobile">
            <div class="closeBtn" onclick="closeBtn()"><i class='bx bx-x'></i></div>
            <div class="header-main d-flex align-items-center justify-content-between py-3">
                <a href="index.html" class="header-main__logo">
                    <img src="assets/images/logo.png" alt="logo" class="imgFluid">
                </a>
                <ul class="header-main__nav flex-wrap d-flex align-items-center justify-content-center">
                    <li><a href="index.html" >Home</a></li>
                    <li>
                        <a href="javascript:void(0);" >Services</a>
                        <ul class="dropdown">
                            <li><a href="website-design.html">Website Design</a></li>
                            <li><a href="mobile-app.html">Mobile App</a></li>
                            <li><a href="ecommerce-design.html">E-commerce Design</a></li>
                            <li><a href="branding.html">Branding</a></li>
                            <li><a href="video-animation.html">Video Animation</a></li>
                            <li><a href="seo.html">Search Engine Optimization</a></li>
                            <li><a href="content-writing.html">content writing</a></li>
                            <li><a href="logo-design.html">logo design</a></li>
                            <li><a href="animated-logo.html">animated logo</a></li>
                        </ul>
                    </li>
                    <li><a href="packages.html" class="<?= (basename($_SERVER['PHP_SELF']) == 'packages.php') ? 'active' : '' ?>">Packages</a></li>
                    <li><a href="combo-package.html" class="<?= (basename($_SERVER['PHP_SELF']) == 'combo-package.php') ? 'active' : '' ?>">Combo Package</a></li>
                    <li><a href="portfolio.html" class="<?= (basename($_SERVER['PHP_SELF']) == 'portfolio.php') ? 'active' : '' ?>">Portfolio</a></li>
                    <li><a href="about-us.html" class="<?= (basename($_SERVER['PHP_SELF']) == 'about-us.php') ? 'active' : '' ?>">About us</a></li>
                    <li><a href="contact-us.html" class="<?= (basename($_SERVER['PHP_SELF']) == 'contact-us.php') ? 'active' : '' ?>">Contact Us</a></li>
                </ul>
            </div>
        </header>
    </div>