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
    $dob = $_POST['dob'];
    $fname = $_POST['fname'];
    $mname = $_POST['mname'];
    $occf = $_POST['occf'];
    $occm = $_POST['occm'];
    $phno = $_POST['phno'];
    $email = $_POST['email'];
    $address = $_POST['address'];

    $query = " insert into studentinfodata (user, dob, fname, mname, occf, occm, phno, email, address)
    values ('$user','$dob','$fname','$mname','$occf','$occm','$phno','$email','$address')";

    mysqli_query($con,$query);
?>
