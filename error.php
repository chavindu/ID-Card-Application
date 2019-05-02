<html>
<head>
<title>Employee Registration Form</title>
<style>

* {
  box-sizing: border-box;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
  opacity: 0.9;
}


/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>


</head>
<body style="background-image: url(images/bg.jpg); background-attachment: fixed; background-size:cover; ">

<?php require 'header.php'; ?>
<br><br><br>
<br><br><br>
<br><br><br>


<div class="container">
<center><h1><strong><p>Sorry!</p></strong></h1> <h3> <p>You have entered invalid data. Please check again!</p>
<!--	<strong>Go Back!</strong></h3></center>  -->

<a href="/"><button class="button" style="vertical-align: middle;"><span>ADD</span></button></a>

</div>






<br><br><br><br>
<br><br>
<br><br>
<br><br>
<?php require 'footer.php'; ?>

</body>
</html>