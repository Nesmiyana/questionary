<?php
if(isset($_POST['1']) && isset($_POST['2']) && 
    isset($_POST['3']) && isset($_POST['4']) && isset($_POST['5'])
	 && isset($_POST['6']) && isset($_POST['7'])) 
{
    $time = htmlentities($_POST['1']);
    $feedback = htmlentities($_POST['2']);
    $req_spec = htmlentities($_POST['3']);
    $req_paper = htmlentities($_POST['4']);
    $ref30 = "Нет";
    $ref_new = "Нет";
    

$output = "
    <html>
    <body>
    Выпускная квалификационная работа представлена $time
    </body></html>";
    echo $output;
}
else
{   
    echo "Введенные данные некорректны";
}
?>
