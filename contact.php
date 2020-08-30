<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="node_modules/@fortawesome/fontawesome-free/css/all.min.css"/>
    <link rel="stylesheet" href="node_modules/owl.carousel/dist/assets/owl.carousel.min.css" />
    <link rel="stylesheet" href="node_modules/owl.carousel/dist/assets/owl.theme.default.min.css">
    <title>Blog Detail</title>
    
  </head>
  <body>
    <!--section navbar -->
    <?php include_once('includes/navbar.php');?>

    <!-- section page-tittle -->
    <header data-speed="0.5" class="jarallax" style="background-image: url('https://images.unsplash.com/photo-1537498425277-c283d32ef9db?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1357&q=80');">
        <div class="page-image">
            <h1 class="display-4 font-weight-bold">Contact</h1>
            <p class="lead">ข้อมูลการติดต่อ</p>
        </div>
    </header>

    <!-- Section Contact -->
    <section class="container py-4">
        <div class="row text-center">
            <div class="col-12">
                <h2 class="border-short-bottom">ข้อมูลการติดต่อ</h2>
            </div>
            <div class="col-sm-4 mb-3">
                <div class="card  h-100">
                    <div class="card-body">
                        <i class="far fa-address-card py-2 fa-4x text-info"></i>
                        <h4 class="card-title">ที่อยู่</h4>
                        <p class="card-text">ชลบุรี ศรีราชา</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 mb-3">
                <div class="card  h-100">
                    <div class="card-body">
                        <i class="fas fa-phone-square-alt py-2 fa-4x text-info"></i>
                        <h4 class="card-title">เบอร์โทรศัพท์</h4>
                        <p class="card-text">(+66)81-234-5678</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 mb-3">
                <div class="card  h-100">
                    <div class="card-body">
                        <i class="far fa-envelope py-2 fa-4x text-info"></i>
                        <h4 class="card-title">อีเมลล์</h4>
                        <p class="card-text">example@email.com</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">แบบฟอร์มติดต่อเรา</h5>
                        <form>
                            <div class="form-row">
                              <div class="form-group col-md-4">
                                  <label for="name">ชื่อ</label>
                                <input type="text" id="name" class="form-control" placeholder="Name">
                              </div>
                              <div class="form-group col-md-4">
                                <label for="phone">เบอร์โทรศัพท์</label>
                                <input type="text" id="phone" class="form-control" placeholder="Phone number">
                              </div>
                              <div class="form-group col-md-4">
                                <label for="email">อีเมลล์</label>
                                <input type="text" id="email" class="form-control" placeholder="example@email.com">
                              </div>
                            </div>

                            <div class="form-group">
                                <label for="message">ข้อคามของคุณ</label>
                                <textarea id="message" rows="10" class="form-control" placeholder="Massage"></textarea>
                            </div>
                            <div id="recaptcha-wrapper" class="text-center my-2">
                              <div class="g-recaptcha d-inline-block" data-callback="recaptchaCallback" data-sitekey="6LdRNb8ZAAAAAIHWTjH6HxKkXsC3ZCvHBUen7OQ9"></div>
                            </div>

                            <button type="submit" class="btn btn-primary d-block mx-auto">Send</button>
                          </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Footer -->
    <?php include_once('includes/footer.php'); ?>

    <script>
      $(function(){
      // global variables
      captchaResized = false;
      captchaWidth = 304;
      captchaHeight = 78;
      captchaWrapper = $('#recaptcha-wrapper');
      captchaElements = $('#rc-imageselect, .g-recaptcha');

      $(window).on('resize', function() {
          resizeCaptcha();
      });

      resizeCaptcha();
    });

    function resizeCaptcha() {
        if (captchaWrapper.width() >= captchaWidth) {
            if (captchaResized) {
                captchaElements.css('transform', '').css('-webkit-transform', '').css('-ms-transform', '').css('-o-transform', '').css('transform-origin', '').css('-webkit-transform-origin', '').css('-ms-transform-origin', '').css('-o-transform-origin', '');
                captchaWrapper.height(captchaHeight);
                captchaResized = false;
            }
        } else {
            var scale = (1 - (captchaWidth - captchaWrapper.width()) * (0.05/15));
            captchaElements.css('transform', 'scale('+scale+')').css('-webkit-transform', 'scale('+scale+')').css('-ms-transform', 'scale('+scale+')').css('-o-transform', 'scale('+scale+')').css('transform-origin', '0 0').css('-webkit-transform-origin', '0 0').css('-ms-transform-origin', '0 0').css('-o-transform-origin', '0 0');
            captchaWrapper.height(captchaHeight * scale);
            if (captchaResized == false) captchaResized = true;
        }
    }
    </script>


    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="node_modules/jarallax/dist/jarallax.min.js"></script>
    <script src="node_modules/owl.carousel/dist/owl.carousel.min.js"></script>
    <script src="https://www.google.com/recaptcha/api.js"></script>
    <script src="assets/js/main.js"></script>
  </body>
</html>
