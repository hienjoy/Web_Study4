<html>
        <head>
                <title>배스킨라빈스31</title>
                <link rel="preconnect" href="https://fonts.googleapis.com">
                <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
                <link href="https://fonts.googleapis.com/css2?family=Do+Hyeon&family=Jua&display=swap" rel="stylesheet">
                <link rel="stylesheet" type="text/css" href="bt.css">
        </head>
        <body>
                <h1>배스킨라빈스31</h1>
                <table border="1" width="750" height="750">
                 <tr><?php $num=$_POST['num']; $_POST['baskin']++; $to=31;?>
                    <td> <div class="who"><span style="color:#D941C5">YOU </span>
                        <span style="color:navy">RAND </span></div>
                        <div class="put"><span class="pput">
                        <?php
                                if(isset($_POST['save'])){ $savenum=$_POST['baskin']-1; echo "save until ".$savenum."!";}
                                if(isset($_POST['load'])){$loadnum=$_COOKIE['snum']+1; echo "Let's start ".$loadnum."!";}
                                for($i=0;$i<$num;$i++){
                                echo $_POST['baskin']." ";
                                if($_POST['baskin']==$to) {$winner='You Lose!';}
                                 $_POST['baskin']++;
                                if($_POST['baskin']>$to) break;
                                }?></span>
                        <span class="cput"><?php
                                if($_POST['baskin']<=$to){
                                if($num!=0)$com=rand(1,3);
                                     for($i=0;$i<$com;$i++){
                                        echo $_POST['baskin']." ";
                                        if($_POST['baskin']==$to) {$winner='You Win!'; $_POST['baskin']++; break;}
                                        else{$_POST['baskin']++;}}}

                                        $_POST['baskin']--; echo "<br>";?></span>
                                        <div class="result"><?php  if(isset($_POST['start'])){for($i=1;$i<=$_POST['baskin'];$i++){
                                        echo $i." ";}}
                                if($_POST['baskin']<31) $winner="Who's the Winner?";
                        ?></div>
                        </div><br></td></tr>
                        <tr>
                        <td><p><?php echo $winner;?></p><br>
                        </td>
                 </tr><?php if($_POST['baskin']>=$to){$_POST['baskin']=0;}?>
                <tr><td><div class="choose">숫자개수선택<br></div>
               <?php  if(isset($_POST['save'])){
                        setcookie("snum",$_POST['baskin'],time()+600);}
                        if(isset($_POST['load'])){
                                $_POST['baskin']=$_COOKIE['snum'];;
                                }?>


                 <form method="post" action="">
                  <div class="choose"><input type="radio" name="num" value='1'>1
                  <input type="radio" name="num" value='2'>2
                  <input type="radio" name="num" value='3'>3
                  <button type="submit" name="start">입력</button></div>
                  <input type="hidden" name="baskin" value="<?php echo $_POST['baskin'];?>"/>
                  <div class="save"> <button type="submit" name="save" value="save">저장하기</button> <button type="submit" name="load" value="load">불러오기</button></div>
                </form></td></tr>
                </table>
        </body>
</html>
