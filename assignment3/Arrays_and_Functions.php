<html>
<head>
<title>Month Listing</title>
</head>
<body>
<?php
$month = array('January','February','March','April','May','June','July','August','September','October','November','December');
$length = count($month);
echo "<h2><font color=blue>Months using for loop</font></h2>";
for ($a=0; $a < $length; $a++){
echo $month[$a];
echo "<br>";
}
echo "<h2><font color=blue>Months in Sorted Order using for loop</font></h2>";
function sort_Month(){
$month = array('January','February','March','April','May','June','July','August','September','October','November','December');
$length = count($month);
sort($month);
for ($a=0; $a < $length; $a++){
echo $month[$a];
echo "<br>";
}
}
sort_Month();
echo "<h2><font color=blue>Months using foreach loop</font></h2>";
foreach($month as $value)
{
echo $value;
echo "<br>";
}
echo "<h2><font color=blue>Months in Sorted Order using foreach loop</font></h2>";
function sort_Month_forEach(){
$month = array('January','February','March','April','May','June','July','August','September','October','November','December');
sort($month);
foreach($month as $value)
{
echo $value;
echo "<br>";
}
}
sort_Month_forEach();
?>
</body>
</html>

