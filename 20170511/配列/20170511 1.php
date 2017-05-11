<?php
$data[5][5] = array();
$char = "a";
for($i = 0;$i < 5;$i++){
    for($j = 0;$j < 5;$j++){
     $data[$i][$j] = $char;
     $char++;
echo $data[$i][$j]."<br>";
}
}
?>
