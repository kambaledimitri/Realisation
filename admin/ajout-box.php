<?php 
  include 'config/connect.php';

  if (empty($_SESSION['user'])) {
    header('location:page-login.php');
  }

 $recuperation = $db->query('SELECT * FROM BOX1');
 
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
			   <h2>Features</h2>
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="index.php">Accueil</a></li>
					<li class="breadcrumb-item"><a href="#">Features</a></li>
					<li class="breadcrumb-item active">Feature-Right</li>
				</ol>
			</div>
		</div>

        <section class="main-content">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-default">
                            
                            <div class="float-right mt-10">
								<a href="#" class="btn btn-success margin-r-5 btn-rounded box-shadow btn-icon"data-toggle="modal" data-target="#loginModal"><i class="fa fa-plus"></i> Add New box</a>
						    </div>
                        </div>
                        <div class="card-body">
                                <table id="datatable1" class="table table-striped dt-responsive nowrap table-hover">
                                    <thead>
                                        <tr>
                                            <th class="text-center">
                                                <strong>#</strong>
                                            </th>
                                            <th class="text-center">
                                                <strong>ICON</strong>
                                            </th>
                                            <th class="text-center">
                                                <strong>TITRE</strong>
                                            </th>
                                            <th class="text-center">
                                                <strong>TEXTE</strong>
                                            </th>
                                           
                                            <th class="text-center">
                                                <strong>ACTION</strong>
                                            </th>
                                        </tr>
                                    </thead>
                                    <?php while ($ligne = $recuperation->fetch()) {?>
                                    <tbody>
                                        <tr>
                                            <td class="text-center"><?=$ligne['ID'];?></td>
                                            <td><img class="col-sm-2" src="images/<?=$ligne['ICON'];?>"> </td>
                                            <td class="pt-3-half" contenteditable="true"><?=$ligne['TITRE'];?></td>
                                            <td class="pt-3-half" contenteditable="true"><?=$ligne['DESCRIPTION'];?></td>
                                           
                                            
                                            <td class="text-center">
                                               
												<a type="button" href="modif-box.php?id=<?= $ligne['ID'] ?>" class="btn btn-sm btn-success" ><i class="fa fa-edit"></i></a>

												<a type="button" href="DEL.php?id=<?= $ligne['ID'] ?>" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                                            </td>
                                        </tr>  
                                       <?php } ?>
                                    </tbody>

                                    
                                </table>
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

				<div class="modal fade" id="loginModal">
				  <div class="modal-dialog" role="document">
					<div class="modal-content">
					  <div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="fa fa-times"></span></button>
						<h5 class="modal-title" id="exampleModalLabel">Ajouter un box</h5>
					  </div>
					  <div class="modal-body">
                            <form method="POST" action="box.php" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label>Icon</label>
                                    <input type="text" class="form-control" name="ICON" placeholder="Nom-icon">
                                </div>
                                <div class="form-group">
                                	<label>Titre</label>
                                    <input type="text" class="form-control" name="TITRE" placeholder="title">
                                </div>
                                 <div class="form-group">
										<label>Text</label>
										<input type="text" placeholder="Text" name="DESCRIPTION" class="form-control form-control-rounded">
									</div>

                                <div class="clearfix">
                                    <input class="btn btn-primary float-right" type="submit" name="insert" value="ADD">
                                </div>
                            </form>
                            
                           
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