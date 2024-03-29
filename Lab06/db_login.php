<?php
# parameters for connecting to the "business_service"
require('./DB.php');
$username = "mysql";
$password = "12345678";
$hostspec = "localhost";
$database = "mydb";
// $dbtype = 'pgsql';
// $dbtype = 'oci8';
$dbtype = 'mysqli';

# DSN constructed from parameters
$dsn = "$dbtype://$username:$password@$hostspec/$database";
# Establish the connection
$db = DB::connect($dsn);
if (DB::isError($db)) {
    die($db->getMessage());
}
?>