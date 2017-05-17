<?php include('inc/header.php'); ?>

<?php
	// Variables
	$pageTitle = "KH-Squared RIA | Contact";
	$metaAuthor = '<meta name="author" content="Kevin Akins">';
    $metaKeyWords = '<meta name="keywords" content="KH-Squared RIA, Business Consulting, Sacramento, California, Kee Her, Koobmeng Her"';
	$favicons = '
		<link rel="apple-touch-icon" sizes="57x57" href="img/favicons/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="img/favicons/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="img/favicons/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="img/favicons/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="img/favicons/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="img/favicons/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="img/favicons/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="img/favicons/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="img/favicons/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="img/favicons/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="img/favicons/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="img/favicons/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="img/favicons/favicon-16x16.png">
        <link rel="manifest" href="img/favicons/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="img/favicons/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">';
    $bodyTag = '<body class="contact-page">';
?>

<div class="page-header">

    <div class="container">

        <div class="row">

            <div class="col-sm-12">

                <div class="call-back">

                    <a href="index.html">
                        <span class="fa fa-chevron-circle-left"></span> <span class="text">Back</span>
                    </a>
                </div> <!-- /.call-back -->
            </div> <!-- /.col-sm-12 -->
        </div> <!-- /.row -->
    </div> <!-- /.container -->
</div> <!-- /.page-header -->

<div class="contact-form">

    <div class="container">

        <div class="row">

            <div class="col-sm-12">

                <div class="brand-group">

                    <img
                        src="img/logos/logo-khsquared-alt.png"
                        alt="KH-Squared Logo"
                        class="logo"
                    />
                    <div class="hb">KH&ndash;Squared</div>
                </div> <!-- /.brand-group -->
            </div> <!-- /.col-sm-12 -->
        </div> <!-- /.row -->
        
        <div class="row">
        
            <div class="col-sm-12">

                <h2>Contact Us</h2>

                <p>We assure to you that the registration of your firm will be conducted in a timely manner and up to the regulatory standards of the jurisdiction in which you operate. We understand that your time is valuable. Let us help you in this process so that you can focus your attention on other areas of your business.</p>
            </div> <!-- /.col-sm-12 -->
        </div> <!-- /.row -->

        <div class="row">

            <div class="col-sm-12">

                <form action="success.html" method="POST">
                    
                    <div class="form-group">

                        <label class="sr-only" for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                    </div>

                    <div class="form-group">

                        <label class="sr-only" for="email">E&dash;mail</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="E-mail">
                    </div>

                    <div class="form-group">

                        <label class="sr-only" for="phone">Phone</label>
                        <input type="tel" class="form-control" id="phone" name="phone" placeholder="Phone (Optional)">
                    </div>

                    <div class="form-group"> 
                        <label class="sr-only" for="message">Message</label>
                        <textarea class="form-control" name="message" id="message" rows="3" placeholder="Message"></textarea>
                    </div>

                    <button type="submit" class="btn btn-kh">Send Message</button>

                </form> <!-- form -->

                <a href="index.html" class="btn btn-kh-alt">Cancel</a>
            </div> <!-- /.col-sm-12 -->
        </div> <!-- /.row -->
    </div> <!-- /.container -->
</div> <!-- /.contact-form -->

<?php include('inc/footer.php'); ?>