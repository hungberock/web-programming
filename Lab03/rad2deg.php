<html> 
    <head><title>Convert radians to dgrees and vice versa</title></head>
    <body>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
        <table>
            <tr>
                <td>Covert</td>
                <td><input type="radio" name="convert" value="1">From radians to degrees</td>
                <td><input type="radio" name="convert" value="2">From degrees to radians</td>

            </tr>
            <tr>
                <td>Input:</td>
                <td colspan="2"><input type="number" name="number" ></td>
            </tr>
            <tr>
                <td align="right"><input type="submit" value="Submit"></td>
                <td align="left"><input type="reset" value="Reset"></td>
            </tr>
        </table>
    </form>
    
    <?php if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        
        function converter ( $convert1, $number1, $result1 ) {
            if ($convert1 == 1) {
                $result1 = rad2deg($number1);
                print "Result";
                print "<br>Radians to degrees: $result1";
                return 1;
            } else {
                $result1 = deg2rad($number1);
                print "Result";
                print "<br>Degrees to radians: $result1";
                return 0;
            }
        }
        $convert = $_POST["convert"];
        $number = $_POST["number"];
        $result = 0;
        converter($convert, $number, $result);

    }
    ?>
</html>