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
            <h1 class="display-4 font-weight-bold">Website</h1>
            <p class="lead">Language</p>
        </div>
    </header>

    <!-- Section Blog -->
    <div class="container blog-contemt">
        <div class="row">
            <div class="col-12">
                HTML คือ ภาษาหลักที่ใช้ในการเขียนเว็บเพจ โดยใช้ Tag ในการกำหนดการแสดงผล HTML ย่อมาจากคำว่า Hypertext Markup Language โดย Hypertext หมายถึง ข้อความที่เชื่อมต่อกันผ่านลิ้ง (Hyperlink) Markup language หมายถึงภาษาที่ใช้ Tag ในการกำหนดการแสดงผลสิ่งต่างๆที่แสดงอยู่บนเว็บเพจ ดังนั้น HTML จึงหมายถึง ภาษาที่ใช้ Tag ในการกำหนดการแสดงผลเว็บเพจที่ต่างก็เชื่อมถึงกันใน Hyperspace ผ่าน Hyperlink นั่นเอง
ความเป็นมาของ HTML เริ่มขึ้นเมื่อปี 1980 เมื่อ Tim Berners Lee เสนอต้นแบบสำหรับนักวิจัยใน CERN เพื่อแลกเปลี่ยนเอกสาร ข้อมูลด้านการวิจัย โดยใช้ชื่อว่า Enquire ในปี 1990 เค้าได้เขียนโปรแกรมเบราเซอร์ และทดลองรันบนเซิฟเวอร์ที่เค้าพัฒนาขึ้น HTML ได้รับการรู้จักจาก HTML Tag ซึ่งมีอยู่ 18 Tag ในปี 1991
HTML ถูกพัฒนาจาก SGML และ Tim ก็คิดเสมือนว่า HTML เป็นโปรแกรมย่อยของ SGML อยู่ในตอนนั้น ต่อมาในปี 1996 เพื่อกำหนดมาตรฐานให้ตรงกัน W3C World Wide Web Consortium จึงเป็นผู้กำหนดสเปกทั้งหมดของ HTML และปี 1999 HTML 4.01 ก็ถือกำเนิดขึ้น โดยมี HTML 5 ซึ่งเป็น Web Hypertext Application ถูกพัฒนาต่อมาในปี 2004 นอกจากนี้ยังมีการพัฒนาไปเป็น XHTML ซึ่ง คือ Extended HTMLซึ่งมีความสามารถและมาตรฐานที่รัดกุมกว่าอีกด้วย
            </div>
        </div>
        <div class="col-12">
          <hr>
          <p class="text-right text-muted">14 Feb 2020</p>
        </div>
        <div class="col-12">
          <div class="owl-carousel owl-theme">
            <section class="col-12 p-2">
              <div class="card h-100">
                <a href="#" class="warpper-card-img">
                  <img
                    class="card-img-top"
                    src="https://www.itgenius.co.th/assets/frondend/images/picarticle/5-2-2558%2010-34-1214231087132805.png"
                    alt="Coding"
                  />
                </a>
                <div class="card-body">
                  <h5 class="card-title">HTML5</h5>
                  <p class="card-text">
                    Some quick example text to build on the card title
                  </p>
                </div>
                <div class="p-3">
                  <a href="blog-detail.php" class="btn btn-primary btn-block">อ่านเพิ่มเติม</a>
                </div>
              </div>
            </section>
            <section class="col-12 p-2">
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
            <section class="col-12 p-2">
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
            <section class="col-12 p-2">
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
            <section class="col-12 p-2">
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
            <section class="col-12 p-2">
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
          </div>
        </div>
    </div>
    
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