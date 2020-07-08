<?php include("path.php");

include(ROOT_PATH . "/app/controllers/topics.php");
$post =array();
$postsTitle = 'Recent Posts';

if (isset($_POST['search-term'])){
  $postsTitle = "You searched for '" . $_POST['search-term'] . "'";
  $posts = searchPosts($_POST['search-term']);
}
else{
  $posts = getPublishedPosts();
}





 ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <!-- Font Awesome -->
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
        <link rel="stylesheet" href="assets/css/style.css">
        <title>Achraf Blog</title>

        <!-- Bootstrap core CSS -->
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>

        <?php include(ROOT_PATH . "/app/includes/header.php"); ?>
        <?php include(ROOT_PATH . "/app/includes/messages.php"); ?>

        <!-- Page wrapper -->
        <div class="page-wrapper">
            <!-- Posts Slider -->
            <div class="posts-slider">
                <h1 class="slider-title">Trending Posts</h1>
                <i class="fa fa-chevron-right next"></i>
                <i class="fa fa-chevron-left prev"></i>
                <div class="posts-wrapper">

                    <?php foreach ($posts as $post): ?>
                    <div class="post">
                        <div class="inner-post">
                            <img
                                src="<?php echo BASE_URL . '/assets/images/' . $post['image']; ?>"
                                alt=""
                                style="height: 200px; width: 100%; border-top-left-radius: 4px; border-top-right-radius: 4px;">
                            <div class="post-info">
                                <h4>
                                    <a href="single-post.php"><?php echo $post ['title']; ?></a>
                                </h3>
                                <div>
                                    <i class="fa fa-user-o"></i>
                                    <?php echo $post['username']; ?> &nbsp;
                                    <i class="fa fa-calendar"></i>
                                    <?php echo date('F j. Y' , strtotime($post['create_at'])); ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php endforeach; ?>
                </div>
            </div>
        </div>

        <!-- Page Content -->
        <div class="container">

            <div class="row">

                <!-- Blog Entries Column -->
                <div class="col-md-8">

                    <h1 class="my-4"><?php echo $postsTitle ?></h1>

                    <?php foreach ($posts as $post): ?>

                    <!-- Blog Post -->
                    <div class="card mb-4">
                        <img
                            class="card-img-top"
                            src="<?php echo BASE_URL . '/assets/images/' . $post['image']; ?>"
                            alt="Card image cap">
                        <div class="card-body">
                            <a href="single-post.php">
                                <h2 class="card-title"><?php echo $post ['title']; ?></h2>
                            </a>
                            <p class="card-text"><?php echo html_entity_decode( substr($post['body'], 0, 150) . '...') ?></p>
                            <a href="single-post.php" class="btn btn-primary">Read More &rarr;</a>
                        </div>
                        <div class="card-footer text-muted">
                            Posted on
                            <?php echo date('F j. Y' , strtotime($post['create_at'])); ?>
                            <a href="#"><?php echo $post['username']; ?></a>
                        </div>
                    </div>

                    <? endforeach; ?>

                </div>

                <!-- Sidebar Widgets Column -->
                <div class="col-md-4">

                    <!-- Search Widget -->
                    <!-- <div class="card my-4">
                        <h5 class="card-header">Search</h5>
                        <div class="card-body">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search for...">
                                <span class="input-group-append">
                                    <button class="btn btn-secondary" type="button">Go!</button>
                                </span>
                            </div>
                        </div>
                    </div> -->

                    <!-- Search -->
<div class="search-div">

    <form action="index.php" method="post">
        <input
            type="text"
            name="search-term"
            class="text-input"
            placeholder="Search..."></form>
    </div>
        <!-- // Search -->

                    <!-- Categories Widget -->
                    <div class="card my-4">
                        <h5 class="card-header">Categories</h5>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <ul class="list-unstyled mb-0">
                                        <?php foreach ($topics as $key => $topic): ?>
                                        <li>
                                            <a href="#"><?php echo $topic ['name']; ?></a>
                                        </li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Side Widget -->

                </div>

            </div>
            <!-- /.row -->

        </div>
        <!-- /.container -->
        <?php include(ROOT_PATH . "/app/includes/footer.php"); ?>

        <!-- JQuery -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

        <!-- Slick JS -->
        <script
            type="text/javascript"
            src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
        <script src="assets/js/script.js"></script>

    </body>
</html>