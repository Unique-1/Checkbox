<?php
$bike = "adewole" . ' ' . "adetunji" . ' '. "1203944";
$car = "yemisi" . ' '. "woalpom" . ' '. "878947734";
$boat = "kuiuo" . ' '. "nkjdlfsd" . ' '. "787849843";

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>chk_script</title>
	
    <script language="JavaScript">
	function toggle(source) {
	  checkboxes = document.getElementsByName('vehicle[]');
	  for(var i=0, n=checkboxes.length;i<n;i++) {
	    checkboxes[i].checked = source.checked;
	  }
	}
</script>
</head>
<body>
	<form action="process.php" method="POST">
		<input type="checkbox" onClick="toggle(this)" /> Select All<br/>


		<input type="checkbox" id="vehicle1" name="vehicle[]" value="<?php echo $bike?>">
		<label for="vehicle1"> first person detail</label><br>
		<input type="checkbox" id="vehicle2" name="vehicle[]" value="<?php echo $car?>">
		<label for="vehicle2"> second person detail</label><br>
		<input type="checkbox" id="vehicle3" name="vehicle[]" value="<?php echo $boat?>">
		<label for="vehicle3"> third person details</label><br>
		<!-- <button name="submit" onclick="return check()">print</button> -->
		<button name="submit" style="background-color: blue; color: white;">fetch record</button>
	</form>
	

</body>
</html>