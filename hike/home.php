<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/home_css.css">
    <script src="js/home.js">

    </script>
    <title>Home</title>
  </head>
  <body>




  <!--                      H E A D E R                  -->
    <header class="header">
    <nav>
<ul>

<li>
  <a href="home.php">Home</a>
</li>
<li>
  <a href="store.php" target="_blank">Store</a>
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
<li id="login">
<?php
	include 'model.php';
session_start();
 if( isset($_SESSION['username']) && !empty($_SESSION['username']) )
{
?>
      <a href="logout.php">Logout</a>
<?php }else{ ?>
     <a href="login.php">Login</a> 
   
<?php } ?>

</li>
</ul>

</nav>
       <div class="header__logo-box">
         <img src="img/1.png" alt="natours logo" id="home_logo">
       </div>
       <div class="text_header">
         <span class="t1">Discover new Routes</span>

       </div>
    </header>


<!--                           H E A D E R                          -->



  <main>
  <h1 align="center" id="eventsh1">UPCOMING EVENTS</h1>
  <div class="first-wrapper">

<?php
			
				$model= new Model();
				$rows= $model->fetche();

				if(!empty($rows)){
                    foreach($rows as $row){
                        ?>

  <div id="box1" class="allboxes">
    <div class="">
    <img src="<?php echo $row['image']; ?>" alt="logo" id="topimg">
    </div>

    <div class="first">

      <p>“Nature is not a place to visit. It is home.”</p>
    </div>

    <div class="second">
      <p><img src="icons/interface.png" alt=""  id="iconimg"><?php echo $row['location']; ?></p>
      <p><img src="icons/calendaricon.png" alt="" id="iconimg"><?php echo $row['date']; ?></p>
      <p><img src="icons/flagicon.png" alt="" id="flagimg"><?php echo $row['stops']; ?> stops</p>
      <p><img src="icons/personicon.png" alt="" id="personimg"><?php echo $row['people']; ?></p>
    </div>

    <div class="third">
      <div class="">


      <p><b>€<?php echo $row['price']; ?></b> per person</p>

    </div>
    <div class="btnthrd">

        <button type="button" name="button" id="thirdbutton" onclick="openEvents()">View More</button>
    </div>

    </div>
  </div>
  <?php
                    }


                }else{
                    echo "THESE IS NO EVENT REGISTERED...";
                }

                ?>
</div>
<h1 align="center" id="producth1">PRODUCTS</h1>

<div class="second-wrapper">

<?php

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

</div>

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
