<?php
session_start();
//if success
$_SESSION['login']['s'] = 1;



///
if(isset($_SESSION[login]['s'])){

	if($_SESSION['login']['s'] == 0){
				//log out
		//header("location:")
	}
}else{
	//log out
}
?>