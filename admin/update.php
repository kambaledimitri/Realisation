<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="assets/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom Css-->
        <link href="assets/scss/style.css" rel="stylesheet">
</head>
<body>
	<?php 
include 'config/connect.php';
 
if (isset($_GET['id'])) {
	$req=$db->prepare('SELECT * FROM banner1 WHERE ID_BANNER1=:id');

	$req->execute(array(
    'id'=> $_GET['id'] ));

   $don=$req->fetchAll(PDO::FETCH_OBJ);
                foreach($don as $s):  
                    ?>
                     
                     <div class="container">
                     	 <div class="row">
                     	 	<div class="col-md-5">
                     	 	<form method="POST" action="up.php" enctype="multipart/form-data">
                     	 		<div class="form-group">
                                    <label>Titre</label>
                                     <input type="text" class="form-control" name="TITRE" value="<?=$s->TITRE;?>" >
                                </div>
                                <div class="form-group">
                                    <label>TEXT</label>
                                     <input type="text" class="form-control" name="TEXTE" value="<?=$s->TEXTE;?>" >
                                </div>
                                <div class="form-group">
                                	<input type="file" name="PHOTO" value="<?=$s->PHOTO;?>">
                                </div>
                                <input type="hidden" name="id" value="$_GET['id'])">
                                <input class="btn btn-primary" type="submit" name="" value="Changer">
                               </form>
                     	 	</div>
                     	 </div>
                     </div>
                   
   <?php
                   endforeach;


                      ?>
   


    <?php } ?>

 

</body>
</html>
