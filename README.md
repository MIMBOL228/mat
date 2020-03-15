##Поиск мата
Описание
-------
Находит мат в данном вами тексте, и сообщает об этом.
Корректно работает на php 7.0+

Использование
-------
```PHP
$text = 'Да пошел ты нахуй и в пиzdu huesos, ушлепок ебаный, ебать мой вялый хуй!
Мой дед ветеран твоего деда педрилу ебал :( Хуячечки';
include 'index.php';
var_dump(mat($text));// true
$text = "Fuck you and in pizdu huesos, you fucking slap, fuck my flaccid cock!
My veteran grandfather, your grandfather's a faggot fucked :( Gracheck";
var_dump(mat($text));// true
$text = "Ехал Грека через реку.Видит Грека в реке рак.";
var_dump(mat($text));// false
```
