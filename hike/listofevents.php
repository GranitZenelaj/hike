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

	<link rel="stylesheet" href="css/dashboard.css">
<title>Dashboard</title>

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
			<i class="fa fa-tachometer"></i>
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
	<div class="title">List of products</div>
			<div class="chart">
				<table border=5>
					<tr>

						<th>ID</th>
						<th>Image</th>
						<th>Location</th>
                        <th>Date</th>
                        <th>Stops</th>
                        <th>People</th>
                        <th>Price</th>
						<th>Action</th>
					</tr>
					<?php
				include 'model.php';
				$model= new Model();
				$rows= $model->fetchevents();

				if(!empty($rows)){
                    foreach($rows as $row){
                        ?>
                        <tr>
							<td><?php echo $row['id']; ?></td>
							<td><img src="<?php echo $row['image']; ?>" height="100px" width="100"></td>
                            <td><?php echo $row['location']; ?></td>
                            <td><?php echo $row['date']; ?></td>
                            <td><?php echo $row['stops']; ?></td>
                            <td><?php echo $row['people']; ?></td>
                            <td><?php echo $row['price']; ?></td>
                            <td>
                          <a href="read.php?id=<?php echo $row['id']; ?>">Read |</a>
                        <a href="delete.php?id=<?php echo $row['id']; ?>">Delete |</a>
                           <a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a>

                            </td>





                        </tr>
                        <?php
                    }

                }else{
                    echo "IT IS NOT REGISTRED ANY EVENT...";
                }

			?>
				</table>
			</div>
		</div>




</body>

</html>
