<?php

header("Content-Type: text/html; charset=utf-8");

$url = "https://lenta.ru/rss";
$rss = simplexml_load_file($url);


for ($i=0; $i < 5; $i++) {
echo $rss->channel->item[$i]->title.'<br>
<a href="'.$rss->channel->item[$i]->link.'">'.$rss->channel->item[$i]->link.'</a><br>
'.$rss->channel->item[$i]->description.'<hr>';
}

?>
