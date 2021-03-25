<?php  

 function imgup()
{
  
  $url_img=basename($_FILES['photo']['name']);
  $question1=htmlspecialchars($_POST['question1']);
 $reponse1=htmlspecialchars($_POST['reponse1']);
 $question2=htmlspecialchars($_POST['question2']);
 $reponse2=htmlspecialchars($_POST['reponse2']);
 $question3=htmlspecialchars($_POST['question3']);
 $reponse3=htmlspecialchars($_POST['reponse3']);
 $question4=htmlspecialchars($_POST['question4']);
 $reponse4=htmlspecialchars($_POST['reponse4']);
  
$verif_img=getimagesize($_FILES['photo']['tmp_name']);

  if (isset($_FILES['photo']) AND $_FILES['photo']['error']== 0){
if ($_FILES['photo']['size'] <= 2000000){


$infosfichier = pathinfo($_FILES['photo']['name']);
$extension_upload = $infosfichier['extension'];
$extensions_autorisees = array('jpg', 'jpeg', 'gif','png','JPG','JPEG','GIF','PNG');
// if (in_array($extension_upload,$extensions_autorisees)){
  if ($verif_img AND $verif_img[2] < 4){
if(move_uploaded_file($_FILES['photo']['tmp_name'],'imagesfaq/'.$url_img)){
   require 'config/connect.php';
  
   $req=$db->prepare('INSERT INTO faqsection (question1,reponse1,question2,reponse2,question3,reponse3,question4,reponse4,photo) 
   VALUES(:question1,:reponse1,:question2,:reponse2,:question3,:reponse3,:question4,:reponse4,:photo )');
   $req->execute(array(
   'photo' => $_FILES['photo']['name'],
   'question1' => $question1,
   'reponse1' => $reponse1,
   'question2' => $question2,
   'reponse2' => $reponse2,
   'question3' => $question3,
   'reponse3' => $reponse3,
   'question4' => $question4,
   'reponse4' => $reponse4, ));
            
   header('location:faq.php');
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