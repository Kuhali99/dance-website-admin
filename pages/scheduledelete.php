<?php
    include("mymethods.php");
    $scheduleid=$_POST['scheduleid'];
    $res=deleteschedule($scheduleid);

    echo $res;
?>