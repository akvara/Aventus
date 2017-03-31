<html>
<?php
${0} = "wow";
${"globals"}['ii'] = "whatever";
$andrius = "aha!";
echo ${0} . ' ## '. ${"globals"};

echo "<pre>";
print_r(get_defined_vars());
echo "</pre>";

?>
</html>
