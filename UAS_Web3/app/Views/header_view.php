<head>
	<style>
		.verti ul {
		  list-style-type: none;
		  margin: 0;
		  padding: 0;
		  width: 100%;
		  background-color: #003158;
		}

		.verti li a {
		  display: block;
		  color: white;
		  padding: 8px 16px;
		  text-decoration: none;
		}

		.verti li a:hover {
		  background-color: #555;
		  color: white;
		}
	</style>
	<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
	<script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
	<div class="container-fluid" style="background-color: #003158;">
		<div class="<?=$contain;?>">
			<nav class = "navbar navbar-expand-lg navbar-light nav-sticky" >
				<div class = "collapse navbar-collapse" id = "navbarText">
					
					<?php 
						$session = session();
						if(isset($_SESSION['status_user'])){
							if($_SESSION['status_user']=="ENABLE"){
					?>
								<ul class = "navbar-nav mr-auto">
									<li class = "nav-item">
										<a class = "nav-link text-white " href="<?=base_URL('beranda')?>">Perpustakaan<span class = "sr-only">(current)</span></a>
									</li>
								</ul>
								<ul class="nav navbar-nav navbar-right">
									<li class = "nav-item">
										<a class = "nav-link text-white" href = "profile">Profile</a>
									</li>
								</ul>
					<?php
							}elseif($_SESSION['status_user']=="ADMIN"){
					?>
								<ul class = "navbar-nav mr-auto">
									<li class = "nav-item">
										<a class = "nav-link text-white " href="<?=base_URL('admin')?>">Perpustakaan<span class = "sr-only">(current)</span></a>
									</li>
								</ul>
								<ul class="nav navbar-nav navbar-right">
									<li class = "nav-item">
										<a class = "nav-link text-white" href = "<?=base_URL('logout')?>">Logout</a>
									</li>
								</ul>
					<?php
							}
							
						}else{
					?>
						<ul class = "navbar-nav mr-auto">
							<li class = "nav-item">
								<a class = "nav-link text-white ">Perpustakaan<span class = "sr-only">(current)</span></a>
							</li>
						</ul>
					<?php
						}
					?>
				</div>
			</nav>
		</div>
	</div>
</head>