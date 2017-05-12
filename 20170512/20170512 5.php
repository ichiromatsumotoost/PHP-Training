<?php
$now = ();
echo"<p>";
foreach($now as $element){
    echo $date." ";
}
echo"<br>";
$fp = fopen("access");
$tmp = fgets($fp);
$date = explode(",",$tmp);
echo "前回：";
foreach($date as $element){
echo $s . " ";
}
fclose($fp);

$fp = fopen("access.csv","w");
$date = ();
rewind($fp);
echo "</p>";

foreach($date as $element){
    fputs($fp,$e.",");
}
fclose($fp);
?>
