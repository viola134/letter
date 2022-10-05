<?php
$phrase = "Мы будем рады видеть Вашего сына на нашем мероприятии. Ждем его 25 октября. Оргкомитет.";
$array = explode ( " " , $phrase);
$string = str_replace("Оргкомитет", "Администрация", $array); 
$string2 =  substr_replace($string, 'Увaжаемый, Виктор Леонидович! ', 0, 0) . "\n";
$string3 = str_replace("Вашего сына", "Вашу дочь", $string2); 
$string4 = str_replace("его", "её", $string3); 
$str = implode (" ", $array);
print_r($str);



