<?php
require("logC.php");
//print_r($_SESSION);
?>

<head>
<script src='/js/jquery-3.1.1.min.js' type='text/javascript'></script>
<link rel="icon" type="image/png" href="images/icons/favicon.png"/>
<meta charset="UTF-8">
<!--  <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-
  <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
  <link rel="shortcut icon" href="images/icons/favicon.ico" type="image/x-icon">
<!--===============================================================================================-
  <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-
  <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-
  <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-
  <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================
  <link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================
  <link rel="stylesheet" type="text/css" href="css/util.css">
  <link rel="stylesheet" type="text/css" href="css/main.css">
-->
<style>
/* A link that has not been visited */
a:link {
    color: white;
}

/* A link that has been visited */
a:visited {
    color: white;
}

/* A link that is hovered on */
a:hover {
    color: green;
}

/* A link that is selected */
a:active {
    color: white;
}

.notfound{
  display: none;
}

.footer {
  position: fixed;
  background-image: url("images/f6.png");
  background-size: cover;
  left: 0;
  bottom: 0;
  padding-bottom: 10px;
  padding-top: 10px;
  background-position: center;
  width: 100%;
  color: white;
  text-align: center;
}

.header {
  position: fixed;
  background-image: url("images/f6.png");
  background-size: cover;
 
  background-position: center;
  width: 100%;
  color: white;
  text-align: center;
}

}
<script src="js/jquery.min.js"></script>
/*<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
*/

body {
  background-image: url("images/bg.jpg"); /* The image used */
  background-color: #cccccc; /* Used if the image is unavailable */
  height: 500px; /* You must set a specified height */
  background-position: center; /* Center the image */
  background-repeat: no-repeat; /* Do not repeat the image */
  background-size: cover;
  background-repeat: repeat;
  background-attachment: fixed; /* Resize the background image to cover the entire container */
}

td {
  font-family: Helvetica;
  border: 0px solid #dddddd;
  text-align: left;
  padding: 8px;
  color: black;
}
/*
tr:nth-child(even) {
  background-color: #dddddd;
  
}
*/
th {
  background-color: blue;
  color: white;
  font-family: arial;
  border: 0px;

}

table#t01 {
  border: 0px;
  width: 100%;    
  background-color: white;
  opacity: 0.8;
}

#txt_searchall {
   width: 150px;
  box-sizing: border-box;
  border: 2px solid #ccc;
  border-radius: 4px;
  font-size: 16px;
  background-color: white;
  background-image: url("images/searchicon.png");
  background-position: 10px 10px; 
  background-repeat: no-repeat;
  padding: 12px 20px 12px 40px;
  -webkit-transition: width 0.4s ease-in-out;
  transition: width 0.4s ease-in-out;
}

#txt_searchall[type=text]:focus {
  width: 15%;


}

.notfound{
  display: none;
}

.button {
  display: inline-block;
  border-radius: 20px;
  background-color: orange;
  border: 100px;
  color: #FFFFFF;
  text-align: center;
  font-size: 24px;
  font-family: Cambria;
  font-weight: 800;
  padding: 10px;
  width: 220px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 20px;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}

#txt_searchall {
  width: 200px;
  box-sizing: border-box;
  border: 2px solid #ccc;
  border-radius: 4px;
  font-size: 16px;
  background-color: white;
  background-image: url("images/searchicon.png");
  background-position: 10px 10px; 
  background-repeat: no-repeat;
  padding: 12px 20px 12px 40px;
  -webkit-transition: width 0.4s ease-in-out;
  transition: width 0.4s ease-in-out;
}


#txt_searchall[type=text]:focus {
  width: 20%;

}


</style>
</head>
<body style="background-image: url(images/bg.jpg); background-attachment: fixed; background-size:cover;">
<?php require 'header.php'; ?>
<br><br><br><br>
<div class="header" style="background-color: white;" >
<span><font face="Cambria" size="6" color="white" >Search : </font> <input id="txt_searchall" type="text" placeholder="Enter NIC" maxlength="15" autocomplete="off"/></span>
</div>

  <?php
