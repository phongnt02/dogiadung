<?php
    require '../../../connect/database.php';
    require '../../../models/blog.php';

    $blog_list = get_blog_list($conn);
    require '../../../view/--admin/blog/blog.php';

?>