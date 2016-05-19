# Apache-Challenge
<!DOCTYPE html>

<h1> Apache Challenge</h1>
<html>
<body>
<HEAD>
	<meta http-equiv = "refresh" CONTENT = "1">
</HEAD>


<?php

ini_set('display_errors','off');
session_start();
print "<br>Display age and increment: ";

if(isset($_SESSION['age']))
{
  $_SESSION['age']=$_SESSION['age']+1;
}
if ($_SESSION['age']>10 )
{
 $_SESSION['age']=1;
}
echo $_SESSION['age'];
print "<br>";


if ($_SESSION['age']==3 )
{
 shell_exec('ousb -r io portb 50');
}
if ($_SESSION['age']==6 )
{
 shell_exec('ousb -r io portb 255');
}
if ($_SESSION['age']==10 )
{
 shell_exec('ousb -r io portb 0');
}
$output1 = shell_exec('ousb -r io portb ');
$output2 = shell_exec('ousb -b io pinc ');
echo "<br>LED: $output1<br>";
echo "<br>Switches: $output2<br><br><br>";

?>

<a href="Source code.php" target="_self">See source code</a> 

<!--
<script language="javascript">
var popupWindow = null;
function centeredPopup(url,winName,w,h,scroll){
LeftPosition = (screen.width) ? (screen.width-w)/2 : 0;
TopPosition = (screen.height) ? (screen.height-h)/2 : 0;
settings =
'height='+h+',width='+w+',top='+TopPosition+',left='+LeftPosition+',scrollbars='+scroll+',resizable'
popupWindow = window.open(url,winName,settings)
}
</script>
<p><a href="Source code.php" onclick="centeredPopup(this.href,'myWindow','750','1000','yes');return false">See source code</a></p>
-->

</BODY>
</HTML>
