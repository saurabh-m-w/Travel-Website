<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel</title>

    <!-- font awesome cdn file link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="style.css">
	<link href="navibar.css" rel="stylesheet" type="text/css" />


</head>
<body>

<!-- header section starts  -->

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
        <a href="home.php" class="active">Home</a>
        <a href="#feature">Places</a>
        <a href="#gallery">Photos</a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
          <i class="fa fa-bars"></i>
        </a>
    </div>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

<div class="video">
    <video src="video.mp4" loop muted autoplay></video>
</div>

<div class="content">
    <h1>explore new places.</h1>
   
</div>



</section>

<!-- home section ends -->

<!-- feature section starts  -->

<section class="feature" id="feature">

<h1 class="heading"><span>f</span>eatured <span>l</span>ocations</h1>

<div class="card-container">

    <div class="card">
        
        <img src="img/india.jpg" alt="">
        <div class="content">
            <h3 class="title">India</h3>
            <p>India is a home to the finest architectural heritage, serene ghats, spectacular landscapes and largest tiger reserve</p>
            
            <a href="indiamore.php"><button class="btn">Show More!</button></a>
        </div>
    </div>

    <div class="card">
        <img src="img/dubai.jpg" alt="">
        <div class="content">
            <h3 class="title">Dubai</h3>
            <p>Dubai tourism is all about the futuristic charm of modern skyscrapers, legendary nightlife, exotic landscapes, and desert safaris.</p>
            
            <a href="#"><button class="btn">Show More!</button></a>
        </div>
    </div>

    <div class="card">
        
        <img src="img/unitedstate.jpg" alt="">
        <div class="content">
            <h3 class="title">United States</h3>
            <p>Tourism in the United States is a large industry that serves millions of international and domestic tourists yearly. </p>
            
            <a href="#"><button class="btn">Show More!</button></a>
        </div>
    </div>

</div>

</section>


<!-- feature section ends -->



<!-- gallery section starts  -->

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

<section id="gallery" class="gallery">

<h1 class="heading">photos</h1>

<div class="box-container">


    <?php
            while ($row = $result->fetch_assoc()) : ?>

            <div class="box">
                <img src=<?php echo $row['imglink'];?> alt="">
            </div>
            <?php endwhile; ?>  

    

</div>

</section>

















<!-- jquery cdn link  -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    
</body>
</html>