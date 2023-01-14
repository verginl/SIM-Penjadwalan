<?Php
/////// Update your database login details here /////
$dbhost_name = "202.169.44.142"; // Your host name 
$database = "techadm_dpc";       // Your database name
$username = "techadm_dpc";            // Your login userid 
$password = "87654321";            // Your password 
//////// End of database details of your server //////

//////// Do not Edit below /////////
try {
$dbo = new PDO('mysql:host='.$dbhost_name.';dbname='.$database, $username, $password);
} catch (PDOException $em ) {
print "Error!: " . $e->getMessage() . "<br/>";
die();
}
?> 