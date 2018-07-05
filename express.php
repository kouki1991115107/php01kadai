<!DOCTYPE html>
<html>
<head>
<title>CSVデータ表示</title>
<meta charset="utf-8">
</head>
<body>
 
<table border='1'>
<tr><th>今日の睡眠時間（時間）</th><th>二度寝の回数</th><th>電車で寝た時間（分）</th></tr>
 
<?php
 
if( ($fp = fopen("data.csv","r"))=== false ){
	die("CSVファイル読み込みエラー");
}
 
while (($array = fgetcsv($fp)) !== FALSE) {
	
	//空行を取り除く
	if(!array_diff($array, array(''))){
		continue;
	}
	
	echo "<tr>";
	for($i = 0; $i < count($array); ++$i ){
		$elem = nl2br(mb_convert_encoding($array[$i],'SJIS','UTF-8'));
		$elem = $elem === "" ?  "&nbsp;" : $elem;
		echo("<td>".$elem."</td>");
	}
	echo "</tr>";
	
}
 
fclose($fp);
?>
 
</table>
<ul>
<li><a href="try.php">入力画面へ戻る</a></li>
</ul>
 
</body>
</html>