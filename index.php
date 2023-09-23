<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="modal-window" id='modal'>
        <div class="modal-content" id='modalContent'>
            <h1 class='modal-welcom' align='center'>Регистрация</h1>
            <div class="modal-form">
                <form action="">
                    <input type="text" placeholder="Ваше имя" id='registrationName'>
                    <input type="email" placeholder="Ваша почта" id='registrationEmail'>
                    <input type="password" placeholder="Ваш пароль" id='registrationPassword'>
                    <span class='error-message' id='registrationError'></span>
                    <button id='registrationBtn' type='button'>
                        <span>Зарегистрироваться</span>
                    </button>
                </form>
            </div>
        </div>
        <img src="img/close.svg" alt="" srcset="" width='48px' id='closeModal'>
    </div>

    <div class="modal-window" id='modal2'>
        <div class="modal-content" id='modalContent2'>
            <h1 class='modal-welcom' align='center'>Войти</h1>
            <div class="modal-form">
                <form action="">
                    <input type="text" placeholder="Ваша почта" id='loginEmail'>
                    <input type="text" placeholder="Ваш пароль" id='loginPassword'>
                    <span class='error-message' id='loginError'></span>
                    <button id='loginBtn' type='button'>Войти</button>
                </form>
            </div>
        </div>
        <img src="img/close.svg" alt="" srcset="" width='48px' id='closeModal2'>
    </div>

    <div class="modal-window" id='modal3'>
        <div class="modal-content" id='modalContent3'>
            <h1 class='modal-welcom' align='center'>Подсказка</h1>
            <div class="modal-form">
                <span>html, css и javaScript являются базовыми языками frontend-разработчика. Все сайты написаны на этих языках. html - язык разметки, показывающий текст, формы, картинки. css - язык стилей, он украшает все, что было написано на html. js - язык логики, благодаря нему, при нажатии на кнопки открываются окна, листается слайдер и т.п.</span>
            </div>
        </div>
        <img src="img/close.svg" alt="" srcset="" width='48px' id='closeModal3'>
    </div>
    <div class="modal-window" id='modal4'>
        <div class="modal-content" id='modalContent4'>
            <h1 class='modal-welcom' align='center'>Подсказка</h1>
            <div class="modal-form">
                <span>jquery - библиотека для javaScript. Сам по себе javaScipt язык удобный, но библиотеки и фрэймфорки (расширения) делают его ещё лучше и комфортнее для использования. Помимо этого, со знаниями только в javaScript не считают Junior-dev (Джуниор-разработчиком). Самый популярные библиотеки и фрэймворки: jquery, angular, react, vue</span>
            </div>
        </div>
        <img src="img/close.svg" alt="" srcset="" width='48px' id='closeModal4'>
    </div>
    <div class="modal-window" id='modal5'>
        <div class="modal-content" id='modalContent5'>
            <h1 class='modal-welcom' align='center'>Подсказка</h1>
            <div class="modal-form">
                <span>php - серверный язык. На нем написан back-end этого сайта. back-end - это отправка форм на сервер и их обработка. Например, Вы заполняете свое имя, почту и пароль, нажимаете на кнпоку отправить, и дальше работает back-end, отправляя запрос на сервер, в базу данных. php - не самый популярный язык, поэтому, чтобы стать backend-dev, нужно знать один фремворков языков python (django) или java.</span>
            </div>
        </div>
        <img src="img/close.svg" alt="" srcset="" width='48px' id='closeModal5'>
    </div>

    <div class="header">
        <?php
            include 'components/header.php';
        ?>
        <div class="main-header">
            <img src="img/computer.svg">
            <div class="main-header-text">
                <span class='main-header-header'>Добро пожаловать на мой блог!</span>
                <div class="main-header-content">Мое основное направление - front-end. И этот сайт я написал сам, соответственно, и back-end написать сам тоже смогу. На данный момент изучил html, css, scss, js, jquery, в процессе react; весь бэкенд на чистом php+mysql</div>
                <button class='main-header-btn' id='writeMe'>НАПИСАТЬ МНЕ</button>
            </div>
        </div>
    </div>
    <div class="about-me" id='infoMe'>
        <span class='about-me-header'>Обо мне</span>
        <div class="wrapper-mobile">
            <span class='about-me-content'>Меня зовут Евгений, разработкой занимаюсь около года, данный сайт пишу на html, scss, jquery. Сайт для закрепления знаний, этот сайт - практика back-end на php и front-end на. В планах начать писать back на django. Возраст: 14 лет)</span>
        </div>
    </div>
    <div class="my-skills">
        <div class="skills-content">
            <span class='my-skills-header'>Мои навыки</span>
            <div class="skills">
                <div class="skill" id='skill1'>
                    <span class='skill-header'>html, css, js</span>
                    <img src="img/line.svg">
                </div>
                <div class="skill" id='skill2'>
                    <span class='skill-header'>jquery</span>
                    <img src="img/line.svg">
                </div>            
                <div class="skill" id='skill3'>
                    <span class='skill-header'>php</span>
                    <img src="img/line.svg">
                </div>
            </div>
        </div>
        <div class="skills-img">
            <img src="img/me.jpg" height='450px'>
        </div>
    </div>
    <div class="footer-form" id='form'>
        <div class="wrapper-mobile">
            <div class="footer-form-content">
                <span class='footer-form-header'>Хотите веб-сайт?</span>
                <span class='footer-form-content'>Если вы заинтересованы моими услугами, можете то оставьте свои контакты ниже. Я лично свяжусь с Вами в ВК</span>
                <form action="post">
                    <div class="form-input">
                        <input type="text" placeholder='Ваше имя' id='nameMessage'>
                        <input type="text" placeholder='Ваш номер' id='numberMessage'>
                    </div>
                    <textarea name="" id="textMessage">Сообщение</textarea>
                    <span class="messageError">hell!</span>
                    <button type='button' class='form-button' id='sendMessageBtn'>Отправить</button>
                </form>
            </div>
        </div>
    </div>

    <?php
    include 'components/footer.php'
    ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="js/modalWindows.js"></script>
    <script src="ajax/ajax.js"></script>
</body>
</html>