<?php
include 'model.php';
$model= new Model();
$id=$_REQUEST['id'];
$delete= $model->deleteproduct($id);

if($delete){
    echo "Delete successfully";
  echo "<script>window.location.href='add_products.php'</script>";
}


 
?>