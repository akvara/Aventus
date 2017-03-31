<?php
    $source = file_get_contents('file_manager.php');

    // Converting to characters
    if (preg_match_all('|\\\x(..)|', $source, $matches)) {
        for ($i = 0, $len = count($matches[0]); $i < $len; ++$i) {
            $source = str_replace($matches[0][$i], chr(hexdec($matches[1][$i])), $source);
        }
    }

    // Adding linefeed after comma
    $source = preg_replace('|;|', ';' . PHP_EOL, $source);

    // Finished
    file_put_contents('file_manager_a.php', $source);
?>