<html>
<body bgcolor="pink">
<?php

$name = "";
$email = "";
$phone = "";

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
  

  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];

  $valid = true;

  if(empty($name)) {
    echo "Please enter valid name.";
    $valid = false;
  }

  if (empty($email)) 
  {
    echo "Please enter valid email.";
    $valid = false;
  } 
  if (empty($phone)) 
  {
    echo "Please enter valid phone no.";
    $valid = false;
  } 

  if($valid){
    $name = "";
    $email = "";
    $phone = "";
    echo "<script>alert('Submission successful!')</script>";
    
  }

}

?>
<h1 align="center">Registration Form</h1>
<form method="post" action="#">
    <table align="center">
        <tr>
  <td>Name:</td><td> <input type="text" name="name" value="<?php echo $name; ?>"></td></tr>
 <tr>
     <td>email-Id: </td><td><input type="email" name="email" value="<?php echo $email; ?>"></td></tr>
  <tr>
      <td>phone : </td><td><input type="number" name="phone" value="<?php echo $phone; ?>"></td></tr>
  <tr><td><input type="submit"></tr></td>
</table>
</form>


</body>
</html>