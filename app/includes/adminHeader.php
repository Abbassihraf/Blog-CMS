<header class="clearfix">
    <a href="<?php echo BASE_URL . '/index.php'; ?>" class="logo">
    <h1 class="logo-text"><span>Ach</span>raf</h1>
    </a>
    <div class="fa fa-reorder menu-toggle"></div>
    <nav>
      <?php if(isset($_SESSION['id'])): ?>
      <ul>
        <li><a href="#">Home</a></li>
        <li>
          <a href="#" class="userinfo">
            <i class="fa fa-user"></i>
            <?php echo $_SESSION['username']; ?>
            <i class="fa fa-chevron-down"></i>
          </a>
          <ul class="dropdown">
            <li><a href="<?php echo BASE_URL . '/logout.php' ;?>" class="logout">logout</a></li>
          </ul>
        </li>
<?php endif; ?>
      </ul>
    </nav>
  </header>