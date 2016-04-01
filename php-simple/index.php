<?php

$word = filter_input(INPUT_GET, "word") ?: "hello cf meetup";
echo $word;

?>