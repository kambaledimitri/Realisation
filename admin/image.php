<?php 
  include 'config/connect.php';


  if (empty($_SESSION['user'])) {
    header('location:page-login.php');
  }

 $recuperation = $db->query('SELECT * FROM image_box');

  if(isset($_GET['id'])){
	 	$id= $_GET['id'];

	// 	$query2 = $db->query("SELECT * FROM image where id=".$id);
	// 	$team = $query2->fetch();
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
		<div class="row page-header">
			<div class="col-lg-6 align-self-center ">
			   <h2>Features</h2>
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="index.php">Accueil</a></li>
					<li class="breadcrumb-item"><a href="#">Features</a></li>
					<li class="breadcrumb-item active">Image</li>
				</ol>
			</div>
		</div>		

        <section class="main-content">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        
                        <div class="card-body">
                           
							<div class="row">
								<div class="col-md-12">
							<form  method="POST" action="ajout_imbox.php" enctype="multipart/form-data">
								<input type="hidden" name="id_t" >
								
									 <div class="form-group">
                                        <label>Images</label>
                                        <div class="fileinput fileinput-new input-group col-md-12" data-provides="fileinput">
                                              <div class="form-control" data-trigger="fileinput"><span class="fileinput-filename"></span></div>
                                              <span class="input-group-addon btn btn-primary btn-file ">
                                              <span class="fileinput-new">Select</span>
                                              <span class="fileinput-exists">Change</span>
                                              <input type="file"  name="IMAGE">
                                              </span>
                                              <a href="#" class="input-group-addon btn btn-danger  hover fileinput-exists" data-dismiss="fileinput">Remove</a>
                                        </div>
                                    </div>
                                        <button class="btn btn-primary" type="submit" name="id">ENREGISTRER</button>
						</form>
						 <div class="card-body">
                                <table id="datatable1" class="table table-striped dt-responsive nowrap table-hover">
                                    <thead>
                                        <tr>
                                            <th class="text-center">
                                                <strong>#</strong>
                                            </th>
                                            <th class="text-center">
                                                <strong>IMAGES</strong>
                                            </th>
                                           
                                            <th class="text-center">
                                                <strong>Action</strong>
                                            </th>
                                        </tr>
                                    </thead>
                                   <?php while ($l= $recuperation->fetch()) {?>
                                    <tbody>
                                        <tr>
                                            <td class="text-center"><?=$l['ID'];?></td>
                                            <td><img class="col-sm-2" src="images/<?=$l['IMAGE'];?>"> </td>
                                           <td class="text-center">
                                             <a type="button" href="del_img.php?id=<?= $l['ID'] ?>" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
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