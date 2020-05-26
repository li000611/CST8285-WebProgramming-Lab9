<!DOCTYPE html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <title>Week9Lab_Task2_MinLi</title>
 </head>
 <body>
    <?php
   $temp = $unit = "";
   $tempErr = $typeErr = "";
   $temperature = "";
   if($_SERVER["REQUEST_METHOD"]=="POST"){
	   if(empty($_POST["temp"])){
		   $tempErr = "Please enter temperature value.";
	   }else if (!is_numeric($_POST["temp"])){$tempErr = "Temperature value should be number_format. "; }
	   else{$temp = test_input($_POST["temp"]);}
	   if(empty($_POST["option"])){
		   $typeErr = "Please choose the unit you want to convert.";
       }else $unit = test_input($_POST["option"]);}
   function test_input($data){
	   $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
   }
     ?>
 <h1>Temperature converter</h1>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">

Temperature: <input type="text"  name="temp" ><span class="error" style="color:red">*<?php echo $tempErr; ?></span>
 <br></br>
 Convert to: <select name="option" size="1">
 <option value="">unit option</option>
 <option name="fa" value="fa">fahrenheit</option>
 <option name="ce" value="ce">celsius</option></select><span class="error" style="color:red">*<?php echo $typeErr; ?></span>
 <br></br>
 <input type="submit" name="submit" value="Submit">
 </form>

  <?php
  if ($temp == ""||$unit == ""){$temperature ="";}
	      else $temperature = convertion($temp, $unit);

   function convertion($data1, $data2){
	  if( $data2 == "fa"){return $data1*1.8+32;}
   else if($data2 == "ce"){return ($data1-32)/1.8;}}
   $u1=$u2="";
   if ($unit == "fa"){$u1="C";$u2="F";}else if($unit == "ce"){$u1="F";$u2="C";}
      echo "<p>The original temperature is <b> ".$temp . $u1. "</b></p>";
	  echo "<p> The convert temperature is <b>".$temperature. $u2. "</b></p>";
    ?>

  <h3>Thank you! Mr.Qasim </h3>
  <p>
  <a href="https://validator.w3.org/check?uri=referer"><img
           src="http://www.w3.org/Icons/valid-html401.png"
           alt="Valid XHTML 1.0!" height="31" width="88" /></a>
  <img src="task2_phpcodechecked.JPG" alt="valid icon" height="500" width="600">
  </p>
 </body>
</html>
