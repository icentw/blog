<?php 
    require_once ('php/connect.php');
    // $sql = " SELECT * FROM `articles` WHERE `status` = 'true' ORDER BY RAND() LIMIT 6";
    $sql = "SELECT * FROM articles where id = '".$_GET['id']."' AND `status` = 'true'";
    $result = $conn->query($sql) or die ($conn->error);
    if($result-> num_rows >0){
      $row = $result->fetch_assoc();
    }
    else{
      header( 'location: blog.php' );
    }
    $sql_rand = " SELECT * FROM `articles` WHERE `status` = 'true' ORDER BY RAND() LIMIT 6";
    $result_rand = $conn->query($sql_rand);

    // if($result_rand->num_rows > 0){
    //   $row_rand = $result_rand->fetch_assoc();
    // }

    //echo '<pre>',print_r($row_rand),'</pre>'
?>
<!DOCTYPE html>
<html lang="en">
  
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />

    <!-- SEO -->
    <meta name="title" content="HTML คืออะไร">
    <meta name="description" content="เขียนเว็บไซต์">
    <meta name="keywords" content="เขียนเว็บไซต์,html,css,javascript">
    <meta name="robots" content="index, follow">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    <!-- CSS -->
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="node_modules/@fortawesome/fontawesome-free/css/all.min.css"/>
    <link rel="stylesheet" href="node_modules/owl.carousel/dist/assets/owl.carousel.min.css" />
    <link rel="stylesheet" href="node_modules/owl.carousel/dist/assets/owl.theme.default.min.css">
    <title><?php echo$row['subject']?></title>
    
  </head>
  <body>
    <!--section navbar -->
    <?php include_once('includes/navbar.php');?>

    <!-- section page-tittle -->
    <header data-speed="0.5" class="jarallax" style="background-image: url('https://images.unsplash.com/photo-1537498425277-c283d32ef9db?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1357&q=80');">
        <div class="page-image">
            <h1 class="display-4 font-weight-bold"><?php echo$row['subject']?></h1>
            <p class="lead"><?php echo$row['sub_title']?></p>
        </div>
    </header>

    <!-- Section Blog -->
    <div class="container blog-contemt">
    
        <div class="row">
            <div class="col-12">
              <?php echo$row['detail']?>
            </div>
        </div>
        <div class="col-12">
          <hr>
          <p class="text-right text-muted"><?php  echo date_format(new datetime ($row['update_at']),"j F Y");?></p>
        </div>

        <div class="col-12">
          <div class="owl-carousel owl-theme">
            <?php while($row_rand = $result_rand->fetch_assoc()) {  ?>
            <section class="col-12 p-2">
              <div class="card h-100">
                <a href="blog-detail.php?id=<?php echo $row_rand['id'] ?>" class="warpper-card-img">
                  <img class="card-img-top" src=<?php echo $base_path_blog.$row_rand['image'] ?> alt="Coding" />
                </a>
                <div class="card-body">
                  <h5 class="card-title"><?php echo $row_rand['subject'] ?></h5>
                  <p class="card-text"> <?php echo $row_rand['sub_title'] ?></p>
                </div>
                <div class="p-3">
                  <a href="blog-detail.php?id=<?php echo $row_rand['id'] ?>" class="btn btn-primary btn-block">อ่านเพิ่มเติม</a>
                </div>
              </div>
            </section>
            <?php } ?>
          </div>
        </div>
    </div>

    <!-- Section Footer -->
    <?php include_once('includes/footer.php'); ?>


    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="node_modules/jarallax/dist/jarallax.min.js"></script>
    <script src="node_modules/owl.carousel/dist/owl.carousel.min.js"></script>
    <script src="assets/js/main.js"></script>

    <script>
    $(document).ready(function(){
      $('.owl-carousel').owlCarousel({
        loop: true,
        nav:false,
        dots:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:3
            }
        }
      });
    });
    </script>
  </body>
</html>
