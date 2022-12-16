<div class="blog-post">
    <h2 class="blog-post-title"><?php echo $row['title'] ?></h2>
    <p class="blog-post-meta"><?php echo $row['created_at'] ?> by <a href="#"><?php echo $row['author'] ?></a></p>

    <?php echo $row['body'] ?>
</div><!-- /.blog-post -->