<?php 
	if (isset($_POST['submit'])) {
		if (!empty($_POST['vehicle'])) {
			foreach ($_POST['vehicle'] as $value) {
				echo $value.'<br>';
			}
		}else{
		
		echo "please select your checkbox option";
	}
		
		
	}
	?>
	<script type="text/javascript">
    	function check(){
			window.print();
		}
    </script>
	<button name="submit" onclick="return check()">print</button>

