<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="node_modules/@fortawesome/fontawesome-free/css/all.min.css">
    <title>Home</title>
    
  </head>
  <body>
    <!--section navbar -->
    <?php include_once('includes/navbar.php');?>
    

    <!-- Section Carousel-->
    <section
      id="carouselExampleCaptions"
      class="carousel slide"
      data-ride="carousel"
    >
      <ol class="carousel-indicators">
        <li
          data-target="#carouselExampleCaptions"
          data-slide-to="0"
          class="active"
        ></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div
            class="carousel-img"
            style="
              background-image: url('https://images.unsplash.com/photo-1499673610122-01c7122c5dcb?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1280&q=80');
            "
          >
            <div class="carousel-caption">
              <h1 class="display-4 font-weight-bold">Website</h1>
              <p class="lead">ภาษา PHP</p>
            </div>
            <div class="backscreen"></div>
          </div>
        </div>

        <div class="carousel-item">
          <div
            class="carousel-img"
            style="
              background-image: url('https://images.unsplash.com/photo-1493119508027-2b584f234d6c?ixlib=rb-1.2.1&auto=format&fit=crop&w=1280&q=80');
            "
          >
            <div class="carousel-caption">
              <h1 class="display-4 font-weight-bold">Website</h1>
              <p class="lead">MySQL</p>
            </div>
            <div class="backscreen"></div>
          </div>
        </div>

        <div class="carousel-item">
          <div
            class="carousel-img"
            style="
              background-image: url('https://images.unsplash.com/photo-1527356900876-cae61d8d8462?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1355&q=80');
            "
          >
            <div class="carousel-caption">
              <h1 class="display-4 font-weight-bold">Website</h1>
              <p class="lead">ภาษา JS</p>
            </div>
            <div class="backscreen"></div>
          </div>
        </div>
      </div>
      <a
        class="carousel-control-prev"
        href="#carouselExampleCaptions"
        role="button"
        data-slide="prev"
      >
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a
        class="carousel-control-next"
        href="#carouselExampleCaptions"
        role="button"
        data-slide="next"
      >
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </section>

    <!-- section jumbotron -->
    <section class="jumbotron jumbotron-fluid text-center">
      <div class="container">
        <h1 class="border-short-bottom">Welcome to website</h1>
        <p class="lead">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. In autem ea
          quae exercitationem laboriosam ipsa optio pariatur maxime quidem
          molestias?
        </p>
      </div>
    </section>

    <!-- Section Blog -->
    <section class="container">
      <h1 class="border-short-bottom text-center">บทความ Blog</h1>
      <div class="row">
        <section class="col-12 col-sm-6 col-md-4 p-2">
          <div class="card h-100">
            <a href="#" class="warpper-card-img">
              <img
                class="card-img-top"
                src="assets/image/img1.jpg"
                alt="Coding"
              />
            </a>
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">
                Some quick example text to build on the card title
              </p>
            </div>
            <div class="p-3">
              <a href="#" class="btn btn-primary btn-block">อ่านเพิ่มเติม</a>
            </div>
          </div>
        </section>

        <section class="col-12 col-sm-6 col-md-4 p-2">
          <div class="card h-100">
            <a href="#" class="warpper-card-img">
              <img
                class="card-img-top"
                src="assets/image/img2.jpg"
                alt="Coding"
              />
            </a>
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">
                Some quick example text to build on the card title
              </p>
            </div>
            <div class="p-3">
              <a href="#" class="btn btn-primary btn-block">อ่านเพิ่มเติม</a>
            </div>
          </div>
        </section>

        <section class="col-12 col-sm-6 col-md-4 p-2">
          <div class="card h-100">
            <a href="#" class="warpper-card-img">
              <img
                class="card-img-top"
                src="assets/image/img3.jpg"
                alt="Coding"
              />
            </a>
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">
                Some quick example text to build on the card title
              </p>
            </div>
            <div class="p-3">
              <a href="#" class="btn btn-primary btn-block">อ่านเพิ่มเติม</a>
            </div>
          </div>
        </section>

        <section class="col-12 col-sm-6 col-md-4 p-2">
          <div class="card h-100">
            <a href="#" class="warpper-card-img">
              <img
                class="card-img-top"
                src="assets/image/img4.jpg"
                alt="Coding"
              />
            </a>
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">
                Some quick example text to build on the card title
              </p>
            </div>
            <div class="p-3">
              <a href="#" class="btn btn-primary btn-block">อ่านเพิ่มเติม</a>
            </div>
          </div>
        </section>

        <section class="col-12 col-sm-6 col-md-4 p-2">
          <div class="card h-100">
            <a href="#" class="warpper-card-img">
              <img
                class="card-img-top"
                src="assets/image/img5.jpg"
                alt="Coding"
              />
            </a>
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">
                Some quick example text to build on the card title
              </p>
            </div>
            <div class="p-3">
              <a href="#" class="btn btn-primary btn-block">อ่านเพิ่มเติม</a>
            </div>
          </div>
        </section>

        <section class="col-12 col-sm-6 col-md-4 p-2">
          <div class="card h-100">
            <a href="#" class="warpper-card-img">
              <img
                class="card-img-top"
                src="https://images.unsplash.com/photo-1520085601670-ee14aa5fa3e8?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80"
                alt="Coding"
              />
            </a>
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">
                Some quick example text to build on the card title
              </p>
            </div>
            <div class="p-3">
              <a href="#" class="btn btn-primary btn-block">อ่านเพิ่มเติม</a>
            </div>
          </div>
        </section>
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
            <li class="nav-item active">
              <a class="nav-link" href="#"
                >Home <span class="sr-only">(current)</span></a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Blog</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact</a>
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

    <!-- Section On to top -->
    <div class="to-top">
      <i class="fas fa-angle-up"></i>
    </div>

    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>

    <script src="assets/js/main.js"></script>
  </body>
</html>