<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link href="navibar.css" rel="stylesheet" type="text/css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>Add</title>
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
        <a href="indiamore.php">Places</a>
		<a href="#"class="active">Edit</a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
          <i class="fa fa-bars"></i>
        </a>
    </div>
	
	
    <?php require_once 'addplacesProcess.php'; ?>
    <div class="row" style="margin-left: 10%;
    margin-top: 2%;">
        <form action="addplacesProcess.php" method="POST">
            <input type="hidden" name="name" value="<?php echo $name; ?>">

            <div class="form-group">
                <label for="name">Place Name: </label>
                <input type="text" name="name" class="form-control" style="width: 40rem;" value="<?php echo $name ?>" placeholder="Enter Place Name" required>
            </div>

            <div class="form-group">
                <label for="imglink">ImgLink : </label>
                <input type="text" name="imglink" class="form-control" value="<?php echo $imglink ?>" placeholder="Enter Image Link">
            </div>

            <div class="form-group">
                <label for="shortdec">Short Decription : </label>
                <!-- <input type="text" name="shortdec" class="form-control" value="<?php echo $shortdec?>" placeholder="Enter Short Decription"> -->
                <textarea name="shortdec" class="form-control" rows="2"><?php echo $shortdec?></textarea>
            </div>

            <div class="form-group">
                <label for="longdec">Long Decription : </label>
                <!-- <input type="text" name="longdec" class="form-control" value="<?php echo $longdec?>" placeholder="Long Decription"> -->
                <textarea name="longdec" rows="4" class="form-control" ><?php echo $longdec?></textarea>
            </div>


            <div class="form-group">
                <button type="submit" class="btn btn-primary" name="update">Update</button>
            </div>
        </form>
    </div>

    

</body>

</html>