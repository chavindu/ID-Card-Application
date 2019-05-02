<?php
session_start();
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "labdb");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$PC = mysqli_real_escape_string($link, $_REQUEST['PC']);
$SerialNo = mysqli_real_escape_string($link, $_REQUEST['SerialNo']);
$Model = mysqli_real_escape_string($link, $_REQUEST['Model']);
$CPU = mysqli_real_escape_string($link, $_REQUEST['CPU']);
$Speed = mysqli_real_escape_string($link, $_REQUEST['Speed']);
$RAM = mysqli_real_escape_string($link, $_REQUEST['RAM']);
$HDD = mysqli_real_escape_string($link, $_REQUEST['HDD']);
$VGA = mysqli_real_escape_string($link, $_REQUEST['VGA']);
$NIC = mysqli_real_escape_string($link, $_REQUEST['NIC']);
$NICWORK = mysqli_real_escape_string($link, $_REQUEST['NICWORK']);
$KEYBOARD = mysqli_real_escape_string($link, $_REQUEST['KEYBOARD']);
$MOUSE = mysqli_real_escape_string($link, $_REQUEST['MOUSE']);
$HEADPHONE = mysqli_real_escape_string($link, $_REQUEST['HEADPHONE']);
$WEBCAM = mysqli_real_escape_string($link, $_REQUEST['WEBCAM']);
$MONITOR= mysqli_real_escape_string($link, $_REQUEST['MONITOR']);
$OS = mysqli_real_escape_string($link, $_REQUEST['OS']);
$NOTE = mysqli_real_escape_string($link, $_REQUEST['NOTE']);
 
// Attempt insert query execution
$sql = "INSERT INTO labdb (PC, SerialNo, Model, CPU, Speed, RAM, HDD, VGA, NIC, NICWORK, KEYBOARD, MOUSE, HEADPHONE, WEBCAM, MONITOR, OS, NOTE) VALUES ('$PC', '$SerialNo', '$Model', '$CPU', '$Speed', '$RAM', '$HDD', '$VGA', '$NIC', '$NICWORK','$KEYBOARD', '$MOUSE', '$HEADPHONE', '$WEBCAM', '$MONITOR', '$OS', '$NOTE')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully!
	Thank you!
    Go Back!";
    
    $_SESSION['msg'] = "$name added successfully.";
    header('location:index.php');

    
 
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>

