<html>
<head>
</head>
<body>
    <center>
    <h1> EMPLOYEE DETAILS</H1>
    <form method="POST">
        <table>
            <tr>
                <td>employee id:</td>
                  <td>  <input type="number" name="id" value="">
</td>
</tr>
<tr>
    <td>employee name:</td>
        <td><input type="text" name="name" value="">
        </td>
</tr>
<tr>
    <td>job:</td>
        <td><input type="text" name="job" value="">
    </td>
    </tr>
    <tr>
    <td>manager id:</td>
<td> <input type="number" name="manid" value="">
    </td>
    </tr>
    <tr>
    <td>salary:</td>
<td> <input type="number" name="cash" value="">
    </td>
    </tr>
    <tr>
        <td>
            <input type="submit" name="submit" value="submit"/>
    </td>
    </tr>
    </table>
</center>
</form>
<form name="f2" method="POST">
    <table align="center">
    <tr>
                <td>employees whose salary greater than 35,000
                
                <input type="submit" name="check" value="check"></td>
    </tr>
</table>
</form>

    <?php
        if(isset($_POST['submit']))
        {
            $empid=$_POST['id'];
            $empname=$_POST['name'];
            $job=$_POST['job'];
            $manid=$_POST['manid'];
            $salary=$_POST['cash'];
            $conn=mysqli_connect("localhost","root","","employee");
            if($conn)
            {
                echo("successfully connected");
                echo"<br>";
            }
            else
            {
                echo("error");
                echo"<br>";
                
            }
            
            $query="INSERT INTO employee(empid,empname,job,manid,salary)VALUES($empid,'$empname','$job',$manid,$salary)";
            if(mysqli_query($conn,$query))
            {
                echo("successfully inserted");
                echo"<br>";
            }
            else
            {
                echo("insertion failed");
                echo"<br>";
            }
        }
        if(isset($_POST['check']))
{
    $conn=mysqli_connect("localhost","root","","employee");
    
    ?>
<table border="1" align="center">
            <tr>
                <th>Employee.Id</th>
                <th>Name</th>
                <th>Job</th>
                <th>Manager.Id</th>
                <th>Salary</th>
            </tr>
            <?php
            $s="SELECT * FROM employee WHERE salary>35000";
            $data=mysqli_query($conn,$s);
            while($res=mysqli_fetch_assoc($data))
            {
                ?>
            <tr>
                <td><?php echo $res['empid'];?></td>
                <td><?php echo $res['empname'];?></td>
                <td><?php echo $res['job'];?></td>
                <td><?php echo $res['manid'];?></td>
                <td><?php echo $res['salary'];?></td>
            </tr>
            <?php

            }   
}
?>
</table>
</body>
</html>