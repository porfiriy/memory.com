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
   <link rel="stylesheet" href="/pages/main-page/css/main-page.css">
   <title>main-page</title>
</head>

<body>
   <div class="wrapper">
      <div class="gray-background-container"></div>
      <header class="header">
         <div class="header__top-button-container">
            <a href="/pages/settings-page/settings-page.html" class="settings"><ion-icon
                  class="icon-settings" name="settings-outline"></ion-icon></a>
            <div class="header__top-button-title">Memory</div>
            <a href="/Profile-page/Profile.php" class="linck-profile"><img src="/img/Menu/Ава2(удалить).jpg" alt="#" class="profile"></a>
         </div>
         <div class="header-score-container">
            <div class="memany-container currency-container">
               <img src="/pages/main-page/img/memanyImg.svg" alt="memany">
               <div class="memany-count"><?php if(isset($_SESSION['id'])): ?> <?php echo $memany['sum_memany']; ?>
		<?php else: ?>
			0
		<?php endif;?></div>
            </div>
            <div class="hint-container currency-container">
               <ion-icon class="eye-icon" name="eye-outline"></ion-icon>
               <div class="memany-count"><?php if(isset($_SESSION['id'])): ?> <?php echo $EyeScore['sum_eye_hint']; ?>
		<?php else: ?>
			0
		<?php endif;?></div>
            </div>
            <div class="iq-container currency-container">
               <img src="/pages/main-page/img/brainImg.svg" alt="iq">
               <div class="memany-count"><?php if(isset($_SESSION['id'])): ?> <?php echo $IQscore['sum_iq']; ?>
		<?php else: ?>
			0
		<?php endif;?></div>
            </div>
         </div>
         <div class="lvl-container">
            <div class="player-level">Lvl 5</div>
            <div class="player-exp-scale">
               <div class="player-exp__line-blue"></div>
               <div class="player-exp__text">29/150</div>
            </div>
         </div>
      </header>

      <main class="main">
      <?php if(isset($_SESSION['id'])): ?>
      
         <div class="text-hello">Привет <?php echo $_SESSION['login'];?>!</div>
         <?php else: ?>
            <div class="text-hello">Зарегистрируйся :)</div>
      <?php endif;?>
         <div class="everyday-word-button"><ion-icon class="book-img" name="book-outline"></ion-icon>Слово дня</div>
         <div class="tasks-bonus-iq-container">
            <div class="bonus-button"><ion-icon name="gift-outline"></ion-icon></div>

            <div class="everyday-tasks-button"><ion-icon name="receipt-outline"></ion-icon>
            </div>
         </div>
      </main>
      <footer class="footer">
         <div class="navigation">
            <ul>

               <li class=" list-analytic list">
                  <a href="#">
                     <span class="icon"><ion-icon name="bar-chart-outline"></ion-icon></span>
                     <span class="text">Аналитика</span>
                  </a>
               </li>
               <li class="list-store list">
                  <a href="#">
                     <span class="icon"><ion-icon name="storefront-outline"></ion-icon></span>
                     <span class="text">Магазин</span>
                  </a>
               </li>
               <li class=" list-home home-active-again">
                  <a href="#">
                     <span class="icon-home"><ion-icon name="home-outline"></ion-icon></span>
                     <span class="text-active text-list-item text-active-again">Главная</span>
                  </a>
               </li>
               <li class=" list-achievements list">
                  <a href="#">
                     <span class=" icon"><ion-icon name="ribbon-outline"></ion-icon></span>
                     <span class="text">Достижения</span>
                  </a>
               </li>
               <li class="list-games list">
                  <a href="#">
                     <span class="icon"><ion-icon name="game-controller-outline"></ion-icon></span>
                     <span class="text">Игры</span>
                  </a>
               </li>
               <div class="indicator"></div>
            </ul>
         </div>
      </footer>
      <div class="page-games-container">
         <div class="page-title">Тренируй свой мозг!</div>
         <div class="container-list-games">
            <a href="/pages/firstGamePage-number/game-number.php">
               <div class="item-games yellow-item">
                  <img src="/pages/main-page/img/games-page/numbersImg.svg" alt="">
               </div>
            </a>
            <div class="item-games"><img src=" /pages/main-page/img/games-page/wordsImg.svg" alt="">
            </div>
            <a href=" /pages/thirdGame-images/game-images.php">
               <div class="item-games yellow-item">
                  <img src=" /pages/main-page/img/games-page/ImageIcon.svg" alt="">
               </div>
            </a>
            <a href=" /pages/Game-REAPEAT/gameREPEAT.php">
               <div class="item-games"><img src=" /pages/main-page/img/games-page/shapesImg.svg" alt="">
               </div>
            </a>
            <a href=" /pages/fourthGame-colors/game-colors.php">
               <div class="item-games yellow-item">
                  <div class="colorsGame-title"><ion-icon class="img-colors" name="color-palette-outline"></ion-icon>
                  </div>
               </div>
            </a>
            <div class="item-games"><img src=" /pages/main-page/img/games-page/musicImg.svg" alt="">
            </div>
            <div class="random-game-button">Случайная игра</div>
         </div>

      </div>

      <div class="page-achievments-container">
         <div class="wrapper-achievments">
            <span class="Achievements">Достижения</span>
            <main class="main-achievements">
               <div class="achievments-container">
                  <div class="container-achieve1">
                     <div class="achieve1">Just Chill</div>
                     <div class="forachieve1">Играть больше часа в одной игре</div>
                  </div>
                  <div class="container-achieve2">
                     <div class="achieve2">Мегаразум</div>
                     <div class="forachieve2">Провести в приложении 20+ часов</div>
                  </div>
                  <div class="container-achieve3">
                     <div class="achieve3">Молоток</div>
                     <div class="forachieve3">Выполнить все ежедневные задания</div>
                  </div>
                  <div class="container-achieve4">
                     <div class="achieve4">?</div>
                     <div class="forachieve4">???</div>
                  </div>
                  <div class="Down-button"><ion-icon name="chevron-down-outline"></ion-icon></div>
            </main>
         </div>
      </div>
      <div class="page-store-container">
         <span class="Shop">Магазин</span>
         <div class="time">До обновления: 23:59</div>
         <img src=" /img/Menu/Time.svg" alt="Время" class="timeoclock">
         <div class="shop-items">
            <div class="main-items">
               <div class="free-hints">3 Бесплатные подсказки каждый день!</div>
               <div class="claim-free-hints">Забрать</div>
            </div>
            <div class="iq-trade">Обменять IQ на подсказки</div>
         </div>
         <div class="currency">
            <div class="currency1">
               <div class="littleIQ">110 IQ = 0.61$</div>
               <div class="normalIQ">1300 IQ = 3.99$ Выгодно</div>
            </div>
            <div class="hugeIQ">10400 IQ = 13.99$</div>
         </div>
         <div class="ads">
            <div class="clearads">Убрать рекламу - 0.99$</div>
            <img src=" /img/Menu/NOADS.png" alt="" class="noads">
         </div>


      </div>

      <div class="everyday-tasks-container">
         <div class="info-button word-day-info-button"><ion-icon name="information-outline"></ion-icon></div>
         <div class="close-window every-day-tasks-close-button"><ion-icon name="close-outline"></ion-icon></div>
         <div class="everyday-tasks-body">
            <div class="task-body">
               <div class="tasks-body__mark-done"></div>
               <div class="tasks-body__task-text">Набрать 1600 очков в картинках</div>
               <div class="tasks-body__task-reward">26 IQ</div>
            </div>
            <div class="task-body">
               <div class="tasks-body__mark-done"></div>
               <div class="tasks-body__task-text">Выйграть 3 игры</div>
               <div class="tasks-body__task-reward">29 IQ</div>
            </div>
            <div class="task-body">
               <div class="tasks-body__mark-done"></div>
               <div class="tasks-body__task-text">Разгадать заданные числа</div>
               <div class="tasks-body__task-reward">23 IQ</div>
            </div>
            <div class="task-body">
               <div class="tasks-body__mark-done"></div>
               <div class="tasks-body__task-text">Открыть 4 правильных карты подряд</div>
               <div class="tasks-body__task-reward">25 IQ</div>
            </div>
         </div>
      </div>
      <div class="day-word-container">
         <div class="info-button word-day-info-button"><ion-icon name="information-outline"></ion-icon></div>
         <div class="close-window word-day-close-button"><ion-icon name="close-outline"></ion-icon></div>
         <div class="day-word-title">Слово дня</div>
         <div class="day-word__body">
            <div class="day-word">
               <span class="yellow-word">Прокрастинация</span> - склонность к постоянному
               откладыванию даже важных и срочных дел,
               приводящая к жизненным проблемам и болезненным психологическим эффектам.
            </div>
         </div>
      </div>
      <div class="analytic-container"></div>
   </div>


   <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
   <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
   <script src="/pages/main-page/js/main-page.js"></script>
</body>

</html>