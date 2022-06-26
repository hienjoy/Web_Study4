<?php
        if(isset($_POST['save'])){
           setcookie("sword",$_POST['lastword'],time()+600);
           echo "save!!";}

        if(isset($_POST['load'])){
           echo "load!!";
          $last=$_COOKIE['sword'];
        }

?>
        </script>

<html>
<head> <title> 끝말잇기 </title> </head>
<body>
        <h1> 끝말잇기 게임 <h1>
        <?php
                if(isset($_POST['load'])){$_POST['iword']=$last; $_POST['lastword']='';}
                if(isset($_POST['save'])){$_POST['iword']=$_POST['lastword']; $_POST['lastword']='';}
                if(is_null($_POST['iword'])&&is_null($_POST['lastword'])){
                        echo "시작단어를 입력하세요";
                }
                else if($_POST['lastword']==''){//첫 단어일때
                        echo "입력한 단어: ".$_POST['iword']."<br>";
                        echo $_POST['lastword']."<br>";
                        echo mb_substr($_POST['iword'],-1,1,'utf-8')."(으)로 시작하는 단어를 입력하세요"."<br>";
                }
                else{
                        if(mb_substr($_POST['lastword'],-1,1,'utf-8')==mb_substr($_POST['iword'],0,1,'utf-8')){
                                echo "이전 단어 : ".$_POST['lastword']."<br>";
                                echo "입력한 단어: ".$_POST['iword']."<br>";
                                echo mb_substr($_POST['iword'],-1,1,'utf-8')."(으)로 시작하는 단어를 입력하세요"."<br>";}
                        else{
                                echo "이전 단어 : ".$_POST['lastword']."<br>";
                                echo "입력한 단어: ".$_POST['iword']."<br>";
                                echo "틀렸습니다. 종료합니다.";
                                $_POST['lastword']='';
                                $_POST['iword']='';}

                }


        ?>
        <br>
        <form method="post" action="">
        <input type="hidden" name='lastword' value="<?php echo $_POST['iword']; ?>">
        단어 입력 >> <input type="text" name="iword"/>
        <input type="submit" name="input" value="입력">
        <input type="submit" name="save" value="save">
        <input type="submit" name="load" value="load">
        </form>
        
</body>
</html>
