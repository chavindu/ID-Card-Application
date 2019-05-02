<?php
require("logC.php");
//print_r($_SESSION);
?>

<html>
<head>
<title>Employee Registration Form</title>
<style>

body{
	
	font-family:calibri;
}



.error-message {
	padding: 7px 10px;
	background: #fff1f2;
	border: #ffd5da 1px solid;
	color: #d6001c;
	border-radius: 4px;
}
.success-message {
	padding: 7px 10px;
	background: #cae0c4;
	border: #c3d0b5 1px solid;
	color: #027506;
	border-radius: 4px;
}
.demo-table {
	width: 100%;
	border-spacing: initial;
	margin: 2px 0px;
	word-break: break-word;
	table-layout: auto;
	line-height: 1.8em;
	color: #333;
	border-radius: 4px;
	padding: 20px 40px;
	opacity: 0.8;
}

.demo-table td {
	padding: 15px 0px;
}
.demoInputBoxl {
	padding: 10px 10px;
	border: #a9a9a9 1px solid;
	border-radius: 5px;
	width: 100%;
}


.demoInputBoxs {
  padding: 10px 10px;
  border: #a9a9a9 1px solid;
  border-radius: 5px;
}
.btnRegister {
	padding: 10px 30px;
	background-color: #3367bb;
	border: 5;
	color: #FFF;
	cursor: pointer;
	border-radius: 4px;
	margin-left: 10px;
  float: right;
  font-size: 150%;
  font-family: arial;
  line-height: 80%;
}
.content {
  max-width: 70%;
  margin-left: 15%;
  margin-right: 15%;
  opacity: 0.8;
}

</style>

<link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="css/jquery.min.js"></script>
  <script src="css/bootstrap.min.js"></script>

</head>
<body style="background-image: url(images/bg.jpg); background-attachment: fixed; background-size: contain; ">

<?php require 'header.php'; ?>
<br><br><br>
<div class="container">
  <div class="card mt-5">
    <div class="card-header">
 
    </div>



<div class="content">



<form action="add_db.php" method="post">

<table border="0" width="1000" align="center"  class="demo-table">
<col width="25%">
<col width="75%">
<br>

<tr>

		
<?php
// print_r($_SESSION);
if(isset($_SESSION['msg'])){ 


	?>
	<div class="alert alert-success">
		<?php echo($_SESSION['msg']); ?>
	</div>


<?php
}
?>

  
  



</tr>

<tr>
<td>Name</td>
<td><input autofocus="autofocus" onfocus="this.select()" type="text" autocomplete="off" class="demoInputBoxl" name="name" value="<?php if(isset($_POST['name'])) echo $_POST['name']; ?>"></td>
</tr>

<tr>
<td>Designation</td>
<td><select type="select"  autocomplete="off" class="demoInputBoxl" name="designation" value="<?php if(isset($_POST['designation'])) echo $_POST['designation']; ?>">
    <option value="Locomotive Driver">Locomotive Driver</option>
    <option value="Driver's Assistant">Driver's Assistant</option>
    <option value="Shunting Engine Driver">Shunting Engine Driver</option>
	</select>
</td>
</tr>

<tr>
<td>NIC Number</td>
<td><input type="text" autocomplete="off"  class="demoInputBoxl" name="nic" maxlength="12" value="<?php if(isset($_POST['nic'])) echo $_POST['nic']; ?>"></td>
</tr>

<tr>
<td>Permanent Address</td>
<td><input type="text"  autocomplete="off" class="demoInputBoxl" name="permaddress" value="<?php if(isset($_POST['permaddress'])) echo $_POST['permaddress']; ?>"></td>
</tr>

<tr>
<td>Serial Number</td>
<td><input type="text" autocomplete="off" class="demoInputBoxs" name="serial" maxlength="6" value="<?php if(isset($_POST['serial'])) echo $_POST['serial']; ?>"></td>
</tr>

<tr>
<td>Photo</td>
<td><input type="text"  autocomplete="off" class="demoInputBoxs" name="photo" value="<?php if(isset($_POST['photo'])) echo $_POST['photo']; ?>"></td>
</tr>

<tr>
<td>Signature</td>
<td><input type="text"  autocomplete="off" class="demoInputBoxs" name="sign" value="<?php if(isset($_POST['sign'])) echo $_POST['sign']; ?>"></td>
</tr>



<tr>
<td colspan="2">

	<center>
<input type="submit" value="SUBMIT" class="btn btn-info"></center></td>
</tr>
</table>
</form>

<?php
if (isset($_GET['success']) && $_GET['success']) {
    echo "New record created successfully";
} else if (isset($_GET['success']) && !$_GET['success']) {
    echo "Failed to insert new record";
}
?>
</div>
<br><br>
<br><br><br><br>
<br><br><br><br>
<br><br><br><br>
<br><br><hr>
<br><br>
<br><br><hr>
<!-- <?php require 'footer.php'; ?>
-->
</body>
</html>