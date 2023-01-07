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

    $emcheckquery = "select * from `user` where `user_email` = '$email'";

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
    
    $email=mysqli_real_escape_string($conn, $_POST['l_email']);
    $pass=mysqli_real_escape_string($conn, $_POST['l_pass']);
    
    $queryl="select * from `user` where `user_email`='$email'";
    $resultl=mysqli_query($conn,$queryl);

    $checkl=mysqli_num_rows($resultl) > 0;
    if($checkl > 0)
    {
        $rowl = mysqli_fetch_assoc($resultl);
        if (password_verify($pass, $rowl['user_password'])) {
            $_SESSION['user_first_name'] = $rowl['user_first_name'];
            $_SESSION['user_name'] = $rowl['user_name'];
            $_SESSION['user_id'] = $rowl['user_id'];
            echo 1;
        } else {
            echo 0;
        }
    }else {
        echo 0;
    }
}
?>