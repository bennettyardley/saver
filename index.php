<?php
	$saveFile = fopen("save.txt", "r");
	$saveFileText = fread($saveFile,filesize("save.txt"));
	fclose($saveFile);	
?>
<form method="post" action="save.php" id="saveText" name="saveText">
	<textarea id="saveText" name="saveText" rows="50" cols="100">
<?php echo $saveFileText;?>
	</textarea>
	<input type="submit" name="submit" value="Save" id="submit"/>
</form>
