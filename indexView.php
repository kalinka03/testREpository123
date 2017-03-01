<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Привет мир!</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
	<main>
		<header>
			<div class="container">
				<div class="row1">
					<div class="row">
						<div class="col-sm-1 col-xs-12">
							<div class="soc-icons">
								<a href="#"><span class="glyphicon glyphicon-star color-red" ></span></a>
								
							</div>
						</div>
						<div class="col-sm-6 col-xs-12">
							<a  class="next" href="/">Главная</a>
							<a  class="next" href="/guestbook">Гостевая</a>
						</div>

						<div class="col-sm-5 col-xs-12">
							
							
							<a class="next" href="#">Новости</a>
							<a class="next" href="#">Каталог</a>	
							<a class="next" href="#">Контакты</a>
						</div>
					</div>
				</div>
			</div>
		</header>
		<div class="container">
			<div class="row1 center-main">
				<div class="row">
					<div class="col-sm-12 col-xs-12">
						<h1 class="main"> Главная страница </h1>
					</div>
					<div class="col-sm-4 col-xs-12">
						<div class="first-main">
							<div class="next3 main2">
								<p class="test-main"> Услуга 1 </p>
							</div>
						</div>

					</div>
					<div class="col-sm-4 col-xs-12">
						<div class="first-main">
							<div class="next3 main2">
								<p class="test-main"> Услуга 2 </p>
							</div>
						</div>

					</div>
					<div class="col-sm-4 col-xs-12">
						<div class="first-main">
							<div class="next3 main2">
								<p class="test-main"> Услуга 3 </p>
							</div>
						</div>

					</div>
					</div>
				<div class="container">
					<div class="row">
						<div class="col-sm-2 col-xs-12">
						</div>
						<div class="col-sm-5 col-xs-12">
							<form  method="post"  class="form-horizontal" action=guestbook method=post enctype=multipart/form-data>
								
								<div class="form-group">
									<div class="col-xs-9 col-xs-12 weigth-tab">
										

										<input name='name' type="text" class="form-control"  placeholder="Ваше Имя" 

										      <?php 
										       if(!empty($_COOKIE['name'])){
										        $newName = $_COOKIE['name'];
										        ?>
										        value="<?php echo $newName ?>"> 
										        <?php
										       }
										       ?>
									</div>
									<div class="form-group">
										<div class="col-xs-9 col-xs-12 weigth-tab">
											<input  name='email' type="text" class="form-control"  placeholder="Ваше email" 

 												 <?php 
										       if(!empty($_COOKIE['email'])){
										        $newEmail = $_COOKIE['email'];
										        ?>
										        value="<?php echo $newEmail ?>"> 
										        <?php
										       }
										       ?>
										</div>
									</div>

									<div class="form-group">
										<div class="col-xs-9 col-xs-12 weigth-tab">
											<textarea rows="3" name="message" class="form-control" id="postalAddress" placeholder="Текс сообщения"></textarea>
										</div>
									</div>

									<input type=file name="file">

									<div class="form-group">
										<div class="col-xs-offset-8 col-xs-4">
											<input name="Send" type="submit" class="btn btn-primary" value="Отправить">
										</div>
									</div>

								</form>
							</div>

							
							<div class="col-sm-3 col-xs-12">
								<p class="greeting">
									Какой-то текст приветсвие
								</p>
								<p class="greeting">
									Какой-то текст приветсвие
								</p>
								<p class="greeting">
									Какой-то текст приветсвие
								</p>
								<p class="greeting">
									Какой-то текст приветсвие
								</p>
								<p class="greeting">
									Какой-то текст приветсвие
								</p>
							</div>
							<div class="col-sm-2 col-xs-12">
							</div>

						</div>
					</div>
				</div>

				<div class="tn">
					<div class="col-sm-3 col-xs-12">
						
						<a  class="next2 nt" href="#">Главная</a>
					</div>
					<div class="col-sm-3 col-xs-12">
						<a class="next2 nt" href="#">Новости</a>
					</div>
					<div class="col-sm-3 col-xs-12">
						<a class="next2 nt" href="#">Каталог</a>
					</div>
					<div class="col-sm-3 col-xs-12">
						<a class="next2" href="#">Контакты</a>	</div>
						
					</div>
				</div>
				<div class="col-sm-12 col-xs-12 footer-end">
					<p>Company Name - 2017 </p>	
				</div>
			</div>

		</main>
	</body>
	</html>






















