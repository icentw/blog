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
    <header data-jarallax='{"speed":0.4}' class="jarallax" style="background-image: url('https://images.unsplash.com/photo-1537498425277-c283d32ef9db?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1357&q=80');">
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
    
    <!-- Section About -->
    <section
      data-jarallax='{"speed":0.4}'
      class="position-relative py-5 jarallax"
      style="background-image: url('https://images.unsplash.com/photo-1544652478-6653e09f18a2?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80');">
      <div class="container">
        <div class="row">
          <div class="col-12 text-center">
            <img src="assets/image/logo.png" width="100" height="100" class="d-inline-block align-top" alt="logo">
            <h1 class="text-white display-4 font-weight-bold">Gaming</h1>
            <p class="text-white lead">Gamer</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Section Footer -->
    <footer class="semi-footer p-5 text-center text-md-left">
      <div class="row">
        <div class="col-md-4">
          <a class="navbar-brand" href="#">
            <img src="assets/image/logo.png" width="30" height="30" class="d-inline-block align-top" alt="logo"/>
            Shop
          </a>
          <p>
            <i class="fas fa-phone-square-alt"></i>  088-111-1111<br>
            <i class="far fa-envelope"></i>  Email email@exaple.com <br>
            <i class="far fa-comment-alt"></i>  Lorem ipsum dolor sit amet consectetur adipisicing elit.<br>
            
          </p>
          <a href="http://www.fb.com/netiwat.s" target="_blank">
            <i class="fab fa-facebook"></i>
          </a>
        </div>
        <div class="col-md-4">
          <h4>Menu</h4>
          <ul class="navbar-nav ml-auto text-center">
            <li class="nav-item">
              <a class="nav-link" href="index.php"
                >Home <span class="sr-only">(current)</span></a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.php">About</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="blog.php">Blog</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.php">Contact</a>
            </li>
          </ul>
        </div>
        <div class="col-md-4">
          <h4>แผนที่</h4>
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d971.2471258354161!2d100.9259284669885!3d13.16312476505518!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3102b7048dc387e5%3A0x7cdbb0b57b910c53!2z4Lij4LmJ4Liy4LiZ4LiC4LiZ4LihLeC4meC4oS3guYDguJnguKI!5e0!3m2!1sth!2sth!4v1594738019612!5m2!1sth!2sth" width="100%" height="250" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></div>
      </div>
    </footer>
    <footer>
      <span></span>
    </footer>

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