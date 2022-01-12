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


    <main role="main" class="container">

        <?php include 'header.php'; ?>

        <?php
        if (isset($_GET['post_id'])) {

            $sql = "SELECT * FROM posts WHERE id = {$_GET['post_id']}";
            $singlePost = getData($connection, $sql);



        ?>

            <div class="row">

                <div class="col-sm-8 blog-main">

                    <div class="blog-post">
                        <h2 class="blog-post-title"><?php echo ($singlePost['title']) ?></h2>
                        <p class="blog-post-meta"><?php echo ($singlePost['created_at']) ?>. by <a href="#"><?php echo ($singlePost['author']) ?></a></p>
                        <div><strong><?php echo ($singlePost['body']) ?></strong></div>
                    </div><!-- /.blog-post -->

                <?php
            } else {
                echo 'post nije pronadjen';
            }
                ?>
    </main>

    <?php
    include 'sidebar.php';
    include 'footer.php';
    ?>

</body>

</html>