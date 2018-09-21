<?php 
	include 'include/Formation.php';
	$Formation = new Formation($conn);
	include 'include/Connection.php';
	session_start();
	if (!isset($_SESSION['user_session'])) {
  header ('Location: index.php');
  exit();
}
  if(isset($_POST['Aformation'])){
  	$id_formation="";
  	$libelle = $_POST['libelle'];
  	$categorie = $_POST['categorie'];
  	$prix = $_POST['prix'];
  	if($libelle==""){
      $error[] = "Vous devez saisir un libelle de formation !";}
      else if ($categorie=="") {
      	$error[] = "Vous devez saisir un categorie de formation !";}
      else if ($prix==""){
      	$error[] = "Vous devez saisir le prix de formation !";}
      	else  { 

            $req = $conn->prepare("SELECT libelle FROM formation WHERE libelle=:libelle OR categorie=:categorie LIMIT 1");
           $req->execute(array(':libelle'=>$libelle ,':categorie'=>$categorie));

            $reponse=$req->fetch(PDO::FETCH_ASSOC);


            if($reponse['libelle'] == $libelle ||  $reponse['categorie'] == $categorie){
              $error[] = "La formation  existe déja  ";
            }
    else  {
  	 	$Formation->register_Formation($id_formation,$libelle,$prix,$categorie) ;
  	 	$Formation->redirect('ListFormations.php'); 
  	 }
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
	    <div class="sidebar" data-color="blue" data-image="../assets/img/sidebar-1.jpg">
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
	                            <div class="card-header" data-background-color="blue">
	                                <h4 class="title">Editer le profil</h4>
									<p class="category">Ajouter Formation</p>
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
													<label class="control-label">Libelle:</label>
													<input type="text" name="libelle" style="height: 40px; border-width:0px;border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: blue;  " >
												</div>
	                                        </div>
	                                        <div class="col-md-4">
												<div class="form-group label-floating">
													<label class="control-label">Categorie:</label>
													<input type="text" name="categorie" style="height: 40px; border-width:0px;border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: blue;  " >
												</div>
	                                        </div>
	                                    </div>
	                                        

	                                    <div class="row">
	                                        <div class="col-md-4">
												<div class="form-group label-floating">
													<label class="control-label">Prix(DT):</label>
													<input type="number" style="height: 40px; border-width:0px;border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: blue;  " name="prix" min="0" >
												</div>
	                                        </div>
	                                        
	                                    </div>

	                                    <button type="submit" class="btn btn-info pull-right" name="Aformation">Ajouter</button>
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
