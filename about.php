<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="node_modules/@fortawesome/fontawesome-free/css/all.min.css"/>
    <title>About</title>
  </head>
  <body>
    <!--section navbar -->
    <?php include_once('includes/navbar.php');?>

    <!-- section page-tittle -->
    <header data-jarallax='{"speed":0.4}' class="jarallax" style="background-image: url('https://images.unsplash.com/photo-1537498425277-c283d32ef9db?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1357&q=80');">
      <div class="page-image">
          <h1 class="display-4 font-weight-bold">Website</h1>
          <p class="lead">ภาษา PHP</p>
      </div>
  </header>

    <!-- section TODO-->
    <section class="container py-5">
      <div class="row">
        <div class="col-lg-6 p-lg-0">
          <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/ioNng23DkIM" frameborder="0" allowfullscreen=""></iframe>
          </div>
          
        </div>

        <div class="col-lg-6 p-lg-1">
          <h2>Lorem</h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus vel fugit consectetur, pariatur aspernatur necessitatibus at culpa a, numquam voluptatem veniam rerum? Maxime, numquam cupiditate eum atque reiciendis reprehenderit ipsum.</p>
          <br>
          <h3>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsum, enim aliquam vitae totam officiis, perspiciatis</h3>
        </div>

      </div>
    </section>

    <!-- section timeline -->
    <section
      data-jarallax='{"speed":0.4}'
      class="position-relative py-5 jarallax"
      style="background-image: url('https://scontent.fbkk12-4.fna.fbcdn.net/v/t1.0-9/77100915_116120149821485_1029812473294749696_n.png?_nc_cat=103&_nc_sid=e3f864&_nc_eui2=AeGusI9FgdL2KbTPnU8DAKRx_A6C0RHAN4P8DoLREcA3gxa3K8naOTen9p-uIygAstxgd7AeFdWOtAM4O58wyFZa&_nc_ohc=Fl5z227kp1cAX8RTy7k&_nc_ht=scontent.fbkk12-4.fna&oh=3c77f0c4abec13b41a1308b8502a22bc&oe=5F50B398');">
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

    <!-- section timeline -->
    <section class="container py-5">
      <div class="row">
        <div class="col-12">
          <ul class="timeline">
            <li>
              <div class="timeline-badge">
                <p>28 Mar 1995</p>
              </div>
              <div class="timeline-card">
                <h5>Birthday</h5>
                <p class="text-muted">เกิดวันที่ 28 มีนาคม 2538</p>
              </div>
            </li>
            <li class="inverted">
              <div class="timeline-badge">
                <p>28 Mar 1995</p>
              </div>
              <div class="timeline-card">
                <h5>Birthday</h5>
                <p class="text-muted">เกิดวันที่ 28 มีนาคม 2538</p>
              </div>
            </li>
            <li class="timeline-arrow">
              <i class="fa fa-chevron-down"></i>
            </li>
          </ul>
        </div>
      </div>
    </section>

    <!-- section About -->
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
            <div class="star-rating">
              <span>☆</span>
              <span>☆</span>
              <span>☆</span>
              <span>☆</span>
              <span>☆</span>
                <div class="star-current" style="width: 50%;">
                  <span>★</span>
                  <span>★</span>
                  <span>★</span>
                  <span>★</span>
                  <span>★</span>
                </div>
            </div>
              
          </div>
        </div>
      </div>
    </section>

    <!-- Section Footer -->
    <footer class="semi-footer p-5 text-center text-md-left">
      <div class="row">
        <div class="col-md-4">
          <a class="navbar-brand" href="#">
            <img
              src="assets/image/logo.png"
              width="30"
              height="30"
              class="d-inline-block align-top"
              alt="logo"
            />
            Shop
          </a>
          <p>
            <i class="fas fa-phone-square-alt"></i> 088-111-1111<br />
            <i class="far fa-envelope"></i> Email email@exaple.com <br />
            <i class="far fa-comment-alt"></i> Lorem ipsum dolor sit amet
            consectetur adipisicing elit.<br />
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
            <li class="nav-item active">
              <a class="nav-link" href="about.php">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="blog.php">Blog</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.php">Contact</a>
            </li>
          </ul>
        </div>
        <div class="col-md-4">
          <h4>แผนที่</h4>
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d971.2471258354161!2d100.9259284669885!3d13.16312476505518!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3102b7048dc387e5%3A0x7cdbb0b57b910c53!2z4Lij4LmJ4Liy4LiZ4LiC4LiZ4LihLeC4meC4oS3guYDguJnguKI!5e0!3m2!1sth!2sth!4v1594738019612!5m2!1sth!2sth"
            width="100%"
            height="250"
            frameborder="0"
            style="border: 0;"
            allowfullscreen=""
            aria-hidden="false"
            tabindex="0"
          ></iframe>
        </div>
      </div>
    </footer>
    <footer>
      <span></span>
    </footer>

    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="node_modules/jarallax/dist/jarallax.min.js"></script>
    <script src="assets/js/main.js"></script>
  </body>
</html>