<?php 
	//require_once 'include/Connection.php';
	//require_once 'include/Admin.php';
	session_start();
	if (!isset($_SESSION['user_session'])) {
  header ('Location: index.php');
  exit();
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

    <!--  Material Dashboard CSS    -->
    <link href="assets/css/material-dashboard.css" rel="stylesheet"/>

    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />

    <!--     Fonts and icons     -->
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

		        Tip 2: you can also add an image using data-image tag
		    -->
		    <a href="dashboard.php">
          <img src="assets/img/forma.png" width="280">
			</a>

	    	<div class="sidebar-wrapper">
	            <ul class="nav">

	                <li class="active">
	                    <a href="dashboard.php">
	                        <i class="material-icons">dashboard</i>
	                        <p>Accueil</p>
	                    </a>
	                </li>
	                <li class="active-pro">
                        <a href="deconnexion.php">
	                        <i class="material-icons">settings_power</i>
	                        <p>Déconnecion</p>
	                    </a>
                    </li>
                
	            </ul>
	    	</div>
	    </div>
       
	    <div class="main-panel">


			<div class="content">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-4">
							<div class="card card-stats">
								<div class="card-header" data-background-color="orange">
									<i class="material-icons">supervisor_account</i>
								</div>
								<div class="card-content">
									<p class="category"></p>
									<h2 class="title">Client</h2>
								</div>
								<div class="card-footer">
                                 <a href="ListClients.php">
								<button class="btn btn-warning dropdown-toggle Full-Width" data-toggle="dropdown"> Lister les  Clients  </button></a>
								<a href="ajouterClientPer.php">
                                <button class="btn btn-warning dropdown-toggle Full-Width" data-toggle="dropdown"> Ajouter Client  </button></a>
                                
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="card card-stats">
								<div class="card-header" data-background-color="green">
									<i class="material-icons">account_box</i>
								</div>
								<div class="card-content">
									<p class="category"></p>
									<h2 class="title">Formateur</h2>
								</div>
								<div class="card-footer">
								<a href="ListFormateurs.php">
								<button class="btn btn-success dropdown-toggle Full-Width" data-toggle="dropdown"> Lister les  Formateurs  </button></a>
								<a href="ajouterFormateur.php">
                                <button class="btn btn-success dropdown-toggle Full-Width" data-toggle="dropdown"> Ajouter Formateur  </button></a>
                                
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="card card-stats">
								<div class="card-header" data-background-color="red">
									<i class="material-icons">perm_phone_msg</i>
								</div>
								<div class="card-content">
									
									<h2 class="title">Assistant</h2>
								</div>
								<div class="card-footer">
								<a href="ListAssistants.php">
								<button class="btn btn-danger dropdown-toggle Full-Width" data-toggle="dropdown"> Lister les  Assistants  </button></a>
								<a href="ajouterAssistant.php">
                                <button class="btn btn-danger dropdown-toggle Full-Width" data-toggle="dropdown"> Ajouter Assistant</button></a>
                                
								</div>
							</div>
						</div>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="row">
						<div class="col-md-4">
							<div class="card card-stats">
								<div class="card-header" data-background-color="blue">
									<i class="material-icons">book</i>
								</div>
								<div class="card-content">
									
									<h2 class="title">Formation</h2>
								</div>
								<div class="card-footer">
								<a href="ListFormations.php">
								<button class="btn btn-info dropdown-toggle Full-Width" data-toggle="dropdown"> Lister les  Formations  </button></a>
								<a href="ajouterFormation.php">
                                <button class="btn btn-info dropdown-toggle Full-Width" data-toggle="dropdown"> Ajouter Formation  </button></a>
                                
								</div>
							</div>
						</div>
                        						<div class="col-md-4">
							<div class="card card-stats">
								<div class="card-header" data-background-color="grey">
									<i class="material-icons">library_books</i>
								</div>
								<div class="card-content">
									
									<h2 class="title"> Session </h2>
								</div>
								<div class="card-footer">
								<button class="btn btn-default dropdown-toggle Full-Width" data-toggle="dropdown"> session en coure </button>
                                <button class="btn btn-default dropdown-toggle Full-Width" data-toggle="dropdown"> Session terminé </button>
                                <button class="btn btn-default dropdown-toggle Full-Width" data-toggle="dropdown"> Session avenir</button>
								</div>
							</div>
						</div>
                       <div class="col-md-4 " >
                          
                           	<div class="card card-stats dropdown">
								<div class="card-header" data-background-color="purple">
									<i class="material-icons">home</i>
								</div>
								<div class="card-content">
								
									<h2 class="title">Ressource</h2>
								</div>
								<div class="card-footer">
                                <button class="btn btn-primary dropdown-toggle Full-Width" data-toggle="dropdown"> Lister les  Salles  </button>
                                <a href="ajouterLocal.php">
                                <button class="btn btn-primary dropdown-toggle Full-Width" data-toggle="dropdown"> Ajouter Local  </button></a>
                                
                                
								</div>
							</div>
                           
                           

                           
						</div>
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

	<!--  Charts Plugin -->
	<script src="../assets/js/chartist.min.js"></script>

	<!--  Notifications Plugin    -->
	<script src="../assets/js/bootstrap-notify.js"></script>

	<!--  Google Maps Plugin    -->
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

	<!-- Material Dashboard javascript methods -->
	<script src="../assets/js/material-dashboard.js"></script>

	<!-- Material Dashboard DEMO methods, don't include it in your project! -->
	<script src="../assets/js/demo.js"></script>

	<script type="text/javascript">
    	$(document).ready(function(){

			// Javascript method's body can be found in assets/js/demos.js
        	demo.initDashboardPageCharts();

    	});
	</script>

</html>


