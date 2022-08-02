
<?php
// variables used in script
$Number = $_GET[ "Number" ] ;

// build INSERT query
$query = "INSERT INTO sensorData (Number) VALUES ( '$Number')";

// Connect to MySQL
$servername = "localhost";
$username = "root";
$password = "";
$my_db="my_db";

if ( !( $con = mysqli_connect( $servername, $username, $password,$my_db) ) )
die( "<p> Could not connect to database <p> " );

// open database
if ( !mysqli_select_db( $con , 'my_db') )
die( "<p>Could not open my_db database</p>" );

// execute query in my_db database
if ( !( $result = mysqli_query( $con, $query) ) ){
print( "<p>Could not execute query!</p>" );
die( );
} // end if

print ( "<p> Your information are saved in the database $my_db </p>\n");
mysqli_close( $con );

?> <!-- end PHP script -->

