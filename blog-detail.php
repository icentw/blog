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
            <h1 class="display-4 font-weight-bold">Website</h1>
            <p class="lead">Language</p>
        </div>
    </header>

    <!-- Section Blog -->
    <div class="container blog-contemt">
    
        <div class="row">
            <div class="col-12">
              <h2><strong>HTML คืออะไร</strong></h2>

                <p><strong>HTML5</strong>&nbsp;คือ ภาษามาร์กอัป ที่ใช้สำหรับเขียน website &nbsp;ซึ่ง&nbsp;HTML5&nbsp;นี้เป็นภาษาที่ถูกพัฒนาต่อมาจากภาษา HTML และพัฒนาขึ้นมาโดย WHATWG (The Web Hypertext Application Technology Working Group) โดยได้มีการปรับเพิ่ม Feature หลายๆอย่างเข้ามาเพื่อให้ผู้พัฒนาสามารถใช้งานได้ง่ายมากยิ่งขึ้น</p>
                
                <h2>ข้อดีของ HTML5</h2>
                
                <ol>
                    <li>เว็บไซต์ที่สร้างจากภาษา&nbsp;<strong>HTML5&nbsp;</strong>สามารถแสดงผลได้กับทุก web browser&nbsp;</li>
                    <li><strong>HTML5&nbsp;</strong>จะช่วยลดการใช้พวกปลั๊กอินพิเศษอย่างพวก Adobe Flash, Microsoft Silverlight, Apache Pivot สนับสนุน วิดีโอ และ องค์ประกอบเสียง รวมทั้ง สื่อมัลติมีเดียต่างๆมากขึ้น โดยไม่ต้องใช้ Flash</li>
                    <li>มีการจัดการข้อผิดพลาดที่ดีขึ้น</li>
                    <li>สคริปต์ใหม่ ที่จะมาแทนที่สคริปต์เดิม (เขียนโค้ดสั้นลง)</li>
                    <li><strong>HTML5&nbsp;</strong>มีความเป็นอิสระสูง (คล้ายๆ XML )</li>
                    <li><strong>HTML5&nbsp;</strong>ทำงานควบคู่กับ CSS3 ได้ดี ช่วยให้สามารถเพิ่มลูกเล่นต่างๆบนเว็บไซต์ได้สวยงามมากยิ่งขึ้น (CSS คือส่วนแสดงผล ที่นักออกแบบสามารถกำหนดสีสัน ตำแหน่ง ลักษณะเวลานำเมาส์ไปแหย่แล้วมีกระต่ายโผล่ออกมาจากโพรง หรือจับก้อนวัตถุในหน้าเว็บฯ ให้ชิดซ้ายชิดขวา ส่วน CSS3 คือเวอร์ชั่นที่ 3 ของ CSS )</li>
                </ol>
                
                <h2>Features ใหม่ๆ ของ HTML5</h2>
                
                <ol>
                    <li>Semantic Markup : การเพิ่ม Element ที่ อ่านง่ายมากขึ้น และช่วยให้ เราทำ SEO ได้มีประสิทธิภาพมากยิ่งขึ้น</li>
                    <li>Form Enhancements : เพิ่มความสามารถของ Form ต่างๆ ไม่ว่าจะเป็น Input type, Attribute หรือ แม้แต่ Element</li>
                    <li>Audio / Video: รองรับการอ่านไฟล์เสียง และ วีดีโอ โดยไม่จำเป็นต้องใช้ Embed Code ของ Third Party</li>
                    <li>Canvas : ใช้ในการวาดรูป โดยจำเป็นต้องใช้ Javascriptช่วย</li>
                    <li>ContentEditable : สามารถแก้ไข Content ได้โดยตรงผ่านทางหน้าเว็บ</li>
                    <li>Drag and Drop : ลากวางObject ได้ เพื่อเพิ่มการ ตอบสนองระหว่างระบบกับผู้ใช้</li>
                    <li>Persistent Data Storage : มีการจัดการที่ดีขึ้น โดยเก็บข้อมูลลงบนเครื่องของผู้ใช้&nbsp;</li>
                </ol>
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
      data-speed="0.5"
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
