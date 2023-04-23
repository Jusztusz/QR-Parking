<?php  include("connection.php"); ?>
<!DOCTYPE html>
<html lang="hu" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style media="screen">
    body,html{padding: 0; margin: 0; background: #282828; font-family: 'Chakra Petch', sans-serif;}
    .navigation-bar{
    position: fixed;
    width: 100%;
    height: 64px;
    display: flex;
    justify-content: space-between;
    background-color: #373737;
    font-family: 'Comfortaa', cursive;
    border-bottom: 1.5px solid #68157E;
    z-index: 3;
}

/* Logo and name container properties*/
.navigation-bar__brand-container{
    position: relative;
    display: flex;
    align-items: center;
    width: auto;
    height: 100%;
}

.brand-container__company-logo{
    margin: 0px 20px 0px 20px;
    width: 40px;
}

.brand-container__company-name{
    font-size: 18px;
    text-transform: uppercase;
    font-weight: bold;
    color: white;
}

/* The page navigation container properties */
.navigation-bar__navigation-item-container{
    position: relative;
    display: flex;
    align-items: center;
    width: auto;
    height: 100%;
}

.navigation-item-container__navigation-item-list{
    position: relative;
    display: flex;
    width: auto;
    list-style: none;
    color: white;
}

.navigation-item-list__navigation-item a {
    text-decoration: none;
    color: white;
}

.navigation-item-list__navigation-item{
    margin-right:20px
}

.navigation-bar__user-state-container{
    position: relative;
    display: flex;
    align-items: center;
    width: auto;
    height: 100%;
    cursor: pointer;
}

.user-state-container__user-image--rounded{
    width: 50px;
    margin: 0px 20px 0px 20px;
    height: 50px;
    border-radius: 32px;
    border: 2px solid #EF8F43;
    background-image: url("nje-logo.png");
    background-size: cover ;
    background-repeat: no-repeat;
}

/* The mobile menu container properties */
.navigation-bar__mobile-menu {
    position: relative;
    width: auto;
    height: 100%;
    display: none;
    flex-direction: column;
    justify-content: center;
    cursor: pointer;
}

.line{
    margin: 0px 20px 0px 20px;
    width: 30px;
    height: 4px;
    background-color: white;
    display: block;
    border-radius: 7px;
}

.line:not(:last-child){
    margin-bottom: 5px;
}


/* Under 1024px - tablet size (landscape)*/
@media only screen and (max-width: 1024px){

    .navigation-bar__brand-container{
        z-index: 2;
    }

    .navigation-bar__mobile-menu{
        display: flex;
        z-index: 2;
    }
    
    .navigation-bar__navigation-item-container{
        display: none;
    }

    /* Mobile menu properties*/
    .navigation-bar--toggle{
        position: fixed;
    }

    .navigation-bar__navigation-item-container--toggle{
        position: fixed;
        display: block;
        width: 100%;
        height: 100vh;
        background-color: rgb(54, 53, 53);
        z-index: -1;
    }

    .navigation-item-container__navigation-item-list--toggle{
        margin: 0px;
        padding: 0px;
        height: 100%;
        position: relative;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        list-style: none;
        text-align:center;
    }

    .navigation-item-list__navigation-item{
        margin: 40px 0px 0px 0px;
    }

    .body--lock{
      overflow: hidden;
    }

    .navigation-bar__user-state-container{
        display: none;
        height: auto;
    }

    .user-state-container__user-image--rounded{
        width: 60px;
        margin: 0px;
        padding:0px;
        height: 60px;
        border-radius: 100px;
    }

    .navigation-bar__user-state-container--toggle{
        margin: 60px 0px 0px 0px;
        padding: 0px;
        left: 50%;
        transform: translate(-50%);
        position: fixed;
        display: block;
        z-index: 2;
    }
}

    /* Mobile menü cross animation */
#mobileMenu.open span:nth-child(1) {
  -webkit-transform: rotate(45deg);
  -moz-transform: rotate(45deg);
  -o-transform: rotate(45deg);
  transform: rotate(45deg);
}

