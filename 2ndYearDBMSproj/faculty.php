<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="faculty.css">
    <title>Document</title>
</head>
<body>

    <div class="studentform">
        <form action="facinfo.php" class="stdform" method="post">
            <img src="https://tse3.mm.bing.net/th?id=OIP.PzKzAVBPqv25DAn-j_OdKQAAAA&pid=Api&P=0&h=180" alt="">
            <h3>faculty ADMISSION FORM</h3>
            <div class="form">
                <label for=""> name</label>
                <input type="text"  class="sname" name="user">
            </div>
            <div class="form">
                <label for="">Date of birth</label>
                <input type="date" class="dob" name="dob">
            </div>
            <div class="form">
                <label for="">Father's name</label>
                <input type="text" class="fname" name="fname">
            </div>
            <div class="form">
                <label for="">Mother's name</label>
                <input type="text" class="mname" name="mname">
            </div>
            <div class="form">
                <label for="">Phone no</label>
                <input type="text" class="phno" name="phno">
            </div>
            <div class="form">
                <label for="">Email</label>
                <input type="text" class="email" name="email">
            </div>
            <div class="form">
                <label for="">Address</label>
                <input type="text" class="add" name="address">
            </div>
            <div class="form">
                <label for="">Qualifications</label>
                <input type="text" class="quali" name="qualification">
            </div>
            <div class="form">
                <label for="">TeachingExperience</label>
                <input type="text" class="teach" name="experience">
            </div>
            <div class="form">
                <label for="">UploadResume</label>
                <input type="file" class="myFile" name="filename">
            </div>
            <button class="btn" type="submit" >SUBMIT</button>
        </form>
    </div>
</body>
</html>