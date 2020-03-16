<?php
include 'header.php';

$info = mysqli_fetch_assoc($db->object_data($_GET['view']));
$img = base64_encode($info['image']);
$details = $db->get_details($_GET['view']);

include 'desc.php';
include 'footer.php';
?>