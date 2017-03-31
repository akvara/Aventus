<?php
    $source = file_get_contents('file_manager.php');

    if (preg_match_all('|\\\x(..)|', $source, $matches)) {
        for ($i = 0, $len = count($matches[0]); $i < $len; ++$i) {
            $source = str_replace($matches[0][$i], chr(hexdec($matches[1][$i])), $source);
        }
    }

    file_put_contents('file_manager_readable.php', preg_replace('|;|', ';' . PHP_EOL, $source));
?>