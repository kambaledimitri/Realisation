<div class="top-bar primary-top-bar">
			<div class="container-fluid">
				<div class="row">
					<div class="col">
						<a class="admin-logo" href="index.html">
							<h1>
								<img alt="" src="assets/img/sos.png" class="logo-icon margin-r-20 col-sm-12">
								
							</h1>
						</a>
						<div class="left-nav-toggle" >
							<a  href="#" class="nav-collapse"><i class="fa fa-bars"></i></a>
						</div>
						<div class="left-nav-collapsed" >
							<a  href="#" class="nav-collapsed"><i class="fa fa-bars"></i></a>
						</div>
						
					</div>
					<div class="col">
						<ul class="list-inline top-right-nav">
							
							
							
							<li class="dropdown avtar-dropdown">
								<a class="dropdown-toggle" data-toggle="dropdown" href="#">
																		
									<?php     
                             $service = $db->prepare('SELECT * FROM admin WHERE ID_ADMIN=:idc

                            ');
                            $service->execute(array(
                            'idc' => $_SESSION['user']['ID_ADMIN']
                            ));  
                            $don=$service->fetchAll(PDO::FETCH_OBJ);
                            foreach($don as $s):  
                        ?>
                            <img alt="" width="40" class="rounded-circle mar-btm margin-b-10 circle-border " src="images/<?=$s->PHOTO;?>">
                        <?php endforeach ?>
							 <?php 
                                if ($_SESSION['user']['username'] !== array()) {
                                   $users = $_SESSION['user']['username'];
                                   echo "$users";
                                }
                             ?>
								</a>
								<ul class="dropdown-menu top-dropdown">
									
									<li>
										<a class="dropdown-item" href="page-profile.php"><i class="icon-user"></i> Profile</a>
									</li>
									<li class="dropdown-divider"></li>
									<li>
										<a class="dropdown-item" href="logout.php"><i class="icon-logout"></i> Logout</a>
									</li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		