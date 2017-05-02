<?php
    if (isset($_GET['sent']) === true) {
        echo '<div class="success-group">
                <p>Thanks for contacting us!</p>
              </div>';
    } else {

        if (empty($errors) === false) {
            echo '<ul>';
            foreach($errors as $error) {
                echo '<li>', $error, '</li>';
            }
            echo '</ul>';
        }
    ?>
    <form id="contactForm" action="<?php echo $successPath; ?>" method="post">

        <div class="row">

            <div class="col-xs-12 col-sm-6">

                <div class="form-group">

                    <label class="sr-only" for="name">Name</label>
                    <input class="form-control" type="text" name="name" id="name" placeholder="Name" <?php if (isset($_POST['name']) === true) { echo 'value="', strp_tags($_POST['name']), '"';} ?>>
                </div>
            </div>

            <div class="col-xs-12 col-sm-6">

                <div class="form-group">

                    <label class="sr-only" for="email">E&ndash;mail</label>
                    <input class="form-control" type="email" name="email" id="email" placeholder="E-mail" <?php if (isset($_POST['email']) === true) { echo 'value="', strp_tags($_POST['email']), '"';} ?>>
                </div>
            </div>
        </div>

        <div class="row">

            <div class="col-xs-12 col-sm-12">

                <div class="form-group">

                    <label class="sr-only" for="phone">Phone&#40;Optional&#41;</label>
                    <input class="form-control" type="tel" name="phone" id="phone" placeholder="Phone (Optional)" <?php if (isset($_POST['phone']) === true) { echo 'value="', strp_tags($_POST['phone']), '"';} ?>>
                </div>
            </div>
        </div>

        <div class="row">

            <div class="col-xs-12 col-sm-12">

                <textarea class="form-control" id="message" name="message" placeholder="Your Message Here..." row="1"><?php if (isset($_POST['message']) === true) { echo strp_tags($_POST['message']), '"';} ?></textarea>
            </div>

            <div class="col-xs-12">

                <input class="btn-kh btn-long" type="submit" value="Send">
            </div>
        </div>
    </form>
<?php
    }
?>