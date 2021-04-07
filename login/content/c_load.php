<?php 

if(isset($_GET["page"])){
	$page= $_GET["page"];
}

else{
	$page=1;
}

switch ($page){

	case "1":
	require ("pages/dashboard/c_dashboard.php");
	break;

	case "view":
	require ("pages/dashboard/c_form.php");
	break;

	case "formedit":
	require ("pages/dashboard/c_formedit.php");
	break;

	case "formadd":
	require ("pages/dashboard/c_formadd.php");
	break;

	case "view_data":
	require ("pages/dashboard/c_dataa.php");
	break;


	// case "4":
	// require ("ebook.php");
	// break;
}
?>