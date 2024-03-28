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
    mysqli_select_db($con,'userdatabase');
    $user = $_POST['user'];
    $password = $_POST['password'];

    $query = " insert into logindata (user, password)
    values ('$user', '$password')";

    mysqli_query($con,$query);
?>