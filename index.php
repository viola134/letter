<?php
$phrase = "Мы будем рады видеть Вашего сына на нашем мероприятии. Ждем его 25 октября. Оргкомитет.";
$array = explode ( ". " , $phrase);
$string1 = str_replace("Оргкомитет.", ". Администрация", $array); 
$string1[0] =  substr_replace($string1[0], 'Увaжаемый, Виктор Леонидович! ', 0, 0) . "\n";  
$string3 = str_replace("Вашего сына", "Вашу дочь", $string1);
$string4 = str_replace("его", "её", $string3);
$str = implode (" ", $string4);
print_r($str);
