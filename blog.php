<?php
  require_once('php/connect.php');

  $sql = "SELECT * FROM articles";
  $result = $conn->query($sql) or die($conn->error);
  
  // print_r($result);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="node_modules/@fortawesome/fontawesome-free/css/all.min.css"/>
    <title>Blog</title>
    
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

    <!-- Section Blog -->
    <section class="container">
      <h1 class="border-short-bottom text-center">บทความ Blog</h1>

      <div class="row pb-4">
        <div class="col-12 text-center">
            <div class="btn-group-custom">
                <a href="blog.html?tag=all">
                    <button class="btn btn-primary active">ทั้งหมด</button>
                </a>
                <a href="blog.html?tag=html">
                    <button class="btn btn-primary">HTML</button>
                </a>
                <button class="btn btn-primary">CSS</button>
                <button class="btn btn-primary">Javascript</button>
                <button class="btn btn-primary">PHP</button>
                <button class="btn btn-primary">MySQL</button>
            </div>
        </div>
     </div>

      <div class="row pd-4">
      <?php while($row = $result->fetch_assoc()) { ?>
        <section class="col-12 col-sm-6 col-md-4 p-2">
            <div class="card h-100">
              <a href="blog-detail.php?id= <?php echo $row['id'] ?>" class="warpper-card-img">
                <img
                  class="card-img-top"
                  src=<?php echo $row['image'] ?>
                  alt="Coding"
                />
              </a>
              <div class="card-body">
                <h5 class="card-title"><?php echo $row['subject'] ?></h5>
                <p class="card-text">
                <?php echo $row['sub_title'] ?>
                </p>
              </div>
              <div class="p-3">
                <a href="blog-detail.php?id= <?php echo $row['id'] ?>" class="btn btn-primary btn-block">อ่านเพิ่มเติม</a>
              </div>
            </div>
        </section>
      <?php } ?>

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
