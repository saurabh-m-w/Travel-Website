<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>India</title>

    <!-- font awesome cdn file link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="style.css">
	<link href="navibar.css" rel="stylesheet" type="text/css" />


</head>
<body>


<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "touristplaces";

    // Create connection
    $connect = new mysqli($servername, $username, $password,$dbname);
   
    $sql2 = "SELECT * FROM places";

    $result = $connect->query($sql2);  
    

        
    
?>

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
        
        <h1 href="home.php">Travel</h1>
        <a href="home.php">Home</a>
        <a href="#" class="active">Places</a>
        <a href="addplaces.php">Add</a>
        <a href="cvv.php">About ME</a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
          <i class="fa fa-bars"></i>
        </a>
    </div>


<section class="feature" id="feature">

<h1 class="heading">Popular In India</h1>

<div class="card-container">

        <?php
            while ($row = $result->fetch_assoc()) : ?>

        <div class="card">
        
            <img src=<?php echo $row['imglink'];?> alt="">
            <div class="content">
                <h3 class="title"><?php echo $row['name']; ?></h3>
                <p><?php echo $row['shortdec']; ?></p>
                
                <a href="longdec.php?edit='<?php echo $row['name']; ?>'"><button class="btn">Show More!</button></a>
                <a href="addplacesProcess.php?delete='<?php echo $row['name']; ?>'">delete</a>
            </div>
        </div>

            <?php endwhile; ?>        

    

    

</div>

</section>









<!-- jquery cdn link  -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    
</body>
</html>