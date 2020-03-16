<?php
include 'header.php';
$gallery = $db->get_galla($_GET['id']);
$info = mysqli_fetch_assoc($db->object_data($_GET['id']));

include 'galla.php';
include 'footer.php';
?>
