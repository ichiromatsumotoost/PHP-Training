<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>

<head>

<meta http-equiv="Content-Type" content="text/html; charset=Shift_JIS">

<title>ここにホームページのタイトルを入れてください</title>

<link rel="stylesheet" type="text/css" href="mystyle.css">

</head>

<body>
<!--↓↓ここからサイトの表示部分です↓↓-->

<div class="all">


<div><img src="logo1.jpg" alt="ロゴ" width="800" height="100"></div>

<!-- ここからがメニューです　-->

<div class="menu">

｜<a href="index.html">HOME</a>

｜<a href="sub1.html">昆虫</a>

｜<a href="sub2.html">両生類</a>

｜<a href="sub3.html">魚類</a>

｜<a href="sub4.html">植物</a>

｜<a href="mailto:matuichi160@gmail.com">MAIL</a>

｜<a href="掲示板のURLを書きます">BBS</a>｜

</div>

<!--　ここまでがメニューです -->

<h1>趣味</h1>

<p><img src="photo.jpg" alt="ハチ" align="left" hspace="5"></p>

<p>ここが文章を書くところで、段落と呼ばれます<br>
好きなだけ文字を書くことが出来ます。</p>

<br clear="all">
<address>Copyright (c) <a href="http://www.homepage-4u.com/">3日で作るホームページ</a> All Rights Reserved. </address>

<!--（※ここは写さなくてOKです）この上のところを簡単に訳すと「このサイトは俺のだからコピーすんじゃね～っ！」（笑）という意味になりますので、あなたのサイトの名前を入れておきましょう。なお、この文字は実際には表示されませんので削除して構いません。 -->

</div> <!--allの終了タグ-->

</body>

</html>
<?php
$fp = fopen( "count.txt", "r+" ); // ファイル開く
$count = fgets( $fp, 10 ); // 9桁分値読み取り
$count++; // 値+1（カウントアップ）
rewind( $fp ); // ファイルポインタを先頭に戻す
fputs( $fp, $count ); // 値書き込み
fclose( $fp ); // ファイル閉じる
echo 'あなたは'.$count.'人目のお客様です';
?>
