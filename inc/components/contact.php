<?php
    if (empty($_post) === false) {
        $errors = array();

        $name           = $_POST['name'];
        $phone    = $_POST['phone'];
        $email   = $_POST['email'];
        $message        = $_POST['message'];
        $to             = 'akinskevin86@gmail.com';

        if (empty($name) === true || empty($email) === true || empty($message) === true) {
            $errors[] = 'Name, email, and message are required!';
        } else {
            if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
                $erros[] = 'That\'s not a valid email address';
            }
            if (ctype_alpha($name) === false) {
                $errors[] = 'Name must only contain letters!';
            }
        }

        if (empty($errors) === true) {
            
            // send email
            mail('$to', 'Contact Form', '$message', 'From: $email');
            // redirect user
            header('Location: index.php?sent');
            exit();
        }
    }

    $pageTitle = 'KH-Squared RIA | Contact';
?>