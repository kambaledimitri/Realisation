<?php 
  include 'config/connect.php';


  if (empty($_SESSION['user'])) {
    header('location:page-login.php');
  }

$recuperation=$db->query('SELECT * FROM about1');


if(isset($_GET['edit'])){
    $id_about1 = $_GET['edit'];

   $query2 = $db->query("SELECT * FROM about1 where id=".$id_about1);
   $user = $query2->fetch();
}



if (empty($_SESSION['user'])) {
    header('location:page-login.php');
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
            width: 50%
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
			  
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="index.php">Accueil</a></li>
					<li class="breadcrumb-item"><a href="#">A propos</a></li>
					<li class="breadcrumb-item active">A propos</li>
				</ol>
			</div>
		</div>

        <section class="main-content">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                       
                                                 
                        <div class="card-body"> 
                            <form method="POST" action="<?php if(isset($_GET['edit'])){ echo "updateAbout.php"; }else { echo "verif-about1.php"; } ?>" enctype="multipart/form-data">
                            <input type="hidden" name="id" value="<?php if(isset($_GET['edit'])){ echo($user['id']); }?>">
							<input type="hidden" name="action" value="<?php if(isset($_GET['edit'])){ echo('edit'); } else {echo "insert";}?>">
                            <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                <label>image</label>
										<div class="fileinput fileinput-new input-group" data-provides="fileinput">
											  <div class="form-control" data-trigger="fileinput"><span class="fileinput-filename"></span></div>
											  <span class="input-group-addon btn btn-primary btn-file ">
											  <span class="fileinput-new">Select</span>
											  <span class="fileinput-exists">Change</span>
											  <input type="file"  name="photo" value="<?php if(isset($_GET['edit'])){ echo($user['photo']); }?>">
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
                                    <div class="col-md-6">
                                    <div class="form-group">
										<label>Paragraphe 5</label>
										<input type="text" placeholder="Paragraphe 5" name="para5" value="<?php if(isset($_GET['edit'])){ echo($user['para5']); }?>" class="form-control">
									</div>
                                    </div>
                                    <div class="col-md-6">
                                    <div class="form-group">
										<label>Paragraphe 6</label>
										<input type="text" placeholder="Paragraphe 6" name="para6" value="<?php if(isset($_GET['edit'])){ echo($user['para6']); }?>" class="form-control">
									</div>
                                    </div>
                                <div class="clearfix">
                                    <input class="btn btn-primary offset-10" type="submit" name="submit" value="<?php if(isset($_GET['edit'])){ echo('Update'); } else { echo('Enregistrer'); }?>">
                                </div>
                                </div> 
                            </form>
                               
					  </div>
				    
                                            
                        
                        <div class="card-body col-md-12">
                        <div class="table-responsive">
                                <table id="datatable1" class="table table-striped dt-responsive nowrap table-hover">
                                    <thead>
                                        
                                            <th class="text-center">
                                                <strong>ID</strong>
                                            </th>
                                            <th class="text-center">
                                                <strong>IMAGES</strong>
                                            </th>
                                            <th class="text-center">
                                                <strong>TITRE</strong>
                                            </th>
                                            <th class="text-center">
                                                <strong>TEXT</strong>
                                            </th>
                                           
                                            <th class="text-center">
                                                <strong>PARAGRAPHE 1</strong>
                                            </th>
                                            <th class="text-center">
                                                <strong>PARAGRAPHE 2</strong>
                                            </th>
                                            <th class="text-center">
                                                <strong>PARAGRAPHE 3</strong>
                                            </th>
                                            <th class="text-center">
                                                <strong>PARAGRAPHE 4</strong>
                                            </th>
                                            <th class="text-center">
                                                <strong>PARAGRAPHE 5</strong>
                                            </th>
                                            <th class="text-center">
                                                <strong>PARAGRAPHE 6</strong>
                                            </th>
                                            <th class="text-center">
                                                <strong>Action</strong>
                                            </th>
                                        
                                    </thead>
                                    <?php while ($ligne = $recuperation->fetch()) {?>
                                    <tbody>
                                        <tr>
                                            <td><?=$ligne['id'];?></td>
                                            <td><img class="pro" src="pictures/<?=$ligne['photo'];?>"></td>
                                            <td class="pt-3-half" contenteditable="true"><?=$ligne['titre'];?></td>
                                            <td class="pt-3-half" contenteditable="true"><?=$ligne['texte'];?></td>
                                            <td class="pt-3-half" contenteditable="true"><?=$ligne['para1'];?></td>
                                            <td class="pt-3-half" contenteditable="true"><?=$ligne['para2'];?></td>
                                            <td class="pt-3-half" contenteditable="true"><?=$ligne['para3'];?></td>
                                            <td class="pt-3-half" contenteditable="true"><?=$ligne['para4'];?></td>
                                            <td class="pt-3-half" contenteditable="true"><?=$ligne['para5'];?></td>
                                            <td class="pt-3-half" contenteditable="true"><?=$ligne['para6'];?></td>
                                            <td class="text-center">
												<a type="button" href="about1.php?edit=<?php  echo($ligne['id']) ?>" class="btn btn-sm btn-success">Editer</i></a>
                                            </td>
                                        </tr>  
                                        <?php } ?>
                                    </tbody>

                                    
                                </table>
                                </div>
                        </div>
                    </div>
                </div>
            </div>

         <!--   <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-default">
                            Modals Size
                        </div>
                        <div class="card-body">
                                <button type="button" class="btn btn-indigo margin-r-5" data-toggle="modal" data-target=".bs-example-modal-sm">Small modal</button>
                                <button type="button" class="btn btn-danger margin-r-5" data-toggle="modal" data-target=".bs-example-modal-default">Default size modal</button>            
                                <button type="button" class="btn btn-teal margin-r-5" data-toggle="modal" data-target=".bs-example-modal-lg">Large modal</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>-->

            

          <?php include('dimitri/footer.php')?>


        </section>
        <!-- ============================================================== -->
		<!-- 						Content End		 						-->
		<!-- ============================================================== -->

			
					  

            	<div class="modal fade" id="signupModal">
				  <div class="modal-dialog" role="document">
					<div class="modal-content">
					  <div class="modal-header">
						 <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="fa fa-times"></span></button>
						 <h5 class="modal-title" id="exampleModalLabel">Login Modal</h5>
					  </div>
                    <div class="modal-body">
                       
                            <form method="POST" action="verif-about1.php" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Username">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="Email">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input type="password" class="form-control" placeholder="Password">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input type="password" class="form-control" placeholder="Reset Password">
                                        </div>
                                    </div>
                                </div>


                                <div class="clearfix">
                                   <div class="checkbox checkbox-inline checkbox-primary">
													<input id="checkbox11" type="checkbox" checked="">
													<label for="checkbox11"> Option one </label>
												</div>
                                    <button type="button" class="btn btn-primary float-right">Signup</button>
                                </div>
                            </form>
                            <hr>
                            <div class="text-center">
                                <p>Already have an Account, <a href='#'>Login</a></p>
                            </div>
              
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="textModal" tabindex="-1" role="dialog" aria-labelledby="textModal">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="fa fa-times"></span></button>
                        <h5 class="modal-title" id="myModalLabel">Text heading</h5>
                    </div>
                    <div class="modal-body">
                        <p>
                            We denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desireWe denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire  
                        </p><br>
                        <div class="text-center">
                            <a href="#" class="btn btn-primary btn-lg">Get free trail</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--modal text end-->

        <!--modal of video-->
        <div class="modal video-modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="videoModal">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                   <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="fa fa-times"></span></button>
                    <div class="modal-body">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe id="vimeo-video" src="#"></iframe>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
            <div class="modal-dialog modal-sm" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="fa fa-times"></span></button>
                        <h5 class="modal-title" id="mySmallModalLabel">Modal Small</h5>
                    </div>
                    <div class="modal-body">
                        It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="fa fa-times"></span></button>
                        <h5 class="modal-title" id="myModalLabel">Modal Large</h5>
                    </div>
                    <div class="modal-body">
                        It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade bs-example-modal-default" tabindex="-1" role="dialog" aria-labelledby="myDefaultModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="fa fa-times"></span></button>
                        <h5 class="modal-title" id="myDefaultModalLabel">Modal Default Size</h5>
                    </div>
                    <div class="modal-body">
                        It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>

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