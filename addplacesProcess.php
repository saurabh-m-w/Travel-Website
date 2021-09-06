<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "touristplaces";

// Create connection
$connect = new mysqli($servername, $username, $password,$dbname);

$update = false;

$name = '';
$imglink = '';
$shortdec = '';
$longdec = '';


if(isset($_POST['save']))
{
    $name = $_POST['name'];
    $imglink = $_POST['imglink'];
    $shortdec =  mysqli_real_escape_string($connect,$_POST['shortdec']);
    $longdec =  mysqli_real_escape_string($connect,$_POST['longdec']);
    
    
    $sql2 = "INSERT INTO places VALUES('$name','$imglink','$shortdec', '$longdec')";
    mysqli_query($connect,$sql2);
    mysqli_close($connect);
    header('Location:' . $_SERVER['HTTP_REFERER']);
    header('Location: indiamore.php');
}

if(isset($_GET['delete']))
{
    $name = $_GET['delete'];
    print($name);
    $sql2 = "DELETE FROM places where name = $name";

    $result =  mysqli_query($connect,$sql2); 
    mysqli_close($connect);
    header('Location:' . $_SERVER['HTTP_REFERER']);
}

if(isset($_GET['edit']))
{
    $name = $_GET['edit'];
    $update = true;
    $sql2 = "SELECT * FROM places where name = $name";

    $result = $connect->query($sql2);  
    
    $row = $result->fetch_array();
    
    $name = $row['name'];
    $imglink = $row['imglink'];
    $shortdec = $row['shortdec'];
    $longdec = $row['longdec'];
}

if(isset($_POST['update']))
{
    $name = $_POST['name'];
    $imglink = $_POST['imglink'];
    $shortdec = $_POST['shortdec'];
    $longdec = $_POST['longdec'];
    

    $sql2 = "UPDATE places SET name='$name',imglink = '$imglink',shortdec = '$shortdec',longdec = '$longdec' where name = '$name'";

    $result =  mysqli_query($connect,$sql2); 
    mysqli_close($connect);
    header('Location: indiamore.php');
}
