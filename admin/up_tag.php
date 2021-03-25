
<?php  
  function imgup()
  {
    $url_img=basename($_FILES['iphoto']['name']);
    $description=htmlspecialchars($_POST['description']);
    $lien_twitter=htmlspecialchars($_POST['lien_twitter']);
    $lien_youtube=htmlspecialchars($_POST['lien_youtube']);
    $lien_linkedin=htmlspecialchars($_POST['lien_linkedin']);
    $id = htmlspecialchars($_POST['id']);

    if($url_img !="")
    {
      $verif_img=getimagesize($_FILES['iphoto']['tmp_name']);

      if (isset($_FILES['iphoto']) AND $_FILES['iphoto']['error']== 0)
      {
        if ($_FILES['iphoto']['size'] <= 2000000)
        {
          $infosfichier = pathinfo($_FILES['iphoto']['name']);
          $extension_upload = $infosfichier['extension'];
          $extensions_autorisees = array('jpg', 'jpeg', 'gif','png','JPG','JPEG','GIF','PNG');
          // if (in_array($extension_upload,$extensions_autorisees))
          //{
            if ($verif_img AND $verif_img[2] < 4)
            {
            if(move_uploaded_file($_FILES['iphoto']['tmp_name'],'images/'.$url_img))
            {
              require 'config/connect.php';
              $req=$db->prepare('UPDATE tag SET description=:description,PHOTO=:iphoto,lien_twitter=:lien_twitter,lien_youtube=:lien_youtube,lien_linkedin=:lien_linkedin WHERE id=:id');
              $req->execute(array(
              'iphoto' => $_FILES['iphoto']['name'],
              'description' => $description,
              'lien_twitter' => $lien_twitter,
              'lien_youtube' => $lien_youtube,
              'lien_linkedin' => $lien_linkedin,
              'id'=> $id ));

              header('location:meta-tags.php');
              return true;
            }
          }
        }
      }
      else
      {
        unlink($_FILES['iphoto']['tmp_name']);
        unset($_FILES['iphoto']);
      }
    }
    else
    {
      require 'config/connect.php';
      $req=$db->prepare('UPDATE tag SET description=:description,lien_twitter=:lien_twitter,lien_youtube=:lien_youtube,lien_linkedin=:lien_linkedin WHERE id=:id');
      $req->execute(array(
      //'iphoto' => $_FILES['iphoto']['name'],
      'description' => $description,
      'lien_twitter' => $lien_twitter,
      'lien_youtube' => $lien_youtube,
      'lien_linkedin' => $lien_linkedin,
      'id'=> $id ));

      header('location:meta-tags.php');
      return true;
    }
  }
  if(imgup())
  {
  }
  // var_dump($_FILES);
?>