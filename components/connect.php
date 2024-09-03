<?php

// Local 
$db_name = 'mysql:host=localhost;dbname=shop_db';
$user_name = 'root';
$user_password = '';

// Live 
// $db_name = 'mysql:host=localhost;dbname=asmitixc_shop_db';
// $user_name = 'asmitixc_digitrade';
// $user_password = 'digitradehub123';

$conn = new PDO($db_name, $user_name, $user_password);

?>