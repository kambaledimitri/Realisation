<?php  

 function imgup()
{
  
  $url_img=basename($_FILES['photo']['name']);
  $titre=htmlspecialchars($_POST['titre']);
  $texte=htmlspecialchars($_POST['texte']);
  $para1=htmlspecialchars($_POST['para1']);
  $para2=htmlspecialchars($_POST['para2']);
  $para3=htmlspecialchars($_POST['para3']);
  $para4=htmlspecialchars($_POST['para4']);
  
  $verif_img=getimagesize($_FILES['photo']['tmp_name']);

  if (isset($_FILES['photo']) AND $_FILES['photo']['error']== 0){
if ($_FILES['photo']['size'] <= 2000000){


$infosfichier = pathinfo($_FILES['photo']['name']);
$extension_upload = $infosfichier['extension'];
$extensions_autorisees = array('jpg', 'jpeg', 'gif','png','JPG','JPEG','GIF','PNG');
// if (in_array($extension_upload,$extensions_autorisees)){
  if ($verif_img AND $verif_img[2] < 4){
if(move_uploaded_file($_FILES['photo']['tmp_name'],'images/'.$url_img)){
   require 'config/connect.php';
           $req = $db->prepare('INSERT INTO fonction1(titre,texte,para1,para2,para3,para4,photo) 
            VALUES (:titre,:texte,:para1,:para2,:para3,:para4,:photo)');
            $req->execute(array(
            'photo' => $_FILES['photo']['name'],
            'titre' => $titre,
            'texte' => $texte,
            'para1' => $para1,
            'para2' => $para2,
            'para3' => $para3,
            'para4' => $para4));
            
    
// echo "valider";
header('location:fonction.php');

return true;

}

}


      }

      else{

          unlink($_FILES['photo']['tmp_name']);
          unset($_FILES['photo']);



      }
    }


}



if(imgup()){



}
// var_dump($_FILES);

?>