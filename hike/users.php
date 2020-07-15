<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
require('db.php');
?>
<!DOCTYPE html>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">

		<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:700, 600,500,400,300' rel='stylesheet' type='text/css'>

		<link rel="stylesheet" href="css/dashboard.css">
<title>Dashboard</title>


        <style>
         .error {color: #FF0000;}
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

							<span>Front End</span>
						</a>
					</li>
				</ul>
			</nav>
		</div>
		<div class="main-content">
			<div class="title">
		

					<div class="title">List of Users</div>
					<table cellpadding="20" cellspacing="5">
<tr>
<th>Id</th>
<th>Name</th>
<th>Email</th>
<th>Password</th>
<th>Create Datatime</th>
</tr>
<?php
include 'model.php';
$model= new Model();
$rows= $model->fetchusers();

				if(!empty($rows)){
                    foreach($rows as $row){
                        ?>
                        <tr>
							<td><?php echo $row['userID']; ?></td>
                            <td><?php echo $row['username']; ?></td>
                            <td><?php echo $row['email']; ?></td>
                            <td><?php echo $row['password']; ?></td>
                            <td><?php echo $row['create_datetime']; ?></td>
						
						
					
                            <tr>


						<?php
                    }

                }else{
                    echo "IT IS NOT REGISTRED ANY User...";
                }

			?>
</table></div>

<div class="title">List of Admins</div>
					<table cellpadding="20" cellspacing="5">
<tr>
<th>Id</th>
<th>Name</th>
<th>Email</th>
<th>Password</th>
<th>Create Datatime</th>
</tr>
<?php

$rows= $model->fetchadmin();

				if(!empty($rows)){
                    foreach($rows as $row){
                        ?>
                        <tr>
							<td><?php echo $row['userID']; ?></td>
                            <td><?php echo $row['username']; ?></td>
                            <td><?php echo $row['email']; ?></td>
                            <td><?php echo $row['password']; ?></td>
                            <td><?php echo $row['create_datetime']; ?></td>
						
						
					
                            <tr>


						<?php
                    }

                }else{
                    echo "IT IS NOT REGISTRED ANY User...";
                }

			?>
</table></div>
				</div>




	</body>
