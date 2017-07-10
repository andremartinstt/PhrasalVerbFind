<?php

function Load($content = '') {
	global $tt;
	
    $page         = $content . '.phtml';
    $page_content = '';
	
    ob_start();
    require($page);
    $page_content = ob_get_contents();
    ob_end_clean();
	
    return $page_content;
}

function Search($search) {
	global $connect;
	
	$sql = mysqli_query($connect, "SELECT * FROM list WHERE ((`verb` LIKE '%$search%') OR ( `meaning` LIKE '%$search%')) ORDER BY `id`");
	
	if(mysqli_num_rows($sql) > 0) {
		while($row = mysqli_fetch_assoc($sql)) {
			$data[] = $row;
		}
		return $data;
	} else {
		return false;
	}
}
?>