
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css" media="screen">
    <title>Document</title>
</head>
<header>
    <div class=logo>
        <img src="hackers-poulette-logo.png"  alt="Logo hackers-poulette" >
		

    </div>
</header>
<body>
	<h1>Formulaire de contact</h1>
		<div class="container contact-form">
			<form action="user.php" method="POST">
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<p>Votre prénom : <input type="text" name="prenom" class="form-control" placeholder="Entrer votre prénom *" required/></p>
						</div>
						<div class="form-group">
							<p>Votre nom : <input required type="text" name="nom" class="form-control" placeholder="Entrer votre nom *" /></p>
						</div>
						<div class="form-group">
							<p>Votre email : <input required type="email" name="email" class="form-control" placeholder="Entrer votre email *" /></p>
							<small id="emailHelp" class="form-text text-muted">Nous ne partagerons jamais votre email avec qui que ce soit. </small>
						</div>
						<div class="form-group">
							<p>Votre pays : <input type="text" name="pays" class="form-control" placeholder="Entrer votre pays *" required/></p>
						</div>
					</div>

					<div class="col-md-6">
						<div class="form-group">
							<p>Votre message : 
							<textarea name="txtMsg" class="form-control" style="width: 100%; height: 200px;" placeholder="Entrer message *" required></textarea>
							<input name="age" type="text" id="age" class="hide-robot"> <!--Honey-pot-->
						</div>
					</div>
					<div class="col-md-12">
						<div class="form-group">
							<p>Genre :  <input required type="radio" name="genre" value="1"> F  <input type="radio" name="genre" value="2" > H </p>
						</div>
						<div class="form-group">
							<p>Intérêt :  <input type="checkbox" name="sujet[]" value="1">  Kit  
                                <input type="checkbox" name="sujet[]" value="2">  Accessoires  
                                <input type="checkbox" name="sujet[]" value="3">  Service après vente  
                    	</div>
					</div>
					<div class="col-md-9">
						<div class="form-group">
						<input type="submit" name="btnSubmit" class="btnContact" value="ENVOYER" /> 
						</div>
					</div>
				</div>
			</form>	
		</div>
</body>
</html>
