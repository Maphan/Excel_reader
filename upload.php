<?php
include("ExcelRead.php");
echo $_FILES["fileToUpload"]["tmp_name"];
$data_array=ReadExcel($_FILES["fileToUpload"]["tmp_name"]);

echo '<pre>';
var_dump($data_array);
echo '</pre><hr />';
?>