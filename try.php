<html>
<head>
<meta charset="utf-8">
<title>Study アンケート</title>
<style>
    p{
        color:red;
        text-align:center;
    }
    p span{
        color:blue;
    }

</style>
</head>
<body>
<article>
	<h1>Self Control diary</h1>
		<form action="write.php" method="post">
        
        <p><span>今日の睡眠時間</span><br>
            ４時間以内<input type="radio" name="sleep" value="4">
            ５時間以内<input type="radio" name="sleep" value="5">
            ６時間以内<input type="radio" name="sleep" value="6">
            ７時間以内<input type="radio" name="sleep" value="7">
            ８時間以内<input type="radio" name="sleep" value="8">
        </p>     
        <p>
        <span>二度寝の回数</span><br>
                    ０回<input type="radio" name="a" value="0">  
                    １回<input type="radio" name="a" value="1">  
                    ２回<input type="radio" name="a" value="2">
        </p>
        <p>
        <span>電車で寝た時間</span><br>
                    １５分以内<input type="radio" name="b" value="15">
                    ３０分以内<input type="radio" name="b" value="30">
                    ４５分以内<input type="radio" name="b" value="45">  
        </p>
		<input type="submit" value="送信">
		</form>
</article>
<ul>
<li><a href="express.php">index.php</a></li>
</ul>
</body>
</html>