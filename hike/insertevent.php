<?php

include("auth_session.php");
require_once'function.php';



if(isset($_GET['del']))
    {

$rid=$_GET['del'];
$deletedata=new DB_con();
$sql=$deletedata->delete($rid);
if($sql)
{

echo "<script>alert('Record deleted successfully');</script>";
echo "<script>window.location.href='index.php'</script>";
}
    }


?>
<!DOCTYPE html>
<html lang="en">
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
				<li>
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
			<form method="post" enctype="multipart/form-data">

				<br />


				<h2>EVENTS</h2>

				<div class="item">
					<label for="location">Location<span>*</span></label>
					<input id="location" type="text" name="location">
                </div>
                <div class="item">
					<label for="date">Date<span>*</span></label>
					<input id="date" type="datetime-local" name="date">
                </div>
                <div class="item">
					<label for="stops">Stops<span>*</span></label>
					<input id="stops" type="number" name="stops">
                </div>
                <div class="item">
					<label for="people"> People<span>*</span></label>
					<input id="people" type="number" name="people" />
				</div>
				<div class="item">
					<label for="price"> Price<span>*</span></label>
					<input id="price" type="number" name="price" />
				</div>
				<div class="item">
					<label for="file"> Image <span>*</span></label>
					<input type="file" id="avatar" name="file" accept="image/png, image/jpeg">

				</div>
				<div class="item">

				</div>
				<div class="btn-block">
					<button type="submit" name="submit" value="Submit">Create</button>
					</form>
				</div>
		</div>




		<div class="widget">
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
<tbody>
 <?php
 $fetchdata=new DB_con();
  $sql=$fetchdata->fetchdataevents();

  while($row=mysqli_fetch_array($sql))
  {
  ?>
    <tr>

    <td><?php echo htmlentities($row['FirstName']);?></td>
    <td><?php echo htmlentities($row['LastName']);?></td>
    <td><?php echo htmlentities($row['EmailId']);?></td>
    <td><?php echo htmlentities($row['ContactNumber']);?></td>
    <td><?php echo htmlentities($row['Address']);?></td>
    <td><?php echo htmlentities($row['PostingDate']);?></td>
 <td><a href="update.php?id=<?php echo htmlentities($row['id']);?>"><button class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-pencil"></span></button></a></td>
 <td><a href="index.php?del=<?php echo htmlentities($row['id']);?>"><button class="btn btn-danger btn-xs" onClick="return confirm('Do you really want to delete');"><span class="glyphicon glyphicon-trash"></span></button></a></td>
    </tr>
<?php


} ?>
</tbody>
</table>
</div>
</div>
</div>
</div>

</body>
</html>
