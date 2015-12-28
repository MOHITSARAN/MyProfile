<?php
if( $_POST )
{
  $con = mysql_connect("localhost","root","");

  if (!$con)
  {
    die('Could not connect: ' . mysql_error());
  }

  mysql_select_db("mysite", $con);

  $users_name = $_POST['name'];
  $users_email = $_POST['email'];
  $users_message = $_POST['message'];


  $query = " INSERT INTO mysite (name,email,message) VALUES ('$users_name','$users_email','$users_message')";

  mysql_query($query);

  echo "<h2>Thank you for your Comment!</h2>";

  mysql_close($con);
}
?>
