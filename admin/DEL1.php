<?php 
include 'config/connect.php';
// echo($_GET['id']);
if (isset($_GET['id'])) {
	$req=$db->prepare('DELETE FROM BOX2 WHERE ID=:id');

	$req->execute(array(
	'id'=> $_GET['id'] ));

	if ($req) {
		header('location:ajout-box1.php');
	}else{
		echo "err";
	}
}

