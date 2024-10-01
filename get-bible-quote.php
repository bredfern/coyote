<?php
$url = "https://bible-api.com/?random=verse";
$result = file_get_contents($url);
$arr = json_decode($result);

$things = $arr->verses;
$item = $things[0];

$text = $item->text;
$name = $item->book_name;
$chap = $item->chapter;
$verse = $item->verse;

echo "<b>" . $name . " Chapter " . $chap . " Verse " . $verse . "</b>";
echo "<br />";
echo $text;
?>
