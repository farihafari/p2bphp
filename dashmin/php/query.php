<?php
include('connection.php');

// addcategory
if(isset($_POST['addCategory'])){
$catName = $_POST['catName'];
$catImageName = $_FILES['catImage']['name'];
$fileObject = $_FILES['catImage']['tmp_name'];
$directory = 'img/categories/'.$catImageName;
$extension = pathinfo($catImageName, PATHINFO_EXTENSION);
}
?>



