<?
// Функция обрезает строку на заданное число символов до слова.
function cut_string($string, $length = 200)
{
mb_internal_encoding('UTF-8') ;
if ($length && strlen($string) > $length)
{
$str = ($string);
$str = mb_substr($str, 0, $length, 'UTF-8');
$pos = mb_strrpos($str, ' ','UTF-8');
return mb_substr($str, 0, $pos, 'UTF-8').'…';
}
return $string;
}

?>