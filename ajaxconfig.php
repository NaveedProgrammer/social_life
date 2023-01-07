<?php
session_start();
include 'config.php';

if(isset($_POST['Signup']))
{
    $fname = htmlspecialchars($_POST['f_name']);
    $lname = htmlspecialchars($_POST['l_name']);
    $username = htmlspecialchars($_POST['s_username']);
    $email = htmlspecialchars($_POST['s_email']);
    $pass = htmlspecialchars($_POST['s_pass']);
    $encpass = password_hash($pass, PASSWORD_DEFAULT);
    $phone = htmlspecialchars($_POST['s_phone']);
    $gender =htmlspecialchars($_POST['s_gender']);

    $emcheckquery = "select * from `user_table` where `user_email` = '$email'";

    $emcheckresult = mysqli_query($conn, $emcheckquery);
    $emailcount = mysqli_num_rows($emcheckresult);

    if($emailcount == 0){
        $query="INSERT INTO `user_table`(`user_firstname`, `user_lastname`, `user_username`, `user_email`, `user_password`, `user_gender`, `user_phone`) VALUES ('$fname','$lname','$username','$email','$encpass','$gender','$phone')";
        $result=mysqli_query($conn,$query);
        if($result){
            echo $fname." ".$lname." is Register Successfully..";
        }else{
            echo mysqli_error($conn);
        }
    }else{
        echo "This Email Is Already Exist";
    }
  
}

if(isset($_POST['Login']))
{
    $user=array();
    $email=mysqli_real_escape_string($conn, $_POST['l_email']);
    $pass=mysqli_real_escape_string($conn, $_POST['l_pass']);
    
    $queryl="SELECT * FROM `user_table` WHERE `user_email`='$email'";
    $resultl=mysqli_query($conn,$queryl);

    $check=mysqli_num_rows($resultl) > 0;
    if($check > 0)
    {
        $row = mysqli_fetch_assoc($resultl);
        $_SESSION['user_id']=$row['user_id'];
        array_push($user,["status"=>1,"message"=>$row['user_firstname']." ".$row['user_lastname']." login successfully","user_id"=>$row['user_id']]);
    }else {
        unset($_SESSION['user_id']);
        array_push($user,["status"=>0,"message"=>"user email and Password invalid"]);
    }
    header("ContentType:application/json");
    echo json_encode($user);
}
?>