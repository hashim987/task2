<?php
$dbServerName = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "task";
$conn = mysqli_connect( $dbServerName, $dbUsername, $dbPassword, $dbName );
?>

<!DOCTYPE html>
<html lang = "en">
<head>
    <meta charset = "UTF-8">
    <link rel="stylesheet" href="css/style.css">
<title>PLATFORM ADDING</title>
</head>
<body>
   
    <div>
    <h3 >the engine will move to :</h3>
    <?php
    if (in_array("Stop",$_POST)) {
        $dir = '0';
    } else if(in_array( "Forward", $_POST)) {
        $dir = '1';
    } else if (in_array("Right",$_POST)) {
        $dir = '2';
    } else if (in_array("Back",$_POST)) {
        $dir = '3';
    } else if (in_array("Left",$_POST)) {
        $dir = '4';
    }
    $query = "insert into direction(direction)values({$dir})";
    $result = mysqli_query( $conn, $query );
    if ( $result ) {
        echo "Data added sucessfully";
    } else {
        die( "Data could not added to the database".mysqli_connect_error() );
    }
    ?>
    </div>
</body>
</html>

<?php
mysqli_close( $conn );
?>