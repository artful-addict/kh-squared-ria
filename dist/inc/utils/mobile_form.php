<?php
    
    // Check for header injections
    function has_header_injection($str) {
        return preg_match( "/[\r\n]/", $str );
    }

    if (isset ($_POST['contact_submit'])) {
        $firstName              = trim($_POST['firstName']);
        $lastName               = trim($_POST['lastName']);
        $phoneNumber            = $_POST['phoneNumber'];
        $emailAddress           = trim($_POST['emailAddress']);
        $subject                = $_POST['subject'];
        $msg                    = $_POST['message'];

        // Check to see if $name or $email have header injections
        if (has_header_injection($firstName) || has_header_injection($lastName) || has_header_injection($emailAddress)) {
            die(); // If true, kill the script
        }

        if ( !$firstName || !$lastName || !$emailAddress || !$msg ) {
            echo '<div class="error-group"><p>All fields erquired. <a href="index.php">Go back and try again, please.</a>';
            exit;
        }

        // Add the recipient email to a variable
        $to = "kevin@artfuladdict.com";

        // Create a subject
        $subject = "KH Squared Inquiree";

        // Construct the message
        $message = "Name: $firstName $lastName\r\n";
        $message .= "Email: $emailAddress\r\n";
        $message .= "Phone: $phoneNumber\r\n";
        $message .= "Subject: $subject\r\n";
        $message .= "Message: \r\n$msg";

        $message = wordwrap($message, 72);

        // Set the mail headers into a variable
        $headers = "MIME-Version: 1.0\r\n";
        $headers .= "Content-type: text/plain; charset=iso-8859-1\r\n";
        $headers .= "From: $firstName <$emailAddress> \r\n";
        $headers .= "X-Priority: 1\r\n";
        $headers .= "X-MSMail-Priority: High\r\n\r\n";

        // Send the email
        mail($to, $subject, $message, $headers);
?>
<!-- Show a success message after email has sent -->
<div class="success-group">

    <h1>
        <span class="fa fa-check-circle"></span>
        Success!
    </h1>
    <h2>We will be with you shortly!</h2>
</div> <!-- /.success-group -->

<?php } else { ?>
<form id="contactForm" action="/whatever" method="post">

    <div class="row">

        <div class="col-xs-12">

            <div class="form-group">

                <label class="sr-only" for="firstName">First Name</label>
                <input class="form-control" type="text" name="firstName" id="firstName" placeholder="First Name">
            </div>
        </div>

        <div class="col-xs-12">

            <div class="form-group">

                <label class="sr-only" for="lastName">Last Name</label>
                <input class="form-control" type="text" name="lastName" id="lastName" placeholder="Last Name">
            </div>
        </div>

        <div class="col-xs-12">

            <div class="form-group">

                <label class="sr-only" for="phoneNumber">Phone&#40;Optional&#41;</label>
                <input class="form-control" type="tel" name="phoneNumber" id="phoneNumber" placeholder="Phone (Optional)">
            </div>
        </div>

        <div class="col-xs-12">

            <div class="form-group">

                <label class="sr-only" for="emailAddress">E&ndash;mail</label>
                <input class="form-control" type="email" name="emailAddress" id="emailAddress" placeholder="E-mail">
            </div>
        </div>

        <div class="col-xs-12">

            <div class="form-group">

                <label class="sr-only" for="subject">Subject</label>
                <input class="form-control" type="text" name="subject" id="subject" placeholder="Subject">
            </div>
        </div>

        <div class="col-xs-12">

            <textarea class="form-control" id="message" name="message" placeholder="Your Message Here..." row="1"></textarea>
        </div>

        <div class="col-xs-12">

            <input class="btn-kh btn-long" type="submit" value="Send">
        </div>
    </div>
</form>
<?php } ?>