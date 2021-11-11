<!DOCTYPE html>
<html lang="en">
<head>
<?php require_once "design/dependecies.php"; ?>
</head>
<body>
<!-- Navbar & Header -->
<?php require_once "design/nav.php";?>  
<!-- Section with comenzi -->
<section class="comenzi padding-all">
    <h2 class="title-section">Comenzile primite</h2>
    <div class="comenzi-flex">
        <a href='#' class="comenzi-link">Toate</a>
        <a href='#' class="comenzi-link">În așteptare</a>
        <a href='#' class="comenzi-link">Acceptate</a>
        <a href='#' class="comenzi-link">Refuzate</a>
    </div>
    <!-- Tabel aici hatz johnule -->
    <div class="table">
       <!-- Table Header -->
       <div class="table-header flex">
           <div class="header-item">
               <h3 class="table-text">Nume client</h3>
           </div>
           <div class="header-item">
               <h3 class="table-text">Serviciu comandat</h3>
           </div>
           <div class="header-item">
               <h3 class="table-text">Data</h3>
           </div>
           <div class="header-item">
               <h3 class="table-text">Status</h3>
           </div>
       </div>
       <!-- Table Row -->
       <div class="table-row flex">
           <div class="table-item  bl-yes">
               <div class="box-username flex row">
                    <img src="./my/pexels-juan-n-gomez-3492100.png" class="user-img" alt="">
                    <h3 class="table-text">username323</h3>
               </div>
           </div>
           <div class="table-item  bl-yes">
               <h3 class="table-text">plimbare caini</h3>
           </div>
           <div class="table-item  bl-yes">
               <h3 class="table-text">12 Ianuarie 2021</h3>
           </div>
           <div class="table-item">
               <h3 class="table-text flex">
                În așteptare 
                <div class="icons"> 
                    <a href='#' class="corect"><i class="fa fa-check-circle"></i></a> 
                    <a href='#' class="wrong"><i class="fa fa-times-circle"></i></a>
                </div>
                </h3>
           </div>  
       </div>
        <!-- Table Row -->
        <div class="table-row flex">
             <div class="table-item  bl-yes">
                <h3 class="table-text">username323</h3>
             </div>
             <div class="table-item  bl-yes">
                <h3 class="table-text">plimbare caini</h3>
             </div>
             <div class="table-item  bl-yes">
                <h3 class="table-text">12 Ianuarie 2021</h3>
             </div>
             <div class="table-item">
                <h3 class="table-text">Refuzată</h3>
             </div>  
        </div>
        <!-- Table Row -->
        <div class="table-row flex">
            <div class="table-item bl-yes">
                <h3 class="table-text">username323</h3>
            </div>
            <div class="table-item bl-yes">
                <h3 class="table-text">plimbare caini</h3>
            </div>
            <div class="table-item bl-yes">
                <h3 class="table-text">12 Ianuarie 2021</h3>
            </div>
            <div class="table-item">
                <h3 class="table-text">Acceptată</h3>
            </div>  
        </div>
        <!-- Table Row -->
        <div class="table-row flex border-radius">
            <div class="table-item bl-yes bt-no">
                <h3 class="table-text">username323</h3>
            </div>
            <div class="table-item bl-yes bt-no">
                <h3 class="table-text">plimbare caini</h3>
            </div>
            <div class="table-item bl-yes bt-no">
                <h3 class="table-text">12 Ianuarie 2021</h3>
            </div>
            <div class="table-item bt-no">
                <h3 class="table-text">Acceptată</h3>
            </div>  
        </div>
    </div>
    

    <br><br><br><br><br>
    <!-- Tabel aici trimise hatz johnule -->
    <h2 class="title-section">Comenzile trimise</h2>
    <div class="comenzi-flex">
        <a href='#' class="comenzi-link">Toate</a>
        <a href='#' class="comenzi-link">În așteptare</a>
        <a href='#' class="comenzi-link">Acceptate</a>
        <a href='#' class="comenzi-link">Refuzate</a>
    </div>

    <div class="table">
       <!-- Table Header -->
       <div class="table-header flex">
           <div class="header-item">
               <h3 class="table-text">Nume client</h3>
           </div>
           <div class="header-item">
               <h3 class="table-text">Serviciu comandat</h3>
           </div>
           <div class="header-item">
               <h3 class="table-text">Data</h3>
           </div>
           <div class="header-item ">
               <h3 class="table-text">Status</h3>
           </div>
       </div>
       <!-- Table Row -->
       <div class="table-row flex">
           <div class="table-item  bl-yes">
               <h3 class="table-text">username323</h3>
           </div>
           <div class="table-item  bl-yes">
               <h3 class="table-text">plimbare caini</h3>
           </div>
           <div class="table-item  bl-yes">
               <h3 class="table-text">12 Ianuarie 2021</h3>
           </div>
           <div class="table-item">
               <h3 class="table-text flex">
                   În așteptare
                   <div class="icons"> 
                    <a href='#' class="corect"><i class="fa fa-check-circle"></i></a> 
                    <a href='#' class="wrong"><i class="fa fa-times-circle"></i></a>
                  </div>
                </h3>
           </div>  
       </div>
        <!-- Table Row -->
        <div class="table-row flex">
             <div class="table-item  bl-yes">
                <h3 class="table-text">username323</h3>
             </div>
             <div class="table-item  bl-yes">
                <h3 class="table-text">plimbare caini</h3>
             </div>
             <div class="table-item  bl-yes">
                <h3 class="table-text">12 Ianuarie 2021</h3>
             </div>
             <div class="table-item">
                <h3 class="table-text">Refuzată</h3>
             </div>  
        </div>
        <!-- Table Row -->
        <div class="table-row flex">
            <div class="table-item  bl-yes">
                <h3 class="table-text bl-yes">username323</h3>
            </div>
            <div class="table-item  bl-yes">
                <h3 class="table-text bl-yes">plimbare caini</h3>
            </div>
            <div class="table-item  bl-yes">
                <h3 class="table-text bl-yes">12 Ianuarie 2021</h3>
            </div>
            <div class="table-item">
                <h3 class="table-text">Acceptată</h3>
            </div>  
        </div>
        <!-- Table Row -->
        <div class="table-row flex border-radius">
            <div class="table-item bl-yes bt-no">
                <h3 class="table-text">username323</h3>
            </div>
            <div class="table-item  bl-yes bt-no">
                <h3 class="table-text">plimbare caini</h3>
            </div>
            <div class="table-item  bl-yes bt-no">
                <h3 class="table-text">12 Ianuarie 2021</h3>
            </div>
            <div class="table-item bt-no">
                <h3 class="table-text">Acceptată</h3>
            </div>  
        </div>
    </div>
</section>
<?php require_once "design/footer-not.php";?>  
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="/static/js/jquery.js"></script>
<script src="/static/js/owl.carousel.min.js"></script>
<script src="/static/js/js.js"></script>
</html>