<?php

$countOfImgs = 5;
$decriptions = array(
    1 => "<b>Головинский Руслан</b><br>основатель кружка и лекционер",
    2 => "<b>Творун Даниил</b><br> помощь в создании презентаций",
    3 => "<b>Квадрициус Дарина</b><br> ответственная за организацию<br>деятельности",
    4 => "<b>Голетиани Ольга</b><br>соучередитель кружковой<br>деятельности",
    5 => "<b>Баранов Константин</b><br>правая рука в разработке<br>задач по программированию",
);

for($i = 1; $i <= $countOfImgs; $i++)
    echo "<div class=\"container_block\">
              <div class=\"block\">
                  <div class=\"img_block\">
                      <img src=\"../img/" . $i . ".jpg\"/>
                  </div>
                  <div class=\"decription_block\">
                      <p class=\"decription\">".$decriptions[$i]."</p>
                  </div>
              </div>
          </div>";