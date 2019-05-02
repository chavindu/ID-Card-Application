

<!doctype html>
<html lang="en">
<head>


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




    <title>Department of Health Service</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  </head>
  <body>
    <div class="header" style="background-color: white;" >

      <a href="/"><button class="button" style="vertical-align: middle;"><span>ADD</span></button></a>
      <a href="view.php"><button class="button" style="vertical-align: middle;"><span>VIEW</span></button></a>
      <a href="logout.php"><button class="button" style="vertical-align: middle;"><span>Logout</span></button></a>
      
    </div>
  