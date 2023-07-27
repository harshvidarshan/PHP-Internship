<?php 
if($_SERVER['REQUEST_METHOD']=="POST")
{
  $isvalidate=true;
class validation
{
 public $name="",$email="",$mobile="";
 public $emailError="",$nameError="",$mobileError="";
 public function testinput($data)
  {
        $this->data = trim($data);
        $this->data  = stripslashes($data);
        $this->data  = htmlspecialchars($data);
        return $this->data;
  }
}
//$obj = new validation();
class validname extends validation
{
  public function checkname($name)
  {

    $this->name=$name;
      $namevalid=validation::testinput($name);
      if (!preg_match("/^[a-zA-Z-' ]*$/",$namevalid)) 
      {
       echo "Only letters and white space allowed"; 
      }
      else
      {
        $this->name=$name;
      }
  }
}
class validemail extends validation
{
  public function checkemail($email)
  {
      $this->email=$email;
      $emailvalid=validation::testinput($email);
      if (!filter_var($emailvalid, FILTER_VALIDATE_EMAIL)) 
      {
       echo "Enter valid EMAIL ID"; 
      }
  }
}
class validmobile extends validation
{
  // error_reporting(0);
  public function checkmobile($mobile)
  {
    $this->mobile=$mobile;
    $mobilevalid=validation::testinput($mobile);
    if (!preg_match("/^[0-9]{10}$/",$mobilevalid)) 
      {
       echo "Only 10 digits mobile number allowed"; 
      }
  }
}
}
?>