<div class="col-sm-8 blog-main">
    <?php
        while($row = mysqli_fetch_assoc($result)) {
            include('single-post.php');
        }
    ?>

    <nav class="blog-pagination">
        <a class="btn btn-outline-primary" href="#">Older</a>
        <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
    </nav>
</div><!-- /.blog-main -->