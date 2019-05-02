<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>

<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "hospitaldb");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
	$id = mysqli_real_escape_string($link, $_REQUEST['id']);
	$name = mysqli_real_escape_string($link, $_REQUEST['name']);
    $designation = mysqli_real_escape_string($link, $_REQUEST['designation']);
    $nic = mysqli_real_escape_string($link, $_REQUEST['nic']);
   	$permaddress = mysqli_real_escape_string($link, $_REQUEST['permaddress']);
    $serial = mysqli_real_escape_string($link, $_REQUEST['serial']);
    $photo = mysqli_real_escape_string($link, $_REQUEST['photo']);
    $sign = mysqli_real_escape_string($link, $_REQUEST['sign']);
    
?>

</head>

<body>

<?php
 
// Attempt insert query execution
$sql = "INSERT INTO people (id,  name,  designation,  nic,  permaddress, serial,  photo,  sign) VALUES ('$id', '$name', '$designation', '$nic', '$permaddress', '$serial', '$photo', '$sign')";

if(mysqli_query($link, $sql)){
    header("Location: /");

  $_SESSION['msg'] = "$name added successfully!";
header('location:index.php');
    
}
else{
    header("Location: /error.php");
}


/*
{
    echo "<style> body, html {color: #A09E8B} </style>";
    echo "<p style='color:red; font-size:24px'>".ERROR: Could not able to execute $sql." . mysqli_error($link)</p>";
}
 */
 
// Close connection
mysqli_close($link);
?>

</body>
</html>

