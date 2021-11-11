<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gsc Media Tehnology</title>    
    <meta name="description" content="<?=$header['description']; ?>" />
    <meta name="keywords" content="<?=$header['keywords']; ?>" />
    <meta name="generator" content="www.nemesis.ro" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="msapplication-config" content="none" />
    <link href="/" type="image/x-icon" rel="icon" />
    <link href="/" type="image/x-icon" rel="shortcut icon" />
    <link href="/apple-touch-icon.png" rel="apple-touch-icon" />
    <? if($header['nofollow'] == 1) { ?><meta name="robots" content="noindex, follow" /><? echo "\n"; } ?>
    <link rel="stylesheet" title="css" href="/static/css/style.css?v=1.0" type="text/css" />
    <script type="text/javascript" src="/static/js/javascript.js"></script>
    <script async src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCqUNQ-z_l671N_3v22SNk6IFCd2OINnhE&callback=initMap"></script>
</head>
<body>
<!-- Navbar & Header -->
<nav id="navbar-scroll" class="navigation padding-all">
    <div class="nav-container">
        <a href="#header" class="nav-logo">
            <img src="static/images/Logo.svg">
        </a>
        <ul class="nav-list">
            <div class="flex nav not-nav">
                <li class="dropdown nav-item">
                    <button onclick="myFunction()" class="dropbtn">Comenzi</button>
                    <div id="myDropdown" class="dropdown-content">
                        <a href="analiza-discord.html">Analiza discord</a>
                        <a href="incepatori.html">Incepatori</a>
                        <a href="intermediar.html">Intermediar</a>
                        <a href="anual.html">Abonament anual</a>
                        <a href="premium.html">Premium</a>
                        <a href="platinum.html">Platinum</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a href='#about' class="nav-link">ABOUT</a>
                </li>
                <li class="nav-item">
                    <a href='#services' class="nav-link">SERVICES</a>
                </li>
                <li class="nav-item">
                    <a href='#portofolio' class="nav-link">PORTOFOLIO</a>
                </li>
                <li class="nav-item">
                    <a href='#contact' class="nav-link">CONTACT</a>
                </li>
            </div> 
        </ul>
        <div class="hamburger hamburger--spin fixed">
            <div class="hamburger-box">
                <div class="hamburger-inner"></div>
            </div>
        </div>
    </div>
</nav>   
