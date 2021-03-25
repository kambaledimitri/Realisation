<?php 
  include 'config/connect.php';
    

  if (empty($_SESSION['user'])) {
    header('location:page-login.php');
  }

 $recuperation =$db->query('SELECT * FROM faqsection');

 if(isset($_GET['edit'])){
    $id_faq = $_GET['edit'];

   $query2 = $db->query("SELECT * FROM faqsection where id=".$id_faq);
   $user = $query2->fetch();
}

if (empty($_SESSION['user'])) {
    header('location:page-login.php');
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
		
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

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
				<h2>Add User</h2>
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="#">Accueil</a></li>
					<li class="breadcrumb-item"><a href="#">Banner</a></li>
					<li class="breadcrumb-item active">FAQ</li>		
				</ol>
			</div>
		</div>

        <section class="main-content">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        
                        <div class="card-body">
                        <form method="POST" action="<?php if(isset($_GET['edit'])){ echo "faqupdate.php"; }else { echo "faqadd.php"; } ?>" enctype="multipart/form-data">
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
									<div class="form-group">
								    <input type="text" class="form-control" value="<?php if(isset($_GET['edit'])){ echo($user['question1']); }?>" name="question1" placeholder="Question 1" />
							      </div>

								</div>
								<div class="col-md-6">
									<div class="form-group">
								    <input type="text" class="form-control" value="<?php if(isset($_GET['edit'])){ echo($user['reponse1']); }?>" name="reponse1" placeholder="reponse 1" />
							      </div>
								</div>
                                <div class="col-md-6">
									<div class="form-group">
								    <input type="text" class="form-control" value="<?php if(isset($_GET['edit'])){ echo($user['question2']); }?>" name="question2" placeholder="Question 2" />
							      </div>

								</div>
								<div class="col-md-6">
									<div class="form-group">
								    <input type="text" class="form-control" value="<?php if(isset($_GET['edit'])){ echo($user['reponse2']); }?>" name="reponse2" placeholder="reponse 2" />
							      </div>
								</div>
                                <div class="col-md-6">
									<div class="form-group">
								    <input type="text" class="form-control" value="<?php if(isset($_GET['edit'])){ echo($user['question3']); }?>" name="question3" placeholder="Question 3" />
							      </div>

								</div>
								<div class="col-md-6">
									<div class="form-group">
								    <input type="text" class="form-control" value="<?php if(isset($_GET['edit'])){ echo($user['reponse3']); }?>" name="reponse3" placeholder="reponse 3" />
							      </div>
								</div>
                                <div class="col-md-6">
									<div class="form-group">
								    <input type="text" class="form-control" value="<?php if(isset($_GET['edit'])){ echo($user['question4']); }?>" name="question4" placeholder="Question 4" />
							      </div>

								</div>
								<div class="col-md-6">
									<div class="form-group">
								    <input type="text" class="form-control" value="<?php if(isset($_GET['edit'])){ echo($user['reponse4']); }?>" name="reponse4" placeholder="reponse 4" />
							      </div>
								</div>
                                <input class="btn btn-primary" type="submit" name="submit" value="<?php if(isset($_GET['edit'])){ echo('Update'); } else { echo('Enregistrer'); }?> " />
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
									<th>#</th>
									<th>Question1</th>
									<th>Reponse1</th>
									<th>Question2</th>
									<th>Reponse2</th>
                                    <th>Question3</th>
									<th>Reponse3</th>
                                    <th>Question4</th>
									<th>Reponse4</th>
									<th>action</th>
								</thead>
								<tbody>
									<?php while ($ligne = $recuperation->fetch()) { ?>
										<tr>
											<td><?php echo($ligne['id']); ?></td>
                                            <td><img class="pro" src="imagesfaq/<?=$ligne['photo'];?>"></td>
											<td><?php echo($ligne['question1']); ?></td>
											<td><?php echo($ligne['reponse1']); ?></td>
											<td><?php echo($ligne['question2']); ?></td>
											<td><?php echo($ligne['reponse2']); ?></td>
                                            <td><?php echo($ligne['question3']); ?></td>
											<td><?php echo($ligne['reponse3']) ;?></td>
                                            <td><?php echo($ligne['question4']); ?></td>
											<td><?php echo($ligne['reponse4']); ?></td>
											<td><a class="btn btn-primary" href="faq.php?edit=<?php  echo($ligne['id']); ?>" >Editer</a></td>
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
        <script type="text/javascript" src="assets/lib/jquery-validate/jquery.validate.js"></script>
        <script type="text/javascript">
		$.validator.setDefaults( {
			submitHandler: function () {
				alert( "submitted!" );
			}
		} );

		$( document ).ready( function () {
			$( "#confirmForm" ).validate( {
				rules: {
					firstname: "required",
					lastname: "required",
					username: {
						required: true,
						minlength: 2
					},
					password: {
						required: true,
						minlength: 5
					},
					confirm_password: {
						required: true,
						minlength: 5,
						equalTo: "#password"
					},
					email: {
						required: true,
						email: true
					},
					agree: "required"
				},
				messages: {
					firstname: "Please enter your firstname",
					lastname: "Please enter your lastname",
					username: {
						required: "Please enter a username",
						minlength: "Your username must consist of at least 2 characters"
					},
					password: {
						required: "Please provide a password",
						minlength: "Your password must be at least 5 characters long"
					},
					confirm_password: {
						required: "Please provide a password",
						minlength: "Your password must be at least 5 characters long",
						equalTo: "Please enter the same password as above"
					},
					email: "Please enter a valid email address",
					agree: "Please accept our policy"
				},
				errorElement: "em",
				errorPlacement: function ( error, element ) {
					// Add the `help-block` class to the error element
					error.addClass( "help-block" );

					if ( element.prop( "type" ) === "checkbox" ) {
						error.insertAfter( element.parent( "label" ) );
					} else {
						error.insertAfter( element );
					}
				},
				highlight: function ( element, errorClass, validClass ) {
					$( element ).parents( ".form-group" ).addClass( "has-error" ).removeClass( "has-success" );
				},
				unhighlight: function (element, errorClass, validClass) {
					$( element ).parents( ".form-group" ).addClass( "has-success" ).removeClass( "has-error" );
				}
			} );

			$( "#confirmForm1" ).validate( {
				rules: {
					firstname1: "required",
					lastname1: "required",
					username1: {
						required: true,
						minlength: 2
					},
					password1: {
						required: true,
						minlength: 5
					},
					confirm_password1: {
						required: true,
						minlength: 5,
						equalTo: "#password1"
					},
					email1: {
						required: true,
						email: true
					},
					agree1: "required"
				},
				messages: {
					firstname1: "Please enter your firstname",
					lastname1: "Please enter your lastname",
					username1: {
						required: "Please enter a username",
						minlength: "Your username must consist of at least 2 characters"
					},
					password1: {
						required: "Please provide a password",
						minlength: "Your password must be at least 5 characters long"
					},
					confirm_password1: {
						required: "Please provide a password",
						minlength: "Your password must be at least 5 characters long",
						equalTo: "Please enter the same password as above"
					},
					email1: "Please enter a valid email address",
					agree1: "Please accept our policy"
				},
				errorElement: "em",
				errorPlacement: function ( error, element ) {
					// Add the `help-block` class to the error element
					error.addClass( "help-block" );

					// Add `has-feedback` class to the parent div.form-group
					// in order to add icons to inputs
					element.parents( ".form-group" ).addClass( "has-feedback" );

					if ( element.prop( "type" ) === "checkbox" ) {
						error.insertAfter( element.parent( "label" ) );
					} else {
						error.insertAfter( element );
					}

					// Add the span element, if doesn't exists, and apply the icon classes to it.
					if ( !element.next( "input" )[ 0 ] ) {
						$('input').addClass( "form-control-danger" ).removeClass( "form-control-success" );
					}
				},
				success: function ( label, element ) {
					// Add the span element, if doesn't exists, and apply the icon classes to it.
					if ( !$( element ).next( "input" )[ 0 ] ) {
						$('input').addClass( "form-control-success" ).removeClass( "form-control-danger" );
					}
				},
				highlight: function ( element, errorClass, validClass ) {
					$( element ).parents( ".form-group" ).addClass( "has-danger" ).removeClass( "has-success" );
					$('input').addClass( "form-control-danger" ).removeClass( "form-control-success" );
				},
				unhighlight: function ( element, errorClass, validClass ) {
					$( element ).parents( ".form-group " ).addClass( "has-success" ).removeClass( "has-danger" );
					$('input').addClass( "form-control-success" ).removeClass( "form-control-danger" );
				}
			} );
		} );
	</script>
    </body>

<!-- Mirrored from www.aksisweb.com/theme/fixed/layouts-1/form-validations.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 02 Feb 2021 22:28:33 GMT -->
</html>