require 'db.php';
$sql = 'SELECT * FROM people';
$statement = $connection->prepare($sql);
$statement->execute();
$people = $statement->fetchAll(PDO::FETCH_OBJ);
 ?>


    
 
<!--
    <div>
      <br>
      <h3 align="center"><b><font color="black"> Search : </font>
      <input id="txt_searchall" type="text" placeholder="Ex : 123456" maxlength="6" autocomplete="off"></h3>

    </div>
-->
<br><br><br>
    <div class="card-body">
      <table border="2" bordercolor="black" align="center" id="t01"  class="blueTable" style='border-collapse:collapse; border: 5px;
  width: 90%; background-color: white; opacity: 0.8;' >
        <thead>
          <tr>
          <th><b>Action</b></th>
          <th><b>ID</b></th>
          <th><b>Name</b></th><
          <th><b>Designation</b></th>
          <th><b>NIC</b></th>
          <th><b>Permenent Address</b></th>
          <th><b>Serial No</b></th>
          <th><b>Photo</b></th>
          <th><b>Signature</b></th>
          </tr>
        <thead>
        <tbody>
        <tr>
          <?php foreach($people as $person): ?>
          <td>
            
              <a href="edit.php?id=<?= $person->id ?>" class="btn btn-info">Edit</a> &nbsp;
              <a onclick="return confirm('Are you sure you want to delete this entry?')" href="delete.php?id=<?= $person->id ?>" class='btn btn-danger'>Delete</a></td>
          <td><center><?= $person->id; ?></center></td>
          <td><?= $person->name; ?></td>
          <td><?= $person->designation; ?></td>
          <td><?= $person->nic; ?></td>
          <td><?= $person->permaddress; ?></td>
          <td><?= $person->serial; ?></td>
          <td><?= $person->photo; ?></td>
          <td><?= $person->sign; ?></td>
          </tr>
         <tr class='notfound'>
              <td colspan='15'><center>No record found</center></td>
          </tr>
        <?php endforeach; ?>
        </tbody>
      </table>
      <br><br><br>
    </div>
  <!-- Script -->
        <script type='text/javascript'>
            $(document).ready(function(){

                // Search all columns
                $('#txt_searchall').keyup(function(){
                    // Search Text
                    var search = $(this).val();

                    // Hide all table tbody rows
                    $('table tbody tr').hide();

                    // Count total search result
                    var len = $('table tbody tr:not(.notfound) td:nth-child(2):contains("'+search+'")').length;

                    if(len > 0){
                      // Searching text in columns and show match row
                      $('table tbody tr:not(.notfound) td:contains("'+search+'")').each(function(){
                          $(this).closest('tr').show();
                      });
                    }else{
                      $('.notfound').show();
                    }
                    
                });

                // Search on name column only
                $('#nic').keyup(function(){
                    // Search Text
                    var search = $(this).val();

                    // Hide all table tbody rows
                    $('table tbody tr').hide();

                    // Count total search result
                    var len = $('table tbody tr:not(.notfound) td:nth-child(2):contains("'+search+'")').length;
                    
                    if(len > 0){
                      // Searching text in columns and show match row
                      $('table tbody tr:not(.notfound) td:contains("'+search+'")').each(function(){
                          $(this).closest('tr').show();
                      });
                    }else{
                      $('.notfound').show();
                    }
                    
                });
               
            });

            // Case-insensitive searching (Note - remove the below script for Case sensitive search )
            $.expr[":"].contains = $.expr.createPseudo(function(arg) {
                return function( elem ) {
                    return $(elem).text().toUpperCase().indexOf(arg.toUpperCase()) >= 0;
                };
            });
        </script>

<!--
 <script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 1; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>
-->