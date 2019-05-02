<?php
	
session_start();




///
if(isset($_SESSION['login']['s'])){

	if($_SESSION['login']['s'] == 0){
				//log out
		?>
		<script>
			javascript:window.location.href='login.php'
		</script>
		<?php

	}
}else{
	?>
		<script>
			javascript:window.location.href='login.php'
		</script>
		<?php
}
?>