<?php  
include 'config/connect.php';

if (isset($_POST['insert'])) {
  if (isset($_POST['ICON']) AND isset($_POST['TITRE']) AND isset($_POST['DESCRIPTION'])) {
    $ICON=htmlspecialchars($_POST['ICON']);
  $TITRE=htmlspecialchars($_POST['TITRE']);
  $DESCRIPTION=htmlspecialchars($_POST['DESCRIPTION']);
       $req = $db->prepare('INSERT INTO BOX1 (TITRE,DESCRIPTION,ICON) VALUES (:TITRE,:DESCRIPTION,:ICON)');
       $req->execute(array(

            'TITRE' => $TITRE,
            'DESCRIPTION' =>$DESCRIPTION,
            'ICON' =>$ICON));

       if ($req) {
    header('location:ajout-box.php');
  }else{
    echo "err";
  }
  }
}

?>