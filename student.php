<html>
<head><title>Student</title></head>
<body>
<?php
echo"<h3>STUDENTS</h3>";
$a="<h3 style='color:blue'>";
$b="<h3 style='color:red'>";
$c="</h3>";
$name=["Akshay","Nihal","Aswin","vishnu","Hari"];
$t=$name;
echo"$a printing using print_r $c";
print_r($name);
echo"<br>";
asort($name);
echo"$b sorting using asort() $c";
foreach($name as $i)
  echo",".$i;
  echo"<br>";
asort($name);
echo"$a sorting using asort() $c";
foreach($name as $i)
echo",".$i;
echo"</h3>";
?>
</body>
</html>

