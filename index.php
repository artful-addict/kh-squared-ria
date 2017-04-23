<?php
    // Page Title
    $pageTitle = "KH-Squared RIA";
    // Page Author
    $pageAuthor = "Kevin Akins";
    // Page Description

    // Page Keywords

    // Styles Path
    $stylesPath = "css/styles.css";

?>

<?php include('inc/layout/header.php'); ?>

        <div class="full-menu"> 

            <div class="nav-bar">

                <div class="container">

                    <div class="toggle-nav">

                        <span class="fa fa-remove"></span>
                    </div> <!-- /.full-form-close -->
                </div> <!-- /.container -->
            </div> <!-- /.navbar -->

            <div class="container">

                <div class="row">

                    <div class="col-xs-12 nav-column">

                        <ul class="nav-menu">

                            <li><a href="#overview">Who We Are</a></li>
                            <li><a href="#services">Services</a></li>
                            <li><a href="#about">About</a></li>
                        </ul> <!-- /.nav-menu -->
                    </div> <!-- /.col-sm-12 -->
                </div> <!-- /.row -->

                <div class="row">

                    <div class="col-xs-12">

                        <div class="contact-item-group">

                            <span class="fa fa-mobile"></span>

                            <span class="phone-number">&#40;916&#41; 662&ndash;5250</span>
                        </div> <!-- /.contact-item-group -->

                        <a class="social-media" href="https://www.facebook.com/KH2RIA/">

                            <span class="fa-stack">
                                <i class="fa fa-circle-o fa-stack-2x"></i>
                                <i class="fa fa-facebook fa-stack-1x"></i>
                            </span>
                        </a> <!-- /.social-media -->
                    </div> <!-- /.col-xs-12 -->
                </div> <!-- /.row -->
            </div> <!-- /.container -->
        </div> <!-- /.full-menu -->

        <div class="navigation">

            <div class="nav-bar">

                <div class="container">

                    <div class="toggle-nav">
                        <span class="fa fa-bars"></span>
                    </div>

                    <div class="toggle-item">
                        <span class="fa fa-envelope"></span>
                    </div>
                </div> <!-- /.container -->
            </div> <!-- /.navbar -->

            <div class="desktop-nav">

                <div class="container">

                    <div class="brand-group">

                        <img
                            src="img/logos/logo-khsquared-alt.png"
                            alt="KH-Squared Logo"
                            class="logo"
                        />
                        <div class="hb"><h1>KH&ndash;Squared</h1></div>
                    </div> <!-- /.brand-group -->

                    <div class="desktop-nav-menu">
                        <ul class="nav-list">
                            <li><a href="#contact">Contact</a></li>
                            <li><a href="#overview">Who We Are</a></li>
                            <li><a href="#services">Services</a></li>
                            <li><a href="#about">About Us</a></li>
                        </ul> <!-- /.nav-list -->
                    </div> <!-- /.desktop-nav-menu -->
                </div> <!-- /.container -->
            </div> <!-- /.desktop-nav -->
        </div> <!-- /.navigation -->

        <div id="hero">

            <div class="brand-group">

                <img
                    src="img/logos/logo-khsquared-alt.png"
                    alt="KH-Squared Logo"
                    class="logo"
                />
                <div class="hb">KH&ndash;Squared</div>
            </div> <!-- /.brand-group -->

            <div class="call-to-action">

                <span class="fa fa-angle-double-down"></span>
            </div>

            <div id="contact">
                <div class="container">

                    <div class="row">

                        <div class="col-sm-3">

                            <div class="contact-group">

                                <h2>Get in Touch</h2>

                                <p>Give us a call, or send us a message.<br>Let’s get down to business.</p>

                                <div class="contact-item-group">

                                    <span class="fa fa-mobile"></span>

                                    <span class="phone-number">&#40;916&#41; 662&ndash;5250</span>
                                </div> <!-- /.contact-item-group -->
                            </div> <!-- /.contact-group -->
                        </div>

                        <div class="col-sm-9" id="desktop-form">

                        		<?php
    
						                    // Check for header injections
						                    function has_header_injection($str) {
						                        return preg_match( "/[\r\n]/", $str );
						                    }

						                    if (isset ($_POST['contact_submit'])) {
						                        $firstName 			= trim($_POST['firstName']);
						                        $lastName 			= trim($_POST['lastName']);
						                        $phoneNumber		= $_POST['phoneNumber'];
						                        $emailAddress 	= trim($_POST['emailAdress']);
						                        $subject 	= $_POST['subject'];
						                        $msg 			= $_POST['message'];

						                        // Check to see if $name or $email have header injections
						                        if (has_header_injection($firstName) || has_header_injection($lastName) || has_header_injection($phoneNumber) || has_header_injection($email)) {
						                            die(); // If true, kill the script
						                        }

						                        if ( !$firstName || !$lastName || !$phoneNumber || !$email || !$msg ) {
						                            echo '<div class="error-group"><h4 class="error">All fields required.</h4><a href="index.php" class="block">Go back and try again</a></div>';
						                            exit;
						                        }

						                        // Add the recipient email to a variable
						                        $to = "kevin@artfuladdict.com";

						                        // Create a subject
						                        $subject = "Inquiree Message";

						                        // Construct the message
						                        $message = "First Name: $firstName\r\n";
						                        $message .= "Last Name: $lastName\r\n";
						                        $message .= "Phone: $phoneNumber\n\r";
						                        $message .= "Email: $emailAddress\r\n";
						                        $message .= "Subject: $subject\r\n";
						                        $message .= "Message: \r\n$msg";

						                        $message = wordwrap($message, 72);

						                        // Set the mail headers into a variable
						                        $headers = "MIME-Version: 1.0\r\n";
						                        $headers .= "Content-type: text/plain; charset=iso-8859-1\r\n";
						                        $headers .= "From: $firstName $lastName <$emailAddress> \r\n";
						                        $headers .= "X-Priority: 1\r\n";
						                        $headers .= "X-MSMail-Priority: High\r\n\r\n";

						                        // Send the email
						                        mail($to, $subject, $message, $headers);
						                ?>

						                <?php } else { ?>

		                            <form id="contactForm" action="success/success.php" method="post">

		                                <div class="row">

		                                    <div class="col-xs-12 col-sm-6">

		                                        <div class="form-group">

		                                            <label class="sr-only" for="firstName">First Name</label>
		                                            <input class="form-control" type="text" name="firstName" id="firstName" placeholder="First Name">
		                                        </div>
		                                    </div>

		                                    <div class="col-xs-12 col-sm-6">

		                                        <div class="form-group">

		                                            <label class="sr-only" for="lastName">Last Name</label>
		                                            <input class="form-control" type="text" name="lastName" id="lastName" placeholder="Last Name">
		                                        </div>
		                                    </div>
		                                </div>

		                                <div class="row">

		                                    <div class="col-xs-12 col-sm-6">

		                                        <div class="form-group">

		                                            <label class="sr-only" for="phoneNumber">Phone&#40;Optional&#41;</label>
		                                            <input class="form-control" type="tel" name="phoneNumber" id="phoneNumber" placeholder="Phone (Optional)">
		                                        </div>
		                                    </div>

		                                    <div class="col-xs-12 col-sm-6">

		                                        <div class="form-group">

		                                            <label class="sr-only" for="emailAddress">E&ndash;mail</label>
		                                            <input class="form-control" type="email" name="emailAddress" id="emailAddress" placeholder="E-mail">
		                                        </div>
		                                    </div>
		                                </div>

		                                <div class="row">

		                                    <div class="col-xs-12 col-sm-12">

		                                        <div class="form-group">

		                                            <label class="sr-only" for="subject">Subject</label>
		                                            <input class="form-control" type="text" name="subject" id="subject" placeholder="Subject">
		                                        </div>
		                                    </div>
		                                </div>

		                                <div class="row">

		                                    <div class="col-xs-12 col-sm-12">

		                                        <textarea class="form-control" id="message" name="message" placeholder="Your Message Here..." row="1"></textarea>
		                                    </div>

		                                    <div class="col-xs-12">

		                                        <input class="btn-kh btn-long" type="submit" value="Send">
		                                    </div>
		                                </div>
		                            </form>
		                        <?php } ?>
                        </div>
                    </div> <!-- /.row -->
                </div> <!-- /.container -->
            </div> <!-- /#contact -->
        </div> <!-- /#hero -->

        <div class="tray">

            <div id="overview">

                <div class="container">

                    <div class="row">

                        <div class="col-sm-12">
                            
                            <h2>Who We Are</h2>

                            <p>Our objective here at KH Squared RIA is to assist our clients with registration of their investment advisory firm. Our team consists of former regulators and industry experts that have the experience to provide your firm the necessary guidance in this important first step of registration of your firm. We have the knowledge and background that will ensure your firm’s operations are compliant with regulatory agencies. At KH Squared RIA, we specialize and assist our clients with registration in the jurisdiction in which they operate. Our services are curtailed to meet the individual needs of our clients. We stay current with the constant changes that occur in the industry and make it a priority to stay informed of those changes. Whether it be new legislation that has passed or streamlined operations that will impact our clients in the investment related industry, we have the solutions and will ensure that we communicate and apply it consistently to our services. We promise to provide unparalleled service to each and every one of our clients.</p>

                            <p>We assure to you that the registration of your firm will be conducted in a timely manner and up to the regulatory standards of the jurisdiction in which you operate. We promise to provide exemplary service in which all requirements will be covered. We understand that your time is valuable. Let us help you in this process so that you can focus your attention on other areas of your business.</p>
                        </div> <!-- /.twelve columns -->
                    </div> <!-- /.row -->
                </div> <!-- /.container -->
            </div> <!-- /#overview -->

            <div id="services">

                <div class="container">

                    <div class="row">

                        <div class="col-sm-12">

                            <h2>Services</h2>

                            <p>Our team here at KH Squared RIA will assist your firm in the process of registration in the jurisdiction in which you operate. We will provide guidance throughout the entire process including the initial planning up until when your firm is approved to operate. We will ensure that your firm's registration process is as seamless as possible so that you can focus your attention on other areas of your business. Our understanding of regulatory and compliance laws within the industry will allow us to work diligently without compromising efficiency. Included with our service, we will provide your firm with all of the required documents needed to be compliant within the jurisdiction that you operate.</p>

                            <p class="special">KH Squared RIA Services</p>
                            <p>Registration of State RIA&#58; &#36;1995</p>
                        </div> <!-- /.twelve columns -->
                    </div> <!-- /.row -->
                </div> <!-- /.container -->
            </div> <!-- /#services -->

            <div id="about">

                <div class="container">

                    <div class="row">

                        <div class="col-sm-12">

                            <h2>About Us</h2>
                        </div>
                    </div>

                    <div class="row">

                        <div class="col-sm-3 portrait">

                            <h2>Koobmeng Her</h2>

                            <img src="img/portraits/koobmeng_her.jpg" alt="Portrait of Koobmeng Her" class="img-circle img-responsive portrait">
                        </div> <!-- /.three columns -->

                        <div class="col-sm-9">

                            <p>Koobmeng&#40;Koo&#41; Her is the President and Chief Operating Officer at KH RIA. He brings a wealth of knowledge in the areas of registration, compliance operations, and audits of investment advisory firms from his experience as a former regulator with The State of California. Koo also holds a Master of Science in Accountancy from CSU Sacramento and is currently pursuing his CPA license. In  addition, he also holds the position of an Assistant Controller of an unrelated Sacramento based firm. Mr. Her also brings experience dealing with financial clients and their assets from his time as a bank manager. Koobmeng&#40;Koo&#41; Her prides himself in his work ethic and his clients are his top priority.</p>
                        </div> <!-- /.nine columns -->
                    </div> <!-- /.row -->

                    <div class="row">

                        <div class="col-sm-3 col-sm-push-9 portrait">

                            <h2>Keith Her</h2>

                            <img src="img/portraits/keith_her.jpg" alt="Portrait of Keith Her" class="img-circle img-responsive portrait">
                        </div> <!-- /.three columns -->

                        <div class="col-sm-9 col-sm-pull-3">

                            <p>Keith is a co-founder of KH2. As Chief Strategy Officer, he is in charge of the firm’s marketing and business development initiatives. He is a graduate of Fresno State University where he received his BA in Economics and is currently seeking his MBA at Western Governor’s University. In addition, he currently holds a position in K&ndash;12 public education as a System Sales Specialist, Marketing Analyst, and Social Media Consultant. He enjoys working with school leaders and making a difference for future generations. In his spare time, he enjoys hiking through the San Francisco Muir Woods, and developing new ideas to serve people better.</p>
                        </div> <!-- /.nine columns -->
                    </div> <!-- /.row -->

                    <div class="row">

                    <div class="call-to-top">

                            <span class="fa fa-angle-double-up"></span>
                        </div>
                    </div> <!-- /.row -->
                </div> <!-- /.container -->
            </div> <!-- /#about -->
        </div> <!-- /.tray -->

<?php include('inc/layout/footer.php'); ?>