<form method="get">
<input name="q" placeholder="Enter Text"> <br/>
<input type="submit" value="Go">
<?php
$q=$_GET["q"];
echo htmlspecialchars($q);
echo strip_tags($q);
?>
</form>

