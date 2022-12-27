<?php
function get_barner_list($conn){

    $sql = "SELECT *FROM tbl_slider ";
	$query = mysqli_query($conn, $sql);
    return mysqli_query($conn, $sql);
}
?>