<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link href="navibar.css" rel="stylesheet" type="text/css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>Student CV</title>
</head>

<body>

	<script>
        function myFunction() {
            var x = document.getElementById("myTopnav");
            if (x.className === "topnav") {
                x.className += " responsive";
            } else {
                x.className = "topnav";
            }
            }
    </script>
    <div class="topnav" id="myTopnav">
        <a href="home.php">Home</a>
        <a href="cvv.php">About ME</a>
		<a href="#"class="active">Edit</a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
          <i class="fa fa-bars"></i>
        </a>
    </div>
	
	
    <?php require_once 'process2.php'; ?>
    <div class="row" style="margin-left: 10%;
    margin-top: 2%;">
        <form action="process2.php" method="POST">
            <input type="hidden" name="grno" value="<?php echo $grno; ?>">

            <div class="form-group">
                <label for="grno">GrNo: </label>
                <input type="number" name="grno" class="form-control" style="width: 40rem;" value="<?php echo $grno ?>" placeholder="Enter grno">
            </div>

            <div class="form-group">
                <label for="Name">Name : </label>
                <input type="text" name="Name" class="form-control" value="<?php echo $Name ?>" placeholder="Enter Full Name">
            </div>

            <div class="form-group">
                <label for="email">email : </label>
                <input type="text" name="email" class="form-control" value="<?php echo $email?>" placeholder="Enter email">
            </div>

            <div class="form-group">
                <label for="dob">date of birth : </label>
                <input type="text" name="dob" class="form-control" value="<?php echo $dob?>" placeholder="dd/mm/yyyy">
            </div>

            <div class="form-group">
                <label for="address">Address : </label>
                <input type="text" name="address" class="form-control" value="<?php echo $address ?>" placeholder="Enter address">
            </div>

            <div class="form-group">
                <label for="mobileNo">Mobile No : </label>
                <input type="number" name="mobileNo" class="form-control" value="<?php echo $mobileNo ?>" placeholder="Enter Mobile Number">
            </div>

            <div class="form-group">
                <label for="College">College : </label>
                <input type="text" name="College" class="form-control" value="<?php echo $College ?>" placeholder="Enter College Name">
            </div>

            <div class="form-group">
                <label for="cgpa">cgpa : </label>
                <input type="floatval" name="cgpa" class="form-control" value="<?php echo $cgpa ?>" placeholder="Enter cgpa">
            </div>

            <div class="form-group">
                <label for="achievements">Achievements : </label>
                <input type="text" name="achievements" class="form-control" value="<?php echo $achievements ?>" placeholder="Enter achievements">
            </div>

            <div class="form-group">
                <label for="language">Progrmming Language : </label>
                <input type="text" name="language" class="form-control" value="<?php echo $language ?>" placeholder="Enter Programming languages you know">
            </div>

            <div class="form-group">
                <label for="github">Github Link : </label>
                <input type="text" name="github" class="form-control" value="<?php echo $github ?>" placeholder="Github Profile Link">
            </div>

            <div class="form-group">
                <label for="linkedin">Linkedin Link : </label>
                <input type="text" name="linkedin" class="form-control" value="<?php echo $github ?>" placeholder="LinkedIn Profile Link">
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary" name="update">UPDATE</button>
            </div>
        </form>
    </div>

    

</body>

</html>