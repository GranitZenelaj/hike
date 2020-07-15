<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
require('db.php');
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
	<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:700, 600,500,400,300' rel='stylesheet' type='text/css'>
<title>Dashboard</title>
	<link rel="stylesheet" href="css/dashboard.css">


	<script src="js/dashboard.js"></script>

	<style>
		.error {
			color: #FF0000;
		}
	</style>

</head>

<body>
	<div class="header">
		<div class="logo">

			<span>Brand</span>
		</div>
		<a href="#" class="nav-trigger"><span></span></a>
	</div>
	<div class="side-nav">
		<div class="logo">

			<span> <?php echo $_SESSION['username']; ?></span>
		</div>
		<nav>
			<ul>
				<li>
					<a href="add_events.php">

						<span>Event</span>
					</a>
				</li>
				<li>
					<a href="add_products.php">


						<span>Products</span>
					</a>
				</li>
				<li>
					<a href="#">

						<span>Users</span>
					</a>
				</li>
				<li >
					<a href="inbox.php">
						<span>Inbox</span>
					</a>
				</li>


				<li>
					<a href="home.php">

						<span>Front-End</span>
					</a>
				</li>
			</ul>
		</nav>
	</div>
	<div class="main-content">
		<div class="title">

        <h2 style="text-align:center">EVENT</h2>
<?php
include 'model.php';
$model= new Model();
$id=$_REQUEST['id'];
$row= $model ->fetch_event($id);
if(!empty($row)){


?>
<div class="card">
<img src="<?php echo $row['image']; ?>" style="width:50%">
  <h1><?php echo $row['id']; ?></td>. <?php echo $row['location']; ?></h1>


        <p>DATE: <?php echo $row['date']; ?></p>
          <p>NUMBER OF STOPS: <?php echo $row['stops']; ?></p>
         <p>NUMBER OF PEOPLE: <?php echo $row['people']; ?></p>
   <p>PRICE: <?php echo $row['price']; ?></p>
  <p><button>Add to Cart</button></p>
</div>
<?php }else{echo "NO EVENT";}
?>
        </div>

	</div>


</body>

</html>
