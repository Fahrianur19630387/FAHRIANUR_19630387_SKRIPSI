<?php  

	if (isset($_SESSION['login'])) {
		if ($_SESSION['level'] == "Staff_Gudang") {
			header("location:instansi/index.php");
		} else if ($_SESSION['level'] == "Admin"){
			header("location:Admin/index.php");
		} else if ($_SESSION['level'] == "Manager"){
			header("location:manager/index.php");
		} else if ($_SESSION['level'] == "Pimpinan"){
			header("location:it/index.php");
		} else {
			header("location:index.php");
		}
	}

?>