<!DOCTYPE html>
<html>
<head>
	<title>
		PHPuchun
	</title>
</head>
<body>
 <h1>My first PHP page</h1>
 <?php 
echo "Hello World!";
  ?>
  <?php 
$color="red";
eChO "My car is ".$COLor."<br>";
echo "My house is ".$color."<br>";
   ?>

   <?php
$txt1 = "Learn PHP";
$txt2 = "W3Schools.com";
$x = 5;
$y = 4;

print "<h2>" . $txt1 . "</h2>";
print "Study PHP at " . $txt2 . "<br>";
print $x + $y +"<br>";
print "<br>";
var_dump($x);

?>

<?php 
class Car {
	function Car(){
	$this->model = "VW";
				}
			}
 $herbie = new Car();
 echo $herbie->model;

 ?>

<?php 
	$x=1;
	do{

		echo "The number is: $x <br>";
		$x++;
	}while($x<=5)
 ?>








</body>
</html>