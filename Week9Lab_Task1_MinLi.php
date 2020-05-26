<!DOCTYPE HTML>
<html lang="en">
<head>
</head>
<body>
  <h2> Task 1 - isset()function,GET method, validate form</h2>
    <form method="get" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    First Name: <input type="text" name="firstName" >
    <br><br>
    Last Name: <input type="text" name="lastName" >
    <br><br>
    <input type="submit" name="submit" >
    <br><br>
  </form>

  <?php
  $firstName = isset( $_GET["firstName"]) ? $_GET["firstName"] : "";
  $lastName = isset( $_GET["lastName"]) ? $_GET["lastName"] :"" ;
  echo  "Welcome " . $firstName . " " . $lastName . "" ;
  if(isset($_GET['submit'])){
    if( empty($firstName) and empty($lastName) )  {
      echo "!";
    }
    else if ( $firstName and empty($lastName) )  {
      echo "!";
    }
    else if ( $lastName and empty($firstName) )  {
      echo "!";
    }
    else {
      return true;
    }
  }
  ?>

  <br></br>
 <h3>Thank you! Mr.Qasim </h3>
 <p>
  <a href="https://validator.w3.org/check?uri=referer"><img
          src="http://www.w3.org/Icons/valid-html401.png"
          alt="Valid XHTML 1.0!" height="31" width="88" /></a>
 <img src="task1_phpcodechecked.JPG" alt="valid icon" height="500" width="600">
 </p>

</body>
</html>
