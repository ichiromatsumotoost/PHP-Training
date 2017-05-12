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
$weekjp = array( '日',  '月',  '火',  '水',  '木',  '金',  '土' );
$weekno = date('w');
echo date("Y/n/j (".$weekjp[$weekno] . ") H:i");
 ?>
