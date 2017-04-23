        <div class="footer">

            <div class="container">

                <div class="row">

                    <div class="col-sm-12">

                        <p style="text-align: center;">KH&ndash;Squared RIA. &copy; 2017. All Rights Reserved.</p>
                    </div> <!-- /.twelve columns -->
                </div> <!-- /.row -->
            </div> <!-- /.container -->
        </div> <!-- /.footer -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/app.min.js"></script>
    <script>
        
        $(document).ready(function () {

            $('.toggle-nav').on('click', function () {
                
                $('.full-menu').toggleClass('full-menu--open');
            });

            $('.full-menu').on('click', function() {
                
                $('.full-menu').removeClass('full-menu--open');
            })

            $('.toggle-item').on('click', function() {
                
                $('.full-form').toggleClass('full-form--open');
            });

            $(".call-to-action").click(function() {
                
                $('html,body').animate({
                    
                    scrollTop: $("#overview").offset().top},
                    'slow');
            });

            $(".call-to-top").click(function() {
                
                $('html,body').animate({
                    
                    scrollTop: $("#hero").offset().top},
                    'slow');
            });
        });

        $(window).resize(function() {
            var $form = $('#contactForm');

            if ($('html,body').width() <= 767) {
                $('#mobile-form').append($form);
            } else {
                if ($('html,body').width() >= 768) {
                    $('#desktop-form').append($form);
                }
            }
        });
    </script>
  </body>
</html>