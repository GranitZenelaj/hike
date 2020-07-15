<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="css/events.css">
    <meta charset="utf-8">
    <title>Events</title>
  </head>
  <body>

    <header>



    <nav>
<ul>

<li>
  <a href="home.php">Home</a>
</li>
<li>
  <a href="store.php" target="_blank">Store</a>
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


    <div class="wrapper">

<!--_______________________ BOX 1 _____________________-->

<?php
				include 'model.php';
				$model= new Model();
				$rows= $model->fetchevents();

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

        <button type="button" name="button" id="thirdbutton">Join</button>
    </div>

    </div>
  </div>
  <?php
                    }


                }else{
                    echo "IT IS NOT REGISTRED ANY EVENT...";
                }

                ?>
      </div>
<!-- _________________END BOX 1__________________________ ---->





</main>

  </body>
</html>


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



<!--  USELESSSSS
      <div id="box7" class="allboxes">
        <div class="">
        <img src="" alt="logo">
        </div>

        <div class="">
          some text
        </div>
        <div class="">
          another text
        </div>
      </div>

      <div id="box8" class="allboxes">
        <div class="">
        <img src="" alt="logo">
        </div>

        <div class="">
          some text
        </div>
        <div class="">
          another text
        </div>
      </div>

      <div id="box9" class="allboxes">
        <div class="">
        <img src="" alt="logo">
        </div>

        <div class="">
          some text
        </div>
        <div class="">
          another text
        </div>
    </div
-->
