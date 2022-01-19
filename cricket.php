<html>
<body>
<?php
$student=array("Virat","Dhoni","sachin","Rohit","sreeshanth","Rahul","kapildev",
                "Shreyas","Ashwin","modi");
echo "<table border='1'><tr><th>NO.</th><th>PLAYERS</th></tr>";
foreach($student as $key=>$value)
            {
                $key=$key+1;
                echo "<tr><td>"." $key" ."</th><th>$value</th></tr>";
            }
echo "</table>";
?>
</body>
</html> 