<?php
require "include/conn.php";
$id = $_POST['id_criteria'];
$criteria = $_POST['criteria'];
$weight = $_POST['weight'];

$sql = "UPDATE `saw_criterias` SET `criteria`='$criteria',`weight`='$weight' WHERE `id_criteria`='$id'";
$result = $db->query($sql);
header("location:./bobot.php");
