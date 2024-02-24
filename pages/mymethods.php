<?php
    
    //database connection

    $conn=mysqli_connect("localhost","root","","dance");

    if(mysqli_connect_error())
    {
        echo "cannot connect";
    }
    function dbConnect()
{
    $hostname="localhost";
    $username="root";
    $password="";
    $dbname="dance";


    $conn=mysqli_connect($hostname,$username,$password,$dbname);

    return $conn;
}

function getDetailsById($id)
{
    $conn=dbConnect();

    if($conn)
        {
            $sql="select * from danceform where id='$id'";
            $res=mysqli_query($conn,$sql);
            
            return $res;
        }
        else
        {
            return "not connected";
        }
}
    
function getimagenamebyid($id)
    {
        $conn=dbConnect();
        $sql="select * from danceform where id='$id'";
        $res = mysqli_query($conn,$sql);
        
        $records=mysqli_num_rows($res);
        if(mysqli_num_rows($res)>0)
        {   
            $data = mysqli_fetch_assoc($res);
            {
                $image=$data['image'];
            
               return "image";
            }
        }
    }

    function add($data)
    {
        $days=$data['days'];
        $formname=$data['formname'];
        $hh=$data['hh'];
        $mm=$data['mm'];
        $ampm=$data['ampm'];
        $hours=$data['hours'];
        $seats=$data['seats'];

           
        $timming=$hh.":".$mm." ".$ampm;
    
        $conn=dbConnect();
    
        if($conn)
        {
            $sql="insert into schedule(days,formname,timming,hours,seats) values('$days','$formname','$timming','$hours','$seats')";
            $res=mysqli_query($conn,$sql);
            if($res==1)
            return "added";
            else
            return "not added";
        }
        else
        {
            return "not connected";
        }
        
    }
    
    function displaydetails()
    {
        {
            $conn=dbConnect();
            
            if($conn)
            {
                $sql="select * from schedule";
                $res=mysqli_query($conn,$sql);
                
                return $res;
            }
            else
            {
                return "not connected";
            }
        }
    }
    

    function getscheduleDataById($scheduleid)
    {
        $conn=dbConnect();

        if($conn)
        {
            $sql="select * from schedule where scheduleid='$scheduleid'";
            $res=mysqli_query($conn,$sql);
            
            return $res;
        }
        else
        {
            return "not connected";
        }
    }

    function countDanceforms()
    {
        $conn=dbConnect();

        if($conn)
        {
            $sql="select count(*) as total from danceform";
            $res=mysqli_query($conn,$sql);
            
            $data=mysqli_fetch_assoc($res);

            return $data['total'];
        }
        else
        {
            return "not connected";
        }
    }

    function countSchedule()
    {
        $conn=dbConnect();

        if($conn)
        {
            $sql="select count(*) as total from schedule";
            $res=mysqli_query($conn,$sql);
            
            $data=mysqli_fetch_assoc($res);

            return $data['total'];
        }
        else
        {
            return "not connected";
        }
    }

   function countFeedback()
   {
    $conn=dbConnect();

    if($conn)
    {
        $sql="select count(*) as total from feedback";
        $res=mysqli_query($conn,$sql);
        
        $data=mysqli_fetch_assoc($res);

        return $data['total'];
    }
    else
    {
        return "not connected";
    }
   }



    function update($data)
    {   
        $scheduleid=$data['scheduleid'];
        $days=$data['days'];
        $formname=$data['formname'];
        $hh=$data['hh'];
        $mm=$data['mm'];
        $ampm=$data['ampm'];
        $hours=$data['hours'];
        $seats=$data['seats'];

        $timming=$hh.":".$mm." ".$ampm;

        $conn=dbConnect();
        
        if($conn)
    {
        $sql="update schedule set days='$days', formname ='$formname', timming='$timming',hours='$hours',seats='$seats' where scheduleid='$scheduleid'";
        $res=mysqli_query($conn,$sql);
        if($res==1)
        return "updated";
        else
        return "not updated";
    }
    else
    {
        return "not connected";
    }
    }

    function deleteschedule($scheduleid)
    {   
        $conn=dbConnect();

        if($conn)
        {
            $sql= "DELETE FROM `schedule` WHERE scheduleid='$scheduleid'";
            $res=mysqli_query($conn,$sql);
            if($res==1)
            return "deleted";
            else
            return "not deleted";
        }
        else
        {
            return "not connected";
        }
    }

    function display()
{
    $hostname="localhost";
    $username="root";
    $password="";
    $dbname="dance";

    $conn = mysqli_connect($hostname,$username,$password,$dbname);
    
    if ($conn)
    {
        $sql= "select * from login";
        $res=mysqli_query($conn,$sql);

        return $res;
    }
    else
    {
        return "error";
    }


}

?>

