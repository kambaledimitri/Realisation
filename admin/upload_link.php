<?php 
  include 'config/connect.php';
    

  $query = $db->query("SELECT * FROM url");

  if(isset($_GET['edit'])){
	 	$id = $_GET['edit'];

		$query2 = $db->query("SELECT * FROM url");
		$user = $query2->fetch();
  }

  if(isset($_POST['submit']) ){
		$req = $db->prepare('UPDATE url SET url_ios=:url_ios, url_anro=:url_anro, titre=:titre ');
		$req->execute(array(
		'url_ios' => $_POST['url_ios'],
		'url_anro' => $_POST['url_anro'],
		'titre' => $_POST['titre']
		
	 ));

		header('location:upload_link.php');
  }



  if (empty($_SESSION['user'])) {
  	header('location:page-login.php');
  }
 ?>

<!DOCTYPE html>
<html lang="en">

<head>
        <?php include('dimitri/head.php');?>
		
		<?php include('dimitri/link.php');?>
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
		<!--<?php include('dimitri/side.php')?>-->
		<!-- ============================================================== -->
		<!--                        Right Side End                          -->
		<!-- ============================================================== -->
		

        <!-- ============================================================== -->
		<!-- 						Navigation Start 						-->
		<!-- ============================================================== -->
       <?php include('dimitri/navigation.php')?>
			
		<!-- ============================================================== -->
		<!-- 						Content Start	 						-->
		<!-- ============================================================== -->
		<div class="row page-header">
				<div class="col-lg-6 align-self-center ">
				  
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="index.php">Accueil</a></li>
						<li class="breadcrumb-item active">Url telechargement </li>
					</ol>
				</div>
				
		</div>
		
        <section class="main-content">
           
         <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        
                        <div class="card-body">
                            <form method="post" class="form-horizontal" action="upload_link.php">
				      		<div class="row">
								<div class="col-md-12">
									<div class="form-group">
								    <input type="text" class="form-control" value="<?php if(isset($_GET['edit'])){ echo($user['titre']); }?>" name="titre" placeholder="titre" />
							      </div>

								</div>
								<div class="col-md-6">
									<div class="form-group">
								    <input type="text" class="form-control"  value="<?php if(isset($_GET['edit'])){ echo($user['url_ios']); }?>" name="url_ios" placeholder="url_ios" />
							      </div>
							      
								</div>
								<div class="col-md-6">
									<div class="form-group">
								    <input type="text" class="form-control" name="url_anro" value="<?php if(isset($_GET['edit'])){ echo($user['url_anro']); }?>" placeholder="url_anro" />
							      </div>
							      
								</div>
								
							      <input class="btn btn-primary" type="submit" name="submit" value="<?php if(isset($_GET['edit'])){ echo('Update'); }?> " />
								</div>
								</div>
							</div>

						</form>
                        </div>
                    </div>
				</div>
				<div class="col-sm-12">

					<div class="card">
						<div class="card-header card-default">
                           user list
                        </div>
                        <div class="card-body">
						<div class="table-responsive">
							<table class="table table-stripped table-bordered">
								<thead>
									<th>Numero</th>
									<th>Titre</th>
									<th>URL IOS</th>
									<th>URL ANDROID</th>
									<th>action</th>
								</thead>
								<tbody>
									<?php while ($ligne = $query->fetch()) { ?>
										<tr>
											<td><?php echo($ligne['id']); ?></td>
											<td><?php echo($ligne['titre']); ?></td>
											<td><?php echo($ligne['url_ios']); ?></td>
											<td><?php echo($ligne['url_anro']); ?></td>
											<td><a class="btn btn-primary" href="upload_link.php?edit=<?php  echo($ligne['id']) ?>" >Editer</a></td>
										</tr>
									<?php } ?>
								</tbody>
							</table>
							</div>
						</div>
					</div>

                </div>


            </div>
			
			
				
			<?php include('dimitri/footer.php')?>

        </section>
       

		
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
			
        <!--Chart Script-->
        <script src="assets/lib/chartjs/chart.min.js"></script>
		<script src="assets/lib/chartjs/chartjs-sass.js"></script>

		<!--Vetor Map Script-->
		<script src="assets/lib/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
        <script src="assets/lib/vectormap/jquery-jvectormap-us-aea-en.js"></script>
		
		<!-- Chart C3 -->
        <script src="assets/lib/chart-c3/d3.min.js"></script>
        <script src="assets/lib/chart-c3/c3.min.js"></script>
	
        <!-- Datatables-->
        <script src="assets/lib/datatables/jquery.dataTables.min.js"></script>
        <script src="assets/lib/datatables/dataTables.responsive.min.js"></script>
        <script src="assets/lib/toast/jquery.toast.min.js"></script>
        <script src="assets/js/dashboard.js"></script>
		
    </body>

<!-- Mirrored from www.aksisweb.com/theme/fixed/layouts-1/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 02 Feb 2021 22:27:14 GMT -->
</html>