<?php  

 function imgup()
{
 $url_img=basename($_FILES['PHOTO']['name']);

$verif_img=getimagesize($_FILES['PHOTO']['tmp_name']);

  if (isset($_FILES['PHOTO']) AND $_FILES['PHOTO']['error']== 0){
if ($_FILES['PHOTO']['size'] <= 2000000){


$infosfichier = pathinfo($_FILES['PHOTO']['name']);
$extension_upload = $infosfichier['extension'];
$extensions_autorisees = array('jpg', 'jpeg', 'gif','png','JPG','JPEG','GIF','PNG');
// if (in_array($extension_upload,$extensions_autorisees)){
  if ($verif_img AND $verif_img[2] < 4){
if(move_uploaded_file($_FILES['PHOTO']['tmp_name'],'images/'.$url_img)){
   require 'config/connect.php';
  
            $req = $db->prepare('INSERT INTO team(nom,titre,description,photo,facebook,twitter,instagram) VALUES (:nom,:titre,:description,:photo,:facebook,:twitter,:instagram)');
            $req->execute(array(
            'nom'=>$_POST['NAME'],
            'titre' => $_POST['TITRE'],
            'description' => $_POST['DESCRIPTION'],
            'photo' => $_FILES['PHOTO']['name'],
            'facebook' => $_POST['fb'],
            'twitter' => $_POST['tw'],
            'instagram' => $_POST['in']
            ));
        

header('location:ajout-Membre.php');
return true;

}

}


      }

      else{

          unlink($_FILES['PHOTO']['tmp_name']);
          unset($_FILES['PHOTO']);

      }
    }


}



if(imgup()){



}
// var_dump($_FILES);

?>