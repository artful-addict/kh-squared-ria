<?php 

print_r($_POST);
die;
// define variables and set to empty values
$firstName_error = $lastName_error = $phoneNumber_error = $emailAddress_error = $emailAddress_error = "";
$firstName = $lastName = $phoneNumber = $emailAddress = $subject = $message = $success = "";

//form is submitted with POST method
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["firstName"])) {
    $firstName_error = "First name is required";
  } else {
    $firstName = test_input($_POST["name"]);
    // check if first name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$firstName)) {
      $firstName_error = "Only letters and white space allowed"; 
    }
  }

  if (empty($_POST["lastName"])) {
    $lastName_error = "Last name is required";
  } else {
    $lastName = test_input($_post["lastName"]);
    // check if last name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/", $lastName)) {
      $lastName_error = "Only letters and white space allowed";
    }
  }

  if (empty($_POST["phoneNumber"])) {
    $phoneNumber_error = "Phone is required";
  } else {
    $phoneNumber = test_input($_POST["phoneNumber"]);
    // check if e-mail address is well-formed
    if (!preg_match("/^(\d[\s-]?)?[\(\[\s-]{0,2}?\d{3}[\)\]\s-]{0,2}?\d{3}[\s-]?\d{4}$/i",$phoneNumber)) {
      $phoneNumber_error = "Invalid phone number"; 
    }
  }

  if (empty($_POST["emailAddress"])) {
    $emailAddress_error = "Email is required";
  } else {
    $emailAddress = test_input($_POST["emailAddress"]);
    // check if e-mail address is well-formed
    if (!filter_var($emailAddress, FILTER_VALIDATE_EMAIL)) {
      $emailAddress_error = "Invalid email format"; 
    }
  }

  if (empty($_POST["subject"])) {
    $subject_error = "Last name is required";
  } else {
    $subject = test_input($_post["subject"]);
    // check if last name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/", $subject)) {
      $subject_error = "Only letters and white space allowed";
    }
  }

  if (empty($_POST["message"])) {
    $message = "";
  } else {
    $message = test_input($_POST["message"]);
  }
  
  if ($firstName_error == '' and $lastName_error == '' and $emailAddress_error == '' and $subject_error == '' ){
      $message_body = '';
      unset($_POST['submit']);
      foreach ($_POST as $key => $value){
          $message_body .=  "$key: $value\n";
      }
      
      $to = 'kevin@artfuladdict.com';
      $subject = 'Contact Form Submit';
      if (mail($to, $subject, $message)){
          $success = 
            echo '<h1>';
            echo '<span class="fa fa-check-circle">';
            echo '</span>';
            echo "Success!";
            echo '</h1>'
            echo '<h2>We will be with you shortly!</h2>';
          $firstName = $lastName = $emailAddress = $phoneNumber = $message = '';
      }
  }
  
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}