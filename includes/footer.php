<?php $file_name = basename($_SERVER['SCRIPT_FILENAME'],".php"); ?>

<section data-speed="0.5"
  
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
            <li class="nav-item <?php echo $file_name == 'index' ? 'active' : ''; ?>">
              <a class="nav-link" href="index.php"
                >Home <span class="sr-only">(current)</span></a
              >
            </li>
            <li class="nav-item <?php echo $file_name == 'about' ? 'active' : ''; ?>">
              <a class="nav-link" href="about.php">About</a>
            </li>
            <li class="nav-item <?php echo $file_name == 'blog' || $file_name == 'blog-detail' ? 'active' : ''; ?>">
              <a class="nav-link" href="blog.php">Blog</a>
            </li>
            <li class="nav-item <?php echo $file_name == 'contact' ? 'active' : ''; ?>">
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