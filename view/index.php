<!doctype html>
<html lang="en">
<head>
    <?php
        include_once("../config/context.php");
        include(FOLDER_VIEW . "/template/head.php");
       
        ?>
</head>


<body>

	<div class="wrapper " id="fondo">

	  

	    <div class="main-panel-home">
			<nav class="navbar navbar-transparent navbar-absolute">
				<div class="container-fluid">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" style="font-family: AmaticSC-Regular; color: #0D7F00;" href="#">ALTA VISTA</a>
					</div>
					<div class="collapse navbar-collapse">
						<ul class="nav navbar-nav navbar-right">
							<li>
								<a href="#pablo" class="dropdown-toggle" data-toggle="dropdown">
									<i class="material-icons">dashboard</i>
									<p class="hidden-lg hidden-md">Dashboard</p>
								</a>
							</li>
							
							<li>
								<a href="#pablo" role="button" data-toggle="modal" data-target="#login-modal">
	 							   <i class="material-icons">person</i>
	 							   <p class="hidden-lg hidden-md">Profile</p>
		 						</a>
							</li>
						</ul>

						
					</div>
				</div>
				
				
			</nav>

<div style=" background-color: rgba(200,200,200,0.8);">
<h1 style=" 
    margin-top: 300px;
    margin-left: 600px;
    color: #0D7F00;
    
   " > <i style="font-family: AmaticSC-Regular;"> ALTA VISTA   </i></h1>
	<center><h2 style=" 
    color: white; font-family: Cinzel-Regular;">Conjunto Residencial; un hogar, una familia, paz y tranquilidad
	
	</h2>
	<i style="color:white; font-family: AmaticSC-Regular; color: #0D7F00">Alta Vista Conjunto Residencial &copy;</i>
	</center>
</div>
			
		</div>
		
		
		
		
	</div>
	
	<!-- BEGIN # MODAL LOGIN -->
<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    	<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header" align="center">
					<img class="img-circle" id="img_logo" src="http://bootsnipp.com/img/logo.jpg">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
					</button>
				</div>
                
                <!-- Begin # DIV Form -->
                <div id="div-forms">
                
                    <!-- Begin # Login Form -->
                    <form id="login-form">
		                <div class="modal-body">
				    		<div id="div-login-msg">
                                <div id="icon-login-msg" class="glyphicon glyphicon-chevron-right"></div>
                                <span id="text-login-msg">Digite su correo electronico y contraseña</span>
                            </div>
				    		<input id="login_username" class="form-control" type="text" placeholder="altavista@altavista.com" required>
				    		<input id="login_password" class="form-control" type="password" placeholder="Contraseña" required>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox"> Recordar mi cuenta
                                </label>
                            </div>
        		    	</div>
				        <div class="modal-footer">
                            <div class="form-group">
                                <button type="submit" style="float: left; border-radius: 10px;  background-color: #0D7F00;" class="btn btn-primary btn-lg btn-block">Ingresar</button>
				    	    <div>
                                <button id="login_register_btn" type="button" style="float: left; margin-left: 110px; border-radius: 10px;  background-color: #0D7F00;" class="btn btn-primary btn-lg btn-block">Registrarse</button>
                                <button id="login_lost_btn" type="button" style="  margin-left: 60px; top: 5px; border-radius: 10px;  background-color: #0D7F00;" class="btn btn-primary btn-lg btn-block" >¿Olvido su contraseña?</button>
                            </div>    
                            </div>
				        </div>
                    </form>
                    <!-- End # Login Form -->
                    
                    <!-- Begin | Lost Password Form -->
                    <form id="lost-form" style="display:none;">
    	    		    <div class="modal-body">
		    				<div id="div-lost-msg">
                                <div id="icon-lost-msg" class="glyphicon glyphicon-chevron-right"></div>
                                <span id="text-lost-msg">Ingrese su correo </span>
                            </div>
		    				<input id="lost_email" class="form-control" type="text" placeholder="altavista@altavista.com" required>
            			</div>
		    		    <div class="modal-footer">
                            <div>
                                <button type="submit" style="float: left; border-radius: 10px; background-color: #0D7F00;" class="btn btn-primary btn-lg btn-block">Recuperar</button>
                            </div>
                            <div>
                                <button id="lost_register_btn" type="button" style="left: 100px; border-radius: 10px;  background-color: #0D7F00;" class="btn btn-primary btn-lg btn-block">Registrarse</button>
                                <button id="lost_login_btn" type="button" style="float: left;  margin-left: 65px; top: 5px; border-radius: 10px;  background-color: #0D7F00;" class="btn btn-primary btn-lg btn-block">¿Ya tienes contraseña?</button>
                            </div>
		    		    </div>
                    </form>
                    <!-- End | Lost Password Form -->
                    
                    <!-- Begin | Register Form -->
                    <form id="register-form" style="display:none;">
            		    <div class="modal-body">
		    				<div id="div-register-msg">
                                <div id="icon-register-msg" class="glyphicon glyphicon-chevron-right"></div>
                                <span id="text-register-msg">Formulario de registro.</span>
                            </div>
		    				<input id="register_username" class="form-control" type="text" placeholder="Alta Vista" required>
                            <input id="register_email" class="form-control" type="text" placeholder="altavista@altavista.com" required>
                            <input id="register_password" class="form-control" type="password" placeholder="Contraseña" required>
            			</div>
		    		    <div class="modal-footer">
                            <div>
                                <button type="submit" style="float: left; border-radius: 10px;  background-color: #0D7F00;" class="btn btn-primary btn-lg btn-block">Registrarme</button>
                            </div>
                            <div>
                                <button id="register_login_btn" type="button"  style="float: left; margin-left: 40px; border-radius: 10px;  background-color: #0D7F00;" class="btn btn-primary btn-lg btn-block">¿Ya tienes cuenta?</button>
                                <button id="register_lost_btn" type="button" style="  margin-left: 60px; top: 5px; border-radius: 10px;  background-color: #0D7F00;" class="btn btn-primary btn-lg btn-block">¿Olvido su contraseña?</button>
                            </div>
		    		    </div>
                    </form>
                    <!-- End | Register Form -->
                    
                </div>
                <!-- End # DIV Form -->
                
			</div>
		</div>
	</div>
    <!-- END # MODAL LOGIN -->

</body>

	<?php include ('./template/scripts.php'); ?>

	

	<script type="text/javascript">
    	$(document).ready(function(){

			// Javascript method's body can be found in assets/js/demos.js
        	demo.initDashboardPageCharts();

    	});
	</script>

</html>


