<?php
session_start();
include 'config.php';

if(isset($_POST['Signup']))
{
    $fname = htmlspecialchars($_POST['f_name']);
    $lname = htmlspecialchars($_POST['l_name']);
    // $username = htmlspecialchars($_POST['s_username']);
    $email = htmlspecialchars($_POST['s_email']);
    $pass = htmlspecialchars($_POST['s_pass']);
    $encpass = password_hash($pass, PASSWORD_DEFAULT);
    // $profile = addslashes(file_get_contents($_FILES['img']['tmp_name']));
    // $gender = htmlspecialchars($_POST['s_gender']);
    $phone = htmlspecialchars($_POST['s_phone']);
    $gender ="Male";
    $username = "kamran420";
    $profile = "Images";

    $emcheckquery = "select * from `user_table` where `user_email` = '$email'";

    $emcheckresult = mysqli_query($conn, $emcheckquery);
    $emailcount = mysqli_num_rows($emcheckresult);

    if($emailcount == 0){
        $query="INSERT INTO `user`( `user_first_name`, `user_last_name`, `user_name`, `user_email`, `user_password`, `user_profile`, `user_gender`, `user_phone`) VALUES ('$fname','$lname','$username','$email','$encpass','$profile','$gender','$phone')";
        $result=mysqli_query($conn,$query);
        echo $result;
        
    }
    echo 1;
  
}

if(isset($_POST['Login']))
{
    $user=array();
    $email=mysqli_real_escape_string($conn, $_POST['l_email']);
    $pass=mysqli_real_escape_string($conn, $_POST['l_pass']);
    
    $queryl="SELECT * FROM `user_table` WHERE `user_email`='$email' AND `user_password`='$pass'";
    $resultl=mysqli_query($conn,$queryl);

    $check=mysqli_num_rows($resultl) > 0;
    if($check > 0)
    {
        $row = mysqli_fetch_assoc($resultl);
        $_SESSION['user_id']=$row['user_id'];
        array_push($user,["status"=>1,"message"=>$row['user_firstname']." ".$row['user_lastname']." login successfully","user_id"=>$row['user_id']]);
    }else {
        array_push($user,["status"=>0,"message"=>"user email and Password invalid"]);
    }
    header("ContentType:application/json");
    echo json_encode($user);
}
?>