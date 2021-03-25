<?php 
  include 'config/connect.php';
    

  if (empty($_SESSION['user'])) {
  	header('location:page-login.php');
  }
  
  $recuperation = $db->query('SELECT * FROM meta_tag');
  
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
			  <h2>Settings</h2>
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
					<li class="breadcrumb-item"><a href="#">Settingss</a></li>
					<li class="breadcrumb-item active">Description tags</li>
				</ol></div></div>

        <section class="main-content">

            <div class="row">    
                <div class='widget white-bg friends-group clearfix col-md-7'>
                    <form action="up_tag.php" method="POST" enctype="multipart/form-data">
					    <small class="text-muted">Description </small>
                            <?php
                                $don=$recuperation->fetchAll(PDO::FETCH_OBJ);
                                foreach($don as $s): 
                            ?>
                                <textarea name="description"><?=$s->description;?></textarea>
                                 
					    <small class="text-muted">Lien twitter</small>
                           
                               
                                <input type="hidden" name="id" value="<?=$s->id;?>"> 
                        <input type="text" name="lien_twitter" value="<?=$s->lien_twitter;?>">
                        <small class="text-muted">Lien youtube</small>
                        <input type="text" name="lien_youtube" value="<?=$s->lien_youtube;?>">
					    <small class="text-muted">Lien linkedin</small>
                        <input type="text" name="lien_linkedin" value="<?=$s->lien_linkedin;?>">
                        <small class="text-muted">Logo </small>
                        <img alt="Profile Picture" width="100" class="rounded mar-btm margin-b-10 circle-border " src="images/<?=$s->PHOTO;?>">
                        <div class="fileinput fileinput-new input-group col-md-12" data-provides="fileinput">
                        <div class="form-control" data-trigger="fileinput"><span class="fileinput-filename"></span></div>
                            <span class="input-group-addon btn btn-primary btn-file ">
							    <span class="fileinput-new">Select</span>
							    <span class="fileinput-exists">Change</span>
							    <input type="file"  name="iphoto" value="<?=$s->PHOTO;?>">
					        </span>  
                            <a href="#" class="input-group-addon btn btn-danger  hover fileinput-exists" data-dismiss="fileinput">Remove</a>
                            
                        </div>
                        <div>
                            <input class="btn btn-primary center" type="submit" name="tag" value="Enregistrer les Modifications">
                            </div>
                             <?php endforeach ?>
                    </form>
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