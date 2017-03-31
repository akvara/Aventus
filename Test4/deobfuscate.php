<?php
    $keywordsOnDoubleNewLine = ['interface', 'public', 'class'];
    $keywordsOnNewLine = ['if'];
    $keywordsAddSpace = [','];

    $source = file_get_contents('file_manager.php');

    // Converting to characters
    if (preg_match_all('|\\\x(..)|', $source, $matches)) {
        for ($i = 0, $len = count($matches[0]); $i < $len; ++$i) {
            $source = str_replace($matches[0][$i], chr(hexdec($matches[1][$i])), $source);
        }
    }

    // Adding linefeed after comma
    $source = preg_replace('|;|', ';' . PHP_EOL, $source);

    // Adding linefeeds before keywords
    foreach ($keywordsOnDoubleNewLine as $word) {
        $source = str_replace($word, PHP_EOL . PHP_EOL . $word, $source);
    }
    foreach ($keywordsOnNewLine as $word) {
        $source = str_replace($word, PHP_EOL . $word, $source);
    }
    foreach ($keywordsAddSpace as $word) {
        $source = str_replace($word, $word . ' ', $source);
    }

    // function heading
    $source = str_replace('){$', ')' . PHP_EOL .'{' . PHP_EOL .'$', $source);

    // Rescuing variables from mess
    $source = preg_replace('|([_a-z])\$([_a-z])|', "$1 $$2", $source);


    // this part is to be perfected - the code is more readable after it, but some variables are lost.

    /* For working code these lines mus be commented out: */
    /*
    if (preg_match_all('|\$\{"GLOBALS"}\["([a-z]*)"]="([_a-z]*)";|', $source, $matches)) {
        for ($i = 0, $len = count($matches[0]); $i < $len; ++$i) {
            $toFind = '${"GLOBALS"}["' . $matches[1][$i] . '"]';
            $toReplace = '$' . $matches[2][$i];// . "_" . chr(rand(97, 122));
            $source = str_replace($toFind, $toReplace, $source);
        }
    }
    $source = preg_replace('|\$\{\$([_a-z]*)}|', '$$1', $source);
    $source = preg_replace('|\$([_a-z]*)="([_a-z]*)";|', '\$$2 = "$2";', $source);
    */

    // Fixing the bug:

    // No sleeping !!!
    $source = str_replace('sleep(1);', '', $source);

    // Finished
    file_put_contents('file_manager_readable.php', $source);
?>