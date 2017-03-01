<?php
/* This file is going to be used to connect our MySQL database to our files and allow the form on our index.php file to submit and store data to our database. This file holds some key pieces of information that will be referenced whenever we need to store and/or retrieve data. */

// Create variables to hold information about our database.
$servername = getenv('127.0.0.1');
$username = 'notesadmin';
$password = '123';
$database = 'notes';
$dbport = 8888;
$dbname = 'notes';

// Create an object that will hold the above variables.
$db = new mysqli($servername, $username, $password, $database, $dbport);

// Connect to the server and check our connection.
if($db -> connect_error)	{
	die('DEBUG / Connection Failed: ' . $db -> connect_error);
}

echo 'DEBUG / Connection Successful: ' . $db -> host_info; 

?>
