<?php 
include 'config/connect.php';
// echo($_GET['id']);
if (isset($_GET['id'])) {
	$req=$db->prepare('DELETE FROM image_box WHERE ID=:ID');

	$req->execute(array(
	'ID'=> $_GET['id'] ));

	if ($req) {
		header('location:image.php');
	}else{
		echo "err";
	}
}