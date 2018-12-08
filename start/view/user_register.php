<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Delizia Login</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
	<meta name="viewport" content="width=device-width" />

	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png" />
	<link rel="icon" type="image/png" href="assets/img/favicon.png" />

	<!--     Fonts and icons     -->
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

	<!-- CSS Files -->
	<link href="assets/css/bootstrap.min.css" rel="stylesheet" />
	<link href="assets/css/material-bootstrap-wizard.css" rel="stylesheet" />

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link href="assets/css/demo.css" rel="stylesheet" />
</head>

<body>
	<div class="image-container set-full-height" style="background-image: url('assets/img/bguser.jpg')">
		<!--   Creative Tim Branding   -->
		<a href="http://creative-tim.com">
			<div class="logo-container">
				<div class="logo">
					<!-- <img src="assets/img/new_logo.png"> -->
				</div>
				<div class="brand">
					<!-- Creative Tim -->
				</div>
			</div>
		</a>

		<!--  Made With Material Kit  -->
		<a href="" class="made-with-mk">
			<div class="brand">AM</div>
			<div class="made-with">By <strong>Andres Montenegro</strong></div>
		</a>

		<!--   Big container   -->
		<div class="container">
			<div class="row">
				<div class="col-sm-8 col-sm-offset-2">
					<!--      Wizard container        -->
					<div class="wizard-container">
						<div class="card wizard-card" data-color="purple" id="wizard">
							<form action="" method="post" autocomplete="off">
								<!--        You can switch " data-color="blue" "  with one of the next bright colors: "green", "orange", "red", "purple"             -->

								<div class="wizard-header">
									<h3 class="wizard-title">
										Nuevo Usario
									</h3>
									<h5>Listo para empezar a trabajar con nuestro Equipo Delizia.</h5>
								</div>
								<div class="wizard-navigation">
									<ul>
										<li><a href="#details" data-toggle="tab">Datos</a></li>
										<li><a href="#captain" data-toggle="tab">Cargo</a></li>
										<li><a href="#description" data-toggle="tab">Inicio de Seción</a></li>
									</ul>
								</div>

								<div class="tab-content">
									<div class="tab-pane" id="details">
										<div class="row">
											<div class="col-sm-12">
												<h4 class="info-text">Datos Personales.</h4>
											</div>
											<div class="col-sm-6">
												<div class="input-group">
													<span class="input-group-addon">
														<i class="material-icons">face</i>
													</span>
													<div class="form-group label-floating">
														<label class="control-label">Nombres</label>
														<input name="firstname" type="text" class="form-control">
													</div>
												</div>

												<div class="input-group">
													<span class="input-group-addon">
														<i class="material-icons">email</i>
													</span>
													<div class="form-group label-floating">
														<label class="control-label">Email</label>
														<input name="email" type="email" class="form-control">
													</div>
												</div>

											</div>
											<div class="col-sm-6">

												<div class="form-group label-floating">
													<label class="control-label">Apellidos</label>
													<input name="lastname" type="text" class="form-control">
												</div>

												<div class="input-group">
													<span class="input-group-addon">
														<i class="material-icons">phone</i>
													</span>
													<div class="form-group label-floating">
														<label class="control-label">Telefóno</label>
														<input name="tel" type="tel" class="form-control">
													</div>
												</div>

											</div>
										</div>
									</div>

									<!-- AREA DE SELECCION DE CARGO=================================== -->
									<div class="tab-pane" id="captain">
										<h4 class="info-text">¿Cual es el cargo del nuevo integrante de Delizia?</h4>
										<div class="row">
											<div class="col-sm-10 col-sm-offset-1">
												<div class="col-sm-4">
													<div class="choice" data-toggle="wizard-radio" rel="tooltip" title="This is good if you travel alone.">
														<input type="radio" name="job" value="admin">
														<div class="icon">
															<i class="material-icons">person</i>
														</div>
														<h6>ADMINISTRADOR</h6>
													</div>
												</div>
												<div class="col-sm-4">
													<div class="choice" data-toggle="wizard-radio" rel="tooltip" title="Select this room if you're traveling with your family.">
														<input type="radio" name="job" value="recep">
														<div class="icon">
															<i class="material-icons">record_voice_over</i>
														</div>
														<h6>RECEPCIONISTA</h6>
													</div>
												</div>
												<div class="col-sm-4">
													<div class="choice" data-toggle="wizard-radio" rel="tooltip" title="Select this option if you are coming with your team.">
														<input type="radio" name="job" value="waiter">
														<div class="icon">
															<i class="material-icons">restaurant_menu</i>
														</div>
														<h6>MESERO</h6>
													</div>
												</div>
											</div>
										</div>
									</div>
									<!-- AREA DE ASIGNACION DE DATOS PARA INICIO DE SECION ============= -->
									<div class="tab-pane" id="description">
										<div class="row">
											<h4 class="info-text">Datos de inicio de secion para Delizia</h4>
											<div class="col-md-6 offset-md-3">
												<div class="input-group">
													<span class="input-group-addon">
														<i class="material-icons">person</i>
													</span>
													<div class="form-group label-floating">
														<label class="control-label">Nombres</label>
														<input name="login_user" type="text" class="form-control">
													</div>
												</div>

												<div class="input-group">
													<span class="input-group-addon">
														<i class="material-icons">vpn_key</i>
													</span>
													<div class="form-group label-floating">
														<label class="control-label">Contraseña</label>
														<input name="pass" type="password" class="form-control">
													</div>
												</div>

											</div>
										</div>
									</div>
								</div>
								<div class="wizard-footer">
									<div class="pull-right">
										<input type='button' class='btn btn-next btn-fill btn-primary btn-wd' name='next' value='Next' />
										<input type='button' class='btn btn-finish btn-fill btn-primary btn-wd' name='finish' value='Finish' />
									</div>
									<div class="pull-left">
										<input type='button' class='btn btn-previous btn-fill btn-primary btn-wd' name='previous' value='Previous' />

									</div>
									<div class="clearfix"></div>
								</div>
							</form>
						</div>
					</div> <!-- wizard container -->
				</div>
			</div> <!-- row -->
		</div> <!--  big container -->

		<div class="footer">
			<div class="container text-center">
				Made with <i class="fa fa-heart heart"></i> by <a href="http://www.creative-tim.com">Creative Tim</a>. Free download <a href="http://www.creative-tim.com/product/material-bootstrap-wizard">here.</a>
			</div>
		</div>
	</div>

</body>
<!--   Core JS Files   -->
<script src="assets/js/jquery-2.2.4.min.js" type="text/javascript"></script>
<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="assets/js/jquery.bootstrap.js" type="text/javascript"></script>

<!--  Plugin for the Wizard -->
<script src="assets/js/material-bootstrap-wizard.js"></script>

<!--  More information about jquery.validate here: http://jqueryvalidation.org/	 -->
<script src="assets/js/jquery.validate.min.js"></script>

</html>
