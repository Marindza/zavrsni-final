<h4>Comments</h4>
<ul>
    <?php
        while($rowComment = mysqli_fetch_assoc($resultComment)) {
            include('comment.php');
        }
    ?>
</ul> 

