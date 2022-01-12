<?php
include 'db.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    include 'header.php';

    ?>

    <main role="main" class="container">

        <div class="row">

            <?php

            $sql = "SELECT * FROM posts ORDER BY created_at DESC ";
            $posts = getAllData($connection, $sql);
            ?>

            <?php foreach ($posts as $post) {
            ?>


                <div class="col-sm-8 blog-main">

                    <div class="blog-post">
                        <h2 class="blog-post-title"><a href="single-post.php?post_id=<?php echo ($post['id']) ?>"><?php echo ($post['title']) ?></a></h2>
                        <div><?php echo ($post['created_at']) ?>. by <a href=""><?php echo ($post['author']) ?></a></div>
                        <p class="blog-post-meta"> <?php echo ($post['body']) ?></p>

                    </div><!-- /.blog-post -->

                <?php } ?>
                <nav class="blog-pagination">
                    <a class="btn btn-outline-primary" href="#">Older</a>
                    <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
                </nav>

                </div><!-- /.blog-main -->

    </main>


    <?php
    include 'footer.php';
    include 'sidebar.php'; ?>

</body>

</html>