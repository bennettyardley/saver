<?php

$saveFile = fopen("save.txt", "w");
fwrite($saveFile, ($_POST['saveText']));
fclose($saveFile);
header("Location: index.php");

?>