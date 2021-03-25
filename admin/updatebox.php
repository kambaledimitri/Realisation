<?php  

 
include 'config/connect.php';
if (isset($_POST['insert'])) {
  if (isset($_POST['id_b']) AND isset($_POST['Titre']) AND isset($_POST['Description'])AND isset($_POST['ICON'])) {
    $ID=htmlspecialchars($_POST['id_b']);
    $TITRE=htmlspecialchars($_POST['Titre']);
    $DESCRIPTION=htmlspecialchars($_POST['Description']);
    $ICON=htmlspecialchars($_POST['ICON']);
  
        $req=$db->prepare("UPDATE BOX1 SET TITRE=:TITRE, DESCRIPTION=:DESCRIPTION, ICON=:ICON WHERE ID=:ID");
            $req->execute(array(
              'ID'=>$ID,
            'TITRE' =>$TITRE,
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