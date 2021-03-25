<?php 
include 'config/connect.php';
// echo($_GET['id']);
if (isset($_GET['id'])) {
	$req=$db->prepare('DELETE FROM team WHERE id=:id');

	$req->execute(array(
	'id'=> $_GET['id'] ));

	if ($req) {
		 header('location:ajout-Membre.php');
	}else{
		echo "err";
	}
}