<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Dancedilse|update</title>
  </head>
  <body>
    <?php
    include 'mymethods.php';

        $scheduleid=$_GET['scheduleid'];
        $res=getscheduleDataById($scheduleid);
        $data=mysqli_fetch_assoc($res);
        
    ?>


<form class="row g-3 updated" action="scheduleupdate.php" method="POST">
  
<input type="hidden" name="scheduleid" id="scheduleid" value="<?php echo $data['scheduleid']?>">
  <div class="col-md-6">
    <label for="days" class="form-label">Days</label>
    <input type="text" class="form-control" id="days" name="days" value="<?php echo $data['days']?>">
  </div>
  <div class="col-md-6">
    <label for="formname" class="form-label">Formname</label>
    <input type="text" class="form-control" id="formname" name="formname" value="<?php echo $data['formname']?>">
  </div>
  

  <div class="col-md-4">
  <input type="number" class="timming" name="hh" id="timming" placeholder="HH" style="width :10%"  value="<?php echo $data['hh']?>">
  <input type="number" class="timming" name="mm" id="timming" placeholder="MM" style="width :10%"  value="<?php echo $data['mm']?>">
  <select name="ampm" id="timming" style="width :10%"  value="<?php echo $data['ampm']?>">
      <option value="PM">PM</option>
      <option value="AM">AM</option>
  </select>
  </div>
  <div class="col-12">
    <label for="hours" class="form-label">Hours</label>
    <input type="number" class="form-control" id="hours" name="hous"  value="<?php echo $data['hours']?>">
  </div>
  <div class="col-12">
    <label for="seats" class="form-label">Seats</label>
    <input type="number" class="form-control" id="seats" name="seats"  value="<?php echo $data['seats']?>">
  </div>
  
  <div class="col-12">
    <button type="submit" class="btn btn-primary" id="btn" name="update">Update</button>
  </div>
</form>


     

     <?php

      
if(isset($_POST["update"]))
{
$respose =update($_POST);
echo $respose;
header('location:schedule.php'); 
}
?>




     <!-- <center>
        <div class="container1">
          <form action="scheduleupdate.php" method="POST" enctype="multipart/form-data">

          <input type="hidden" name="scheduleid" id="scheduleid" value=""><br>

            <label for="">Days</label>
            <input type="text" name="days" id="days" value="
            <label for="">Formname</label>
            <input type="text" name="formname" id="formname" value="
            <div class="form-group"  style="width :100%">
              <input type="number" class="timming" name="hh" id="timming" placeholder="HH" style="width :20%" value="
                  <option value="AM">AM</option>
                </select>
            </div>
            <label for="">Seats</label>
            <input type="number" name="seats" id="seats" value="
            <input type="number" class="hours" id="hours" name="hours" placeholder="Hours" value=><br>

            <button type="submit" class="btn btn-primary" name="update" id="btn">Update</button>
        
          </form>
        </div>
      </center>!-->
      
      
  <!--<style>
        .container1{
          width:20%;
          height: 20%;
          background-color: #e5d9cf;

        }
        .container2{
          margin-top: 20px;
          
        }
       
      </style>

      
         
        /.content -->
      
    

     <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>