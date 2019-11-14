<?php
	function user_sort($a, $b) {
		if($b == 'smarts') {
			return 1;
		} else if($a == 'smarts') {
			return -1;
		}
		return ($a == $b) ? 0 : (($a < $b) ? -1 : 1);
    }
    
    $submitted = !empty($_POST);
    if ($submitted) {
        $sort_type = $_POST['sort_type'];
    }

    $values = array('name' => 'Buzz Lightyear', 'email_address' => 'buzz@starcommand.gal', 'age' => 32, 'smarts' => 'some');
    $clone_values = $values;
    if($submitted) {
        if($sort_type == 'usort' || $sort_type == 'uksort' || $sort_type == 'uasort') { $sort_type($values, 'user_sort');
        } else {
            $sort_type($values);
        }
	}
?>
<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
    <!-- table this stuff -->
    <p align="center">
    <table>
        <tr>
            <td>
                <input type="radio" name="sort_type" value="sort" checked="checked" />Standard sort<br />
                <input type="radio" name="sort_type" value="rsort" />Reverse sort<br />
            </td>
            <td>
                <input type="radio" name="sort_type" value="usort" /> User - defined sort<br />
                <input type="radio" name="sort_type" value="ksort" /> Key sort<br />
            </td>
            <td>
                <input type="radio" name="sort_type" value="krsort" /> Reverse key sort<br/>
                <input type="radio" name="sort_type" value="uksort" /> User - defined key sort<br/>
            </td>
            <td>
                <input type="radio" name="sort_type" value="asort" /> Value sort<br />
                <input type="radio" name="sort_type" value="arsort" /> Reverse value sort<br />
                <input type="radio" name="sort_type" value="uasort" /> User - defined value sort<br />
            </td>
        </tr>
    </table>
    <!-- end of table -->
    <br/>
    <input type="submit" value="Sort" name="submitted" />
    
    </p>
    
    <!-- before sorted table -->
    <table>
    <tr>
        <td>
        Values unsorted (before sort)
        </td>
        <td>
            <ul>
            <?php
                foreach($clone_values as $key=>$value) {
                echo "<li><b>$key</b>: $value</li>";
                }
            ?>
            </ul>
        </td>
        <td><div style="width: 40px"></div></td>
    <!-- result table -->
        <td>
        Values <?= $submitted ? "sorted by $sort_type" : "unsorted"; ?>:
        </td>
        <td>
            <ul>
            <?php
                foreach($values as $key=>$value) {
                echo "<li><b>$key</b>: $value</li>";
                }
            ?>
            </ul>
        </td>
    </tr>
    </table>
    
</form>
