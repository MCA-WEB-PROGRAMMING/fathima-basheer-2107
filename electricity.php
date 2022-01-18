<html>
<head>
</head>
<body>
    <form method="POST">
        <table>
            <tr>
                <td>enter the meter name:
                    <input type="3ber" name="num1" value="">
</td>
</tr>
<tr>
    <td>enter the number of units:
        <input type="number" name="num2" value="">
        </td>
</tr>
<tr>
    <td>tariff:
         <select name="tariff">
<option value="select" selected>select</option>
<option value="rural">rural</option>
<option value="commercial">commercial</option>
<option value="residential">residential</option>
    </select>
    </td>
    </tr>
    <tr>
        <td>
            <input type="submit" name="submit" value="submit"/>
    </td>
    </tr>
    </table>
    </body>
    </html>
    <?php
      if(isset($_POST['submit']))
      {
          $num1=$_POST['num1'];
          $num2=$_POST['num2'];
          $tariff=$_POST['tariff'];
          if($tariff=="rural")
          {
              if($num2>0&&$num2<=50)
              {
                  $e=20;
                  $price=(($num2*.25)+$e);
                  
              }
              else if($num2>50&&$num2<=100)
              {
                  $e=20;
                  $price=(($num2*.55)+$e);
                  
              }
              else if($num2>100&&$num2<=150)
              {
                  $e=20;
                  $price=(($num2*.80)+$e);
                 
              }
              else if($num2>150&&$num2<=300)
              {
                  $e=20;
                  $price=(($num2*1.20)+$e);
                 
              }
              else if($num2>300&&$num2<=400)
              {
                  $e=20;
                  $price=(($num2*1.50)+$e);
                 
              }


              else if($num2>400)
              {
                  $e=20;
                  $price=(($num2*2.5)+$e);
                  
              }
              echo "your meter number is:" .$num1;
              echo "<br>";
              echo "units are:".$num2;
              echo "<br>";
              echo "extra charges are:".$e;
              echo "<br>";
              echo "total $num2 units of charges:".$price;
              echo "<br>";
          }
          if($tariff=="residential")
          {
              if($num2>0&&$num2<=50)
              {
                  $e=35;
                  $price=(($num2*1.25)+$e);
                  
              }
              else if($num2>50&&$num2<=100)
              {
                  $e=35;
                  $price=(($num2*1.40)+$e);
                  
              }
              else if($num2>100&&$num2<=150)
              {
                  $e=35;
                  $price=(($num2*1.55)+$e);
                 
              }
              else if($num2>150&&$num2<=300)
              {
                  $e=35;
                  $price=(($num2*1.75)+$e);
                 
              }
              else if($num2>300&&$num2<=400)
              {
                  $e=35;
                  $price=(($num2*1.90)+$e);
                 
              }


              else if($num2>400)
              {
                  $e=35;
                  $price=(($num2*3.0)+$e);
                  
              }
              echo "your meter number is:" .$num1;
              echo "<br>";
              echo "units are:".$num2;
              echo "<br>";
              echo "extra charges are:".$e;
              echo "<br>";
              echo "total $num2 units of charges:".$price;
              echo "<br>";
          }
          if($tariff=="commercial")
          {
              if($num2>0&&$num2<=50)
              {
                  $e=45;
                  $price=(($num2*1.45)+$e);
                  
              }
              else if($num2>50&&$num2<=100)
              {
                  $e=45;
                  $price=(($num2*1.65)+$e);
                  
              }
              else if($num2>100&&$num2<=150)
              {
                  $e=45;
                  $price=(($num2*1.85)+$e);
                 
              }
              else if($num2>150&&$num2<=300)
              {
                  $e=45;
                  $price=(($num2*1.95)+$e);
                 
              }
              else if($num2>300&&$num2<=400)
              {
                  $e=45;
                  $price=(($num2*2.30)+$e);
                 
              }

              else if($num2>400)
              {
                  $e=45;
                  $price=(($num2*3.9)+$e);
                  
              }
              echo "your meter number is:" .$num1;
              echo "<br>";
              echo "units are:".$num2;
              echo "<br>";
              echo "extra charges are:".$e;
              echo "<br>";
              echo "total $num2 units of charges:".$price;
              echo "<br>";
          }
      }
    ?>