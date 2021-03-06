<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>FormWizard_v6</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="author" content="colorlib.com">

		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.css">

		<!-- STYLE CSS -->
		<link rel="stylesheet" href="css/style.css">
	</head>
	<body>
		<div class="wrapper">
			<form action="">
				<div class="col-12" id="wizard">
					<div class="logo"><a href="../index.html" > <img src="images/Logo_final.png" alt=""></a></div>
					<a href="../index.html" class="close"></a>
            		
					
					<!-- SECTION 1 -->
					<h4></h4>
					<section>
						<div class="wizard-title"><h3>Choix du sport:</h3></div>
						<div class="grid">
							<div class="row">
								<a href="#" class="grid-item" style="background-image: url(images/balls/bg-comic-orange.jpg);">
									<div class="inner">
										<img src="images/balls/basket.png" width="50%" height="50%" alt="">
										<span>Basketball</span>
									</div>
									
								</a>
								<a href="#" class="grid-item" style="background-image: url(images/balls/bg-comic-bleu.jpg);">
									<div class="inner">
										<img src="images/balls/foot.png" width="42%" height="42%" alt="">
										<span>Football</span>
									</div>
								</a>
								<a href="#" class="grid-item" style="background-image: url(images/balls/bg-comic-orange.jpg);">
									<div class="inner">
										<img src="images/balls/handball.png" width="32%" height="42%" alt="">
										<span>Handball</span>
									</div>
								</a>
							</div>
							<div class="row">
								<a href="#" class="grid-item" style="background-image: url(images/balls/bg-comic-bleu.jpg);">
									<div class="inner">
										<img src="images/balls/rugby.png" width="50%" height="50%" alt="">
										<span>rugby</span>
									</div>
								</a>
								<a href="#" class="grid-item" style="background-image: url(images/balls/bg-comic-orange.jpg);">
									<div class="inner">
										<img src="images/balls/tennis.png" width="50%" height="50%" alt="">
										<span>tennis</span>
									</div>
								</a>
								<a href="#" class="grid-item" style="background-image: url(images/balls/bg-comic-bleu.jpg);">
									<div class="inner">
										<img src="images/balls/judo.png" width="50%" height="50%" alt="">
										<span>judo</span>
									</div>
								</a>
							</div>
						</div>
					</section>
	                
					<!-- SECTION 2 -->
					<h4></h4>
					<section>
						<div class="wizard-title">
							<h3>Mes Infos</h3>
						<div class="form-header">
							<div class="avartar">
								<a href="#">
									<img src="images/avatar-7.jpg" alt="">
								</a>
								<div class="avartar-picker">
									<input type="file" name="file-1[]" id="file-1" class="inputfile"
										data-multiple-caption="{count} files selected" multiple />
									<label for="file-1">
										<i class="zmdi zmdi-camera"></i>
										<span>Choisir une photo</span>
									</label>
								</div>
							</div>
							<div class="form-group">
								<div class="form-holder active">
									<input type="text"  class="form-control" value="Mike" disabled style="background: rgba(245, 244, 244, 0.623); color: black;">
								</div>
								<div class="form-holder">
									<input type="text" value="Dyson" class="form-control" disabled style="background: rgba(245, 244, 244, 0.623); color: black;">
								</div>
								<div class="form-holder">
									<input type="text" placeholder="Pseudo" class="form-control">
								</div>
							</div>
						</div>
						<div class="form-row">
							<div class="form-holder">
								<input type="date" placeholder="Date de naissance" class="form-control">
							</div>
							<div  style="color: orange;">
								<input type="radio" id="h" name="sexe" value="homme" >
								<label for="h">Homme</label>
								<input type="radio" id="f" name="sexe" value="femme">
								<label for="f">Femme</label>
							</div>
						</div>
						<div class="form-row">
							<div class="form-holder">
								<input type="email" placeholder="email" class="form-control">
							</div>
							<div class="form-holder">
								<input type="tel" placeholder="portable" class="form-control">
							</div>
						</div>
						<div class="form-row">
							<div class="form-holder">
								<input type="password" placeholder="Cr??er votre mot de passe" class="form-control">
							</div>
							<div class="form-holder">
								<input type="password" placeholder="Confirmer votre mot de passe" class="form-control">
							</div>
						</div>
						<div style="color: orange; margin-bottom: 15px;"><span>R??le(s) dans le club:  </span>
							<input type="checkbox" id="h" name="role" value="Administrateur">
							<label for="h">Administrateur</label>
							<input type="checkbox" id="f" name="role" value="Dirigeant du club">
							<label for="f">Coach</label>
						</div>
					</section>

	                <!-- SECTION 3 -->
	                <h4></h4>
	                <section>
						<div class="wizard-title">
							<h3>Ma Team</h3>
						</div>
						<div class="form-holder">
							<input type="text" placeholder="Nom de l'??quipe" class="form-control">
						</div>
                        <h3 >Date de cr??ation</h3>
	                    <div class="form-row">
                            <div class="form-holder">
                                <input type="date" placeholder="Date de cr??ation *" class="form-control">
							</div>
						</div>
						<div class="form-row">
							<div class="form-holder">
								<input type="text" placeholder="Club affili?? *" class="form-control">
							</div>
							<div class="form-holder">
								<input type="number" placeholder="n?? f??d??ral *" class="form-control">
							</div>
						</div>
                        <div class="category">
                            <h3>Cat??gorie:</h3>
                            <div style="color: orange;">
                                <input type="radio" id="h" name="sexe" value="homme">
                                <label for="h">Masculine</label>
                                <input type="radio" id="f" name="sexe" value="femme">
                                <label for="f">F??minine</label>
                            </div>
                        </div>
                        <div class="level">
                            <h3>Niveau:</h3>
                            <div style="color: orange;">
                                <input type="radio" id="h" name="Niveau" value="D??part">
                                <label for="h">D??part</label>
                                <input type="radio" id="f" name="Niveau" value="R??gion">
                                <label for="f">R??gion</label>
                                <input type="radio" id="h" name="Niveau" value="Nat">
                                <label for="h">Nat</label>
                                <input type="radio" id="f" name="Niveau" value="Pro">
                                <label for="f">Pro</label>
                            </div>
                            <div class=fac>(*) Facultatifs</div>
                        </div>
	                    
	                </section>
            	</div>
            </form>
		</div>


		<script src="js/jquery-3.3.1.min.js"></script>

		<!-- JQUERY STEP -->
		<script src="js/jquery.steps.js"></script>

		<script src="js/main.js"></script>
<!-- Template created and distributed by Colorlib -->
</body>
</html>