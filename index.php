<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>База данных дипломов</title>
</head>
<body>

    <header>
        <nav class="navbar navbar-expand-lg navbar-light">
          	<a class="navbar-brand logo" href="#">
            	<img src="images/Group 17.png" alt="Лого" width="150" height="70">
          	</a>
          	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            	<span class="navbar-toggler-icon"></span>
          	</button>
          	<div class="collapse navbar-collapse" id="navbarNav">
            	<ul class="nav-links">
					<li class="nav-link services">
						Справка
						<ul class="drop-down">
							<a href=""><li>Руководство пользователя</li></a>
							<a href="feedback.php"><li>Письмо в тех. поддержку</li></a>
							<a href="privacy_policy.php"><li>Политика конфиденциальности</li></a>
						</ul>
					</li>
					<li class="nav-link services">Выгрузка ФРДО</li>
          		</ul>
            	<a class="leave" href="#"><img src="images/Vector.png" alt="" width="16" height="16"> Выход</a>
          	</div>
        </nav>
    </header>

    <main>
		<iframe name="frame" src="tinyfilemanager.php" style="width: 90%; height: 750px;"></iframe>
		
    </main>

	<footer>
		<div class=" kilimanjaro_bottom_header_one section_padding_50 text-center">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<p>© 2023 Колледж современных технологий / Все права защищены<i class="fa fa-love"></i></a></p>
					</div>
				</div>
			</div>
		</div>
	</footer>
		

    
	<script>
		function toggleSearchInput() {
			var searchInput = document.getElementById("searchInput");
			searchInput.classList.toggle("show");
		}
	</script>
</body>
</html>