<?php 
  include 'config/connect.php';
  

  if (empty($_SESSION['user'])) {
    header('location:page-login.php');
  }

 $recuperation = $db->query('SELECT * FROM BOX2');

  if(isset($_GET['id'])){
	 	$id= $_GET['id'];

		$query2 = $db->query("SELECT * FROM BOX2 where ID=".$id);
		$box = $query2->fetch();
  }
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
        <?php include('dimitri/head.php')?>

        <!-- Common Plugins -->
        <link href="assets/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom Css-->
        <link href="assets/scss/style.css" rel="stylesheet">
		
       
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
		<?php include('dimitri/side.php')?>
		<!-- ============================================================== -->
		<!--                        Right Side End                          -->
		<!-- ============================================================== -->
		

			<?php include('dimitri/navigation.php')?>
		<!-- ============================================================== -->


        <!-- ============================================================== -->
		<!-- 						Content Start	 						-->
		<!-- ============================================================== -->
				

        <section class="main-content">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header card-default">
                           box                        </div>
                        <div class="card-body">
                           
							<div class="row">
								<div class="col-md-8">
							<form  method="POST" action="updatebox1.php" enctype="multipart/form-data">
								<input type="hidden" name="id_b" value="<?php if($_GET['id']){echo($box['ID']);} ?>">
									</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>Titre</label>
								    <input type="text" class="form-control" value="<?php if($_GET['id']){echo($box['TITRE']);} ?>" id="titre"  name="Titre" placeholder="Titre" />
							      </div>
							      
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>Description</label>
								    <input type="text" class="form-control" id="description" value="<?php if($_GET['id']){echo($box['DESCRIPTION']);} ?>" name="Description" placeholder="Description" />
							      </div>
							      
								</div>
								<div class="col-md-12">
                                    <div class="form-group">
                                        <label>Icon</label>
                                    <input type="text" class="form-control" id="description" value="<?php if($_GET['id']){echo($box['ICON']);} ?>" name="ICON" placeholder="Nom_icon" />
                                  </div>
                                   <button class="btn btn-primary" type="submit" name="insert">MODIFIER</button>
                                </div>
							     

								</div>
								 
								</div>
							</div>

						</form>
                        </div>
                    </div>
				</div>
				

                </div>


            </div>
			
			

            <?php include('dimitri/footer.php')?>


        </section>
        <!-- ============================================================== -->
		<!-- 						Content End	 						-->
		<!-- ============================================================== -->



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
		
        <!-- Validations -->
        
    </body>

<!-- Mirrored from www.aksisweb.com/theme/fixed/layouts-1/form-validations.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 02 Feb 2021 22:28:33 GMT -->
</html>