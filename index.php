<?php
//Get Heroku ClearDB connection information
$cleardb_url = parse_url(getenv("mysql://ba1adc8e7c2f95:8682bf27@us-cdbr-east-05.cleardb.net/heroku_d84854cac58421d?reconnect=true"));
$cleardb_server = $cleardb_url["us-cdbr-east-05.cleardb.net"];
$cleardb_username = $cleardb_url["ba1adc8e7c2f95"];
$cleardb_password = $cleardb_url["8682bf27"];
$cleardb_db = substr($cleardb_url["path"],1);
$active_group = 'default';
$query_builder = TRUE;
// Connect to DB
$conn = mysqli_connect($cleardb_server, $cleardb_username, $cleardb_password, $cleardb_db);
?>

<?php 
echo "hello";
echo "hello";
?>
