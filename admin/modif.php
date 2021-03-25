<?php 
include 'config/connect.php';
// echo($_GET['id']);
if (isset($_GET['id'])) {
	$req=$db->prepare('DELETE FROM banner1 WHERE ID_BANNER1=:id');

	$req->execute(array(
	'id'=> $_GET['id'] ));

	if ($req) {
		echo "valide";
	}else{
		echo "err";
	}
}

