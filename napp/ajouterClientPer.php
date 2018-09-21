<?php 
	include 'include/Client.php';
	$Client = new Client($conn);
	include 'include/Connection.php';
	session_start();
	if (!isset($_SESSION['user_session'])) {
  header ('Location: index.php');
  exit();
}
  if(isset($_POST['clientPer'])){
  	$id_client_part="";
  	$nom = $_POST['nom'];
  	$prenom = $_POST['prenom'];
  	$date_nissance = $_POST['date_naissance'];
  	$adresse = $_POST['adresse'];
  	$email = $_POST['email'];
  	$cin = $_POST['cin'];
  	$numtel = $_POST['tel1'];
  	$num_tel2 = $_POST['tel2'];
  	$num_res = $_POST['responsable'];
  	$login = $_POST['login'];
  	$motdepasse= $_POST['pwd'];
  	if($nom==""){
      $error[] = "Vous devez saisir un nom de client !";}
      else if ($prenom=="") {
      	$error[] = "Vous devez saisir un prénom de client !";}
      else if ($date_nissance==""){
      	$error[] = "Vous devez saisir date naissance de client !";}
      else if ($adresse=="") {
        $error[] = "Vous devez saisir un adresse de client !";}
      else if($email=="") {
	    $error[] = "Vous devez saisir un email";}
	  else if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
	    $error[] = 'Vous devez saisir un email valide';}
	  else if ($cin=="") {
	    $error[] = "Vous devez saisir un cin";}
	  else if(strlen($cin) < 8 || strlen($cin) > 8) {
        $error[] = "Le cin  doit avoir 8 caractères";}
      else if ($numtel =="" || $num_tel2==""||$num_res==""){
        $error[] = 'Vous devez saisir numéro de téléphone ';}
      else if (strlen($numtel)<8 || strlen($num_tel2)<8||strlen($num_res)<8 || strlen($numtel)>8 || strlen($num_tel2)>8||strlen($num_res)>8){
        $error[] = 'Vous devez saisir numéro de téléphone  valide';}  
      else if ($login==""){
        $error[] = "Vous devez saisir un login";}
      else if ($motdepasse==""){
		$error[] = "Vous devez saisir un mot de passe";}
     else if(strlen($motdepasse) < 6) {
        $error[] = "Le mot de passe doit avoir au moins 6 caractères"; }
        else  { 

            $req = $conn->prepare("SELECT email, cin FROM client_par WHERE cin=:cin OR email=:email LIMIT 1");
           $req->execute(array(':email'=>$email ,':cin'=>$cin));

            $reponse=$req->fetch(PDO::FETCH_ASSOC);


            if($reponse['cin'] == $cin ||  $reponse['email'] == $email){
              $error[] = "Le client  existe deja  ";
            }
    

  	 else  {
  	 	$Client->register($id_client_part,$nom,$prenom,$numtel,$num_tel2,$num_res,$adresse,$email,$cin,$date_nissance,$login,$motdepasse) ;
  	 	$Client->redirect('ListClients.php'); 
  	 }
  	}
		}

  
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/formapro.jpg" />
	<link rel="icon" type="image/png" href="assets/img/formapro.jpg" />
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
	    <div class="sidebar" data-color="orange" data-image="../assets/img/sidebar-1.jpg">
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
	                            <div class="card-header" data-background-color="orange">
	                                <h4 class="title">Editer le profil</h4>
									<p class="category">Ajouter Client Particulier</p>
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
													<label class="control-label">Nom</label>
													<input type="text" name="nom" style="height: 40px; border-width:0px;border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: orange;  "style="height: 40px; border-width:0px;border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: orange;  " >
												</div>
	                                        </div>
	                                        <div class="col-md-4">
												<div class="form-group label-floating">
													<label class="control-label">Prenom</label>
													<input type="text" name="prenom" style="height: 40px; border-width:0px;border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: orange;  " >
												</div>
	                                        </div>
	                                        <div class="col-md-4">
												<div class="form-group label-floating">
													<label class="control-label">Date naissance</label>
													<input type="date" name="date_naissance" style="height: 40px; border-width:0px;border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: orange;  " >
												</div>
	                                        </div>
	                                    </div>

	                                    <div class="row">
	                                        <div class="col-md-4">
												<div class="form-group label-floating">
													<label class="control-label">Adresse</label>
													<input type="text" style="height: 40px; border-width:0px;border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: orange;  " name="adresse" >
												</div>
	                                        </div>
	                                        <div class="col-md-4">
												<div class="form-group label-floating">
													<label class="control-label">Email</label>
													<input type="text" style="height: 40px; border-width:0px;border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: orange;  " name="email" >
												</div>
	                                        </div>
	                                        <div class="col-md-4">
												<div class="form-group label-floating">
													<label class="control-label">Cin</label>
													<input type="text" style="height: 40px; border-width:0px;border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: orange;  " name="cin" size="8" min="0">
												</div>
	                                        </div>

	                                    </div>
	                                    <div class="row">
	                                        <div class="col-md-4">
		                                    	<div class="form-group label-floating">
		                                    		<label class="control-label">Tel1</label>
		                                    		<input type="number" style="height: 40px; border-width:0px;border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: orange;  " name="tel1" min="0" size="8">
		                                    	</div>
	                                    		
	                                    	</div>
	                                    	<div class="col-md-4">
		                                    	<div class="form-group label-floating">
		                                    		<label class="control-label">Tel2</label>
		                                    		<input type="number" style="height: 40px; border-width:0px;border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: orange;  " name="tel2" min="0" size="8">
		                                    	</div>
	                                    		
	                                    	</div>
	                                    	<div class="col-md-4">
		                                    	<div class="form-group label-floating">
		                                    		<label class="control-label">Tel responsable</label>
		                                    		<input type="number" style="height: 40px; border-width:0px;border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: orange;  " name="responsable" min="0" size="8">
		                                    	</div>
	                                    		
	                                    	</div>
	                                    </div>

	                                     <div class="row">
	                                        
	                                        <div class="col-md-4">
												<div class="form-group label-floating">
													<label class="control-label">Login</label>
													<input type="text" name="login" style="height: 40px; border-width:0px;border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: orange;  " >
												</div>
	                                        </div>
	                                        <div class="col-md-4">
												<div class="form-group label-floating">
													<label class="control-label">Mot de passe</label>
													<input type="password" name="pwd" style="height: 40px; border-width:0px;border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: orange;  " >
												</div>
	                                        </div>
	                                    </div>

	                                    <button type="submit" class="btn btn-warning pull-right" name="clientPer">Ajouter</button>
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