#mobileMenu.open span:nth-child(2) {
  width: 0%;
  opacity: 0;
}

#mobileMenu.open span:nth-child(3) {
  -webkit-transform: rotate(-45deg);
  -moz-transform: rotate(-45deg);
  -o-transform: rotate(-45deg);
  transform: rotate(-45deg);
  margin-top: -18px;

}

</style>
  </head>
  <body>
  <nav id="navigationBar" class="navigation-bar">
        <div class="navigation-bar__brand-container">
            <img class="brand-container__company-logo" src="nje-logo.png" alt="">
        </div>

        <div id="navigationItemContainer" class="navigation-bar__navigation-item-container">
            <ul id="navigationItemList" class="navigation-item-container__navigation-item-list">
                <li class="navigation-item-list__navigation-item"><a href="index.php">Főoldal</a></li>
                <li class="navigation-item-list__navigation-item"><a href="guide.php">Útmutató</a></li>
                <li class="navigation-item-list__navigation-item"><a href="tech.php">Technikai információk</a></li>
                <?php if( isset($_SESSION['username']) && !empty($_SESSION['username']) ) { ?>
                <li class="navigation-item-list__navigation-item"><a href="logout.php">Kijelentkezés</a></li>
            <?php }else{ ?>
                <li class="navigation-item-list__navigation-item"><a href="login.php">Bejelentkezés</a></li>
                <li class="navigation-item-list__navigation-item"><a href="regform.php">Regisztráció</a></li>
            <?php } ?>
            </ul>
        </div>
        <?php if( isset($_SESSION['username']) && !empty($_SESSION['username']) ) { ?>
        <div id="userStateContainer" class="navigation-bar__user-state-container">
            <div id="profileContainer" class="user-state-container__user-image--rounded">
            </div>
        </div>
        <?php } ?>
        <div id="mobileMenu" class="navigation-bar__mobile-menu">
            <span id="line1" class="line"></span>
            <span id="line2" class="line"></span>
            <span id="line3" class="line"></span>
        </div>
    </nav>
    <script>
let mobileMenu = document.getElementById("mobileMenu");
let menuIsOn = false;
mobileMenu.addEventListener("click", toggleMenu);

function toggleMenu(){
    if(!menuIsOn){
        menuIsOn = true;
    }else{
        menuIsOn = false;
    }

    mobileMenu.classList.toggle("open");

    let body = document.getElementsByTagName("body")[0];
    let navigationBar = document.getElementById("navigationBar");
    let navigationItemContainer = document.getElementById("navigationItemContainer");
    let navigationItemList = document.getElementById("navigationItemList");

    body.classList.toggle("body--lock");
    navigationBar.classList.toggle("navigation-bar--toggle");
    navigationItemContainer.classList.toggle("navigation-bar__navigation-item-container--toggle");
    navigationItemList.classList.toggle("navigation-item-container__navigation-item-list--toggle");
    for (const child of navigationItemList.children) {
        child.classList.toggle(".navigation-item-list__navigation-item");
    }

    <?php if( isset($_SESSION['username']) && !empty($_SESSION['username']) ) { ?>
        let userStateContainer = document.getElementById("userStateContainer");
        userStateContainer.classList.toggle("navigation-bar__user-state-container--toggle");
    <?php } ?>

}

    <?php if( isset($_SESSION['username']) && !empty($_SESSION['username']) ) { ?>
        let profileContainer = document.getElementById("profileContainer");
        profileContainer.addEventListener("click", redirectUserPage);
        function redirectUserPage(){
            console.log("aha");
            window.location.href = "profile.php";
        }
    <?php } ?>

window.addEventListener("resize", updateSize)

function updateSize(){
    if(window.innerWidth >= 1024 && menuIsOn == true){
        toggleMenu();
    }
}
    </script>
  </body>
</html>