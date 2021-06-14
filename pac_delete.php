<?php

	include("connection.php");

	$pac_id = intval($_GET['id']);

	$sql_code = "DELETE FROM usuario WHERE id = '$pac_id'";
	$sql_query = $connection->query($sql_code) or die ($connection->error);

	if($sql_query)
		echo "
			<script>
				location.href='tables.php?p=tables';
			</script> ";

	else
		echo "
			<script>
				alert('Não foi possível deletar o registro');
				location.href='tables.php?p=tables';
			</script> ";

?>