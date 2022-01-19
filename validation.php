<?php
        if(isset($_POST['submit']))
        {
            $username=$_POST["name"];
            $password=$_POST["pass"];
            $uppercase=preg_match('@[A-Z]@',$password);
            $lowercase=preg_match('@[a-z]@',$password);
            $number=preg_match('@[0-9]@',$password);
            if($username=="")
            {
                echo("enter  the username!");

            }
            if($password=="" && strlen($password)<8)
            {
                echo("enter the password");
            }
            elseif(!$uppercase || !$lowercase || !$number)
            {
                echo("enter the password correctly");
            }
        }

        ?>
<html>
<body>
    <form name="myform" method="POST">
        username<input type="text" name="name" ><br>
        password<input type="password" name="pass"><br>
        <input type="submit" name="submit">
</form>
</body>
</html>