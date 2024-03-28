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
    $phno = $_POST['phno'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $qualification =$_POST['qualification'];
    $experience =$_POST['experience'];

    $query = " insert into facultydata (user, dob, fname, mname, phno, email, address, qualification, experience)
    values ('$user','$dob','$fname','$mname','$phno','$email','$address','$qualification', '$experience')";

    mysqli_query($con,$query);
?>
