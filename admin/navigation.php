 <div class="main-sidebar-nav default-navigation">
            <div class="nano">
                <div class="nano-content sidebar-nav">
				
					<div class="card-body border-bottom text-center nav-profile">
						<div class="notify setpos"> <span class="heartbit"></span> <span class="point"></span> </div>
                        <img alt="profile" class="margin-b-10  " src="assets/img/avtar-2.png" width="80">
                        <p class="lead margin-b-0 toggle-none">
                               <?php 
                                if ($_SESSION['user']['username'] !== array()) {
                                   $users = $_SESSION['user']['username'];
                                   echo "$users";
                                }
                             ?>
                        </p>
                        <p class="text-muted mv-0 toggle-none">Welcome</p>						
                    </div>
					
                    <ul class="metisMenu nav flex-column" id="menu">
                        <li class="nav-heading"><span></span></li>
						<li class="nav-item"><a class="nav-link" href="index.php"><i class="fa fa-home"></i> <span class="toggle-none">Accueil <span class="badge badge-pill badge-danger float-right mr-2">1.0</span></span></a></li>
                         <li class="nav-item">
                            <a class="nav-link" href="javascript: void(0);" aria-expanded="false"><i class="fa fa-user"></i> <span class="toggle-none">Utilisateur<span class="fa arrow"></span></span></a>
                            <ul class="nav-second-level nav flex-column sub-menu" aria-expanded="false">
                                <li class="nav-item"><a class="nav-link" href="Ajout-user.php">Ajouter Utilisateur</a></li>
                               
                                
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"  href="javascript: void(0);" aria-expanded="false"><i class="fa fa-plus-square-o"></i> <span class="toggle-none">banners<span class="fa arrow"></span></span></a>
                            <ul class="nav-second-level nav flex-column sub-menu" aria-expanded="false">
                                <li class="nav-item"><a class="nav-link" href="Ajout-objet.php">Banner1</a></li>
                                <li class="nav-item"><a class="nav-link" href="all-objet.php">Banner2</a></li>
                            </ul>
                        </li>
                       <li class="nav-item">
                            <a class="nav-link"  href="javascript: void(0);" aria-expanded="false"><i class="fa fa-square"></i> <span class="toggle-none">Features<span class="fa arrow"></span></span></a>
                            <ul class="nav-second-level nav flex-column sub-menu" aria-expanded="false">
                               <li class="nav-item"><a class="nav-link" href="ajout-box.php">Feature-right</a></li>
                               <li class="nav-item"><a class="nav-link" href="ajout-box1.php">Feature-left</a></li>
                               <li class="nav-item"><a class="nav-link" href="image.php">Image</a></li>
                               
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a  class="nav-link" href="javascript: void(0);" aria-expanded="false"><i class="fa fa-group"></i> <span class="toggle-none">Equipe<span class="fa arrow"></span></span></a>
                            <ul class="nav-second-level nav flex-column sub-menu" aria-expanded="false">
								<li class="nav-item"><a class="nav-link" href="Ajout-Membre.php">Ajouter Membre</a></li>
                             
                            </ul>
                        </li>						
                       
                        
						
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
		<!-- 						Navigation End	 						-->
		<!-- ============================================================== -->
