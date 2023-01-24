<html>
<center>
<body bgcolor="lightyellow">
<h1><u>FUTURE INDIAN TEAM</u></h1>
<?php
$name=["PANT","DHONI","KARTHIK","ASWIN","JADEJA","SHAMI","KULDEEP","RAINA","SAHA","KL RAHUL","GILL"];
$role=["lEFT-HAND BATSMAN","WICKET KEEPER","RIGHT-HAND BATSMAN","RIGHT-HAND BATSMAN","lEFT-HAND BATSMAN","FAST BOWLER","SPIN BOWLER","ALL ROUNDER","WICKET KEEPER","LEFT-HAND BATSMAN","ALL ROUNDER"];
echo "<u>STARTING XI</u><br>";
echo "<br>
<table border='2px'>
<tr><th> sl no.</th>
<th>player</th>
<th>ROLE</th>";
 
for ($i=0;$i<11;$i++)
{
$sl=$i+1;
echo "<tr><th>$sl</th><th>$name[$i]</th><th>$role[$i]</th></tr>";
}
echo "</table>"
?>
</center>
</body>
</html>
