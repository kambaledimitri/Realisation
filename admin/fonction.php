<?php 
  include 'config/connect.php';
    

  if (empty($_SESSION['user'])) {
    header('location:page-login.php');
  }

$recuperation=$db->query('SELECT * FROM fonction1 ');

 //$url_img=basename($_FILES['photo']['name']);

if(isset($_GET['edit'])){
    $id_user = $_GET['edit'];

   $query2 = $db->query("SELECT * FROM fonction1 where id=".$id_user);
   $user = $query2->fetch();
}

 ?>


<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from www.aksisweb.com/theme/fixed/layouts-1/ui-modals.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 02 Feb 2021 22:27:33 GMT -->
<head>
        <?php include('dimitri/head.php')?>

        <!-- Common Plugins -->
        <link href="assets/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		
        <!-- Custom Css-->
        <link href="assets/scss/style.css" rel="stylesheet">
		<style type="text/css">
         .pro{
            width: 100%
         }      
        </style>
        
    </head>
    <body>

			<!-- ============================================================== -->
			<!-- 						Topbar Start 							-->
			<!-- ============================================================== -->
			<?php include('dimitri/topbar.php')?>
		<!-- ============================================================== -->
		<!--                        Topbar End                              -->
		<!-- ============================================================== -->
		
		
		<!-- ============================================================== -->
		<!--                        Right Side Start                        -->
		<!-- ============================================================== -->
		
		<!-- ============================================================== -->
		<!--                        Right Side End                          -->
		<!-- ============================================================== -->
		


        <!-- ============================================================== -->
		<!-- 						Navigation Start 						-->
		<!-- ============================================================== -->
        <?php include('dimitri/navigation.php')?>
        <!-- ============================================================== -->
		<!-- 						Navigation End	 						-->
		<!-- ============================================================== -->


        <!-- ============================================================== -->
		<!-- 						Content End		 						-->
		<!-- ============================================================== -->
		<div class="row page-header">
			<div class="col-lg-6 align-self-center ">
			   <h2> </h2>
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="index.php">Accueil</a></li>
					<li class="breadcrumb-item"><a href="#">Fonctionnalite</a></li>
					
				</ol>
			</div>
		</div>

        <section class="main-content">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-default">
                           Comment ça marche
                        </div>
                                                 
                        <div class="card-body"> 
                            <form method="post" class="form-horizontal" action="<?php if(isset($_GET['edit'])){ echo "upfonction.php"; }else { echo "newfonction.php"; } ?>"  enctype="multipart/form-data">
                            <input type="hidden" name="id" value="<?php if(isset($_GET['edit'])){ echo($user['id']); }?>">
                            <input type="hidden" name="action" value="<?php if(isset($_GET['edit'])){ echo('edit'); } else {echo "insert";}?>">


                            <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
										<label>image</label>
										<div class="fileinput fileinput-new input-group" data-provides="fileinput">
											  <div class="form-control" data-trigger="fileinput"><span class="fileinput-filename">                                           
                                              </span></div>
											  <span class="input-group-addon btn btn-primary btn-file ">
                                                <input type="file"  name="photo" value="<?php if(isset($_GET['edit'])){ echo($user['photo']); }?>">  
											  <span class="fileinput-new">Select</span>
											  <span class="fileinput-exists">Change</span>
											  
											  </span>
											  <a href="#" class="input-group-addon btn btn-danger  hover fileinput-exists" data-dismiss="fileinput">Remove</a>
										</div>
									</div>
                                    </div>
                                   
                                <div class="col-md-6">
                                <div class="form-group ">
                                	<label>Titre</label>
                                    <input type="text" class="form-control" name="titre" value="<?php if(isset($_GET['edit'])){ echo($user['titre']); }?>" placeholder="Titre">
                                </div>
                                </div>  
								<div class="col-md-6">
                                 <div class="form-group">
										<label>Text</label>
										<input type="text" placeholder="Text" name="texte" value="<?php if(isset($_GET['edit'])){ echo($user['texte']); }?>" class="form-control">
									</div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
										<label>Paragraphe 1</label>
										<input type="text" placeholder="Paragraphe 1" name="para1" value="<?php if(isset($_GET['edit'])){ echo($user['para1']); }?>" class="form-control form-control-rounded ">
									</div>
                                    </div>
                                    <div class="col-md-6">
                                    <div class="form-group">
										<label>Paragraphe 2</label>
										<input type="text" placeholder="Paragraphe 2" name="para2" value="<?php if(isset($_GET['edit'])){ echo($user['para2']); }?>" class="form-control">
									</div>
                                    </div>
                                    <div class="col-md-6">
                                    <div class="form-group">
										<label>Paragraphe 3</label>
										<input type="text" placeholder="Paragraphe 3" name="para3" value="<?php if(isset($_GET['edit'])){ echo($user['para3']); }?>" class="form-control">
									</div>
                                    </div>
                                    <div class="col-md-6">
                                    <div class="form-group">
										<label>Paragraphe 4</label>
										<input type="text" placeholder="Paragraphe 4" name="para4" value="<?php if(isset($_GET['edit'])){ echo($user['para4']); }?>" class="form-control">
									</div>
                                    </div>
                                  
                                <div class="clearfix">                                    

                                     <input class="btn btn-primary offset-1" type="submit" name="submit" value="<?php if(isset($_GET['edit'])){ echo('Update'); } else { echo('Enregistrer');}?>" />
                                </div>
                                </div> 
                            </form>
                               
					  </div>
				  
                                            
                        
                        <div class="card-body col-md-12">
                                <table id="datatable1" class="table table-striped dt-responsive nowrap table-hover table-responsive">
                                    <thead>
                                        <tr>
                                            <th class="text-center">
                                                <strong>#</strong>
                                            </th>
                                            <th class="text-center">
                                                <strong>IMAGES</strong>
                                            </th>
                                            <th class="text-center"  style="padding-left: 70px;padding-right: 70px;">
                                                <strong>TITRE</strong>
                                            </th>
                                            <th class="text-center"  style="padding-left: 80px;padding-right: 80px;">
                                                <strong>TEXTE</strong>
                                            </th>
                                           
                                            <th class="text-center" style="padding-left: 70px;padding-right: 70px;">
                                                <strong>PARAGRAPHE1</strong>
                                            </th>
                                            <th class="text-center"  style="padding-left: 70px;padding-right: 70px;">
                                                <strong>PARAGRAPHE2</strong>
                                            </th>
                                            <th class="text-center"  style="padding-left: 70px;padding-right: 70px;">
                                                <strong>PARAGRAPHE3</strong>
                                            </th>
                                            <th class="text-center"  style="padding-left: 70px;padding-right: 70px;">
                                                <strong>PARAGRAPHE4</strong>
                                            </th>
                                        
                                            <th class="text-center">
                                                <strong>ACTION</strong>
                                            </th>
                                        </tr>
                                    </thead>
                                    <?php while ($ligne = $recuperation->fetch()) {?>
                                    <tbody>
                                        <tr>
                                            <td><?=$ligne['id'];?></td>
                                            <td><img class="pro" src="images/<?=$ligne['photo'];?>"></td>
                                            <td class="pt-3-half" contenteditable="true"><?=$ligne['titre'];?></td>
                                            <td class="pt-3-half" contenteditable="true"><?=$ligne['texte'];?></td>
                                            <td class="pt-3-half" contenteditable="true"><?=$ligne['para1'];?></td>
                                            <td class="pt-3-half" contenteditable="true"><?=$ligne['para2'];?></td>
                                            <td class="pt-3-half" contenteditable="true"><?=$ligne['para3'];?></td>
                                            <td class="pt-3-half" contenteditable="true"><?=$ligne['para4'];?></td>
                                            
                                            <td class="text-center">
												<a type="button" href="fonction.php?edit=<?php  echo($ligne['id']) ?>" class="btn btn-sm btn-success">Editer</a>
                                                <a type="button" href="deletefonction.php?id=<?php  echo($ligne['id']) ?>" class="btn btn-sm btn-danger">Delete</a>
                                            </td>
                                        </tr>  
                                        <?php } ?>
                                    </tbody>

                                    
                                </table>
                        </div>
                    </div>
                </div>
            </div>

        

          <?php include('dimitri/footer.php')?>


        </section>
        <!-- ============================================================== -->
		<!-- 						Content End		 						-->
		<!-- ============================================================== -->

			
					  


        <!-- Common Plugins -->
        <script src="assets/lib/jquery/dist/jquery.min.js"></script>
		<script src="assets/lib/bootstrap/js/popper.min.js"></script>
        <script src="assets/lib/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/lib/pace/pace.min.js"></script><script src="assets/lib/jasny-bootstrap/js/jasny-bootstrap.min.js"></script>
        <script src="assets/lib/slimscroll/jquery.slimscroll.min.js"></script>
        <script src="assets/lib/nano-scroll/jquery.nanoscroller.min.js"></script>
        <script src="assets/lib/metisMenu/metisMenu.min.js"></script>
        <script src="assets/js/custom.js"></script>

    </body>

<!-- Mirrored from www.aksisweb.com/theme/fixed/layouts-1/ui-modals.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 02 Feb 2021 22:27:33 GMT -->
</html>