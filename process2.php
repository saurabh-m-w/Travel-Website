<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "student_info";

// Create connection
$connect = new mysqli($servername, $username, $password,$dbname);

$update = false;

$grno = '';
$Name = '';
$address = '';
$mobileNo = '';
$College = '';
$cgpa = '';
$achievements = '';
$language = '';
$email='';
$dob='';
$github='';
$linkedin='';

if(isset($_POST['save']))
{
    $grno = $_POST['grno'];
    $Name = $_POST['Name'];
    $address = $_POST['address'];
    $mobileNo = $_POST['mobileNo'];
    $College = $_POST['College'];
    $cgpa = $_POST['cgpa'];
    $achievements = $_POST['achievements'];
    $language = $_POST['language'];
    
    $sql2 = "INSERT INTO studentcv VALUES('$grno','$Name','$address', '$mobileNo','$College','$cgpa','$achievements','$language')";
    mysqli_query($connect,$sql2);
    mysqli_close($connect);
    header('Location:' . $_SERVER['HTTP_REFERER']);
}

if(isset($_GET['delete']))
{
    $grno = $_GET['delete'];
    $sql2 = "DELETE FROM studentcv where grno = $grno";

    $result =  mysqli_query($connect,$sql2); 
    mysqli_close($connect);
    header('Location:' . $_SERVER['HTTP_REFERER']);
}

if(isset($_GET['edit']))
{
    $grno = $_GET['edit'];
    $update = true;
    $sql2 = "SELECT * FROM studentcv where grno = '11810812'";

    $result = $connect->query($sql2);  
    
        $row = $result->fetch_array();
       
        $Name = $row['Name'];
        $address = $row['address'];
        $mobileNo = $row['mobileNo'];
        $College = $row['College'];
        $cgpa = $row['cgpa'];
        $achievements = $row['achievements'];
        $language = $row['language'];
        $email=$row['email'];
        $dob=$row['dob'];
        $github=$row['github'];
        $linkedin=$row['linkedin'];

    
}

if(isset($_POST['update']))
{
    $grno = $_POST['grno'];
    $Name = $_POST['Name'];
    $address = $_POST['address'];
    $mobileNo = $_POST['mobileNo'];
    $College = $_POST['College'];
    $cgpa = $_POST['cgpa'];
    $achievements = $_POST['achievements'];
    $language = $_POST['language'];
    $email=$_POST['email'];
    $dob=$_POST['dob'];
    $github=$_POST['github'];
    $linkedin=$_POST['linkedin'];

    $sql2 = "UPDATE studentcv SET Name='$Name',address = '$address',mobileNo = '$mobileNo',College = '$College',cgpa = '$cgpa',achievements = '$achievements',language = '$language',email='$email',dob='$dob', github='$github',linkedin='$linkedin' where grno = $grno";

    $result =  mysqli_query($connect,$sql2); 
    mysqli_close($connect);
    header('Location: cvv.php');
}
