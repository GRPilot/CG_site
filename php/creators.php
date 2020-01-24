<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" type="text/css" href="../css/index.css">
        <link rel="stylesheet" type="text/css" href="../css/creators.css">
        <title>Coding Group | Creators</title>
    </head>
    <body>
        <!--Верхняя панель-->
        <header class="hat wrap">
            <div class="left_block">
                <div>
                    <a id="link" href="../index.html" target="_self">Главная</a>
                </div>
            </div>

            <div class="center_block">
                <div class="logo_container">
                    <img id="link" class="img_logo" src="../img/LOGO.png" />
                </div>
            </div>

            <div class="right_block">
                <div class="About_cont">
                    <a id="link" href="../about.html" target="_self">О проекте</a>
                </div>
                <div class="Creators_cont">
                    <a id="link" href="" target="_self">Создатели</a>
                </div>
                <div class="Tabel_cont">
                    <a id="link" href="https://goo.su/0EGB" target="_blank">Ранги</a>
                </div>
            </div>
        </header>

        <div class="content_cont wrap">
            <div class="container_profiles">
                <?php 
                    $countOfImgs = 4;
                    $decriptions = array(
                        1 => "<b>Головинский Руслан</b><br>основатель кружка и лекционер",
                        2 => "<b>Творун Даниил</b><br>помощь в создании презентаций",
                        3 => "<b>Квадрициус Дарина</b><br>ответственная за ранги",
                        4 => "<b>Баранов Константин</b><br>правая рука в создании задач",
                    );
                    for($i = 1; $i <= $countOfImgs; $i++)
                        echo "
                    <div class=\"container_block\">
                        <div class=\"block\">
                            <div class=\"img_block\">
                                <img src=\"../img/" . $i . ".jpg\" height=\"300px\"/>
                            </div>
                            <div class=\"decription_block\">
                                <p class=\"decription\">".$decriptions[$i]."</p>
                            </div>
                        </div>
                    </div>"
                ?>
            </div>
        </div>

        <!--нижняя панель-->
        <footer class="foot wrap">
            <div class="left_block">
                Left
            </div>
            <div class="right_block">
                Right
            </div>
        </footer>
    </body>
</html>