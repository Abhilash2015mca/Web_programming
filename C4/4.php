<!--Build a PHP code to store name of Indian Cricket players in an array and display 
the same in HTML table.-->
<html>
<body>
<form action="#" method="post">
<textarea name="players" rows="10" cols="50">Raina,Rohit,MS Dhoni,Yuvaraj,Aswin</textarea><br>
<input type="submit">
</form>
<?php
$names = $_POST['players'];
$players = explode(",",$names);
echo "<table border='1'>";
echo "<tr><th>Players</th></tr>";
for($i=0;$i<count($players);$i++)
{
    echo "<tr><td>".$players[$i]."</td></tr>";
}
echo "</table>";
?>
</body>
</html>