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
			<div class="title">
			<?php
				include 'model.php';
				$model= new Model();
				$insert= $model->insertproduct();

			?>
           	<form method="post" enctype="multipart/form-data">




<h2>Products</h2>

          <div class="item">
            <label for="activity">Name<span>*</span></label>
            <input id="activity" type="text" name="name" />
          </div>
          <div class="item">
            <label for="fee"> Price<span>*</span></label>
            <input id="fee" type="number" name="price" />
          </div>
                   <div class="item">
            <label for="bdate"> Image <span>*</span></label>
            <input type="file"
       id="avatar" name="image"
       accept="image/png, image/jpeg">

          </div>
 <div class="item">

          </div>
          <div class="btn-block">
          <button type="submit" name="submit">Submit</button>
        </div>
          </div>


      </form>


					<div class="title">List of Products</div>
					<table cellpadding="20" cellspacing="5">
<tr>
<th>Id</th>
<th>Name</th>
<th>Price</th>
<th>Image</th>
</tr>
<?php

				$rows= $model->fetchp();

				if(!empty($rows)){
                    foreach($rows as $row){
                        ?>
                        <tr>
							<td><?php echo $row['id']; ?></td>
                            <td><?php echo $row['name']; ?></td>
                            <td><?php echo $row['price']; ?></td>
							<td><img src="<?php echo $row['image']; ?>" height="100px" width="100"></td>
						<td><button type="button" >	<a href="deleteproduct.php?id=<?php echo $row['id']; ?>" >Delete </a></button></td>
                            <tr>


						<?php
                    }

                }else{
                    echo "IT IS NOT REGISTRED ANY EVENT...";
                }

			?>
</table></div>
				</div>




	</body>
