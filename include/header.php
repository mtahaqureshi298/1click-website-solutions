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
    <title>Quantum Soft 360</title>
</head>

<body>
    <!-- Header -->
    <header class="header py-2">
        <div class="container">
            <div class="header-main d-flex align-items-center justify-content-between py-3">
                <a href="index.html" class="header-main__logo">
                    <img src="assets/images/logo.gif" alt="logo" class="imgFluid">
                </a>
                <ul class="header-main__nav flex-wrap d-flex align-items-center mx-auto">
                    <li><a href="index.html">Home</a></li>
                    <li>
                        <a href="javascript:void(0);">Services</a>
                        <ul class="dropdown">
                            <li><a href="design-&-development.html">Design & Development</a></li>
                            <li><a href="book.html">Book</a></li>
                            <!-- <li><a href="trademark.html">Trademark</a></li> -->
                            <li><a href="company-llc.html">Company LLC</a></li>
                            <li><a href="amazon.html">Amazon</a></li>
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
                <img src="assets/images/logo.gif" alt="logo" class="imgFluid">
            </a>
            <div class="openBtn" id="openMenu"><i class='bx bx-menu'></i></div>
        </div>
        <header class="header header--mobile" id="headerMobile">
            <div class="closeBtn" id="closeMenu"><i class='bx bx-x'></i></div>
            <div class="header-main d-flex align-items-center justify-content-between py-3">
                <a href="index.html" class="header-main__logo">
                    <img src="assets/images/logo.gif" alt="logo" class="imgFluid">
                </a>
                <ul class="header-main__nav flex-wrap d-flex align-items-center mx-auto">
                    <li><a href="index.html">Home</a></li>
                    <li>
                        <a href="javascript:void(0);">Services</a>
                        <ul class="dropdown">
                            <li><a href="design-&-development.html">Design & Development</a></li>
                            <li><a href="book.html">Book</a></li>
                            <!-- <li><a href="trademark.html">Trademark</a></li> -->
                            <li><a href="company-llc.html">Company LLC</a></li>
                            <li><a href="amazon.html">Amazon</a></li>
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