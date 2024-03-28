<?php
    $_SERVER = "localhost";
    $username = "root";
    $password = "";

    $con = mysqli_connect($_SERVER,$username,$password);

    if($con){
        echo "connection sucessfull";

    }
    else{
        echo "no connection";
    }
    mysqli_select_db($con,'studentdata');
    $user = $_POST['user'];
    // $dob = $_POST['dob'];
    $roll = $_POST['roll'];
    $sem = $_POST['sem'];
    $branch = $_POST['branch'];
    $email = $_POST['email'];
    $fee = $_POST['fee'];
    // $qualification =$_POST['qualification'];
   

    $query = " insert into examinfodata (user, roll, sem, branch, email, fee)
    values ('$user','$roll','$sem','$branch','$email','$fee')";

    mysqli_query($con,$query);
?>
