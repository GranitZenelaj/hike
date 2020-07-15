<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Store</title>
    <link rel="stylesheet" href="css/store.css">
  </head>
  <body>

<header>

  <nav>
<ul>

<li>
<a href="home.php">Home</a>
</li>

<li>
<a href="events.php" target="_blank">Events</a>
</li>
<li>
<a  href="contactus.php" target="_blank">Contact US</a>
</li>
<li>

<a href="cart.php">Chart</a>

</li>
<li>

<a href="images.html">Images</a>

</li>
</ul>

</nav>

</header>



<main>






<?php
include 'model.php';
$model= new Model();
 $rows= $model->fetchproducts();
 if(!empty($rows)){
    foreach($rows as $row){


?>
  <div class="storeallboxes">

    <div class="first">
      <img src="<?php echo $row['image']; ?>" alt="" width="200px" height="130px">
    </div>

  <div class="second">
    <p><?php echo $row['name']; ?></p>
  </div>

  <div class="price">
    <p><?php echo $row['price']; ?>€</p>
  </div>

  <div class="third">
    <input type="button" name="" value="Purchase" id="purchaseButton" onclick="openStore()">
  </div>

  </div>







<?php
                    }

                }else{
                    echo "THERE IS NO PRODUCT REGISTRED...";
                }

			?>







</main>




























    <footer class="footer">
       <div>
    Have a question? Email us at
    <a href="mailto:example@example.com">hiking@hike.com</a>
</div>

<div>
    <a class="social" href="#"><img src="img/fb.png"></a>
    <a class="social" href="#"><img src="img/ig.png"></a>
    <a class="social" href="#"><img src="img/tw.png"></a>
    <a class="social" href="#"><img src="img/yt.png"></a>
</div>
<div>
    You'll travel with the wind. <span class="name">HIKE.</span>.
</div>


    </footer>



  </body>
</html>
