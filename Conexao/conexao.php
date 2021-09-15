  
<?php
$host = 'localhost';
$dbname = 'Bookstrap';
$user = 'root';
$password = 'root';
$con = new PDO('mysql:host='.$host.';dbname='.$dbname.'', ''.$user.'', ''.$password.'') or print(mysqli_error());
?>