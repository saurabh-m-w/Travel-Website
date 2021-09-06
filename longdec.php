<!DOCTYPE html>
<html lang="en">

<head>
    <link href="navibar.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="style.css">
    <title>Places</title>
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
    <?php require_once 'addplacesProcess.php'; ?>
    <div class="topnav" id="myTopnav">
        <a href="home.php">Home</a>
        <a href="cvv.php">About ME</a>
		<a href="updatelongdec.php?edit='<?php echo $name ?>'">Edit</a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
          <i class="fa fa-bars"></i>
        </a>
    </div>
	
    
    <center>
        <div class="content">
            <h1 style="font-size:30px"><?php echo $name ?></h1>
        </div>
        <img src=<?php echo $imglink ?> alt=""  width="400" height="400">
        <br<br>>
        <h1 style="font-size:25px">Decription</h1>
        <p style="font-size:20px">
        <?php echo $shortdec ?>
        </p>
        <br><br>
        <p style="font-size:20px">
        <?php echo $longdec ?>
        </p>
    </center>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
    
</body>