<?php
include("mymethods.php");

$id=$_GET['id'];

$sql="DELETE FROM `danceform` WHERE id='$id' ";

$data=mysqli_query($conn,$sql);

if($data)
{
   echo "record deleted";
    header('location:danceform.php'); 

}
else{
    echo "failed";
}
?>