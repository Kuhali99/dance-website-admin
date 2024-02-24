<?php
include 'mymethods.php';

if(isset($_POST['update'])){
    $id = $_POST['id'];
    $formname=$_POST['formname'];
    $image=$_FILES['image'];
   
    

    if(!empty($_FILES["image"]["name"]))
    {
          //$res = mysqli_query($con,"UPDATE INTO `product` set( `name`, `price`) VALUES ('$name','$price')");
          echo "image selected";

        $img_loc = $_FILES['image']['tmp_name'];
        $img_name = $_FILES['image']['name'];
      

        $img_des = "images/".$img_name;
        $target_file = "images/". basename($_FILES["image"]["name"]);
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

        $uploadOk = 1;
        // Check if file already exists
        if (file_exists($img_name)) {
          //echo "Sorry, file already exists.";
          $uploadOk = 0;
        }

      // Check file size
      /*
      if ($_FILES["image"]["size"] > 500000) {
        //echo "Sorry, your file is too large.";
        $uploadOk = 0;
      }
      */

      // Allow certain file formats
      if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) 
      {
      //echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
      $uploadOk = 0;
      }

      // Check if $uploadOk is set to 0 by an error
      if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
        //header('location: index.php?status=0');
      }
      else
      {
        //insert data
        move_uploaded_file($img_loc,'images/'.$img_name);
        

        $sql="UPDATE `danceform` set formname='$formname',image='$img_des' where id = '$id'";

        $res = mysqli_query($conn,$sql);

        //echo $res;

        if($res == 1)
        {
          header('location: danceform.php?status=1');
        }
        else{
          header('location: danceform.php?status=0');
        }
      }


    }



      else{

        $sql="UPDATE `danceform` set formname='$formname',image='$img_des' where id = '$id'";

        $res = mysqli_query($conn, $sql);

      if($res==1){

        //echo "upload successful";
        header('location: danceform.php?status=1');
      }
      else{
        echo "upload failed";
      }
    
  }
}



?>