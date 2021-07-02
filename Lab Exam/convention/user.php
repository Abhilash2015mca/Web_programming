<?php 

require 'dbConnect.php';
// echo "<h2 align='center' style='color:#008888;'> Book Convention Centers</h2>";
// echo '<form action="#">';
// echo 'Enter the date<input type="text" name="date">';
// echo '<td> <input type="submit" value="Submit"> </td>';
// echo "</form>";
// $date = $_POST['date'];
// $query = "SELECT * FROM centers where date='".$date."'";
$query = "SELECT * FROM centers";
$result = mysqli_query($con,$query);


if(mysqli_num_rows($result)>0)
{
    echo "<h2 align='center' style='color:#008888;'> Available Convention Centers</h2>";
    echo "<table border='1' align='center' style='background:#ACF9B8;color:#008888;'>";
    echo "<tr><th>Name</th><th>Location</th><th>Capacity</th><th>Available Date</th><th>Contact Details</th></tr> ";
    while($row=mysqli_fetch_assoc($result)){
       
        echo "<tr>";
        echo "<td>".$row["name"]."</td>";
        echo "<td>".$row["location"]."</td>";
        echo "<td>".$row["capacity"]."</td>";
        echo "<td>".$row["date"]."</td>";
        echo "<td>".$row["contact"]."</td>";
        echo '<td><form action="#"><input type="submit" value="Book"></td>';
        echo "</tr>";
    }

    echo "</table>";


}
?>