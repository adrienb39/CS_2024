<?php

require_once "test-mail2.php";

$dictionnaire = [];
for ($i = 0; $i < 128; $i++) {
        $dictionnaire[] = passgen1(10, $i);
}
var_dump($dictionnaire);