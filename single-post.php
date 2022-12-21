<?php 
    if (isset($_GET['id'])) {
        $post = $rowPost;
    } else {
        $post = $row;
    }
?>

<div class="blog-post">
    <a href="single-post-page.php?id=<?php echo $post['id'] ?>">
        <h2 class="blog-post-title"><?php echo $post['title'] ?></h2>
    </a>
    <p class="blog-post-meta"><?php echo $post['created_at'] ?> by <a href="#"><?php echo $post['author'] ?></a></p>

    <?php echo $post['body'] ?>
</div><!-- /.blog-post -->