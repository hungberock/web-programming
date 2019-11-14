<?php
$name = $_POST['name'];
$email = $_POST['email'];
$uni = $_POST['uni'];
echo "Hello $name<br>";
echo "Your mail: $email<br>";
echo "Your university: $uni<br>";
echo "Hobies<br>";
$name = $_POST['favorite'];

// optional
// echo "You chose the following color(s): <br>";

foreach ($name as $color){
    echo $color."<br />";
}


?>
