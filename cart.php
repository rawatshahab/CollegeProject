<?php

require_once 'connection.php';

$sql_cart = "SELECT * FROM cart";
$all_cart = $conn->query($sql_cart);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="font/css/all.min.css">
    <link rel="stylesheet" href="cart.css">
    <title>In cart products</title>
   <style>
* {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
}

body {
  background-color:#181b2b;
  color:white;
  font-family: Arial, sans-serif;
}

main {
  margin: 40px;
  display: grid;
  grid-template-columns: auto auto ;
  margin: auto;
}

h1 {
  text-align: center;
  margin: 20px 0;
  font-size: 32px;
  color: white;
}

hr {
  border: 1px solid #fff;
}

.card {
  margin: 20px;
  width: 500px;
  background-color: royalblue;
  border-radius: 5px;
  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
  overflow: hidden;
  position: relative;
}

.card .images {
  height: 200px;
  overflow: hidden;
  position: relative;
}

.card .images img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

.card .caption {
  padding: -1px;
}

.card .rate {
  color: #f0c330;
  margin-bottom: 10px;
}

.card .product_name {
  font-size: 20px;
  margin-bottom: 10px;
}

.card .price {
  font-size: 24px;
  margin-bottom: 10px;
}

.card .discount {
  font-size: 18px;
  color: #ccc;
}

.card .remove {
  position: absolute;
  bottom: 20px;
  right: 20px;
  background-color: #f0c330;
  color: #fff;
  padding: 10px 20px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}

.card .remove:hover {
  background-color: #f8d57e;
}

.opacity {
  opacity: 0.3;
}
.lal-chunariya-teri{
    color: #fa5353;
}
.logo:hover,
.logo:focus {
    transform: rotate(352deg);
    transition: 0.3s all linear smooth;
}



  </style>
</head>
<body>
    
   <div style="display: flex; justify-content: center;margin-left:200px;">
   <a href="index.php" class="logo">
          <h1>Cyber
          <span class="lal-chunariya-teri">Gamez</span></h1>
        </a>

        <p style="color: white; font-size: 30px; margin: auto; display: flex; justify-content: center;">Cart</p>
   </div>
    <hr>

    <main>
        <?php
          while($row_cart = mysqli_fetch_assoc($all_cart)){
              $sql = "SELECT * FROM product WHERE product_id=".$row_cart["product_id"];
              $all_product = $conn->query($sql);
              while($row = mysqli_fetch_assoc($all_product)){
        ?>
        <div class="card">
            <div class="images">
                <img src="<?php echo $row["product_image"]; ?>" alt="logo">
            </div>

            <div class="caption">
                <p class="rate">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </p>
                <p class="product_name"><?php echo $row["product_name"]; ?></p>
                <p class="price"><b>$<?php echo $row["price"]; ?></b></p>
                <p class="discount"><b><del>$<?php echo $row["discount"]; ?></del></b></p>
                <button class="remove" data-id="<?php echo $row["product_id"]; ?>">Remove from Cart</button>
            </div>
        </div>
        <?php

          }
        }
       ?>
    </main>

    <script>
        var remove = document.getElementsByClassName("remove");
        for(var i = 0; i<remove.length; i++){
            remove[i].addEventListener("click",function(event){
                var target = event.target;
                var cart_id = target.getAttribute("data-id");
                var xml = new XMLHttpRequest();
                xml.onreadystatechange = function(){
                    if(this.readyState == 4 && this.status == 200){
                       target.innerHTML = this.responseText;
                       target.style.opacity = .3;
                    }
                }

                xml.open("GET","connection.php?cart_id="+cart_id,true);
                xml.send();
            })
        }
    </script>
    <script src="swiper-bundle.min.js"></script>
    <script src="script.js"></script>
  
</body>
</html>