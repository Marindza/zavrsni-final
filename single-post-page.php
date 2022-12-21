<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "blog";

    $connection = mysqli_connect($servername,$username,$password,$dbname);

    if (!$connection){
        die("Failed");
    }

    $sqlPost = "SELECT * FROM `posts` WHERE id = ".$_GET['id'];
    $resultPost = mysqli_query($connection, $sqlPost);
    $rowPost = mysqli_fetch_assoc($resultPost);

    $sqlComment = "SELECT * FROM `comments` WHERE post_id = ".$_GET['id'];
    $resultComment = mysqli_query($connection, $sqlComment);
    mysqli_close($connection);
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" href="favicon.ico">
    <title>Vivify Academy Blog - Post</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

    <link rel="stylesheet" href="styles/blog.css">
</head>
<body>

    <?php include('header.php') ?>

    <main role="main" class="container">

    <div class="row">
        <div class="col-sm-8 blog-main">
            <?php include('single-post.php') ?>
            <?php include('comments.php') ?>
        </div><!-- /.blog-main -->

        <?php include('sidebar.php'); ?>

    </div><!-- /.row -->

</main><!-- /.container -->

    <?php include('footer.php'); ?>

</body>
</html>