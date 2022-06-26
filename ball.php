<?php
      if(isset($_POST['load'])){
        $_POST['count']=$_COOKIE['chance']-1;
        $_POST['answer']=$_COOKIE['answer'];
        $_POST['inputnum']=$_COOKIE['befonum'];
        ?><p class="lod"><?php echo "이전 기록을 불러왔습니다.";}?></p>




<html>
        <head> <title> 야구 결과 </title>
        <style> body{background-image : url("https://cdn.pixabay.com/photo/2021/11/12/19/25/baseball-field-6789862_960_720.jpg");
                background-repeat: no-repeat;
                background-size:cover;  }</style> 
        <link rel="stylesheet" type="text/css" href="ball2">
        </head>
        <body>
                <h1> 결과 <h1>
        <div class="rs"> <?php
                if($_POST['answer']=="") {$_POST['answer']=rand(100,999);} //시작시 난수값 정답 생성
                $_POST['count']+=1;//입력횟수 1증가
                $_POST['input']=$_POST['inputnum'];
                $strike=0;
                $ball=0;
                $i=0;
                $j=0;
                $c_one=substr($_POST['answer'],0,1); //난수값의 첫번째 숫자
                $c_two=substr($_POST['answer'],1,1);
                $c_thr=substr($_POST['answer'],2,1);
                $num=$_POST['inputnum'];?><div class="now"><?php
                echo $_POST['count']."번째 시도<br>";
                echo $num."입력";?></div><?php
                $n_one=substr($num,0,1); //입력값의 첫번째 숫자
                $n_two=substr($num,1,1);
                $n_thr=substr($num,2,1);
                $crt=array($c_one,$c_two,$c_thr);
                $nu=array($n_one,$n_two,$n_thr);
                for($i=0;$i<3;$i++){
                        for($j=0;$j<3;$j++){
                                if($crt[$i]==$nu[$j]){ //숫자가 같을떄
                                        if($i==$j){//순서도 같을떄
                                           $strike++;
                                         }
                                        else { $ball++;}
                                }
                                else continue;
                        }
                }
                if($strike!=0 || $ball!=0) //아웃이 아닐경우 스트라이크, 볼 출력
                {echo $strike."strike".$ball."ball";}
                else {echo "out";}//모두 다를 경우 아웃
                if($strike==3){echo '<br>'.'축하합니다 정답입니다!'; $_POST['count']=0; $_POST['answer']="";}//정답이면 축하,초기화
                if($_POST['count']==10){echo '<br>'.'Fail';$_POST['count']=0; $_POST['answer']="";}//입력 10회시fail,초기화}

        ?> <div>
        <form method="post" action="bball.php"> <input type="hidden" name='count' value="<?php echo $_POST['count'];?>"/>
                 <input type="submit" value="again"/><input type="hidden" name='answer' value="<?php echo $_POST['answer'];?>"/>
                <input type="hidden" name="input" value="<?php echo $_POST['input'];?>"/>
                <input type="submit" value="save" name="save"/>
        </form>
        </body>
</html>
