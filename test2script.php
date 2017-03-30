<?php

// ~25 min

define("THREE", "-THREE-");
define("FIVE", "-FIVE-");
define("FIFTEEN", "-FIFTEEN-");

$in_file = fopen("test2input.txt", "r") or die("Unable to open INPUT file!");
$out_file = fopen("test2output.txt", "w") or die("Unable to open OUTPUT file!");

$word_count = 0;
$word = '';
$no_word = '';

$char = fgetc($in_file);

while(!feof($in_file)) {
    if (ctype_alpha($char)) {
        while(!feof($in_file) && ctype_alpha($char)) {
            $word .= $char;
            $char = fgetc($in_file);
        }
        $word_count++;

        if ($word_count % 15 === 0) {
            fwrite($out_file, FIFTEEN);
        } elseif ($word_count % 5 === 0) {
            fwrite($out_file, FIVE);
        } elseif ($word_count % 3 === 0) {
            fwrite($out_file, THREE);
        } else {
            fwrite($out_file, $word);
        }

        $word = '';
    }

    if (!ctype_alpha($char)) {
        while(!feof($in_file) && !ctype_alpha($char)) {
            $no_word .= $char;
            $char = fgetc($in_file);
        }
        fwrite($out_file, $no_word);
        $no_word = '';
    }
}

fclose($in_file);
fclose($out_file);

?>