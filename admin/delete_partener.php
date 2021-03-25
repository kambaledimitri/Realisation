<?php
include 'config/connect.php';

    $id_partener = $_GET['del'];

    $suppr = $db->prepare("DELETE FROM partenaire WHERE id=:id");
    $res=$suppr->execute(array(
        'id' => $id_partener
    ));
    if($res){
        // echo 'element supprimer';
         header('Location:partenaire.php');
    }else{
        echo 'error';
    }