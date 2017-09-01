<?php

function Load($content = '') { // Para carregar uma página; inicia como vazio
	global $tt;
	
    $page         = $content . '.phtml';
    $page_content = '';
	
    ob_start(); // Ativa buffer de saída
    require($page);
    $page_content = ob_get_contents(); // Pegar o conteúdo
    ob_end_clean(); // Limpa o buffer
	
    return $page_content;
}

function Search($search) {
	global $connect; // Abrir conexão
	
	$sql = mysqli_query($connect, "SELECT * FROM list WHERE ((`verb` LIKE '%$search%') OR ( `meaning` LIKE '%$search%')) ORDER BY `id`");
	
	if(mysqli_num_rows($sql) > 0) {
		while($row = mysqli_fetch_assoc($sql)) {
			$data[] = $row; // Array vai receber os valores recuperados
		}
		return $data;
	} else {
		return false;
	}
}
?>