<?php
echo $lorem;
$name = "Anna";
$name1 = "Lukasz";
ob_clean();
//26 listopad php
echo mb_strlen($name);
echo strlen($name1);
echo mb_strlen(ltrim($name));
echo mb_strlen(rtrim($name));
$adress = "kamienie to niewielkie kotwice";
$seach = search($adress,"to",true);
strstr($adress);
stristr($adress);
//przetwarzanie ciągów znaków
$name3 = "Janusz";
substr($name3,3,3);
str_replace("%imie%","anna","masz na imie: %imie%");
$cenzura = array("ą","ć","ń");
$cenzura2 = array("a","b","c");
$login = "ąćń";
str_replace($cenzura,$cenzura2,$login);
//formularze
?>