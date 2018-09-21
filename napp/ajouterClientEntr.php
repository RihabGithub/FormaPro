<?php
include 'include/Connection.php';
  

  if(isset($_POST['clientent'])){
  	$nom = $_POST['nom'];
  	$adresse = $_POST['adresse'];
  	$email = $_POST['email'];
  	$tel1 = $_POST['tel1'];
  	$tel2 = $_POST['tel2'];
  	$responsable = $_POST['responsable'];
  	$login = $_POST['login'];
  	$motdepasse= $_POST['pwd'];
//$date = new date("Ymdhis");
          //hashage du mot de passe avant son ajout dans la base
          $new_password = password_hash($motdepasse, PASSWORD_DEFAULT);
   $conn->exec("INSERT INTO client_ent( id_client_ent,nom,tel1,tel2,responsable,adresse,email,login,motdepasse) VALUES (now(),'$nom','$tel1','$tel2','$responsable','$adresse','$email','$login','$new_password')  ");


  }
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png" />
	<link rel="icon" type="image/png" href="../assets/img/favicon.png" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Smart FormaPro</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
   
    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!--  Material Dashboard CSS    -->
    <link href="assets/css/material-dashboard.css" rel="stylesheet"/>

    <!--  CSS for DataTable   -->
    
   
<link href="assets/css/datatables.css" rel="stylesheet" />
<link href="assets/css/jquery.dataTables.min.css" rel="stylesheet" />
    


    <!--     Fonts and icons   -->   
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
     <link href='assets/css/icon.css' rel='stylesheet' type='text/css'>
   
	<script src="assets/js/jquery.dataTables.min.js" type="text/javascript"></script>
     <script src="assets/js/jquery-3.1.0.min.js" type="text/javascript"></script> 
    <script src="assets/js/dataTables.bootstrap.min.js" type="text/javascript"></script>
	<script src="assets/js/jquery.dataTables.min.js" type="text/javascript"></script>
    
    
    

    
    
</head>

<body>

	<div class="wrapper">
	    <div class="sidebar" data-color="purple" data-image="../assets/img/sidebar-1.jpg">
			<!--
	        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"
		    Tip 2: you can also add an image using data-image tag-->

			

			<div class="logo">
				<a href="" class="simple-text">
					FormaPro
				</a>
			</div>


	    	<div class="sidebar-wrapper">
				<ul class="nav">
	                <li class="active">
	                    <a href="dashboard.php">
	                        <i class="material-icons">dashboard</i>
	                        <p>Dashboard</p>
	                    </a>
	                </li>
	               
	                
	                
	            </ul>
	          
             
	    	</div>


		</div>


	    <div class="main-panel">
			<nav class="navbar navbar-transparent navbar-absolute">
				<div class="container-fluid">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="#">Table List</a>
					</div>
					
				</div>
			</nav>

         <div class="content">

	            <div class="container-fluid">
	                <div class="row">
	                    <div class="col-md-8">
	                        <div class="card">
	                            <div class="card-header" data-background-color="purple">
	                                <h4 class="title">Editer le profil</h4>
									<p class="category">Ajouter Client Entreprise</p>
	                            </div>
	                            <div class="card-content">
	                                <form method="post">
	                                    <div class="row">
	                                        <div class="col-md-6">
												<div class="form-group label-floating">
													<label class="control-label">Nom</label>
													<input type="text" name="nom" class="form-control" >
												</div>
	                                        </div>
	                                        
	                                    </div>

	                                    <div class="row">
	                                        <div class="col-md-4">
												<div class="form-group label-floating">
													<label class="control-label">Adresse</label>
													<input type="text" class="form-control" name="adresse" >
												</div>
	                                        </div>
	                                        <div class="col-md-4">
												<div class="form-group label-floating">
													<label class="control-label">Email</label>
													<input type="text" class="form-control" name="email" >
												</div>
	                                        </div>
	                                        

	                                    </div>
	                                    <div class="row">
	                                        <div class="col-md-4">
		                                    	<div class="form-group label-floating">
		                                    		<label class="control-label">Tel1</label>
		                                    		<input type="number" class="form-control" name="tel1">
		                                    	</div>
	                                    		
	                                    	</div>
	                                    	<div class="col-md-4">
		                                    	<div class="form-group label-floating">
		                                    		<label class="control-label">Tel2</label>
		                                    		<input type="number" class="form-control" name="tel2">
		                                    	</div>
	                                    		
	                                    	</div>
	                                    	<div class="col-md-4">
		                                    	<div class="form-group label-floating">
		                                    		<label class="control-label">Tel responsable</label>
		                                    		<input type="number" class="form-control" name="responsable">
		                                    	</div>
	                                    		
	                                    	</div>
	                                    </div>

	                                     <div class="row">
	                                        
	                                        <div class="col-md-6">
												<div class="form-group label-floating">
													<label class="control-label">Login</label>
													<input type="text" name="login" class="form-control" >
												</div>
	                                        </div>
	                                        <div class="col-md-6">
												<div class="form-group label-floating">
													<label class="control-label">Mot de passe</label>
													<input type="password" name="pwd" class="form-control" >
												</div>
	                                        </div>
	                                    </div>

	                                    <button type="submit" class="btn btn-primary pull-right" name="clientent">Ajouter</button>
	                                    <button  type="button"    class="btn btn-info  " data-toggle="modal" data-target="#myModal">Modifier</button>
	                                  </form>
	                            </div>
	                        </div>
	                    </div>
	




</div></div></div>
</div>


 </div>
	</div>

<?php include 'model.php' ?>

</body>
<!--   Core JS Files   -->
	<script src="../assets/js/jquery-3.1.0.min.js" type="text/javascript"></script>
	<script src="../assets/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="../assets/js/material.min.js" type="text/javascript"></script>

	

</html>
