<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./css/style.css" />
  <title>Shop</title>
</head>

<body>



  <div class="wrapper">
    <div class="header__wrapper">
      <div class="container">
     
     
        <header class="header">
         
           
            <div class="header__top">
              <div class="header__top-box">
              <a href="./shop.html" class="cart__span-box">
                   
                <svg version="1.0" xmlns="http://www.w3.org/2000/svg"
                width="884.000000pt" height="980.000000pt" viewBox="0 0 884.000000 980.000000"
                preserveAspectRatio="xMidYMid meet">
               
               <g transform="translate(0.000000,980.000000) scale(0.100000,-0.100000)"
                stroke="none">
               <path d="M4190 9785 c-397 -49 -766 -214 -1078 -479 -198 -169 -378 -403 -492
               -640 -142 -295 -175 -460 -186 -931 -2 -126 -7 -254 -10 -282 l-5 -53 -784 0
               c-431 0 -786 -4 -789 -8 -7 -11 -57 -438 -256 -2182 -403 -3524 -580 -5101
               -580 -5162 l0 -48 4410 0 4410 0 0 46 c0 53 -25 278 -250 2264 -404 3559 -578
               5068 -586 5082 -3 4 -358 8 -789 8 l-784 0 -5 53 c-3 28 -8 164 -11 301 -8
               366 -25 491 -96 700 -298 870 -1211 1443 -2119 1331z m555 -419 c203 -46 435
               -147 597 -262 109 -78 297 -267 375 -377 70 -100 168 -287 207 -395 71 -198
               96 -386 96 -709 l0 -223 -1600 0 -1600 0 0 219 c0 228 11 374 36 501 39 191
               146 435 267 607 77 109 266 299 372 375 197 139 461 247 680 278 97 14 489 4
               570 -14z m-2315 -2595 l0 -219 -54 -40 c-105 -80 -151 -185 -144 -331 6 -113
               44 -197 122 -269 90 -81 132 -97 261 -97 98 0 116 3 167 27 76 35 153 109 192
               183 30 57 31 65 31 175 0 106 -2 119 -28 170 -16 30 -57 84 -93 120 l-64 66 0
               217 0 217 1600 0 1600 0 0 -217 0 -217 -64 -66 c-36 -36 -77 -90 -93 -120 -26
               -51 -28 -64 -28 -170 0 -110 1 -118 31 -175 39 -74 116 -148 192 -183 51 -24
               69 -27 167 -27 129 0 171 16 261 97 78 72 116 156 122 269 7 145 -38 248 -144
               332 l-54 42 0 217 0 218 615 0 c338 0 615 -3 615 -7 0 -5 5 -37 10 -73 18
               -125 261 -2247 520 -4540 197 -1744 221 -1961 215 -1971 -8 -12 -7922 -12
               -7929 0 -7 10 30 344 224 2061 291 2568 505 4432 516 4498 l6 32 614 0 614 0
               0 -219z"/>
               </g>
               </svg>
                  <span class="cart__span js_cart__span"></span>
              </a>
              <a href="./index.html" class="header__logo logo js_website-name"></a>
              </div>
              <div class="header-block">
                <div class="header__top-box">
                  <button class="header__btn js_menu-btn">
                    <span></span>
                  </button>
               
              
                 </div>
    
                  <nav class="nav js_menu">
                  
                  
                    <ul class="nav__list">
                      <li class="nav__item">
                        <p class="nav__title">
                          Terms
                          <ul class="nav__sub-list">
                            <li class="nav__sub-item">
                              <a href="./purchase.html" class="nav__link">Terms of Purchase</a>
                            </li>
                            <li class="nav__sub-item">
                              <a href="./use.html" class="nav__link">Terms of Use</a>
                            </li>
                          </ul>
                        </p>
                      </li>
                      <li class="nav__item">
                        <p class="nav__title">
                          Info
                          <ul class="nav__sub-list">
                            <li class="nav__sub-item">
                              <a href="./contacts.html" class="nav__link">Contact Us</a>
                            </li>
                            <li class="nav__sub-item">
                              <a href="./privacy.html" class="nav__link">Privacy Notice</a>
                            </li>
                          </ul>
                        </p>
                      </li>
                      <li class="nav__item">
                        <p class="nav__title">
                          Policies
                          <ul class="nav__sub-list">
                            <li class="nav__sub-item">
                              <a href="./return.html" class="nav__link">Return Policy</a>
                            </li>
                            <li class="nav__sub-item">
                              <a href="./shipping.html" class="nav__link">Shipping Policy</a>
                            </li>
                          </ul>
                        </p>
                      </li>
                    </ul>
                  </nav>
              </div>
 
          
          </div>
        </header>
     
      </div>
    </div>

    <main class="main bg-main">
      <div class="thank-you__wrapper" >
        <section class="thank-you">
          <div class="container">
              <div class="block">
                <h1 class="title">Thank you</h1>
                <p class="text">Your order was completed successfully!</p>
                <?php if($_GET["order_id"]){ ?> 
      <p class="text" style="font-size: 3rem">Your Order ID is: <?php echo htmlspecialchars($_GET["order_id"]); ?></p>
    <?php } ?>
              </div>
          </div>
        </section>
    </div>
    </main>

    <div class="footer__wrapper">
      <svg id="wave2" style="transform:rotate(180deg); transition: 0.3s" viewBox="0 0 1440 120" version="1.1" xmlns="http://www.w3.org/2000/svg"><defs><linearGradient id="sw-gradient-0" x1="0" x2="0" y1="1" y2="0"><stop stop-color="rgba(255, 255, 255, 1)" offset="0%"></stop><stop stop-color="rgba(255, 255, 255, 1)" offset="100%"></stop></linearGradient></defs><path style="transform:translate(0, 0px); opacity:1" fill="url(#sw-gradient-0)" d="M0,96L18.5,94C36.9,92,74,88,111,90C147.7,92,185,100,222,104C258.5,108,295,108,332,94C369.2,80,406,52,443,34C480,16,517,8,554,16C590.8,24,628,48,665,52C701.5,56,738,40,775,44C812.3,48,849,72,886,80C923.1,88,960,80,997,64C1033.8,48,1071,24,1108,24C1144.6,24,1182,48,1218,50C1255.4,52,1292,32,1329,24C1366.2,16,1403,20,1440,28C1476.9,36,1514,48,1551,50C1587.7,52,1625,44,1662,42C1698.5,40,1735,44,1772,44C1809.2,44,1846,40,1883,46C1920,52,1957,68,1994,68C2030.8,68,2068,52,2105,50C2141.5,48,2178,60,2215,72C2252.3,84,2289,96,2326,90C2363.1,84,2400,60,2437,56C2473.8,52,2511,68,2548,64C2584.6,60,2622,36,2640,24L2658.5,12L2658.5,120L2640,120C2621.5,120,2585,120,2548,120C2510.8,120,2474,120,2437,120C2400,120,2363,120,2326,120C2289.2,120,2252,120,2215,120C2178.5,120,2142,120,2105,120C2067.7,120,2031,120,1994,120C1956.9,120,1920,120,1883,120C1846.2,120,1809,120,1772,120C1735.4,120,1698,120,1662,120C1624.6,120,1588,120,1551,120C1513.8,120,1477,120,1440,120C1403.1,120,1366,120,1329,120C1292.3,120,1255,120,1218,120C1181.5,120,1145,120,1108,120C1070.8,120,1034,120,997,120C960,120,923,120,886,120C849.2,120,812,120,775,120C738.5,120,702,120,665,120C627.7,120,591,120,554,120C516.9,120,480,120,443,120C406.2,120,369,120,332,120C295.4,120,258,120,222,120C184.6,120,148,120,111,120C73.8,120,37,120,18,120L0,120Z"></path></svg>
      <div class="container">
        <footer class="footer">
    
          <div class="footer__top">
            <div class="footer__top-block">
              <div class="footer__block">
                <p class="footer__title">Terms</p>
                <ul class="footer__list">
                  <li class="footer__item">
                    <a href="./purchase.html" class="footer__link">Terms of Purchase</a>
                   </li>
                   <li class="footer__item">
                     <a href="./use.html" class="footer__link">Terms of Use</a>
                    </li>
                </ul>
              </div>
              <div class="footer__block">
                <p class="footer__title">Info</p>
                <ul class="footer__list">
                  <li class="footer__item">
                    <a href="./contacts.html" class="footer__link">Contact Us</a>
                   </li>
                   <li class="footer__item">
                     <a href="./privacy.html" class="footer__link">Privacy Notice</a>
                    </li>
                    <li class="footer__item">
                  <a href="./cancellation.html" class="footer__link">Cancellation</a>
                </li>
                </ul>
              </div>
              <div class="footer__block">
                <p class="footer__title">Policies</p>
                <ul class="footer__list">
                  <li class="footer__item">
                    <a href="./return.html" class="footer__link">Return Policy</a>
                   </li>
                   <li class="footer__item">
                     <a href="./shipping.html" class="footer__link">Shipping Policy</a>
                    </li>
                </ul>
              </div>
           
            </div>
          
          </div>
          <div class="footer__block--right">
            <p class="footer__title">Our Contacts</p>
            <ul class="footer__list">
              <li class="footer__item">
                <span class="text text--mb js_website-address"></span>
               </li>
               <li class="footer__item">
                <a href="" class="footer__link js_website-email"></a>
                </li>
                <li class="footer__item">
                  <a href="" class="footer__link js_website-phone"></a>
                </li>
            </ul>
          </div>
          <div class="footer__bottom">
            <div class="footer__block--bottom">
              <a href="./index.html" class="footer__logo logo js_website-name"></a>
              <p class="text text--mb js_website-corp"></p>
              <span class="footer__span">© All rights reserved</span>
            </div>
          </div>
        </footer>
      </div>
    </div>
  </div>

 
  <script type="module" src="./js/on-load.js"></script>
  <script type="module" src="./js/website-data.js"></script>
  <script>
    const menuBtn = document.querySelector('.js_menu-btn');
    const menu = document.querySelector('.js_menu');
    menuBtn.addEventListener('click', () => {
      menuBtn.classList.toggle('active');
      menu.classList.toggle('open-menu');
      document.body.classList.toggle('open-menu');
    })
  </script>
</body>

</html>