<?php
ob_start();
session_start();

//set timezone
date_default_timezone_set('Europe/Zagreb');

//database credentials
define('DBHOST','localhost');
define('DBUSER','root');
define('DBPASS','');
define('DBNAME','vietcong2');

//application address
define('DIR','http://localhost/');
define('SITEEMAIL','noreply@vietcong2.cf');

//print to error.log
//file_put_contents('php://stderr', print_r($foo, TRUE));

try {

	//create PDO connection
	$db = new PDO("mysql:host=".DBHOST.";dbname=".DBNAME, DBUSER, DBPASS);
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch(PDOException $e) {
	//show error
    echo '<p class="bg-danger">'.$e->getMessage().'</p>';
    exit;
}

//include the user class, pass in the database connection
include('classes/user.php');
include('classes/phpmailer/mail.php');
$user = new User($db);
?>
