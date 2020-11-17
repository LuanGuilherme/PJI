<!-- Requisições POST -->
<?php 

	// if ($_SERVER["REQUEST_METHOD"] == "POST") {
	// 	if ($_POST["boolContraste"] == "false") {
	// 		$_POST["boolContraste"] = "false";
	// 	}else{
	// 		$_POST["boolContraste"] = "true";
	// 	}   
	// }
	
	// echo($_POST["page"]);
	// echo($_POST["boolContraste"]);
	// echo("Location: http://reifastburguer/index.php?page=" . $_POST["page"] . "&boolContraste=" . $_POST["boolContraste"])
	
    header("Location: http://reifastburguer/index.php?page=" . $_POST["page"] . "&boolContraste=" . $_POST["boolContraste"]);
    exit();
?>