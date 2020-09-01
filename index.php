<?php
  require_once('php/connect.php');

  $sql = " SELECT * FROM `articles` WHERE `status` = 'true' ORDER BY RAND() LIMIT 6";
  $result = $conn->query($sql);
  
?>
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
        <?php
          while($row = $result->fetch_assoc()) {
        ?>
        <section class="col-12 col-sm-6 col-md-4 p-2">
          <div class="card h-100">
            <a href="blog-detail.php?id=<?php echo $row['id'] ?>" class="warpper-card-img">
              <img class="card-img-top" src=<?php echo $base_path_blog.$row['image'] ?> alt="Coding" />
            </a>
            <div class="card-body">
              <h5 class="card-title"><?php echo $row['subject'] ?></h5>
              <p class="card-text"> <?php echo $row['sub_title'] ?></p>
            </div>
            <div class="p-3">
              <a href="blog-detail.php?id=<?php echo $row['id'] ?>" class="btn btn-primary btn-block">อ่านเพิ่มเติม</a>
            </div>
          </div>
        </section>
          <?php } ?>
      </div>
    </section>

    <!-- Section Footer -->
    <?php include_once('includes/footer.php'); ?>

    <!-- Section On to top -->
    <div class="to-top">
      <i class="fas fa-angle-up"></i>
    </div>

    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="node_modules/jarallax/dist/jarallax.min.js"></script>
    <script src="assets/js/main.js"></script>
  </body>
</html>
