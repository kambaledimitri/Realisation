
<?php  
  function imgup()
  {
    $url_img=basename($_FILES['PHOTO']['name']);
    $telephone=htmlspecialchars($_POST['telephone']);
    $adresse=htmlspecialchars($_POST['adresse']);
    $id = htmlspecialchars($_POST['ID_ADMIN']);

    if($url_img !="")
    {
      $verif_img=getimagesize($_FILES['PHOTO']['tmp_name']);

      if (isset($_FILES['PHOTO']) AND $_FILES['PHOTO']['error']== 0)
      {
        if ($_FILES['PHOTO']['size'] <= 2000000)
        {
          $infosfichier = pathinfo($_FILES['PHOTO']['name']);
          $extension_upload = $infosfichier['extension'];
          $extensions_autorisees = array('jpg', 'jpeg', 'gif','png','JPG','JPEG','GIF','PNG');
          // if (in_array($extension_upload,$extensions_autorisees))
          //{
            if ($verif_img AND $verif_img[2] < 4)
            {
            if(move_uploaded_file($_FILES['PHOTO']['tmp_name'],'images/'.$url_img))
            {
              require 'config/connect.php';
              $req=$db->prepare('UPDATE admin SET telephone=:telephone,PHOTO=:PHOTO,adresse=:adresse WHERE ID_ADMIN=:idc');
              $req->execute(array(
              'PHOTO' => $_FILES['PHOTO']['name'],
              'telephone' => $telephone,
              'adresse' => $adresse,
              'idc' => $_SESSION['user']['ID_ADMIN']  ));

              header('location:page-profile.php');
              return true;
            }
          }
        }
      }
      else
      {
        unlink($_FILES['PHOTO']['tmp_name']);
        unset($_FILES['PHOTO']);
      }
    }
    else
    {
      require 'config/connect.php';
      $req=$db->prepare('UPDATE admin SET telephone=:telephone,PHOTO=:PHOTO,adresse=:adresse WHERE ID_ADMIN=:idc');
      $req->execute(array(
      //'PHOTO' => $_FILES['PHOTO']['name'],
      'telephone' => $telephone,
      'adresse' => $adresse,
      'idc' => $_SESSION['user']['ID_ADMIN']  ));

      header('location:page-profile.php');
      return true;
      
    }
  }
  if(imgup())
  {
  }
  // var_dump($_FILES);
?>