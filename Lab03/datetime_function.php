<!DOCTYPE html>
<html>
<head>
	<title>Convert</title>
</head>
<body>
	
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
        <?php
            if (array_key_exists("name1", $_GET)) {
                $name1 = $_GET["name1"];
            } else {
                $name1 = "";
            }
            if (array_key_exists("day1", $_GET)) {
                $day1 = $_GET["day1"];
            } else {
                $day1 = 1;
            }
            if (array_key_exists("month1", $_GET)) {
                $month1 = $_GET["month1"];
            } else {
                $month1 = 1;
            }
            if (array_key_exists("year1", $_GET)) {
                $year1 = $_GET["year1"];
            } else {
                $year1 = 2019;
            }
            if (array_key_exists("name2", $_GET)) {
                $name2 = $_GET["name2"];
            } else {
                $name2 = "";
            }
            if (array_key_exists("day2", $_GET)) {
                $day2 = $_GET["day2"];
            } else {
                $day2 = 1;
            }
            if (array_key_exists("month2", $_GET)) {
                $month2 = $_GET["month2"];
            } else {
                $month2 = 1;
            }
            if (array_key_exists("year2", $_GET)) {
                $year2 = $_GET["year2"];
            } else {
                $year2 = 2019;
            }
        ?>
        <table>
            <tr>
                <td>Person 1: </td>
                <td>
                    <?php
                        print ("<input type=\"text\" name=\"name1\" value=\"$name1\">")
                    ?>
                </td>
            </tr>
            <tr>
                <td>Date of birth 1: </td>
                <td>
                    <select name="day1">
                        <?php
                            for ($i=1; $i<=31; $i++) {
                                if ($i==$day1) {
                                    print ("<option selected>$i</option>");
                                } else
                                    print ("<option>$i</option>");
                            }
                        ?>
                    </select>
                    <select name="month1">
                        <?php
                            for ($i=1; $i<=12; $i++) {
                                if ($i==$month1) {
                                    print ("<option selected>$i</option>");
                                } else
                                print ("<option>$i</option>");
                            }
                        ?>
                    </select>
                    <select name="year1">
                        <?php
                            for ($i=1977; $i<=3019; $i++) {
                                if ($i==$year1) {
                                    print ("<option selected>$i</option>");
                                } else
                                print ("<option>$i</option>");
                            }
                        ?>
                    </select>
                </td>
            </tr>
            
            <tr>
                <td>Person 2: </td>
                <td>
                    <?php
                        print ("<input type=\"text\" name=\"name2\" value=\"$name2\">")
                    ?>
                </td>
            </tr>
            <tr>
                <td>Date of birth 2: </td>
                <td>
                    <select name="day2">
                        <?php
                            for ($i=1; $i<=31; $i++) {
                                if ($i==$day2) {
                                    print ("<option selected>$i</option>");
                                } else
                                    print ("<option>$i</option>");
                            }
                        ?>
                    </select>
                    <select name="month2">
                        <?php
                            for ($i=1; $i<=12; $i++) {
                                if ($i==$month2) {
                                    print ("<option selected>$i</option>");
                                } else
                                print ("<option>$i</option>");
                            }
                        ?>
                    </select>
                    <select name="year2">
                        <?php
                            for ($i=1977; $i<=3019; $i++) {
                                if ($i==$year2) {
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
			<?php if ($_SERVER['REQUEST_METHOD'] == 'POST') {
				function convert($day, $month, $year) {
                    $month_list = ["January", "February", "March", "April", "May", "June", "July", "August", "September",
                    "October", "November", "December"];
                    return $month_list[$month-1]." ".$day.", ".$year;
                }
                
                function days_diff($ps1_day, $ps2_day) { 
                    $diff = abs($ps1_day - $ps2_day);
                    return $diff." days";
                }

                function years_diff($ps1_year, $ps2_year) { 
                    $diff = abs($ps1_year - $ps2_year);
                    return $diff." years";
                }

                function age($year) {
                    $now = 2019;
                    return ($now - $year);
                }

                echo "<p>".$_POST['name1']."'s birthday: ".convert($_POST['day1'], $_POST['month1'], $_POST['year1'])."</p>";
                echo "<p>".$_POST['name2']."'s birthday: ".convert($_POST['day2'], $_POST['month2'], $_POST['year2'])."</p>";
                echo "<p>Difference in days: ".days_diff($_POST['day1'], $_POST['day2'])."</p>";
                echo "<p>Difference in years: ".years_diff($_POST['year1'], $_POST['year2'])."</p>";
                echo "<p>".$_POST['name1']." is ".age($_POST['year1'])." years old</p>";
                echo "<p>".$_POST['name2']." is ".age($_POST['year2'])." years old</p>";
            } ?>
		
</body>
</html>