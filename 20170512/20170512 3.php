<?php
$fp = fopen( "count.txt", "r+" );
$count = fgets( $fp,10 );
$count++;
rewind( $fp );
fputs( $fp, $count );
fclose( $fp );
echo 'あなたは'.$count.'人目のお客様です';
?>
<br>
<?php
$year =2004;
$month =5;
$day =12;
printf("今日は%04d年%02d月%02d日",$year,$month,$day );
?>
