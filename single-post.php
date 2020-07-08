<?php include("path.php"); ?>
<?php include(ROOT_PATH . "/app/controllers/posts.php");

if (isset($_GET['id'])){
  $post = selectOne('posts', ['id' => $_GET['id']]);

}
$topics = selectAll('topics');

$posts = selectAll('posts', ['published' =>1]);





?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <!-- Custom Styles -->
  <link rel="stylesheet" href="assets/css/style.css">
  <title><?php echo $post ['title'];?> | Achraf-Blog</title>
</head>
<body>

<?php include(ROOT_PATH . "/app/includes/header.php"); ?>

  <!-- Page wrapper -->
  <div class="page-wrapper">
    <!-- content -->
    <div class="content clearfix">
      <div class="page-content single">
        <h2 style="text-align: center;"><?php echo $post ['title'];?></h2>
        <br>
        <?php echo html_entity_decode($post['body']); ?>
      </div>
      <div class="sidebar single">
        <!-- Popular Posts -->
        <div class="section popular">
          <h2>Popular</h2>

          <?php foreach ($posts as $p): ?>
            <div class="post clearfix">
            <img src="<?php echo BASE_URL . '/assets/images/' . $p['image'] ?>">
            <a href="#" class="title"><?php echo $p['title'] ?></a>
          </div>
          <?php endforeach; ?>

        </div>
        <!-- // Popular Posts -->
        <!-- topics -->
        <div class="section topics">
          <h2>Categories</h2>
          <ul>
            <?php foreach ($topics as $topic): ?>
            <a href="<?php echo BASE_URL . '/index.php?t_id=' . $topic['id'] . '$name=' . $topic['name'] ?>">
              <li><?php echo $topic['name']; ?></li>
            </a>
            <?php endforeach; ?>
          </ul>
        </div>
        <!-- // topics -->
      </div>
    </div>
    <!-- // content -->
  </div>
  <!-- // page wrapper -->
  <!-- FOOTER -->
  <?php include(ROOT_PATH . "/app/includes/footer.php"); ?>
  <!-- // FOOTER -->
  <!-- JQuery -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <!-- Slick JS -->
  <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
  <script src="assets/js/scripts.js"></script>
</body>
</html>