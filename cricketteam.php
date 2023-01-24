<html>
<body bgcolor="SKYBLUE">
<h4>CRICKET PLAYERS</h4>
<?php
$name=["SHIKHAR DHAWAN","ROHIT SHARMA","VIRAT KOHLI","SURESH RAINA","YUVRAJ SING","MS DHONI"];
echo "Player Program";
echo "<br>
<table border='2px'>
<tr><th> sl no.</th>
<th>player</th>";
for ($i=0;$i<5;$i++)
{
$sl=$i+1;
echo "<tr><th>$sl</th><th>$name[$i]</th></tr>";
}
echo "</table>"
?>
</body>
</html>
