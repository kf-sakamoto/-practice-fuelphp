<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>ファイル表示プログラム</title>
</head>
<body>
<?php

//ファイル名を指定
$file = __FILE__;

//ファイルの中身を代入
echo nl2br(htmlspecialchars($content,ENT_QUOTES,'UTF-8'),false);
?>
</body>
</html>
