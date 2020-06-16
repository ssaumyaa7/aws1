<html>
<body>
<h1> My First Page</h1>
<h3> Task Successfully Completed </h3>
<?php
	$cloudant_url= 'head -n1 path.txt';
	$img_path="https://".$cloudant_url."/inspire.png";
	echo "<br>"
	echo "<img src='${img_path}' width=150 height=150>";
?>
</body>
</html>
