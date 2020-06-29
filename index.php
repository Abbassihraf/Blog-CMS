<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Achraf Blog</title>
</head>
<body>
     <!-- header -->
  <header class="clearfix">
    <div class="logo">
      <a href="index.php">
        <h1 class="logo-text"><span>Ach</span>raf</h1>
      </a>
    </div>
    <div class="fa fa-reorder menu-toggle"></div>
    <nav>
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Services</a></li>
        <!-- <li><a href="register.php">Sign up</a></li>
        <li>
          <a href="login.php">
            <i class="fa fa-sign-in"></i>
            Login
          </a>
        </li> -->
        <li>
          <a href="#" class="userinfo">
            <i class="fa fa-user"></i>
            Awa Melvine
            <i class="fa fa-chevron-down"></i>
          </a>
          <ul class="dropdown">
            <li><a href="admin/posts/index.php">Dashboard</a></li>
            <li><a href="#" class="logout">logout</a></li>
          </ul>
        </li>
      </ul>
    </nav>
  </header>
  <!-- // header -->

   <!-- Posts Slider -->
   <div class="posts-slider">
      <h1 class="slider-title">Trending Posts</h1>
      <i class="fa fa-chevron-right next"></i>
      <i class="fa fa-chevron-left prev"></i>
      <div class="posts-wrapper">
        <div class="post">
          <div class="inner-post">
            <img src="assets/images/image_7.png" alt="" style="height: 200px; width: 100%; border-top-left-radius: 5px; border-top-right-radius: 5px;">
            <div class="post-info">
              <h4><a href="single.php">One day your life will flash before your eyes</a></h3>
                <div>
                  <i class="fa fa-user-o"></i> Awa Melvine
                  &nbsp;
                  <i class="fa fa-calendar"></i> Jan 18, 2019
                </div>
            </div>
          </div>
        </div>
        <div class="post">
          <div class="inner-post">
            <img src="assets/images/image_6.png" alt="" style="height: 200px; width: 100%; border-top-left-radius: 5px; border-top-right-radius: 5px;">
            <div class="post-info">
              <h4><a href="single.php">One day your life will flash before your eyes</a></h3>
                <div>
                  <i class="fa fa-user-o"></i> Awa Melvine
                  &nbsp;
                  <i class="fa fa-calendar"></i> Jan 18, 2019
                </div>
            </div>
          </div>
        </div>
        <div class="post">
          <div class="inner-post">
            <img src="assets/images/image_5.png" alt="" style="height: 200px; width: 100%; border-top-left-radius: 5px; border-top-right-radius: 5px;">
            <div class="post-info">
              <h4><a href="single.php">One day your life will flash before your eyes</a></h3>
                <div>
                  <i class="fa fa-user-o"></i> Awa Melvine
                  &nbsp;
                  <i class="fa fa-calendar"></i> Jan 18, 2019
                </div>
            </div>
          </div>
        </div>
        <div class="post">
          <div class="inner-post">
            <img src="assets/images/image_4.png" alt="" style="height: 200px; width: 100%; border-top-left-radius: 5px; border-top-right-radius: 5px;">
            <div class="post-info">
              <h4><a href="single.php">One day your life will flash before your eyes</a></h4>
              <div>
                <i class="fa fa-user-o"></i> Awa Melvine
                &nbsp;
                <i class="fa fa-calendar"></i> Jan 18, 2019
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- // Posts Slider -->

</body>
</html>