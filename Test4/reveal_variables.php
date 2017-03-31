<?php
$variables = [
    '${"GLOBALS"}["pvbgbpbcmgcy"]' => "dir_folder",
    '${"GLOBALS"}["olovxj"]' => "arg_postfix",
    '${"GLOBALS"}["ioejhteoygs"]' => "arg_bool_recursive",
    '${"GLOBALS"}["fpioefftsvff"]' => "is_dir",
    '${"GLOBALS"}["stscixisjp"]' => "permissions",
    '${"GLOBALS"}["celikdrjxdmv"]' => "arg_depth",
    '${"GLOBALS"}["ybyaijh"]' => "callback",
    '${"GLOBALS"}["yhdonrwdmkay"]' => "path",
    '${"GLOBALS"}["nfwsujpxgn"]' => "arg_folder_name",
    '${"GLOBALS"}["clokowrxyml"]' => "fs_entry",
    '${"GLOBALS"}["gdsqftago"]' => "bool_return"
];

//$original = '${"GLOBALS"}';
//$replacement = "anything";
//    $source = file_get_contents('atest.txt');
    $source = file_get_contents('file_manager_readable.php');

    foreach ($variables as $original => $replacement) {
        $source = str_replace($original, '"' . $replacement . '"', $source);
//        echo $original . PHP_EOL;
//        echo $replacement . PHP_EOL. PHP_EOL;
    }

//echo $source;

    file_put_contents('file_manager_readable_more.php', $source);
?>