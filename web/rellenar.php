<!DOCTYPE html>
<html>
	<head>
	<style>
.main {

  width:980px;
height:30px;
background:#ccddff;

}
.header {

  width:980px;
height:30px;
background:#ccddff;

}
</style>
	</head>
	<body>
	
	<?php
		
		$a=$_POST['a'];
		$b=$_POST['b'];
		$c=$_POST['c']; //o tambien: $_POST['c']".";
		$color=$_POST['color'];
		$AF=$_POST['AF'];
		$M=$_POST['M'];
	
		
	
		Echo"<div class='header'  style='width:$a"."px; height:$b"."px; background:$color;'> <center>$c</center> </div>";	
		Echo"<div class='main' style=''> $M </div>";	
		Echo"<div style='width:$AF"."px; height:200px; background:$color;'> footer </div>";	
		
		
		

	?>
	
	
	</body>
</html>