<?php
   
   include "C:\ospanel\domains\mem.com\dataBase\surencyAndScore.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width">
	<link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="/Profile-page/Profile.css">
	<title>Profile-page</title>
</head>

<body>
	<header>
		<a class="comeback-button" href="/page-for-memory/index.html">
			<ion-icon name="chevron-back-outline"></ion-icon></a>
		<span class="page-name">Профиль</span>
		<ion-icon class="settings" name="ellipsis-vertical-outline"></ion-icon>
	</header>
	<main>
		<div class="profile-container">
			<div class="profile_first">
				<div class="profile-picture"><img src="/page-for-memory/img/profile/Group 42.svg" alt=""></div>
				<span class="profile-name"><?php if(isset($_SESSION['id'])): ?> <?php echo $_SESSION['login'];?>
		<?php else: ?>
			Логин
		<?php endif;?></span>
			</div>
			<div class="currency">
				<div class="memoney"><img src="/page-for-memory/img/profile/M копия 2.png" alt="">999</div>
				<div class="iq"><img src="/page-for-memory/img/profile/Без имени-2 1.png" alt="">999</div>
				<div class="hints"><img src="/page-for-memory/img/profile/Group 37.png" alt="">999</div>
			</div>
			<div class="statistics">
				<span class="zvanie">Новичок</span>
				<span class="zvanie">?</span>
				<span class="zvanie">?</span>
			</div>
			<a href="<?php echo "/dataBase/logOut.php";?>" class="leave">Выйти</a>
		</div>
	</main>

	<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
	<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
	<script src="/Profile-page/Profile.js"></script>
</body>

</html>