<?php 
  include 'config/connect.php';
   

  $query = $db->query("SELECT * FROM counter");

  if(isset($_GET['edit'])){

    
        $id_counteur = $_GET['edit'];

        $query2 = $db->query("SELECT * FROM counter WHERE id_count=".$id_counteur);
        $user = $query2->fetch();
  }

  if(isset($_POST['action']) && $_POST['action']=="edit" ){
        $req = $db->prepare('UPDATE counter SET icone=:icone, texte=:texte, nombre=:nombre WHERE id_count=:id ');
        $req->execute(array(
        'icone' => $_POST['icone'],
        'texte' => $_POST['texte'],
        'nombre' => $_POST['nombre'],
        'id' => $_POST['id']                       
     ));

        header('location:counter.php');
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
        
        
    </head>
    <body>

            
            <?php include('dimitri/topbar.php')?>

            <!-- ============================================================== -->
        <!--                        Topbar End                              -->
        <!-- ============================================================== -->
        
        
        <?php include('dimitri/side.php')?>
        <!-- ============================================================== -->
        <!--                        Right Side End                          -->
        <!-- ============================================================== -->
        

            <?php include('dimitri/navigation.php')?>
        <!-- ============================================================== -->


        <!-- ============================================================== -->
        <!--                        Content Start                           -->
        <!-- ============================================================== -->
                    
        

        <section class="main-content">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header card-default">
                            uptate
                        </div>                                       
                        <div class="card-body">
                            <form method="post" class="form-horizontal" action="<?php if(isset($_GET['edit'])){ echo "counter.php"; }else { echo "newclient.php"; } ?>"  >
                            <input type="hidden" name="id" value="<?php if(isset($_GET['edit'])){ echo($user['id_count']); }?>">
                            <input type="hidden" name="action" value="<?php if(isset($_GET['edit'])){ echo('edit'); } else {echo "insert";}?>">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                    <input type="text" class="form-control" id="firstname" value="<?php if(isset($_GET['edit'])){ echo($user['icone']); }?>" name="icone" placeholder=" icone" />
                                  </div>

                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                    <input type="text" class="form-control" id="username" value="<?php if(isset($_GET['edit'])){ echo($user['nombre']); }?>" name="nombre" placeholder="nombre" />
                                  </div>
                                  
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                    <input type="text" class="form-control" id="firstname" name="texte" value="<?php if(isset($_GET['edit'])){ echo($user['texte']); }?>" placeholder="text" />
                                  </div>
                                  
                                </div>
                                
                                  <input class="btn btn-primary" type="submit" name="submit" value="<?php if(isset($_GET['edit'])){ echo('Update'); } else { echo('Enregistrer'); }?> " />
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
                           client list
                        </div>
                        <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-stripped table-bordered">
                                <thead>
                                    <th>ID</th>
                                    <th>icone</th>
                                    <th>nombre</th>
                                    <th>texte</th>
                                    
                                </thead>
                                <tbody>
                                    <?php while ($ligne = $query->fetch()) { ?>
                                        <tr>
                                            <td><?php echo($ligne['id_count']); ?></td>
                                            <td><?php echo($ligne['icone']); ?></td>
                                            <td><?php echo($ligne['nombre']); ?></td>
                                            <td><?php echo($ligne['texte']); ?></td>
                                            <td><a class="btn btn-primary" href="counter.php?edit=<?=$ligne['id_count']?>">Editer</a></td>
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
        <!--                        Content End                         -->
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
        
    </script>
    </body>

<!-- Mirrored from www.aksisweb.com/theme/fixed/layouts-1/form-validations.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 02 Feb 2021 22:28:33 GMT -->
</html>