<?php if(isset($_POST['save'])){
        setcookie("chance",$_POST['count'],time()+600);
        setcookie("answer",$_POST['answer'],time()+600);
        setcookie("befonum",$_POST['input'],time()+600);
        echo "저장완료";
        }
?>


<html>
<head> <title> 야구게임 </title>
        <style> body{background-image : url("https://cdn.pixabay.com/photo/2016/08/19/01/25/summer-in-seattle-1604400_960_720.jpg");
                background-repeat: no-repeat;
                background-size:cover;  }</style>
        <link rel="stylesheet" type="text/css" href="ball">
</head>
<body>
        <h1> 숫자 3개를 맞추세요</h1>
        <div class="try"><?php echo $_POST['count']+1;echo "번째 시도"; ?></div>
        <form method="post" action="ball.php">
        <div class="in"> <input type="text" name="inputnum" placeholder="숫자 3개 입력"/></div> <br>
        <div align="center"> <input type="submit" name="throw" value="맞추기"></div>
        <input type="hidden" name="count" value="<?php echo $_POST['count'];?>"/>
        <input type="hidden" name="answer" value="<?php echo $_POST['answer'];?>"/>
        <input type="hidden" name="input" value="<?php echo $_POST['input'];?>"/>
        <input type="submit" name="load" value="load"/>
        </form>

</body>
</html>
