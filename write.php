<head>
<meta charset="utf-8">
<title>File書き込み</title>
</head>
<body>
入力完了<br>
</body>
<?php
$sleep = $_POST["sleep"];
$a = $_POST["a"];
$b = $_POST["b"];
$br   = ",";
$str  = $sleep.$br.$a.$br.$b;
// $str = date("Y-m-d H:i:s")."文字列";
$file = fopen("data.csv","a");	// ファイル読み込み
flock($file, LOCK_EX);			// ファイルロック
fwrite($file, $str."\n");
flock($file, LOCK_UN);			// ファイルロック解除
fclose($file);
?>
<ul>
<li><a href="express.php">まとめに行く</a></li>
</ul>
</body>
</html>