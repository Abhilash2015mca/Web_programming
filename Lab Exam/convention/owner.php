<?php

require 'dbConnect.php';

$name = $_POST['name'];
$location = $_POST['location'];
$capacity = $_POST['capacity'];
$date = strval($_POST['date']);
$contact = $_POST['contact'];
$query = "INSERT INTO centers(name,location,capacity,date,contact) VALUES ('".$name."','".$location."',".$capacity.",NULL,".$contact.")";
$result = mysqli_query($con,$query);

    if($result)
    {
        echo "<script>alert('Convention Center registered successfully !')</script>";
    }
    else
    {
        echo "<script>alert('Convention Center registered successfully !')</script>";
    }
echo "<a href='owner.html'>Go Back to Lising Page</a>";

?>