<?php
if(isset($_POST['1']) && isset($_POST['2']) && 
    isset($_POST['3']) && isset($_POST['4']) && isset($_POST['6'])) 
{
    $time = htmlentities($_POST['1']);
    $feedback = htmlentities($_POST['2']);
    $req_spec = htmlentities($_POST['3']);
    $req_paper = htmlentities($_POST['4']);
    $ref_new = htmlentities($_POST['6']);
    $ref = "���";
    if(isset($_POST['5'])) $ref = "��";
    $duration = "���";
    if(isset($_POST['7'])) $duration = "��";
    
    if ($time == "������������") $time_mark = 5;
    if ($time == "�������������� (� ��������� �� 2-� ����)") $time_mark = 3;
    if ($time == "�������������� (� ��������� ����� 2-� ����)") $time_mark = 2;

    if ($feedback == "�� �������� ������������ ���������") $feedback_mark = 5;
    if ($feedback == "�������� ������������ ���������") $feedback_mark = 3;
    if ($feedback == "�������� ������������ ���������, ��������������� ������������ ������������ ���������� ������������ ������� ��� ���������� ���������������� ���������") $feedback_mark = 3;

    if ($req_spec == "��������") $req_spec_mark = 5;
    if ($req_spec == "�������� �� � ������ ����") $req_spec_mark = 3;
    if ($req_spec == "�� ��������") $req_spec_mark = 2;

    if ($req_paper == "� ������ ������������") $req_paper_mark = 5;
    if ($req_paper == "� ��������������� ������������") $req_paper_mark = 4;
    if ($req_paper == "� ������������") $req_paper_mark = 3;
    if ($req_paper == "� ���������� ������������") $req_paper_mark = 2;

    if ($ref == "��") $ref_mark = 5;
    if ($ref == "���") $ref_mark = 2;

    if ($ref_new == "�� ����� 10 ������ �� ���������� ������ �� ��������� 5 ��� �� �������� ��������������") $ref_new_mark = 5;
    if ($ref_new == "�� 5 �� 9 ������ �� ���������� ������ �� ��������� 5 ��� �� �������� ��������������") $ref_new_mark = 3;
    if ($ref_new == "����� 5 ������ �� ���������� ������ �� ��������� 5 ��� �� �������� ��������������") $ref_new_mark = 2;

    if ($duration == "��") $duration_mark = 5;
    if ($duration == "���") $duration_mark = 2;

$output = "
    <html>
    <body>
    ��������� ���������������� ������ ������������ $time <br> ������ $time_mark
    <br>
    ����� ������������ � �������� $feedback <br> ������ $feedback_mark
    <br>
    ��� $req_spec ������������� ����������� ������������ ������� <br> ������ $req_spec_mark
    <br>
    ��� ��������� � ������������ � ������������ ���� �/��� ����: $req_paper <br> ������ $req_spec_mark
    <br>
    ������ ����������, �������������� ��� ��������������, ��������� 30 ������������: $ref <br> ������ $ref_mark
    <br>
    � ������ ������������ $ref_new <br> ������ $ref_new_mark
    <br>
    ������������ ����������� ������������� ���������� (�� 10 �����): $duration <br> ������ $duration_mark
    </body></html>";
    echo $output;

}
else
{   
    echo "��������� ������ �����������";
}
?>