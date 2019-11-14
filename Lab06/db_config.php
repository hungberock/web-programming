<html>

<head>
    <title>Create Table</title>
</head>

<body>
    <?php
    $server = 'localhost';
    $user = 'mysql';
    $pass = '12345678';
    $mydb = 'mydb';
    $table_name = array('Businesses', 'Categories','Biz_Categories');
    $connect = mysqli_connect($server, $user, $pass);
    if (!$connect) {
        die("Cannot connect to $server using $user");
    } else {
        $CreateBusinessTable = "CREATE TABLE $table_name[0](
                                BusinessID INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
                                Name VARCHAR(50),
                                Address VARCHAR(50),
                                City VARCHAR(50),
                                Telephone VARCHAR(50),
                                URL VARCHAR(256))";
        
        $CreateCategories =     "CREATE TABLE $table_name[1](
                                CategoryID INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
                                Title VARCHAR(50),
                                Description VARCHAR(50))";

        $CreateBiz_Categories = "CREATE TABLE $table_name[2](
                                BusinessID INT UNSIGNED NOT NULL,
                                CategoryID INT UNSIGNED NOT NULL,
                                FOREIGN KEY (BusinessID) REFERENCES Businesses(BusinessID),
                                FOREIGN KEY (CategoryID) REFERENCES Categories(CategoryID))";

        $SQLcmd = array($CreateBusinessTable, $CreateCategories, $CreateBiz_Categories);
        

        // Connect and query
        mysqli_select_db($connect, $mydb);

        for ($i=0; $i < 3; $i++) { 
            if (mysqli_query($connect, $SQLcmd[$i])) {
                print '<font size="4" color="blue" >Created Table';
                print "<i>$table_name[$i]</i> in database<i>$mydb</i><br></font>";
                print "<br>SQLcmd=$SQLcmd[$i]";
            } else {
                die("Table Create Creation Failed SQLcmd=$SQLcmd[$i]");
            }
        }

        // Close connection
        mysqli_close($connect);
        }
    ?>
</body>

</html>