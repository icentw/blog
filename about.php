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
    <header data-speed="0.5" class="jarallax" style="background-image: url('https://images.unsplash.com/photo-1537498425277-c283d32ef9db?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1357&q=80');">
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
      data-speed="0.5"
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

    <!-- Section Footer -->
    <?php include_once('includes/footer.php'); ?>

    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="node_modules/jarallax/dist/jarallax.min.js"></script>
    <script src="assets/js/main.js"></script>
  </body>
</html>
