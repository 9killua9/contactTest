<?php
	if($_POST['h'] == "algo" )
	{
		$r['res'] = "Hola";
		
		echo json_encode($r);
	}
?>