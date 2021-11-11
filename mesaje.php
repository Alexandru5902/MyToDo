<!DOCTYPE html>
<html lang="en">
<head>
<?php require_once "design/dependecies.php"; ?>
</head>
<body>
<?php require_once "design/nav.php";?>
<!-- Mesaje text -->
<section class="mesaje padding-all not-fullscreen">
   <div class="mesaje-row">

       <!-- Mesaje-35% row -->

       <div class="mesaje-35 column-left border-right">

           <!-- Mesaje searching here-->

           <div class="mesaje-search flex border-bottom">
               <div class="form flex">
                   <i class="fas fa-search"></i>
                   <input type="text" placeholder="caută în conversație">
               </div>
           </div>

           <!-- Searching here hatz hatz hatz-->

           <div class="mesaje-users">
              <div class="user-box border-bottom flex">
                  <div class="user-flex">
                    <div class="avatar-image">
                      <img src="static/content/tjmiles.webp" class="avatar-img" />
                      <div class="circle-online"></div>
                    </div>
                    <div class="text">
                      <h2 class="text-user flex">Username242 <span>acum 1 oră</span></h2>
                      <p class="black-color">Hai uai sa colaboram uai</p>
                    </div>
                  </div>
               </div>
               <div class="user-box border-bottom">
                <div class="user-flex">
                  <div class="avatar-image">
                    <img src="static/content/itist.webp" class="avatar-img" />
                    <div class="circle-online"></div>
                  </div>
                    <div class="text">
                      <h2 class="text-user">Username242  <span>acum 1 oră</span></h2>
                      <p class="black-color">Hai uai sa colaboram uai</p>
                    </div>
                  </div>
               </div>
               <div class="user-box border-bottom">
                 <div class="user-flex">
                   <div class="avatar-image">
                     <img src="static/content/tjmiles.webp" class="avatar-img" />
                     <div class="circle-online"></div>
                   </div>
                    <div class="text">
                      <h2 class="text-user">Username242  <span>acum 1 oră</span></h2>
                      <p class="black-color">Hai uai sa colaboram uai</p>
                    </div>
                  </div>
               </div>
               <div class="user-box border-bottom">
                <div class="user-flex">
                   <div class="avatar-image">
                    <img src="static/content/onlyfans.webp" class="avatar-img" />
                    <div class="circle-offline"></div>
                   </div>
                    <div class="text">
                      <h2 class="text-user">Username242  <span>acum 1 oră</span></h2>
                      <p class="black-color">Hai uai sa colaboram uai</p>
                    </div>
                  </div>
               </div>
           </div>
       </div>

       <!-- Mesaje-65% row -->

       <div class="mesaje-65">
           <div class="user-details border-bottom">
                <div class="detail">
                  <div class="flex user-detail">
                    <div class="circle-online"></div>
                    <h2 class="username flex"> Username242</h2>
                  </div>
                     <p class="username-details">Văzut ultima oară acum 10 minute</p>
                </div>
           </div>
           <div class="user-mesage border-bottom">
             <!-- User in chat -->
              <div class="user-in-chat">
                <div class="user-chat-flex">
                    <img src="static/content/tjmiles.webp" class="avatar-img">
                    <h6 class="username">Username242</h6>
                    <p class="last-active">acum 1 oră</p>
                </div>
                <p class="black-color">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce et imperdiet quam. Morbi scelerisque nec dolor 
                sed sollicitudin. Quisque sit amet magna et lorem luctus</p>
              </div>
              <!-- You in chat --> 
              <div class="user-in-chat">
                <div class="user-chat-flex">
                    <img src="static/content/onlyfans.webp" class="avatar-img">
                    <h6 class="username">Eu</h6>
                    <p class="last-active">acum 1 oră</p>
                </div>
                <p class="black-color">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce et imperdiet quam. Morbi scelerisque nec dolor 
                sed sollicitudin. Quisque sit amet magna et lorem luctus</p>
              </div> 
           </div>
           <div class="user-search">
                <div class="user-input">
                  <button type="button" class="add"><i class="fas fa-share"></i></button>
                  <input type="text" placeholder="scrie mesajul aici..." />
                  <button type="button">Trimite</button>
                </div>
           </div>
       </div>
   </div>
</section>
<?php require_once "design/footer-not.php";?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    $('.owl-carousel').owlCarousel({
    loop:true,
    margin:30,
    nav:true,
    responsive:{
        0:{
            items:1,
            nav:false
        },
        700:{
            items:2,
            nav:false
        },
        1000:{
            items:3,
            nav:false
        },
        1500:{
            items:4,
            nav:false
        }
    }
})
</script> 
</body>
</html>