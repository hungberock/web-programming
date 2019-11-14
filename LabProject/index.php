
<html >

<head>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    <title>Document</title>
    <link rel="stylesheet" href="main.css">
   
</head>

<body>
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
    
</body>

</html>