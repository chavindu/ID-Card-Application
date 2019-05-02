<?php
require("logC.php");
//print_r($_SESSION);
?>

<html>
<head>
<title>Department of Health Service</title>
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
  background: white;
  width: 100%;
  border-spacing: initial;
  margin: 2px 0px;
  word-break: break-word;
  table-layout: auto;
  line-height: 1.8em;
  color: #333;
  border-radius: 4px;
  padding: 20px 40px;
}

.demo-table td {
  padding: 15px 0px;
}
.demoInputBoxl {
  padding: 10px 100px;
  border: #a9a9a9 1px solid;
  border-radius: 5px;
}


.demoInputBoxs {
  padding: 10px 30px;
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
  max-width: 600px;
  margin: auto;
  opacity: 0.8;
}

</style>
</head>
<body style="background-image: url(images/bg.jpg); background-attachment: fixed; background-size:cover; ">
<?php
require 'db.php';
$id = $_GET['id'];
$sql = 'SELECT * FROM people WHERE id=:id';
$statement = $connection->prepare($sql);
$statement->execute([':id' => $id ]);
$person = $statement->fetch(PDO::FETCH_OBJ);
if (isset ($_POST['name'])  && isset($_POST['designation'])  && isset($_POST['nic'])  && isset($_POST['permaddress'])  && isset($_POST['serial'])  && isset($_POST['photo'])  && isset($_POST['sign']) ) {
  $name = $_POST['name'];
  $designation = $_POST['designation'];
  $nic = $_POST['nic'];
  $permaddress = $_POST['permaddress'];
  $serial = $_POST['serial'];
  $photo = $_POST['photo'];
  $sign = $_POST['sign'];
  $sql = 'UPDATE people SET name=:name, designation=:designation, nic=:nic, permaddress=:permaddress, serial=:serial, photo=:photo, sign=:sign WHERE id=:id';
  $statement = $connection->prepare($sql);
  if ($statement->execute([':name' => $name, ':designation' => $designation, ':nic' => $nic, ':permaddress' => $permaddress, ':serial' => $serial, ':photo' => $photo, ':sign' => $sign, ':id' => $id])) {
    header("Location: /");
  }



}


 ?>
<?php require 'header.php'; ?>
<br><br><br>
<div class="container">
  <div class="card mt-5">
    <div class="card-header">
      <h2>Update Details</h2>
    </div>
    <div class="card-body">
      <?php if(!empty($message)): ?>
        <div class="alert alert-success">
          <?= $message; ?>
        </div>
      <?php endif; ?>
      <form method="post">
        <br>
        <div class="form-group">
          <label for="id">ID</label>
          <input value="<?= $person->id; ?>" type="text" name="id" id="id" class="form-control" autocomplete="off">
        </div>
        <div class="form-group">
          <label for="name">Name</label>
          <input type="text" value="<?= $person->name; ?>" name="name" id="name" class="form-control" autocomplete="off">
        </div>
        <div class="form-group">
          <label for="designation">Designation</label><br>
          <input type="text" value="<?= $person->designation; ?>" name="designation" id="designation" class="form-control" autocomplete="off">
        </div>
        <div class="form-group">
          <label for="nic">NIC</label>
          <input type="text" value="<?= $person->nic; ?>" name="nic" id="nic" class="form-control" autocomplete="off" maxlength="12">
        </div>
        <div class="form-group">
          <label for="permaddress">Permenent Address</label>
          <input type="text" value="<?= $person->permaddress; ?>" name="permaddress" id="permaddress" class="form-control" autocomplete="off">
        </div>
        <div class="form-group">
          <label for="serial">Serial No</label>
          <input type="text" value="<?= $person->serial; ?>" name="serial" id="serial" class="form-control" autocomplete="off">
        </div>
        <div class="form-group">
          <label for="photo">Photo</label>
          <input type="text" value="<?= $person->photo; ?>" name="photo" id="photo" class="form-control" autocomplete="off" maxlength="10">
        </div>
        <div class="form-group">
          <label for="sign">Signature</label>
          <input type="text" value="<?= $person->sign; ?>" name="sign" id="sign" class="form-control" autocomplete="off">
        </div>
        

        <div class="form-group" align="center">
          <button type="submit" class="btn btn-info">Update Details</button>
        </div>
      </form>
    </div>
  </div>
</div>

<br><br>
<br><br>
</body>
</html>
