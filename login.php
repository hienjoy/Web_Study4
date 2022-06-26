<html>
<head> <title> log-in </title> </head>
<body>

        <?php
                $pwd="catholic";
                $ip=$_SERVER['REMOTE_ADDR'];
                if($_POST['submit']==NULL){
                        if($_POST['logid']=='admin'){
                                echo "<script>alert('Your IP: {$ip} you are not admin');</script>";
                        }
                        else if( $_POST['logpwd']==$pwd){
                                setcookie("idCookie",$_POST['logid'],time()+(60*60*24));
                                echo("Hello CAT-CERT");}

                        else echo('wrong password!'.'<br>'.'<br>'.'<br>');
                }
                ?>

        <form method="POST" action="">
        <table border="1">
                <tr><td> CAT-LOGIN</td> </tr>
                <tr><td> <input type="text" name="logid"/></td> </tr>
                <tr><td><input type="text" name="logpwd"/></td></tr>
                <tr><td><input type="submit" value="입력"/></td></tr>
        </table>
        </form>



</body>
</html>
