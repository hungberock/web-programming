<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="GET">
        <?php
            if (array_key_exists("name", $_GET)) {
                $name = $_GET["name"];
            } else {
                $name = "";
            }
            if (array_key_exists("day", $_GET)) {
                $day = $_GET["day"];
            } else {
                $day = 1;
            }
            if (array_key_exists("month", $_GET)) {
                $month = $_GET["month"];
            } else {
                $month = 1;
            }
            if (array_key_exists("year", $_GET)) {
                $year = $_GET["year"];
            } else {
                $year = 2000;
            }
            if (array_key_exists("hour", $_GET)) {
                $hour = $_GET["hour"];
            } else {
                $hour = 0;
            }
            if (array_key_exists("minute", $_GET)) {
                $minute = $_GET["minute"];
            } else {
                $minute = 0;
            }
            if (array_key_exists("second", $_GET)) {
                $second = $_GET["second"];
            } else {
                $second = 0;
            }
        ?>
        <p>Enter your name and select date and time for the appointment</p>
        <table>
            <tr>
                <td>Your name: </td>
                <td>
                    <?php
                        print ("<input type=\"text\" name=\"name\" value=\"$name\">")
                    ?>
                </td>
            </tr>
            <tr>
                <td>Date: </td>
                <td>
                    <select name="day">
                        <?php
                            for ($i=1; $i<=31; $i++) {
                                if ($i==$day) {
                                    print ("<option selected>$i</option>");
                                } else
                                    print ("<option>$i</option>");
                            }
                        ?>
                    </select>
                    <select name="month">
                        <?php
                            for ($i=1; $i<=12; $i++) {
                                if ($i==$month) {
                                    print ("<option selected>$i</option>");
                                } else
                                print ("<option>$i</option>");
                            }
                        ?>
                    </select>
                    <select name="year">
                        <?php
                            for ($i=1977; $i<=3019; $i++) {
                                if ($i==$year) {
                                    print ("<option selected>$i</option>");
                                } else
                                print ("<option>$i</option>");
                            }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Time: </td>
                <td>
                    <select name="hour">
                        <?php
                            for ($i=0; $i<=24; $i++) {
                                if ($i==$hour) {
                                    print ("<option selected>$i</option>");
                                } else
                                print ("<option>$i</option>");
                            }
                        ?>
                    </select>
                    <select name="minute">
                        <?php
                            for ($i=0; $i<=59; $i++) {
                                if ($i==$minute) {
                                    print ("<option selected>$i</option>");
                                } else
                                print ("<option>$i</option>");
                            }
                        ?>
                    </select>
                    <select name="second">
                        <?php
                            for ($i=0; $i<=59; $i++) {
                                if ($i==$second) {
                                    print ("<option selected>$i</option>");
                                } else
                                print ("<option>$i</option>");
                            }
                        ?>
                    </select>
                </td>
            </tr>
            
            <tr>
                <td align="right"><input type="submit" value="Submit"></td>
                <td align="left"><input type="reset" value="Reset"></td>
            </tr>
        </table>
    </form>
    <?php 
        if (array_key_exists("name", $_GET)     && 
            array_key_exists("day", $_GET)      && 
            array_key_exists("month", $_GET)    && 
            array_key_exists("year", $_GET)     && 
            array_key_exists("hour", $_GET)     && 
            array_key_exists("minute", $_GET)    &&
            array_key_exists("second", $_GET)) 
        {
            print("<p>Hi $name</p>");
            print("You have choose to have an appointment on $hour:$minute:$second, $day/$month/$year");
            print("<p>More Information</p>");
            print("In 12 hours, the time and date is ");
            if ($hour>12) {
                $hour = $hour - 12;
                $noon = "PM";
            } else {
                $noon = "AM";
            }
            print("$hour:$minute:$second $noon, $day/$month/$year </br>");
            print("This month has ");
            if (($month == 1) || ($month == 3) || ($month == 5)  || ($month == 7) || ($month == 8) || ($month == 10) || ($month == 12)) {
                $maxdays = 31;
            } elseif ($month != 2) {
                $maxdays = 30;  
            } else {
                if (($year%4 == 0) && ($year%100 != 0)) {
                    $maxdays = 28;
                } elseif ($year%400 == 0) {
                    $maxdays = 28;
                } else {
                    $maxdays = 29;
                }
            }

            print("$maxdays days!");
        }
    ?>
</body>
</html>