<!--Build a PHP code to store name of students in an array and display it using print_r
function. Sort and Display the same using asort & arsort functions-->
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
        <?php
        $students = array("Abey", "Abhilash", "Abhijith", "Akhil", "Alen", "Arjun", "Anulaskhmi", "Aiswaraya");
        echo "Normal Array : <br>";
        print_r($students);
        echo "<br> Ascending Sort : <br>";
        asort($students);
        print_r($students);
        echo "<br> Descending Sort : <br>";
        arsort($students);
        print_r($students);
        
        ?>
        
        <script src="" async defer></script>
    </body>
</html>