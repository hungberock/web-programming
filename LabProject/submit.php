<html>
    <head><title>Receiving Input</title><br></head>
    <body>
        <font size=5>Thank you: Got your input.</font>
        <?php
        $name = $_POST["name"];
        $sex = $_POST["sex"];
        $hobby = $_POST["hobby"];
        $email = $_POST["email"];
        $university = $_POST["university"];
        echo "Hello $name<br>";
        echo "Your sex: $sex<br>";
        echo "Study at $university<br>";
        echo "Your mail: $email<br>";
        echo "Hobies: <br>";

        for ($i=0; $i < count($hobby); $i++) { 
            echo  $i+1,", ", $hobby[$i],"<br>" ;
        }
        
        ?>
</html>