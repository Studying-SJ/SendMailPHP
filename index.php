<html>
	<head>
		<meta charset="utf-8" />
    	<title>App Mail Send</title>

    	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	</head>

	<body>
		<header>
			<!-- Navbar com logo e name -->
				<nav class="navbar navbar-light bg-light">
					<a class="navbar-brand" href="#">
						<img src="logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
						Send Mail
					</a>
				</nav>
		</header>
		
		<div class="container">  

			<div class="py-3 text-center">
				<img class="d-block mx-auto mb-2" src="logo.png" alt="" width="72" height="72">
				<h2>Send Mail</h2>
				<p class="lead">Seu app de envio de e-mails particular!</p>
			</div>
			<nav>
				<ul class="nav nav-tabs justify-content-center">
					<li class="nav-item">
						<a class="nav-link active" href="#">Enviar e-mail</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Banco de mensagens</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">E-mails cadastrados</a>
					</li>
				</ul>
			</nav>
      		<div class="row">
      			<div class="col-md-12">
  				
					<div class="card-body font-weight-bold">
						<form action="processa_envio.php" method="post">
							<div class="form-group">
								<label for="para">Para</label>
								<input name="para" type="text" class="form-control" id="para" placeholder="joao@dominio.com.br">
							</div>

							<div class="form-group">
								<label for="assunto">Assunto</label>
								<input name="assunto" type="text" class="form-control" id="assunto" placeholder="Assundo do e-mail">
							</div>

							<div class="form-group">
								<label for="mensagem">Mensagem</label>
								<textarea name="mensagem" class="form-control" id="mensagem"></textarea>
							</div>

							<button type="submit" class="btn btn-primary btn-lg">Enviar Mensagem</button>
						</form>
					</div>
				</div>
      		</div>
      	</div>

	</body>
</html>