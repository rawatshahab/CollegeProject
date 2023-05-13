<?php

  require_once 'connection.php';

  $sql = "SELECT * FROM product";
  $all_product = $conn->query($sql);


?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <style>
      .add{
    color:#faf102;
    background-color: hsl(0, 0%, 100%, 0.4);
    border: none;
     padding: 4px 10px;}
      </style>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style2.css" />
    <link rel="icon" href="imgs/fav.png" type="image/x-icon" />
    <link
      href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="swiper-bundle.min.css" />
    <script src="https://unpkg.com/boxicons@2.1.2/dist/boxicons.js"></script>

    <title>
       Gaming Website 
    </title>
  </head>
  <body>
  
   
    <!-- Header Section -->
    <header>
      <div class="nav container">
        <a href="index.php" class="logo">
          Cyber
          <span>Gamez</span>
        </a>
       <div class="nav-icon"> 
        <a href="cart.php" style="color:white;" class ="bx bx-tada">Cart<span  id="badge"></span></a></div>
        
        <div class="nav-icons">
          
          <i class="bx bx-bell bx-tada" id="bell-icon"><span></span></i>
          <a href="download.html"
            ><i class="bx bxs-download bx-tada" id="download-icon"></i
          ></a>
          <div class="menu-icon">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
          </div>
        </div>
        <!-- Menu -->
        <div class="menu">
          <img src="imgs/menu.png" alt="Menu Image" />
          <div class="navbar">
            <li><a href="index.php">Home</a></li>
            <li>
              <a href="#trending-section" id="trending-section">Trending</a>
            </li>
            <li>
              <a href="#latest-section" id="new-section">Latest</a>
            </li>
            <li><a href="#categories">Categories</a></li>
            <li>
              <a href="#action-games" id="new-section">Action Games</a>
            </li>
            <li><a href="#contact_us">Contact Us</a></li>
            
            
          </div>
        </div>
        <!-- Notification -->
        <div class="notification">
          <div class="notification-box">
            <span>✔️</span>
            <p>Congratulations! Your Game has been Downloaded</p>
          </div>
          <div class="notification-box box-color">
            <span>❌</span>
            <p>Could not Download your Game Plz Retry Again!</p>
          </div>
        </div>
      </div>
    </header>

    <!-- Home Section -->
    <section class="home container" id="home">
      <img src="imgs/home.png" alt="gaming" />
      <div class="home-text">
        <h1>CITY OF THE <br />FUTURE</h1>
        <a href="/" class="btn">Available Now!</a>
      </div>
    </section>

    <!-- Trending Section -->
    <section class="trending container" id="trending-section">
      <div class="heading">
        <h2>Premium Games</h2>
      </div>
      <!-- Trending Content -->
      <div class="trending-content swiper">
        <div class="swiper-wrapper">
          <!-- Slide 1 -->
          <div class="swiper-slide">
            <div class="box">
              <img src="imgs/trending1.webp" alt="" />
              <div class="box-text">
                <h2>Cyberpunk 2077</h2>
                <h3>Action</h3>
                <div class="rating-download">
                  <div class="rating">
                    <i class="bx bxs-star"></i>
                    <span>5.0</span>
                  </div>
                  <i ><button class="add" data-id="14">Add to cart</button></i>
              
                </div>
              </div>
            </div>
          </div>
          <!-- Slide 2 -->
          <div class="swiper-slide">
            <div class="box">
              <img src="imgs/trending2.jpg" alt="" />
              <div class="box-text">
                <h2>Battlefield 2042</h2>
                <h3>Action, Weapon, Crime</h3>
                <div class="rating-download">
                  <div class="rating">
                    <i class="bx bxs-star"></i>
                    <span>5.0</span>
                  </div>
                  <i ><button class="add" data-id="15">Add to cart</button></i>
                 
                </div>
              </div>
            </div>
          </div>
          <!-- Slide 3 -->
          <div class="swiper-slide">
            <div class="box">
              <img src="imgs/trending3.jpg" alt="" />
              <div class="box-text">
                <h2>Assassin's Creed</h2>
                <h3>Action</h3>
                <div class="rating-download">
                  <div class="rating">
                    <i class="bx bxs-star"></i>
                    <span>5.0</span>
                  </div>
                  <i ><button class="add" data-id="16">Add to cart</button></i>
                 
                </div>
              </div>
            </div>
          </div>
          <!-- Slide 4 -->
          <div class="swiper-slide">
            <div class="box">
              <img src="imgs/trending4.jpg" alt="" />
              <div class="box-text">
                <h2>Ghost of Tsushima</h2>
                <h3>Action</h3>
                <div class="rating-download">
                  <div class="rating">
                    <i class="bx bxs-star"></i>
                    <span>5.0</span>
                  </div>
                  <i ><button class="add" data-id="17">Add to cart</button></i>
                  
                </div>
              </div>
            </div>
          </div>
          <!-- Slide 5 -->
          <div class="swiper-slide">
            <div class="box">
              <img src="imgs/trending5.png" alt="" />
              <div class="box-text">
                <h2>GTA V</h2>
                <h3>Action, Crime, Mission</h3>
                <div class="rating-download">
                  <div class="rating">
                    <i class="bx bxs-star"></i>
                    <span>5.0</span>
                  </div>
                  <i ><button class="add" data-id="18">Add to cart</button></i>
              
                </div>
              </div>
            </div>
          </div>
          <!-- Slide 6 -->
          <div class="swiper-slide">
            <div class="box">
              <img src="imgs/trending6.jpg" alt="" />
              <div class="box-text">
                <h2>Dying Light 2</h2>
                <h3>Action</h3>
                <div class="rating-download">
                  <div class="rating">
                    <i class="bx bxs-star"></i>
                    <span>5.0</span>
                  </div>
                  <i ><button class="add" data-id="19">Add to cart</button></i>
           
                </div>
              </div>
            </div>
          </div>
          <!-- Slide 7 -->
          <div class="swiper-slide">
            <div class="box">
              <img src="imgs/trending7.png" alt="" />
              <div class="box-text">
                <h2>HALO infinite</h2>
                <h3>Action</h3>
                <div class="rating-download">
                  <div class="rating">
                    <i class="bx bxs-star"></i>
                    <span>5.0</span>
                  </div>
                  <i ><button class="add" data-id="20">Add to cart</button></i>
                  
                </div>
              </div>
            </div>
          </div>
          <!-- Slide 8 -->
       
      <div class="swiper-slide">
        <div class="box">
          <img src="imgs/screenshots1.jpg" alt="" />
          <div class="box-text">
            <h2>Subway Surfers</h2>
            <h3>Action, Crime</h3>
            <div class="rating-download">
              <div class="rating">
                <i class="bx bxs-star"></i>
                <span>5.0</span>
              </div>
              <i ><button class="add" data-id="21">Add to cart</button></i>
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
    </section>
  
  <!-- New Section -->
 
  <section class="trending container" id="trending-section">
  <div class="trending-content swiper">
    <div class="swiper-wrapper">
      <!-- Slide 1 -->
    
      <div class="swiper-slide">
        <div class="box">
          <img src="imgs/1.png" alt="" />
          <div class="box-text">
            <h2>Minecraft</h2>
            <h3>Action</h3>
            <div class="rating-download">
              <div class="rating">
                <i class="bx bxs-star"></i>
                <span>5.0</span>
              </div>
              <i ><button class="add" data-id="22">Add to cart</button></i>
            
            </div>
          </div>
        </div>
      </div>
           <!-- Slide 2 -->
           <div class="swiper-slide">
            <div class="box">
              <img src="imgs/2.png" alt="" />
              <div class="box-text">
                <h2>BGMI</h2>
                <h3>Action</h3>
                <div class="rating-download">
                  <div class="rating">
                    <i class="bx bxs-star"></i>
                    <span>5.0</span>
                  </div>
                  <i ><button class="add" data-id="23">Add to cart</button></i>
                  
                </div>
              </div>
            </div>
          </div>
              <!-- Slide 3 -->
      <div class="swiper-slide">
        <div class="box">
          <img src="imgs/3.png" alt="" />
          <div class="box-text">
            <h2>Fortnite</h2>
            <h3>Action</h3>
            <div class="rating-download">
              <div class="rating">
                <i class="bx bxs-star"></i>
                <span>5.0</span>
              </div>
              <i ><button class="add" data-id="24">Add to cart</button></i>
              
            </div>
          </div>
        </div>
      </div>
           <!-- Slide 4 -->
           <div class="swiper-slide">
            <div class="box">
              <img src="imgs/4.jpg" alt="" />
              <div class="box-text">
                <h2>Call of Duty</h2>
                <h3>Action</h3>
                
               
                <div class="rating-download">
                
                  <div class="rating">
                    <i class="bx bxs-star"></i>
                    <span>5.0</span>
                  </div>
                  
                  <i ><button class="add" data-id="25">Add to cart</button></i>
                </div>
              </div>
            </div>
          </div>
             <!-- Slide 5 -->
      <div class="swiper-slide">
        <div class="box">
          <img src="imgs/5.jpg" alt="" />
          <div class="box-text">
            <h2>Free Guy</h2>
            <h3>Action</h3>
            <div class="rating-download">
              <div class="rating">
                <i class="bx bxs-star"></i>
                <span>5.0</span>
              </div>
              <i ><button class="add" data-id="26">Add to cart</button></i>
              
            </div>
          </div>
        </div>
      </div>
          <!-- Slide 6 -->
          <div class="swiper-slide">
            <div class="box">
              <img src="imgs/6.jpg" alt="" />
              <div class="box-text">
                <h2>Royal Clans</h2>
                <h3>Action</h3>
                <div class="rating-download">
                  <div class="rating">
                    <i class="bx bxs-star"></i>
                    <span>5.0</span>
                  </div>
                  <i ><button class="add" data-id="27">Add to cart</button></i>
                  
                </div>
              </div>
            </div>
          </div>
             <!-- Slide 7 -->
      <div class="swiper-slide">
        <div class="box">
          <img src="imgs/7.jpg" alt="" />
          <div class="box-text">
            <h2>Contest of Champions</h2>
            <h3>Action</h3>
            <div class="rating-download">
              <div class="rating">
                <i class="bx bxs-star"></i>
                <span>5.0</span>
              </div>
              <i ><button class="add" data-id="28">Add to cart</button></i>
             
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
    </section>

    <!-- New Section -->
    <section class="new container" id="new-section">
      <div class="heading">
        <h2>Free to Play</h2>
      </div>
      <!-- New Content -->
      <div class="new-content">
        <!-- New 1 -->
        <div class="box">
          <img src="imgs/icon.png" alt="" />
          <div class="box-text" >
            <h2>Test IQ Level</h2>
            <h3>Puzzle</h3>
            <div class="rating-download">
              <div class="rating">
                <i class="bx bxs-star"></i>
                <span>4.7</span>
              </div>
              <a href="games/game1/game.html" class="box-btn" target="_blank"
                ><i class="bx bx-tada">Play</i
              ></a>
            </div>
          </div>
        </div>
      
       
        <!-- New 2-->
        <div class="box">
          <img src="imgs/pic.jpeg" alt="" />
          <div class="box-text">
            <h2>Dice Game</h2>
            <h3>Puzzle</h3>
            <div class="rating-download">
              <div class="rating">
                <i class="bx bxs-star"></i>
                <span>4.7</span>
              </div>
              <a href="games/game3/game3.html" class="box-btn" target="_blank"
                ><i class="bx bx-tada">Play</i
              ></a>
            </div>
          </div>
        </div>
    
        <!-- New 3 -->
        <div class="box">
          <img src="imgs/pattern.png" alt="" />
          <div class="box-text">
            <h2>Guess the Pattern</h2>
            <h3>Puzzle</h3>
            <div class="rating-download">
              <div class="rating">
                <i class="bx bxs-star"></i>
                <span>4.7</span>
              </div>
              <a href="games/game4/game4.html" class="box-btn" target="_blank"
                ><i class="bx bx-tada">Play</i
              ></a>
            </div>
          </div>
        </div>
        <div ></div>
        
        
        <script>
       var product_id = document.getElementsByClassName("add");
       for(var i = 0; i<product_id.length; i++){
           product_id[i].addEventListener("click",function(event){
               var target = event.target;
               var id = target.getAttribute("data-id");
               var xml = new XMLHttpRequest();
               xml.onreadystatechange = function(){
                   if(this.readyState == 4 && this.status == 200){
                       var data = JSON.parse(this.responseText);
                       target.innerHTML = data.in_cart;
                       document.getElementById("badge").innerHTML = data.num_cart + 1;
                   }
               }

               xml.open("GET","connection.php?id="+id,true);
               xml.send();
            
           })
       }

   </script>
      
      
</section>
    <!-- Footer Section -->
    <div class="copyright container">
      <a href="index.php" class="logo2">
        Cyber
        <span>Gamez</span>
      </a>
      <p>
        &#169;
        <a class="link" href="https://github.com/rawatshahab">Mayank Rawat</a>
        All Rights Reserved
      </p>
    </div>

    <script src="swiper-bundle.min.js"></script>
    <script src="script.js"></script>
  </body>
</html>
