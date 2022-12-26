<?php
    require '../../../connect/database.php';
    require '../../../models/slider.php';

    $slider_list = get_slider_list($conn);
    require '../../../view/--admin/slider/slider.php';

?>