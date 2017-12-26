<?php
function to_roman($num_query) {
  $num = intval($num_query); //���� ����� �����, ���� ��� �� ����� �� ������ "1"
  if (!$num) {return($num_query);} //���� �� ����� ������ ������ ���.
  if ($num >= 4000) {return($num_query);} //���� ���� ����� ������ 4000 �� �� ��������� �� ������
  $roman = array (//������� �����
        "0" => array(
                    "1" => "I", //1
                    "2" => "II",
                    "3" => "III",
                    "4" => "IV",
                    "5" => "V", //5
                    "6" => "VI",
                    "7" => "VII",
                    "8" => "VIII",
                    "9" => "IX",
                    "0" => ""
                    ),
        "1" => array(
                    "1" => "X", //10
                    "2" => "XX",
                    "3" => "XXX",
                    "4" => "XL",
                    "5" => "L", //50
                    "6" => "LX",
                    "7" => "LXX",
                    "8" => "LXXX",
                    "9" => "XC",
                    "0" => ""
                    ),
        "2" => array(
                    "1" => "C", //100
                    "2" => "CC",
                    "3" => "CCC",
                    "4" => "CD",
                    "5" => "D", //500
                    "6" => "DC",
                    "7" => "DCC",
                    "8" => "DCCC",
                    "9" => "CM",
                    "0" => ""
                    ),
        "3" => array(
                   "1" => "M", //1000
                   "2" => "MM",
                   "3" => "MMM"
                    )
        );
// �������� � ������ ����� � ���� �� ���, ������

  $numlen = strlen($num); //����� ������
  $num_query = "";//������� ��� "���������"
  for ($nums=0; $nums < $numlen; $nums++){ //�������� �� �����
    $pos = $nums+1;//��������� ����� �� ��������� ��� ������� �������,
        $num_interval = substr($num, -$pos, 1);
        $num_query = strtr($num_interval, $roman[$nums]).$num_query; //������������� ����� ������ �������� ����� � ������
  }
return($num_query);//���������� ������, - ������� �����

}
echo to_roman(138);//���������� ����� 138 � �������
?>
