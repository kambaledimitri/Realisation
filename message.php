<?php 
    include 'config/connect.php';

    if (isset($_POST['name']) && ! empty($_POST['name'])) {
       if (isset($_POST['email']) && ! empty($_POST['email'])) {
           if (isset($_POST['sujet']) && ! empty($_POST['sujet'])) {
              if (isset($_POST['message']) && ! empty($_POST['message'])) {
                  $NAME=htmlspecialchars($_POST['name']);
                  $EMAIL=htmlspecialchars($_POST['email']);
                  $SUJET=htmlspecialchars($_POST['sujet']);
                  $MESSAGE=htmlspecialchars($_POST['message']);

                  $req=$db->prepare('INSERT INTO message(NOM,EMAIL,SUJET,CONTENU_MESSAGE,DATE_ENVOI) VALUES
                  (:name,:email,:sujet,:message,now())');

                  $res=$req->execute(array(
                        'name' =>$NAME,
                        'email' =>$EMAIL,
                        'sujet' =>$SUJET,
                        'message' =>$MESSAGE ));
                  if ($res) {
                     echo "valide";
                  }else{
                      echo "err";
                  }
              }
           }
       }
    }

?>