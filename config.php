<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'pdb7.awardspace.net');
define('DB_USERNAME', '1234776_sfd');
define('DB_PASSWORD', 'm%-lh.*H97hT{j?O');
define('DB_NAME', '1234776_sfd');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>