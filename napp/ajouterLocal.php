<?php 
	include 'include/Local.php';
	$Local = new Local($conn);
	include 'include/Connection.php';
	session_start();
	if (!isset($_SESSION['user_session'])) {
  header ('Location: index.php');
  exit();
}
  if(isset($_POST['Alocal'])){
  	$id_local="";
  	$id_assistant="";
  	$libelle = $_POST['libelle'];
  	$adresse = $_POST['adresse'];
  	
  	if($libelle==""){
      $error[] = "Vous devez saisir un libelle de formation !";}
      else if ($adresse=="") {
      	$error[] = "Vous devez saisir un categorie de formation !";}
      
    else  {
  	 	$Local->registerlocal($id_local,$libelle,$adresse,$id_assistant) ;
  	 	//$Local->redirect('ListSalles.php');
  	 	    //$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
 
  	 	//$conn->exec("INSERT INTO local 
           // (id_local,libelle,adresse,id_assistant)              
           // -- Je précise les colonnes puisque je ne donne pas une valeur pour toutes.
        //SELECT  id_assistant     
           // -- Attention à l'ordre !
        //FROM assistant ,local WHERE id_assistant.assistant = id_assistant.local");
  	 }
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
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" />

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
	                        <p>Accueil</p>
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
									<p class="category">Ajouter local</p>
	                            </div>
	                            <div class="card-content">
	                                <form method="post">
	                                <?php
if(isset($error)){
foreach($error as $error){
?>
<div class="alert alert-danger">
<i class="glyphicon glyphicon-warning-sign"></i> &nbsp; <?php echo $error; ?>
</div>
<?php
}
}
//Si joint est passé comme paramètre alors
// on ajoute un lien vers la page de connexion
?>
	                                    <div class="row">
	                                        <div class="col-md-4">
												<div class="form-group label-floating">
													<label class="control-label">Libelle</label>
													<input type="text" name="libelle" style="height: 40px; border-width:0px;border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: purple;  " >
												</div>
	                                        </div>
	                                        <div class="col-md-4">
												<div class="form-group label-floating">
													<label class="control-label">adresse</label>
													<input type="text" name="adresse" style="height: 40px; border-width:0px;border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: purple;  " >
												</div>
	                                        </div>
	                                    </div>
	                                        


	                                    <button type="submit" class="btn btn-primary pull-right" name="Alocal">Ajouter</button>
	                                  </form>
	                            </div>
	                        </div>
	                    </div>


	                           
 </div>
 
	</div>

</body>
<!--   Core JS Files   -->
	<script src="../assets/js/jquery-3.1.0.min.js" type="text/javascript"></script>
	<script src="../assets/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="../assets/js/material.min.js" type="text/javascript"></script>

	

</html>