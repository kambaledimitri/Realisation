<?php 
  include 'config/connect.php';
    

  if (empty($_SESSION['user'])) {
  	header('location:page-login.php');
  }
  $service = $db->prepare('SELECT * FROM admin WHERE ID_ADMIN=:idc

                            ');
  
 ?>




<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from www.aksisweb.com/theme/fixed/layouts-1/page-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 02 Feb 2021 22:29:51 GMT -->
<head>
		<?php include('dimitri/head.php')?>
		<!-- Common Plugins -->
		<link href="assets/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		
		<!-- Summernote -->
		<link href="assets/lib/summernote/summernote.css" rel="stylesheet">

		<!-- Custom Css-->
		<link href="assets/scss/style.css" rel="stylesheet">
		
		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
    </head>
    <body>

            <!-- 						Topbar Start 							-->
			<!-- ============================================================== -->
			<?php include('dimitri/topbar.php')?>
		<!-- ============================================================== -->
		<!--                        Topbar End                              -->
		
		
		<!-- ============================================================== -->
		<!--                        Right Side Start                        -->
		<!-- ============================================================== -->
		<!--<?php include('dimitri/side.php')?>-->
		<!-- ============================================================== -->
		<!--                        Right Side End                          -->
		<!-- ============================================================== -->
		
        <!-- ============================================================== -->
        <?php include('dimitri/navigation.php')?>
        <!-- ============================================================== -->
		<!-- 						Navigation End	 						-->
        <!-- ============================================================== -->
		<!-- 						Content Start	 						-->
		<!-- ============================================================== -->
					
            <div class="row page-header"><div class="col-lg-6 align-self-center ">
			  <h2>Profile</h2>
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="index.php">Accueil</a></li>
					
					<li class="breadcrumb-item active">Profile</li>
				</ol></div></div>

        <section class="main-content">

            <div class="row">
                <div class="col-md-4">
                    <div class="widget white-bg">
                        <div class="padding-20 text-center">
						 
                         <?php
                            $service->execute(array(
                            'idc' => $_SESSION['user']['ID_ADMIN']
                            ));  
                            $don=$service->fetchAll(PDO::FETCH_OBJ);
                            foreach($don as $s):  
                        ?>
                            <img alt="Profile Picture" width="140" class="rounded-circle mar-btm margin-b-10 circle-border " src="images/<?=$s->PHOTO;?>">
                        <?php endforeach ?>
                                     
                        <p class="class=lead font-600 margin-b-0">
                                <?php 
                                    if ($_SESSION['user']['name'] !== array()) {
                                       $users = $_SESSION['user']['name'];
                                    echo "$users";
                                    }
                                ?>
                             </p>
                             <?php     
                                $service->execute(array(
                                'idc' => $_SESSION['user']['ID_ADMIN']
                                ));  
                                $don=$service->fetchAll(PDO::FETCH_OBJ);
                                foreach($don as $s):  
                                ?>
                            <p><?=$s->username;?></p>

                            <?php endforeach ?>
                            
                            <hr>
                            <p class="text-muted margin-b-0">
                            <?php     
                                $service->execute(array(
                                'idc' => $_SESSION['user']['ID_ADMIN']
                                ));  
                                $don=$service->fetchAll(PDO::FETCH_OBJ);
                                foreach($don as $s):  
                                ?>
                            <p><?=$s->user_type;?></p>

                            <?php endforeach ?>  
                            </p>
                            
                        </div>
                    </div>
                </div>
                
                <div class='widget white-bg friends-group clearfix'>
					<small class="text-muted">Email address </small>
                    <p>
                    <?php     
                                $service->execute(array(
                                'idc' => $_SESSION['user']['ID_ADMIN']
                                ));  
                                $don=$service->fetchAll(PDO::FETCH_OBJ);
                                foreach($don as $s):  
                                ?>
                            <p><?=$s->email;?></p>

                            <?php endforeach ?>
                    </p> 
					<small class="text-muted">Phone</small>
                    <p>
                    <?php     
                                $service->execute(array(
                                'idc' => $_SESSION['user']['ID_ADMIN']
                                ));  
                                $don=$service->fetchAll(PDO::FETCH_OBJ);
                                foreach($don as $s):  
                                ?>
                            <p><?=$s->telephone;?></p>

                            <?php endforeach ?>
                    </p> 
					<small class="text-muted">Address</small>
                    <p>
                    <?php     
                                $service->execute(array(
                                'idc' => $_SESSION['user']['ID_ADMIN']
                                ));  
                                $don=$service->fetchAll(PDO::FETCH_OBJ);
                                foreach($don as $s):  
                                ?>
                            <textarea><?=$s->adresse;?></textarea>

                            <?php endforeach ?>
                    </p>
                    <br>
                    <hr>
                </div> 

                <div class="col-md-4">
                    <div class="widget white-bg">
                        <div class="padding-20 text-center">
                            <form action=""></form>
                        <a href="#" class="btn btn-primary"data-toggle="modal" data-target="#editmodal"> Editer le profile</a>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
	</div>
		</div>
				
                </div>
            </div>

            
            <?php include('dimitri/footer.php')?>


        </section>
        <!-- ============================================================== -->
		<!-- 						Content End 							-->
		<!-- ============================================================== -->

        <?php     
            $service->execute(array(
            'idc' => $_SESSION['user']['ID_ADMIN']
            ));  
            $don=$service->fetchAll(PDO::FETCH_OBJ);
            foreach($don as $s):  
            ?>

        <div class="modal fade" id="editmodal">
				  <div class="modal-dialog" role="document">
					<div class="modal-content">
					  <div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="fa fa-times"></span></button>
						<h5 class="modal-title" id="exampleModalLabel">Editer le profile</h5>
					  </div>
					  <div class="modal-body">
                            <form method="POST" action="up_profil.php" enctype="multipart/form-data">
                                <div class="form-group">
										<label>Photo</label>
										<div class="fileinput fileinput-new input-group col-md-12" data-provides="fileinput">
											  <div class="form-control" data-trigger="fileinput"><span class="fileinput-filename"></span></div>
											  <span class="input-group-addon btn btn-primary btn-file ">
											  <span class="fileinput-new">Select</span>
											  <span class="fileinput-exists">Change</span>
											  <input type="file"  name="PHOTO" value="<?=$s->PHOTO;?>">
											  </span>
											  <a href="#" class="input-group-addon btn btn-danger  hover fileinput-exists" data-dismiss="fileinput">Remove</a>
										</div>
									</div>
                                <input type="hidden" name="ID_ADMIN" value="ID_ADMIN">
                                <div class="form-group">
                                	<label>T??l??phone</label>
                                    <input type="text" class="form-control" name="telephone" value="<?=$s->telephone;?>">
                                </div>
                                 <div class="form-group">
										<label>Adresse</label>
										<input type="text" value="<?=$s->adresse;?>" name="adresse" class="form-control form-control-rounded">
								</div>
                                                              
                                <div class="clearfix">
                                    <input class="btn btn-primary float-right" type="submit" name="profil" value="Modifier">   
                                </div>
                            </form>
                            
                            <?php endforeach ?>
					  </div>
					</div>
				  </div>
				</div>


        <!-- Common Plugins -->
        <script src="assets/lib/jquery/dist/jquery.min.js"></script>
		<script src="assets/lib/bootstrap/js/popper.min.js"></script>
        <script src="assets/lib/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/lib/pace/pace.min.js"></script>
        <script src="assets/lib/jasny-bootstrap/js/jasny-bootstrap.min.js"></script>
        <script src="assets/lib/slimscroll/jquery.slimscroll.min.js"></script>
        <script src="assets/lib/nano-scroll/jquery.nanoscroller.min.js"></script>
        <script src="assets/lib/metisMenu/metisMenu.min.js"></script>
        <script src="assets/js/custom.js"></script>
    </body>

<!-- Mirrored from www.aksisweb.com/theme/fixed/layouts-1/page-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 02 Feb 2021 22:29:51 GMT -->
</html>