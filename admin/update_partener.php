	<?php  include 'config/connect.php' ;
    
        // var_dump($_GET['mod']);
         if(isset($_GET['mod'])){
            $parte = $_GET['mod'];

            $requete=$db->query("SELECT * FROM partenaire WHERE id=".$parte);
            $res=$requete->fetch();
         }
  ?>
  
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('dimitri/head.php')?>
    <link href="assets/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/scss/style.css" rel="stylesheet">
</head>
<body>
<?php include('dimitri/topbar.php')?>

<?php include('dimitri/navigation.php')?>


<div class="row page-header">
			<div class="col-lg-6 align-self-center ">
				<h2>Form Validations</h2>
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="#">Home</a></li>
					<li class="breadcrumb-item"><a href="#">Partener</a></li>
					<li class="breadcrumb-item active">Update Partener</li>		
				</ol>
			</div>
		</div>

        <section class="main-content">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header card-default">
                            Partenaire
                        </div>
                        <div class="card-body">
                            <form id="signupForm" method="post" class="form-horizontal" action="box_update_partener.php" enctype="multipart/form-data">
                            <input type="hidden" name="id" value="<?php if(isset($_GET['mod'])){ echo($res['id']); }?>">
							<div class="form-group">
								<label for="firstname">name</label>
								<input type="text" class="form-control" id="name" name="nom" value="<?php if(isset($_GET['mod'])){ echo ($res['nom']) ;} ?>" placeholder="name" />
							</div>
                            <div class="form-group">
                                <img src="images/<?php if(isset($_GET['mod'])){echo($res['photo']);} ?>" width="200" class="rounded-circle mar-btm margin-b-10 circle-border" alt="">
                            </div>
							<div class="form-group">
								<label>image</label>
								<div class="fileinput fileinput-new input-group col-md-12" data-provides="fileinput">
									<div class="form-control" data-trigger="fileinput"><span class="fileinput-filename"></span></div>
										<span class="input-group-addon btn btn-primary btn-file ">
										<span class="fileinput-new">Select</span>
										<span class="fileinput-exists">Change</span>
										<input type="file"  name="PHOTO">
										</span>
										<a href="#" class="input-group-addon btn btn-danger  hover fileinput-exists" data-dismiss="fileinput">Remove</a>
									</div>
						    </div>


							<div class="form-group">
									<button type="submit" class="btn btn-primary" name="update" value="">Update</button>
							</div>
						</form>
                        </div>
                    </div>
                </div>
            </div>
        </section>     
        <?php include('dimitri/footer.php')?>

        <script src="assets/lib/jquery/dist/jquery.min.js"></script>
		<script src="assets/lib/bootstrap/js/popper.min.js"></script>
        <script src="assets/lib/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/lib/pace/pace.min.js"></script><script src="assets/lib/jasny-bootstrap/js/jasny-bootstrap.min.js"></script>
        <script src="assets/lib/slimscroll/jquery.slimscroll.min.js"></script>
        <script src="assets/lib/nano-scroll/jquery.nanoscroller.min.js"></script>
        <script src="assets/lib/metisMenu/metisMenu.min.js"></script>
        <script src="assets/js/custom.js"></script>
</body>
</html>