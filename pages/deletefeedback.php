<?php
    include("mymethods.php");
    $id=$_GET['id'];

    $sql= "DELETE FROM `feedback` WHERE id='$id' ";

    $data=mysqli_query($conn,$sql);

if($data)
{
   echo "record deleted";
    header('location:feedback.php'); 

}
else{
    echo "failed";
}

    
?>