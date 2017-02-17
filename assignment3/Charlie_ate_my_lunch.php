<html>
<head>
<title>Charlie's probability of eating</title>
</head>
<body>
<?php

function isBitten(){
srand((double)microtime()*1000000);
$dideat=rand(0,1);
if($dideat == 1)
{

echo "<h3><font color=blue>Charlie ate my lunch!</font></h3>";
}
else if($dideat == 0)
{
echo "<h3><font color=blue>Charlie did not eat my lunch!</font></h3>";
}
}

isBitten();
?>

</body>
</html>

