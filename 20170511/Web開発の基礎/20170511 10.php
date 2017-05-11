<!DOCTYPE html>
<html lang = "ja">
<head>
<meta charset = "UFT-8">
<title>ドキュメント</title>
</head>
<body>
<h1>フォームデータの送信</h1>
<form action = "20170511 10.php" method = "POST">
<input type = "text" name ="comment" value=""><br/>
<input type = "submit" value ="送信">
</form>
</body>
</html>
<?php
if(isset($_POST['comment'])){
$comment = $_POST['comment'];
 echo $comment;
 }
 ?>
