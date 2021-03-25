<?php  

 function imgup()
{
  
  $url_img=basename($_FILES['photo']['name']);
  $id=htmlspecialchars($_POST['id']);
  
  
$verif_img=getimagesize($_FILES['photo']['tmp_name']);

  if (isset($_FILES['photo']) AND $_FILES['photo']['error']== 0){
if ($_FILES['photo']['size'] <= 2000000){


$infosfichier = pathinfo($_FILES['photo']['name']);
$extension_upload = $infosfichier['extension'];
$extensions_autorisees = array('jpg', 'jpeg', 'gif','png','JPG','JPEG','GIF','PNG');
// if (in_array($extension_upload,$extensions_autorisees)){
  if ($verif_img AND $verif_img[2] < 4){
if(move_uploaded_file($_FILES['photo']['tmp_name'],'photos/'.$url_img)){
   require 'config/connect.php';
  
            $req=$db->prepare('UPDATE image SET photo=:photo WHERE id=:id');
            $req->execute(array(
            'photo' => $_FILES['photo']['name'],
            'id' => $id
              )); 
            
          header('location:image_jered.php'); 
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