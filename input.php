<?php
if(isset($_POST['1']) && isset($_POST['2']) && 
    isset($_POST['3']) && isset($_POST['4']) && isset($_POST['6'])) 
{
    $time = htmlentities($_POST['1']);
    $feedback = htmlentities($_POST['2']);
    $req_spec = htmlentities($_POST['3']);
    $req_paper = htmlentities($_POST['4']);
    $ref_new = htmlentities($_POST['6']);
    $ref = "Нет";
    if(isset($_POST['5'])) $ref = "да";
    $duration = "Нет";
    if(isset($_POST['7'])) $duration = "да";
    
    if ($time == "своевременно") $time_mark = 5;
    if ($time == "несвоевременно (с задержкой до 2-х дней)") $time_mark = 3;
    if ($time == "несвоевременно (с задержкой более 2-х дней)") $time_mark = 2;

    if ($feedback == "не содержат существенных замечаний") $feedback_mark = 5;
    if ($feedback == "содержат существенные замечания") $feedback_mark = 3;
    if ($feedback == "содержат существенные замечания, аргументировано доказывающие невыполнение требований технического задания или требований образовательного стандарта") $feedback_mark = 3;

    if ($req_spec == "отвечает") $req_spec_mark = 5;
    if ($req_spec == "отвечает не в полной мере") $req_spec_mark = 3;
    if ($req_spec == "не отвечает") $req_spec_mark = 2;

    if ($req_paper == "в полном соответствии") $req_paper_mark = 5;
    if ($req_paper == "с незначительными отклонениями") $req_paper_mark = 4;
    if ($req_paper == "с отклонениями") $req_paper_mark = 3;
    if ($req_paper == "с серьезными отклонениями") $req_paper_mark = 2;

    if ($ref == "Да") $ref_mark = 5;
    if ($ref == "Нет") $ref_mark = 2;

    if ($ref_new == "не менее 10 ссылок на журнальные статьи за последние 5 лет по тематике проектирвоания") $ref_new_mark = 5;
    if ($ref_new == "от 5 до 9 ссылок на журнальные статьи за последние 5 лет по тематике проектирвоания") $ref_new_mark = 3;
    if ($ref_new == "менее 5 ссылок на журнальные статьи за последние 5 лет по тематике проектирвоания") $ref_new_mark = 2;

    if ($duration == "Да") $duration_mark = 5;
    if ($duration == "Нет") $duration_mark = 2;

$output = "
    <html>
    <body>
    Выпускная квалификационная работа представлена $time <br> Оценка $time_mark
    <br>
    Отзыв руководителя и рецензия $feedback <br> Оценка $feedback_mark
    <br>
    ВКР $req_spec предъявляемым требованиям технического задания <br> Оценка $req_spec_mark
    <br>
    ВКР оформлена в соответствии с требованиями ЕСКД и/или ЕСПД: $req_paper <br> Оценка $req_spec_mark
    <br>
    Список источников, использованных при проектировании, превышает 30 наименований: $ref <br> Оценка $ref_mark
    <br>
    В работе используются $ref_new <br> Оценка $ref_new_mark
    <br>
    Длительность выступления соответствует регламенту (до 10 минут): $duration <br> Оценка $duration_mark
    </body></html>";
    echo $output;

}
else
{   
    echo "Введенные данные некорректны";
}
?>
