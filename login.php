
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Авторизация</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
	<script src="scripts/authForm_Script.js"></script>
</head>
<body>
    <div class="logo">
	<img src="images/main_icon.png" alt="КСТ База дипломов и титульников"></img>
    </div>
    <form method="POST" action="scripts\login.php" class="authorization_Div">
	<label class="auth_Label">Вход</label>
	<span>
		<label class="authSmall_Label">Логин</label>
		<input class="auth_Input" type="text" id="username" name="username" size="25">
	</span>
	<span>
		<label class="authSmall_Label">Пароль</label>
		<span>
			<input class="auth_Input" type="password" id="password" name="password" size="25">
			<i class="bi bi-eye-slash" id="togglePassword"></i>
		</span>
		<br>
	</span>
	<button class="auth_Btn" type="submit">Войти</button>
    </form>
    
    <?php
    if (isset($_GET['error'])) {
        echo '<div class="error-message">Неверный пароль. Попробуйте снова!</div>';
    }
    ?>

<script>
/*Инвертор для поля ввода пароля с глазиком*/
const togglePassword = document.querySelector("#togglePassword");
const password_Input = document.querySelector("#password");

togglePassword.addEventListener("click", function () {
		// изменение типа input для поля с паролем
		const type = password_Input.getAttribute("type") === "password" ? "text" : "password";
		password_Input.setAttribute("type", type);
		
		// изменение иконки глазика
		this.classList.toggle("bi-eye");
	});
</script>
</body>
</html>