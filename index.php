<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" type="text/css" href="css/index.css">
        <link rel="stylesheet" type="text/css" href="css/mainPage.css">
        <link rel="shortcut icon" href="img/iconLogo.png" type="image/png">
        <script type="text/javascript" src="https://vk.com/js/api/openapi.js?166"></script>
        <title>Coding Group | ПКГХ</title>
    </head>
    <body>

        <!--Верхняя панель-->
        <header class="hat wrap">
            <div class="left_block">
                <div class="home">
                    <img class="img_list" src="img/list.svg">
                    <a id="link" href="index.php" target="_self">Главная</a>
                </div>
                <div>
                    <a id="link" href="" target="_self">что-то</a>
                </div>
                <div>
                    <a id="link" href="" target="_self">что-то</a>
                </div>
            </div>

            <div class="center_block">
                <div class="logo_container">
                    <img id="link" class="img_logo" src="img/iconLogo.png" />
                </div>
            </div>

            <div class="right_block">
                <div class="About_cont">
                    <a id="link" href="about.html" target="_self">О проекте</a>
                </div>
                <div class="Creators_cont">
                    <a id="link" href="creators.php" target="_self">Создатели</a>
                </div>
                <div class="Tabel_cont">
                    <a id="link" href="https://goo.su/0EGB" target="_blank">Ранги</a>
                </div>
            </div>
        </header>

        <!-- Центральня панель (контент)-->
        <div class="content_cont wrap">
            <?php include('php/ShowWall.php');  ?>
        </div>

        <!-- VK Widget -->
        <div id="vk_community_messages"></div>
        <script type="text/javascript">
            VK.Widgets.CommunityMessages("vk_community_messages", 187291627, {tooltipButtonText: "Есть вопросы?"});
        </script>

        <!--нижняя панель-->
        <footer class="foot wrap">
            <div class="left_block">
                <h4>© 2020 Сообщество Coding Group</h4>
                <hr>
                <p>Polytechnic College of municipal economy</p>
            </div>
            <div class="right_block">
                <a class="vk_ref" href="https://vk.com/codinggroup">
                    <img class="img_logo vk_logo" src="img/vk.svg" alt="Вконтакте">
                </a>
            </div>
        </footer>
    </body>
</html>